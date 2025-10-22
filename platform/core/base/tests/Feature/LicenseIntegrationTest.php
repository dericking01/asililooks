<?php

namespace Botble\Base\Tests\Feature;

use Botble\Base\Supports\Core;
use Botble\Base\Tests\BaseLicenseTestCase;
use Botble\Setting\Facades\Setting;
use Carbon\Carbon;
use Illuminate\Http\Client\ConnectionException;
use Illuminate\Support\Facades\Http;

class LicenseIntegrationTest extends BaseLicenseTestCase
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

    public function test_complete_license_lifecycle()
    {
        $core = app(Core::class);

        // Step 1: Verify no license exists initially
        $this->assertFalse($core->hasLicenseData());
        $this->assertFalse($core->isLicenseFullyVerified());

        // Step 2: Activate license
        Http::fake([
            '*/activate_license' => Http::response([
                'status' => true,
                'lic_response' => 'test_encrypted_license_content',
            ], 200),
        ]);

        $result = $core->activateLicense('TEST-LICENSE-CODE', 'TestClient');
        $this->assertTrue($result);

        // Verify metadata was saved
        $this->assertEquals('TestClient', Setting::get('licensed_to'));
        $this->assertNotNull(Setting::get('license_activated_at'));
        $this->assertNotNull(Setting::get('license_next_check_at'));
        $this->assertEquals(1, Setting::get('license_verification_count'));
        $this->assertNotNull(Setting::get('license_purchase_code_hash'));

        // Step 3: Verify license is fully verified (within cache period)
        $this->assertTrue($core->hasLicenseData());
        $this->assertTrue($core->isLicenseFullyVerified());

        // Step 4: Simulate time passing (but still within 7-day cache)
        Carbon::setTestNow(Carbon::now()->addDays(5));
        $this->assertTrue($core->isLicenseFullyVerified());

        // Step 5: Simulate cache expiration
        Carbon::setTestNow(Carbon::now()->addDays(3)); // Now 8 days total
        $this->assertFalse($core->isLicenseFullyVerified());

        // Step 6: Verify license with server (successful)
        Http::fake([
            '*/verify_license' => Http::response([
                'status' => true,
                'message' => 'License is valid',
            ], 200),
        ]);

        $result = $core->verifyLicense(true);
        $this->assertTrue($result);

        // Force reload to get updated values
        Setting::load(true);
        $this->assertEquals(2, Setting::get('license_verification_count'));

        // Step 7: Test deactivation response from server
        Http::fake([
            '*/verify_license' => Http::response([
                'status' => false,
                'message' => 'Activation not recognized or is inactive',
                'status_code' => 'LICENSE_DEACTIVATED',
            ], 200),
        ]);

        $result = $core->verifyLicense(false);
        $this->assertFalse($result);

        // Force reload to get cleared values
        Setting::load(true);

        // Verify all license data was cleared
        $this->assertFalse($core->hasLicenseData());
        $this->assertEmpty(Setting::get('license_file_content'));
        $this->assertEmpty(Setting::get('licensed_to'));
        $this->assertEmpty(Setting::get('license_activated_at'));

        Carbon::setTestNow(); // Reset time
    }

    public function test_license_verification_with_connection_failure()
    {
        $core = app(Core::class);

        // Setup: Activate license first
        Http::fake([
            '*/activate_license' => Http::response([
                'status' => true,
                'lic_response' => 'test_encrypted_license_content',
            ], 200),
        ]);

        $core->activateLicense('TEST-LICENSE-CODE', 'TestClient');
        $this->assertTrue($core->hasLicenseData());

        // Set debug mode to false to handle connection failure gracefully
        config(['app.debug' => false]);

        // Simulate connection failure during verification
        Http::fake(function (): void {
            throw new ConnectionException('Connection failed');
        });

        // Should return true because license data exists
        $result = $core->verifyLicense(false);
        $this->assertTrue($result);

        // License data should still exist
        $this->assertTrue($core->hasLicenseData());
    }

    public function test_license_verification_handles_various_error_messages()
    {
        $core = app(Core::class);

        // Setup: Activate license first
        Http::fake([
            '*/activate_license' => Http::response([
                'status' => true,
                'lic_response' => 'test_encrypted_license_content',
            ], 200),
        ]);

        $core->activateLicense('TEST-LICENSE-CODE', 'TestClient');

        // Test 1: License blocked
        Http::fake([
            '*/verify_license' => Http::response([
                'status' => false,
                'message' => 'License is blocked, please contact support!',
            ], 200),
        ]);

        $result = $core->verifyLicense(false);
        $this->assertFalse($result);
        $this->assertTrue($core->hasLicenseData()); // Not cleared for blocked status

        // Test 2: License invalid
        Http::fake([
            '*/verify_license' => Http::response([
                'status' => false,
                'message' => 'License is invalid',
            ], 200),
        ]);

        $result = $core->verifyLicense(false);
        $this->assertFalse($result);
        $this->assertFalse($core->hasLicenseData()); // Cleared for invalid status
    }

    public function test_skip_license_reminder_functionality()
    {
        $core = app(Core::class);

        // Skip reminder for 3 days
        $result = $core->skipLicenseReminder();
        $this->assertTrue($result);

        // Should be skipped now
        $this->assertTrue($core->isSkippedLicenseReminder());

        // Simulate time passing (2 days - still within skip period)
        Carbon::setTestNow(Carbon::now()->addDays(2));
        $this->assertTrue($core->isSkippedLicenseReminder());

        // Simulate time passing (4 days - skip period expired)
        Carbon::setTestNow(Carbon::now()->addDays(2));
        $this->assertFalse($core->isSkippedLicenseReminder());

        Carbon::setTestNow(); // Reset time
    }

    public function test_update_license_verification_data_preserves_timestamps()
    {
        $core = app(Core::class);

        // Setup initial data
        Setting::forceSet([
            'license_activated_at' => Carbon::now()->toIso8601String(),
            'license_last_verified_at' => Carbon::now()->toIso8601String(),
            'license_next_check_at' => Carbon::now()->addDays(7)->toIso8601String(),
            'license_verification_count' => 1,
        ])->save();

        // Update verification data
        $core->updateLicenseVerificationData();

        // Check that count increased
        $this->assertEquals(2, Setting::get('license_verification_count'));

        // Check that last_verified_at is updated
        $lastVerified = Carbon::parse(Setting::get('license_last_verified_at'));
        $this->assertTrue($lastVerified->isToday());

        // Check that next_check_at is 7 days from now
        $nextCheck = Carbon::parse(Setting::get('license_next_check_at'));
        $daysDiff = round(abs($nextCheck->diffInDays(Carbon::now())));
        $this->assertGreaterThanOrEqual(6, $daysDiff);
        $this->assertLessThanOrEqual(8, $daysDiff);
    }

    public function test_deactivate_license_clears_everything()
    {
        $core = app(Core::class);

        // Setup: Activate license first
        Http::fake([
            '*/activate_license' => Http::response([
                'status' => true,
                'lic_response' => 'test_encrypted_license_content',
            ], 200),
        ]);

        $core->activateLicense('TEST-LICENSE-CODE', 'TestClient');
        $this->assertTrue($core->hasLicenseData());

        // Deactivate license
        Http::fake([
            '*/deactivate_license' => Http::response([
                'status' => true,
                'message' => 'License deactivated successfully',
            ], 200),
        ]);

        $result = $core->deactivateLicense();
        $this->assertTrue($result);

        // Verify everything is cleared
        $this->assertFalse($core->hasLicenseData());
        $this->assertFalse($core->isLicenseFullyVerified());
        $this->assertEmpty(Setting::get('license_file_content'));
        $this->assertEmpty(Setting::get('licensed_to'));
        $this->assertEmpty(Setting::get('license_activated_at'));
        $this->assertEmpty(Setting::get('license_verification_count'));
    }
}
