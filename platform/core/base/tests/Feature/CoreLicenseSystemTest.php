<?php

namespace Botble\Base\Tests\Feature;

use Botble\Base\Supports\Core;
use Botble\Base\Tests\BaseLicenseTestCase;
use Botble\Setting\Facades\Setting;
use Carbon\Carbon;
use Illuminate\Http\Client\ConnectionException;
use Illuminate\Support\Facades\Http;

class CoreLicenseSystemTest extends BaseLicenseTestCase
{
    protected function setUp(): void
    {
        parent::setUp();
        $this->clearAllLicenseData();
    }

    protected function tearDown(): void
    {
        $this->clearAllLicenseData();
        parent::tearDown();
    }

    private function clearAllLicenseData(): void
    {
        $keys = [
            'license_file_content',
            'licensed_to',
            'license_activated_at',
            'license_last_verified_at',
            'license_next_check_at',
            'license_verification_count',
            'license_purchase_code_hash',
            'license_server_ip',
            'license_domain',
        ];

        foreach ($keys as $key) {
            Setting::forceSet([$key => ''])->save();
        }

        // Force reload to clear cache
        Setting::load(true);

        session()->forget('license_check_time');
    }

    /**
     * Test Case 1: System with no license shows unlicensed
     */
    public function test_no_license_data_returns_false()
    {
        $core = app(Core::class);

        // Verify no license exists
        $this->assertFalse($core->hasLicenseData());
        $this->assertFalse($core->isLicenseFullyVerified());
    }

    /**
     * Test Case 2: Valid activated license is properly stored
     */
    public function test_activate_license_stores_data()
    {
        Http::fake([
            '*' => Http::response([
                'status' => true,
                'lic_response' => 'encrypted_license_content',
            ], 200),
        ]);

        $core = app(Core::class);

        // Activate license
        $result = $core->activateLicense('TEST-LICENSE', 'TestClient');
        $this->assertTrue($result);

        // Verify license data exists
        $this->assertTrue($core->hasLicenseData());
        $this->assertEquals('TestClient', Setting::get('licensed_to'));
        $this->assertNotNull(Setting::get('license_activated_at'));
        $this->assertNotNull(Setting::get('license_next_check_at'));
        $this->assertEquals(1, Setting::get('license_verification_count'));
    }

    /**
     * Test Case 3: License is fully verified within cache period
     */
    public function test_license_fully_verified_within_cache()
    {
        // Setup: Create license with valid cache
        Setting::forceSet([
            'license_file_content' => 'encrypted_content',
            'licensed_to' => 'TestClient',
            'license_activated_at' => Carbon::now()->toIso8601String(),
            'license_last_verified_at' => Carbon::now()->toIso8601String(),
            'license_next_check_at' => Carbon::now()->addDays(5)->toIso8601String(), // Future date
            'license_verification_count' => 1,
        ])->save();

        $core = app(Core::class);

        $this->assertTrue($core->hasLicenseData());
        $this->assertTrue($core->isLicenseFullyVerified());
    }

    /**
     * Test Case 4: Expired cache returns not fully verified
     */
    public function test_expired_cache_not_fully_verified()
    {
        // Setup: Create license with expired cache
        Setting::forceSet([
            'license_file_content' => 'encrypted_content',
            'licensed_to' => 'TestClient',
            'license_activated_at' => Carbon::now()->subDays(10)->toIso8601String(),
            'license_last_verified_at' => Carbon::now()->subDays(10)->toIso8601String(),
            'license_next_check_at' => Carbon::now()->subDays(3)->toIso8601String(), // Past date
            'license_verification_count' => 1,
        ])->save();

        $core = app(Core::class);

        $this->assertTrue($core->hasLicenseData());
        $this->assertFalse($core->isLicenseFullyVerified());
    }

    /**
     * Test Case 5: Server deactivation clears license
     */
    public function test_verify_license_handles_deactivation()
    {
        // Setup: Create active license
        Setting::forceSet([
            'license_file_content' => 'encrypted_content',
            'licensed_to' => 'TestClient',
            'license_activated_at' => Carbon::now()->subDays(2)->toIso8601String(),
            'license_last_verified_at' => Carbon::now()->subDays(2)->toIso8601String(),
            'license_next_check_at' => Carbon::now()->subDays(1)->toIso8601String(), // Needs check
            'license_verification_count' => 5,
        ])->save();

        $core = app(Core::class);

        // Mock deactivation response
        Http::fake([
            '*' => Http::response([
                'status' => false,
                'message' => 'Activation not recognized or is inactive',
                'status_code' => 'LICENSE_DEACTIVATED',
            ], 200),
        ]);

        // Initial state: has license
        $this->assertTrue($core->hasLicenseData());

        // Verify license should detect deactivation
        $result = $core->verifyLicense(false);
        $this->assertFalse($result);

        // License data should be cleared
        $this->assertFalse($core->hasLicenseData());
        $this->assertEmpty(Setting::get('license_file_content'));
        $this->assertEmpty(Setting::get('licensed_to'));
    }

