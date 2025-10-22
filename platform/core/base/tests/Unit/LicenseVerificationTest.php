<?php

namespace Botble\Base\Tests\Unit;

use Botble\Base\Events\LicenseActivated;

use Botble\Base\Events\LicenseDeactivated;
use Botble\Base\Events\LicenseUnverified;
use Botble\Base\Events\LicenseVerified;
use Botble\Base\Exceptions\LicenseInvalidException;
use Botble\Base\Exceptions\LicenseIsAlreadyActivatedException;
use Botble\Base\Supports\Core;
use Botble\Base\Tests\BaseLicenseTestCase;
use Botble\Setting\Facades\Setting;
use Carbon\Carbon;
use Illuminate\Contracts\Cache\Repository as CacheRepository;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Http\Client\ConnectionException;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class LicenseVerificationTest extends BaseLicenseTestCase
{
    protected Core $core;
    protected $mockCache;
    protected $mockFiles;

    protected function setUp(): void
    {
        parent::setUp();

        Event::fake();
        Http::fake();

        $this->mockCache = \Mockery::mock(CacheRepository::class);
        $this->mockFiles = \Mockery::mock(Filesystem::class);
        $this->core = new Core($this->mockCache, $this->mockFiles);
    }

    public function test_has_license_data_returns_true_when_license_exists_in_database()
    {
        config(['core.base.general.license_storage_method' => 'database']);

        Setting::shouldReceive('has')
            ->with('license_file_content')
            ->andReturn(true);

        Setting::shouldReceive('get')
            ->with('license_file_content')
            ->andReturn('encrypted_license_content');

        $this->assertTrue($this->core->hasLicenseData());
    }

    public function test_has_license_data_returns_false_when_no_license_exists()
    {
        config(['core.base.general.license_storage_method' => 'database']);

        Setting::shouldReceive('has')
            ->with('license_file_content')
            ->andReturn(false);

        $this->assertFalse($this->core->hasLicenseData());
    }

    public function test_has_license_data_returns_true_when_license_file_exists()
    {
        config(['core.base.general.license_storage_method' => 'file']);

        $this->mockFiles->expects($this->once())
            ->method('exists')
            ->willReturn(true);

        $this->assertTrue($this->core->hasLicenseData());
    }

    public function test_is_license_fully_verified_returns_true_when_next_check_in_future()
    {
        $futureDate = Carbon::now()->addDays(5)->toIso8601String();

        Setting::shouldReceive('has')
            ->with('license_activated_at')
            ->andReturn(true);

        Setting::shouldReceive('has')
            ->with('license_last_verified_at')
            ->andReturn(true);

        Setting::shouldReceive('has')
            ->with('license_next_check_at')
            ->andReturn(true);

        Setting::shouldReceive('get')
            ->with('license_next_check_at')
            ->andReturn($futureDate);

        $this->assertTrue($this->core->isLicenseFullyVerified());
    }

    public function test_is_license_fully_verified_returns_false_when_next_check_passed()
    {
        $pastDate = Carbon::now()->subDays(1)->toIso8601String();

        Setting::shouldReceive('has')
            ->with('license_activated_at')
            ->andReturn(true);

        Setting::shouldReceive('has')
            ->with('license_last_verified_at')
            ->andReturn(true);

        Setting::shouldReceive('has')
            ->with('license_next_check_at')
            ->andReturn(true);

        Setting::shouldReceive('get')
            ->with('license_next_check_at')
            ->andReturn($pastDate);

        $this->assertFalse($this->core->isLicenseFullyVerified());
    }

    public function test_is_license_fully_verified_returns_false_when_metadata_missing()
    {
        Setting::shouldReceive('has')
            ->with('license_activated_at')
            ->andReturn(false);

        $this->assertFalse($this->core->isLicenseFullyVerified());
    }

    public function test_handle_deactivated_license_clears_all_data()
    {
        config(['core.base.general.license_storage_method' => 'database']);

        Setting::shouldReceive('forceDelete')
            ->with('license_file_content')
            ->once();

        Setting::shouldReceive('forceDelete')
            ->with('licensed_to')
            ->once();

        $metadataKeys = [
            'license_activated_at',
            'license_last_verified_at',
            'license_next_check_at',
            'license_verification_count',
            'license_purchase_code_hash',
            'license_server_ip',
            'license_domain',
        ];

        foreach ($metadataKeys as $key) {
            Setting::shouldReceive('forceDelete')
                ->with($key)
                ->once();
        }

        Session::shouldReceive('forget')->once();

        $this->core->handleDeactivatedLicense();
    }

    public function test_update_license_verification_data_increments_count()
    {
        Setting::shouldReceive('get')
            ->with('license_verification_count', 0)
            ->andReturn(5);

        Setting::shouldReceive('forceSet')
            ->with([
                'license_last_verified_at' => Carbon::now()->toIso8601String(),
                'license_next_check_at' => Carbon::now()->copy()->addDays(7)->toIso8601String(),
                'license_verification_count' => 6,
            ])
            ->once()
            ->andReturnSelf();

        $this->core->updateLicenseVerificationData();
    }

    public function test_activate_license_success()
    {
        Http::fake([
            '*' => Http::response([
                'status' => true,
                'lic_response' => 'encrypted_license_content',
            ], 200),
        ]);

        config(['core.base.general.license_storage_method' => 'database']);

        Setting::shouldReceive('forceSet')
            ->withArgs(function ($arg) {
                return isset($arg['license_file_content']) && $arg['license_file_content'] === 'encrypted_license_content';
            })
            ->once()
            ->andReturnSelf();

        Setting::shouldReceive('forceSet')
            ->withArgs(function ($arg) {
                return isset($arg['license_activated_at']) &&
                       isset($arg['licensed_to']) &&
                       $arg['licensed_to'] === 'test_client';
            })
            ->once()
            ->andReturnSelf();

        Session::shouldReceive('forget')->once();

        $result = $this->core->activateLicense('test_license', 'test_client');

        $this->assertTrue($result);
        Event::assertDispatched(LicenseActivated::class);
    }

    public function test_activate_license_fails_with_invalid_license()
    {
        Http::fake([
            '*' => Http::response([
                'status' => false,
                'message' => 'Invalid license',
            ], 200),
        ]);

        $this->expectException(LicenseInvalidException::class);

        $this->core->activateLicense('invalid_license', 'test_client');
    }

    public function test_activate_license_fails_when_already_activated_maximum()
    {
        Http::fake([
            '*' => Http::response([
                'status' => false,
                'message' => 'License already active on maximum instances',
                'status_code' => 'ACTIVATED_MAXIMUM_ALLOWED_PRODUCT_INSTANCES',
            ], 200),
        ]);

        $this->expectException(LicenseIsAlreadyActivatedException::class);

        $this->core->activateLicense('test_license', 'test_client');
    }

    public function test_verify_license_with_valid_cached_data_skips_server_check()
    {
        Setting::shouldReceive('has')
            ->with('license_activated_at')
            ->andReturn(true);

        Setting::shouldReceive('has')
            ->with('license_last_verified_at')
            ->andReturn(true);

        Setting::shouldReceive('has')
            ->with('license_next_check_at')
            ->andReturn(true);

        Setting::shouldReceive('get')
            ->with('license_next_check_at')
            ->andReturn(Carbon::now()->addDays(5)->toIso8601String());

        $this->mockFiles->expects($this->once())
            ->method('exists')
            ->willReturn(true);

        $result = $this->core->verifyLicense(true);

        $this->assertTrue($result);
        Event::assertDispatched(LicenseVerified::class);
        Http::assertNothingSent();
    }

    public function test_verify_license_directly_handles_deactivation_response()
    {
        Http::fake([
            '*' => Http::response([
                'status' => false,
                'message' => 'Activation not recognized or is inactive',
                'status_code' => 'LICENSE_DEACTIVATED',
            ], 200),
        ]);

        config(['core.base.general.license_storage_method' => 'database']);

        $this->mockFiles->expects($this->once())
            ->method('exists')
            ->willReturn(true);

        Setting::shouldReceive('get')
            ->with('license_file_content')
            ->andReturn('encrypted_license_content');

        Setting::shouldReceive('forceDelete')->times(9);
        Session::shouldReceive('forget')->times(2);

        $result = $this->core->verifyLicense(false);

        $this->assertFalse($result);
        Event::assertDispatched(LicenseUnverified::class);
    }

    public function test_verify_license_returns_true_on_connection_failure_with_existing_license()
    {
        Http::fake(function (): void {
            throw new ConnectionException('Connection failed');
        });

        $this->mockFiles->expects($this->once())
            ->method('exists')
            ->willReturn(true);

        Setting::shouldReceive('get')
            ->with('license_file_content')
            ->andReturn('encrypted_license_content');

        $result = $this->core->verifyLicense(false);

        $this->assertTrue($result);
    }

    public function test_deactivate_license_success()
    {
        Http::fake([
            '*' => Http::response([
                'status' => true,
                'message' => 'License deactivated successfully',
            ], 200),
        ]);

        config(['core.base.general.license_storage_method' => 'database']);

        $this->mockFiles->expects($this->once())
            ->method('exists')
            ->willReturn(true);

        Setting::shouldReceive('get')
            ->with('license_file_content')
            ->andReturn('encrypted_license_content');

        Setting::shouldReceive('forceDelete')
            ->with('license_file_content')
            ->once();

        Setting::shouldReceive('forceDelete')
            ->with('licensed_to')
            ->once();

        Session::shouldReceive('forget')->once();

        $result = $this->core->deactivateLicense();

        $this->assertTrue($result);
        Event::assertDispatched(LicenseDeactivated::class);
    }

    public function test_skip_license_reminder_creates_file_with_ttl()
    {
        $this->mockFiles->expects($this->once())
            ->method('put')
            ->with(
                $this->anything(),
                $this->callback(function ($content) {
                    $decrypted = decrypt($content);
                    $date = Carbon::parse($decrypted);

                    return $date->isFuture() && $date->diffInDays(Carbon::now()) === 3;
                })
            )
            ->willReturn(true);

        $result = $this->core->skipLicenseReminder();

        $this->assertTrue($result);
    }

    public function test_is_skipped_license_reminder_returns_true_when_valid()
    {
        $futureDate = Carbon::now()->addDays(2)->toIso8601String();

        $this->mockFiles->expects($this->once())
            ->method('exists')
            ->willReturn(true);

        $this->mockFiles->expects($this->once())
            ->method('get')
            ->willReturn(encrypt($futureDate));

        $result = $this->core->isSkippedLicenseReminder();

        $this->assertTrue($result);
    }

    public function test_is_skipped_license_reminder_returns_false_when_expired()
    {
        $pastDate = Carbon::now()->subDays(1)->toIso8601String();

        $this->mockFiles->expects($this->once())
            ->method('exists')
            ->willReturn(true);

        $this->mockFiles->expects($this->once())
            ->method('get')
            ->willReturn(encrypt($pastDate));

        $this->mockFiles->expects($this->once())
            ->method('delete')
            ->willReturn(true);

        $result = $this->core->isSkippedLicenseReminder();

        $this->assertFalse($result);
    }
}
