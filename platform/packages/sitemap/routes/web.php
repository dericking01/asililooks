<?php

use Botble\Base\Facades\AdminHelper;
use Illuminate\Support\Facades\Route;

AdminHelper::registerRoutes(function () {
    Route::group(['namespace' => 'Botble\Sitemap\Http\Controllers'], function () {
        Route::group(['prefix' => 'settings'], function () {
            Route::group(['prefix' => 'sitemap'], function () {
                Route::get('', [
                    'as' => 'sitemap.settings',
                    'uses' => 'SitemapSettingController@edit',
                ]);

                Route::put('', [
                    'as' => 'sitemap.settings.update',
                    'uses' => 'SitemapSettingController@update',
                    'permission' => 'sitemap.settings',
                ]);
            });
        });
    });
});