    /**
     * Test Case 6: Connection failure with valid license stays verified
     */
    public function test_connection_failure_with_license_stays_verified()
    {
        // Setup: Create active license
        Setting::forceSet([
            'license_file_content' => 'encrypted_content',
            'licensed_to' => 'TestClient',
            'license_activated_at' => Carbon::now()->subDays(2)->toIso8601String(),
            'license_last_verified_at' => Carbon::now()->subDays(2)->toIso8601String(),
            'license_next_check_at' => Carbon::now()->subDays(1)->toIso8601String(), // Needs check
        ])->save();

        // Mock connection failure - Set debug mode to false to catch the exception
        config(['app.debug' => false]);

        $core = app(Core::class);

        Http::fake(function (): void {
            throw new ConnectionException('Connection failed');
        });

        // Should return true because license data exists (connection failure is handled gracefully)
        $result = $core->verifyLicense(false);
        $this->assertTrue($result);

        // License data should still exist
        $this->assertTrue($core->hasLicenseData());
    }

    /**
     * Test Case 7: Update verification data increments count
     */
    public function test_update_verification_data_increments_count()
    {
        // Setup initial data
        Setting::forceSet([
            'license_verification_count' => 5,
        ])->save();

        $core = app(Core::class);
        $core->updateLicenseVerificationData();

        // Check that count increased
        $this->assertEquals(6, Setting::get('license_verification_count'));

        // Check that dates were updated
        $lastVerified = Carbon::parse(Setting::get('license_last_verified_at'));
        $this->assertTrue($lastVerified->isToday());

        $nextCheck = Carbon::parse(Setting::get('license_next_check_at'));
        // Use absolute value and round to avoid floating point issues
        $daysDiff = round(abs($nextCheck->diffInDays(Carbon::now())));
        $this->assertGreaterThanOrEqual(6, $daysDiff);
        $this->assertLessThanOrEqual(8, $daysDiff);
    }

    /**
     * Test Case 8: Handle deactivated license clears all data
     */
    public function test_handle_deactivated_clears_all_data()
    {
        // Setup: Create license with all metadata
        Setting::forceSet([
            'license_file_content' => 'encrypted_content',
            'licensed_to' => 'TestClient',
            'license_activated_at' => Carbon::now()->toIso8601String(),
            'license_last_verified_at' => Carbon::now()->toIso8601String(),
            'license_next_check_at' => Carbon::now()->addDays(7)->toIso8601String(),
            'license_verification_count' => 10,
            'license_purchase_code_hash' => 'hash123',
            'license_server_ip' => '127.0.0.1',
            'license_domain' => 'test.com',
        ])->save();

        $core = app(Core::class);

        // Verify data exists
        $this->assertTrue($core->hasLicenseData());

        // Handle deactivation
        $core->handleDeactivatedLicense();

        // Verify everything is cleared
        $this->assertFalse($core->hasLicenseData());
        $this->assertEmpty(Setting::get('license_file_content'));
        $this->assertEmpty(Setting::get('licensed_to'));
        $this->assertEmpty(Setting::get('license_activated_at'));
        $this->assertEmpty(Setting::get('license_verification_count'));
        $this->assertEmpty(Setting::get('license_purchase_code_hash'));
    }

    /**
     * Test Case 9: Successful verification updates metadata
     */
    public function test_successful_verification_updates_metadata()
    {
        // Setup: Create license needing verification
        Setting::forceSet([
            'license_file_content' => 'encrypted_content',
            'licensed_to' => 'TestClient',
            'license_activated_at' => Carbon::now()->subDays(8)->toIso8601String(),
            'license_last_verified_at' => Carbon::now()->subDays(8)->toIso8601String(),
            'license_next_check_at' => Carbon::now()->subDays(1)->toIso8601String(), // Expired
            'license_verification_count' => 3,
        ])->save();

        // Mock successful verification
        Http::fake([
            '*' => Http::response([
                'status' => true,
                'message' => 'License is valid',
            ], 200),
        ]);

        $core = app(Core::class);
        // Use timeBasedCheck = true to trigger updateLicenseVerificationData
        $result = $core->verifyLicense(true);

        $this->assertTrue($result);

        // Verification count should increase
        $this->assertEquals(4, Setting::get('license_verification_count'));

        // Next check should be updated to future
        $nextCheck = Carbon::parse(Setting::get('license_next_check_at'));
        $this->assertTrue($nextCheck->isFuture());
    }
}
