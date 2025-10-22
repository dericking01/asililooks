<?php

namespace Botble\Base\Tests;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Route;
use Tests\TestCase;

abstract class BaseLicenseTestCase extends TestCase
{
    use RefreshDatabase;

    protected function defineDatabaseMigrations(): void
    {
        $this->loadMigrationsFrom(base_path('platform/core/setting/database/migrations'));
    }

    protected function setUp(): void
    {
        parent::setUp();

        config(['core.base.general.license_storage_method' => 'database']);

        // Mock the route helper
        if (!Route::has('unlicensed')) {
            Route::get('/unlicensed', function(): void {})->name('unlicensed');
        }

        // Mock the view factory properly
        $viewMock = \Mockery::mock(\Illuminate\Contracts\View\View::class);
        $viewMock->shouldReceive('render')->andReturn('<div>License Invalid</div>');

        $viewFactoryMock = \Mockery::mock(\Illuminate\Contracts\View\Factory::class);
        $viewFactoryMock->shouldReceive('make')
            ->withArgs(function ($view) {
                return str_contains($view, 'license-invalid');
            })
            ->andReturn($viewMock);

        $viewFactoryMock->shouldReceive('exists')->andReturn(true);
        $viewFactoryMock->shouldReceive('addNamespace')->andReturnSelf();
        $viewFactoryMock->shouldReceive('addLocation')->andReturnSelf();
        $viewFactoryMock->shouldReceive('prependNamespace')->andReturnSelf();
        $viewFactoryMock->shouldReceive('replaceNamespace')->andReturnSelf();

        app()->instance('view', $viewFactoryMock);
    }
}
