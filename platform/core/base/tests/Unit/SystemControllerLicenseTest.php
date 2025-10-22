<?php

namespace Botble\Base\Tests\Unit;

use Botble\Base\Http\Controllers\SystemController;

use Botble\Base\Supports\Core;
use Botble\Base\Tests\BaseLicenseTestCase;
use Illuminate\Http\Client\ConnectionException;
use Illuminate\Support\Facades\Session;
use Mockery;

class SystemControllerLicenseTest extends BaseLicenseTestCase
{
    protected SystemController $controller;
    protected $mockCore;

    protected function setUp(): void
    {
        parent::setUp();

        $this->controller = new SystemController();
        $this->mockCore = Mockery::mock(Core::class);
    }

    protected function tearDown(): void
    {
        Mockery::close();
        parent::tearDown();
    }

    public function test_check_license_returns_unlicensed_when_no_license_data_exists()
    {
        $this->mockCore->shouldReceive('hasLicenseData')
            ->once()
            ->andReturn(false);

        $response = $this->controller->checkLicense($this->mockCore);

        $this->assertFalse($response->getData()->verified);
        $this->assertEquals(401, $response->getData()->code);
        $this->assertNotNull($response->getData()->html);
        $this->assertNotNull($response->getData()->redirectUrl);
    }

    public function test_check_license_returns_verified_when_fully_verified()
    {
        $this->mockCore->shouldReceive('hasLicenseData')
            ->once()
            ->andReturn(true);

        $this->mockCore->shouldReceive('isLicenseFullyVerified')
            ->once()
            ->andReturn(true);

        $response = $this->controller->checkLicense($this->mockCore);

        $this->assertTrue($response->getData()->verified);
        $this->assertNull($response->getData()->code);
    }

    public function test_check_license_returns_verified_when_session_cache_valid()
    {
        $this->mockCore->shouldReceive('hasLicenseData')
            ->once()
            ->andReturn(true);

        $this->mockCore->shouldReceive('isLicenseFullyVerified')
            ->once()
            ->andReturn(false);

        Session::put('license_check_time', time() - 86400); // 1 day ago

        $response = $this->controller->checkLicense($this->mockCore);

        $this->assertTrue($response->getData()->verified);
        $this->assertNull($response->getData()->code);
    }

    public function test_check_license_verifies_with_server_when_cache_expired()
    {
        $this->mockCore->shouldReceive('hasLicenseData')
            ->once()
            ->andReturn(true);

        $this->mockCore->shouldReceive('isLicenseFullyVerified')
            ->once()
            ->andReturn(false);

        Session::put('license_check_time', time() - (4 * 24 * 60 * 60)); // 4 days ago

        $this->mockCore->shouldReceive('verifyLicense')
            ->once()
            ->with(true, 15)
            ->andReturn(true);

        $response = $this->controller->checkLicense($this->mockCore);

        $this->assertTrue($response->getData()->verified);
        $this->assertNull($response->getData()->code);
        $this->assertNotNull(Session::get('license_check_time'));
    }

    public function test_check_license_returns_unlicensed_after_deactivation()
    {
        $this->mockCore->shouldReceive('hasLicenseData')
            ->once()
            ->andReturn(true);

        $this->mockCore->shouldReceive('isLicenseFullyVerified')
            ->once()
            ->andReturn(false);

        Session::forget('license_check_time');

        $this->mockCore->shouldReceive('verifyLicense')
            ->once()
            ->with(true, 15)
            ->andReturn(false);

        $this->mockCore->shouldReceive('hasLicenseData')
            ->once()
            ->andReturn(false); // License was cleared after deactivation

        $response = $this->controller->checkLicense($this->mockCore);

        $this->assertFalse($response->getData()->verified);
        $this->assertEquals(401, $response->getData()->code);
        $this->assertNotNull($response->getData()->html);
        $this->assertNotNull($response->getData()->redirectUrl);
    }

