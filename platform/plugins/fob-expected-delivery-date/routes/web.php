<?php

Route::group(['namespace' => 'FriendsOfBotble\ExpectedDeliveryDate\Http\Controllers', 'middleware' => ['web', 'core']], function () {
    Route::group(['prefix' => BaseHelper::getAdminPrefix(), 'middleware' => 'auth'], function () {
        Route::group(['prefix' => 'delivery-estimates', 'as' => 'delivery-estimates.'], function () {
            // Add routes if needed
        });
    });
}); 