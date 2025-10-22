<?php

namespace Botble\Setting\Tests\Feature;

use Botble\Base\Supports\Core;
use Botble\Base\Tests\BaseLicenseTestCase;
use Botble\Setting\Facades\Setting;
use Botble\Setting\Http\Controllers\GeneralSettingController;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Mockery;

class GeneralSettingLicenseTest extends BaseLicenseTestCase
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

        Setting::load(true);
        session()->forget('license_check_time');
    }

    /**
     * Test that settings page ALWAYS checks API without using cache
     */
    public function test_settings_page_always_checks_api_without_cache()
    {
        // Setup: Create license with valid cache (should be bypassed)
        Setting::forceSet([
            'license_file_content' => 'encrypted_content',
            'licensed_to' => 'TestClient',
            'license_activated_at' => Carbon::now()->toIso8601String(),
            'license_last_verified_at' => Carbon::now()->toIso8601String(),
            'license_next_check_at' => Carbon::now()->addDays(7)->toIso8601String(), // Valid cache
            'license_verification_count' => 5,
        ])->save();

        // Also set session cache
        session(['license_check_time' => time()]);

        $core = app(Core::class);
        $controller = new GeneralSettingController();
        $request = Request::create('/admin/settings/license/verify', 'GET');
        $request->setLaravelSession(session());

        // Mock successful API response
        Http::fake([
            '*' => Http::response([
                'status' => true,
                'message' => 'License is valid',
            ], 200),
        ]);

        // Call getVerifyLicense
        $response = $controller->getVerifyLicense($request, $core);

        // Assert API was called despite valid cache
        Http::assertSentCount(1);
        $this->assertEquals('Your license is activated.', $response->getData()->message);
    }

    /**
     * Test settings page detects deactivated license immediately
     */
    public function test_settings_page_detects_deactivation_immediately()
    {
        // Setup: Create active license with valid cache
        Setting::forceSet([
            'license_file_content' => 'encrypted_content',
            'licensed_to' => 'TestClient',
            'license_activated_at' => Carbon::now()->toIso8601String(),
            'license_last_verified_at' => Carbon::now()->toIso8601String(),
            'license_next_check_at' => Carbon::now()->addDays(7)->toIso8601String(),
            'license_verification_count' => 10,
        ])->save();

        $core = app(Core::class);
        $controller = new GeneralSettingController();
        $request = Request::create('/admin/settings/license/verify', 'GET');

        // Mock deactivation response
        Http::fake([
            '*' => Http::response([
                'status' => false,
                'message' => 'Activation not recognized or is inactive',
                'status_code' => 'LICENSE_DEACTIVATED',
            ], 200),
        ]);

        // Call getVerifyLicense
        $response = $controller->getVerifyLicense($request, $core);

        // Should show invalid and clear license data
        $this->assertTrue($response->isError());
        $this->assertEquals('Your license is invalid. Please activate your license!', $response->getData()->message);

        // Verify license data was cleared
        Setting::load(true);
        $this->assertFalse($core->hasLicenseData());
    }

    /**
     * Test settings page with no license shows activation form
     */
    public function test_settings_page_no_license_shows_activation_form()
    {
        $core = app(Core::class);
        $controller = new GeneralSettingController();
        $request = Request::create('/admin/settings/license/verify', 'GET');

        // No license data exists
        $this->assertFalse($core->hasLicenseData());

        // Mock checkConnection to succeed
        $request->headers->set('Accept', 'application/json');

        // Call getVerifyLicense
        $response = $controller->getVerifyLicense($request, $core);

        // Should show error with activation form
        $this->assertTrue($response->isError());
        $this->assertArrayHasKey('html', $response->getData(true));
    }

    /**
     * Test settings page ignores session cache completely
     */
    public function test_settings_page_ignores_session_cache()
    {
        // Setup: Create license and set recent session cache
        Setting::forceSet([
            'license_file_content' => 'encrypted_content',
            'licensed_to' => 'TestClient',
            'license_activated_at' => Carbon::now()->subDays(10)->toIso8601String(),
            'license_last_verified_at' => Carbon::now()->subDays(10)->toIso8601String(),
            'license_next_check_at' => Carbon::now()->subDays(3)->toIso8601String(), // Expired
        ])->save();

        // Set very recent session cache that would normally bypass check
        session(['license_check_time' => time() - 60]); // 1 minute ago

        $core = app(Core::class);
        $controller = new GeneralSettingController();
        $request = Request::create('/admin/settings/license/verify', 'GET');
        $request->setLaravelSession(session());

        // Mock API response
        Http::fake([
            '*' => Http::response([
                'status' => true,
                'message' => 'License is valid',
            ], 200),
        ]);

        // Call getVerifyLicense
        $response = $controller->getVerifyLicense($request, $core);

        // API should be called despite session cache
        Http::assertSentCount(1);
        $this->assertFalse($response->isError());
    }

    /**
     * Test settings page connection failure with valid license
     */
    public function test_settings_page_connection_failure_with_license()
    {
        // Setup: Create valid license
        Setting::forceSet([
            'license_file_content' => 'encrypted_content',
            'licensed_to' => 'TestClient',
            'license_activated_at' => Carbon::now()->toIso8601String(),
        ])->save();

        $core = app(Core::class);
        $controller = new GeneralSettingController();
        $request = Request::create('/admin/settings/license/verify', 'GET');

        // Mock connection failure
        Http::fake(function (): void {
            throw new \Illuminate\Http\Client\ConnectionException('Connection failed');
        });

        config(['app.debug' => false]);

        // Call getVerifyLicense
        $response = $controller->getVerifyLicense($request, $core);

        // Should still show as valid (graceful degradation)
        $this->assertFalse($response->isError());
        $this->assertTrue($core->hasLicenseData());
    }

    /**
     * Test activating license through settings page
     */
    public function test_activate_license_through_settings_page()
    {
        $core = app(Core::class);
        $controller = new GeneralSettingController();

        // Mock successful activation
        Http::fake([
            '*' => Http::response([
                'status' => true,
                'lic_response' => 'encrypted_license_content',
            ], 200),
        ]);

        // Create activation request
        $request = Request::create('/admin/settings/license/activate', 'POST', [
            'purchase_code' => 'TEST-LICENSE-123',
            'buyer' => 'TestBuyer',
        ]);

        // Call activateLicense
        $response = $controller->activateLicense($request, $core);

        // Should be successful
        $this->assertFalse($response->isError());
        $this->assertEquals('Your license has been activated successfully.', $response->getData()->message);

        // Verify metadata was saved
        $this->assertTrue($core->hasLicenseData());
        $this->assertEquals('TestBuyer', Setting::get('licensed_to'));
        $this->assertNotNull(Setting::get('license_activated_at'));
    }

    /**
     * Test deactivating license through settings page
     */
    public function test_deactivate_license_through_settings_page()
    {
        // Setup: Create active license
        Setting::forceSet([
            'license_file_content' => 'encrypted_content',
            'licensed_to' => 'TestClient',
            'license_activated_at' => Carbon::now()->toIso8601String(),
            'license_verification_count' => 5,
        ])->save();

        $core = app(Core::class);
        $controller = new GeneralSettingController();

        // Mock successful deactivation
        Http::fake([
            '*' => Http::response([
                'status' => true,
                'message' => 'License deactivated',
            ], 200),
        ]);

        // Call deactivateLicense
        $response = $controller->deactivateLicense($core);

        // Should be successful
        $this->assertFalse($response->isError());
        $this->assertEquals('Deactivated license successfully!', $response->getData()->message);

        // Verify everything is cleared
        $this->assertFalse($core->hasLicenseData());
        $this->assertEmpty(Setting::get('license_file_content'));
        $this->assertEmpty(Setting::get('licensed_to'));
    }

    /**
     * Test reset license functionality
     */
    public function test_reset_license_through_settings_page()
    {
        $core = app(Core::class);
        $controller = new GeneralSettingController();

        // Mock successful reset
        Http::fake([
            '*' => Http::response([
                'status' => true,
                'message' => 'License reset successful',
            ], 200),
        ]);

        // Create reset request
        $request = Request::create('/admin/settings/license/reset', 'POST', [
            'purchase_code' => 'TEST-LICENSE-123',
            'buyer' => 'TestBuyer',
        ]);

        // Call resetLicense
        $response = $controller->resetLicense($request, $core);

        // Should be successful
        $this->assertFalse($response->isError());
        $this->assertEquals('Your license has been reset successfully.', $response->getData()->message);
    }

    /**
     * Test settings page updates verification metadata on successful check
     */
    public function test_settings_page_updates_metadata_on_success()
    {
        // Setup: Create license needing verification
        Setting::forceSet([
            'license_file_content' => 'encrypted_content',
            'licensed_to' => 'TestClient',
            'license_activated_at' => Carbon::now()->subDays(8)->toIso8601String(),
            'license_last_verified_at' => Carbon::now()->subDays(8)->toIso8601String(),
            'license_next_check_at' => Carbon::now()->subDays(1)->toIso8601String(),
            'license_verification_count' => 3,
        ])->save();

        $core = app(Core::class);
        $controller = new GeneralSettingController();
        $request = Request::create('/admin/settings/license/verify', 'GET');

        // Mock successful verification
        Http::fake([
            '*' => Http::response([
                'status' => true,
                'message' => 'License is valid',
            ], 200),
        ]);

        // Call getVerifyLicense
        $controller->getVerifyLicense($request, $core);

        // Force reload settings
        Setting::load(true);

        // Verification count should NOT increase for settings page (uses false flag)
        // But last_verified_at should be updated
        $lastVerified = Carbon::parse(Setting::get('license_last_verified_at'));
        $this->assertTrue($lastVerified->isToday() || $lastVerified->isYesterday());
    }
}