    public function test_check_license_returns_verified_on_temporary_verification_failure()
    {
        $this->mockCore->shouldReceive('hasLicenseData')
            ->once()
            ->andReturn(true);

        $this->mockCore->shouldReceive('isLicenseFullyVerified')
            ->once()
            ->andReturn(false);

        Session::forget('license_check_time');

        $this->mockCore->shouldReceive('verifyLicense')
            ->once()
            ->with(true, 15)
            ->andReturn(false);

        $this->mockCore->shouldReceive('hasLicenseData')
            ->once()
            ->andReturn(true); // License still exists (temporary issue)

        $response = $this->controller->checkLicense($this->mockCore);

        $this->assertTrue($response->getData()->verified);
        $this->assertNull($response->getData()->code);
    }

    public function test_check_license_handles_connection_exception_with_license()
    {
        $this->mockCore->shouldReceive('hasLicenseData')
            ->once()
            ->andReturn(true);

        $this->mockCore->shouldReceive('isLicenseFullyVerified')
            ->once()
            ->andReturn(false);

        Session::forget('license_check_time');

        $this->mockCore->shouldReceive('verifyLicense')
            ->once()
            ->andThrow(new ConnectionException('Connection failed'));

        $this->mockCore->shouldReceive('hasLicenseData')
            ->once()
            ->andReturn(true);

        $this->mockCore->shouldReceive('skipLicenseReminder')
            ->once();

        $response = $this->controller->checkLicense($this->mockCore);

        $this->assertTrue($response->getData()->verified);
        $this->assertNull($response->getData()->code);
    }

    public function test_check_license_handles_connection_exception_without_license()
    {
        $this->mockCore->shouldReceive('hasLicenseData')
            ->once()
            ->andReturn(true);

        $this->mockCore->shouldReceive('isLicenseFullyVerified')
            ->once()
            ->andReturn(false);

        Session::forget('license_check_time');

        $this->mockCore->shouldReceive('verifyLicense')
            ->once()
            ->andThrow(new ConnectionException('Connection failed'));

        $this->mockCore->shouldReceive('hasLicenseData')
            ->once()
            ->andReturn(false); // No license data

        $response = $this->controller->checkLicense($this->mockCore);

        $this->assertFalse($response->getData()->verified);
        $this->assertEquals(401, $response->getData()->code);
        $this->assertNotNull($response->getData()->html);
        $this->assertNotNull($response->getData()->redirectUrl);
    }

    public function test_check_license_handles_generic_exception_with_license()
    {
        $this->mockCore->shouldReceive('hasLicenseData')
            ->once()
            ->andReturn(true);

        $this->mockCore->shouldReceive('isLicenseFullyVerified')
            ->once()
            ->andReturn(false);

        Session::forget('license_check_time');

        $this->mockCore->shouldReceive('verifyLicense')
            ->once()
            ->andThrow(new \Exception('Generic error'));

        $this->mockCore->shouldReceive('hasLicenseData')
            ->once()
            ->andReturn(true);

        $response = $this->controller->checkLicense($this->mockCore);

        $this->assertTrue($response->getData()->verified);
        $this->assertNull($response->getData()->code);
    }

    public function test_check_license_handles_generic_exception_without_license()
    {
        $this->mockCore->shouldReceive('hasLicenseData')
            ->once()
            ->andReturn(true);

        $this->mockCore->shouldReceive('isLicenseFullyVerified')
            ->once()
            ->andReturn(false);

        Session::forget('license_check_time');

        $this->mockCore->shouldReceive('verifyLicense')
            ->once()
            ->andThrow(new \Exception('Generic error'));

        $this->mockCore->shouldReceive('hasLicenseData')
            ->once()
            ->andReturn(false); // No license data

        $response = $this->controller->checkLicense($this->mockCore);

        $this->assertFalse($response->getData()->verified);
        $this->assertEquals(401, $response->getData()->code);
        $this->assertNotNull($response->getData()->html);
        $this->assertNotNull($response->getData()->redirectUrl);
    }
}
