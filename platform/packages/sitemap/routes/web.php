<?php

use Botble\Base\Facades\AdminHelper;
use Illuminate\Support\Facades\Route;

AdminHelper::registerRoutes(function (): void {
    Route::group(['namespace' => 'Botble\Sitemap\Http\Controllers'], function (): void {
        Route::group(['prefix' => 'settings/sitemap', 'as' => 'sitemap.'], function (): void {
            Route::get('', [
                'as' => 'settings',
                'uses' => 'SitemapSettingController@edit',
            ]);

            Route::put('', [
                'as' => 'settings.update',
                'uses' => 'SitemapSettingController@update',
                'permission' => 'sitemap.settings',
            ]);

            Route::post('generate-key', [
                'as' => 'settings.generate-key',
                'uses' => 'SitemapSettingController@generateKey',
                'permission' => 'sitemap.settings',
            ]);

            Route::post('create-key-file', [
                'as' => 'settings.create-key-file',
                'uses' => 'SitemapSettingController@createKeyFile',
                'permission' => 'sitemap.settings',
            ]);
        });
    });
});
