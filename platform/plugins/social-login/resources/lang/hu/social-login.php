<?php

return [
    'settings' => [
        'title' => 'Közösségi bejelentkezés beállításai',
        'description' => 'Közösségi bejelentkezési lehetőségek konfigurálása',
        'facebook' => [
            'enable' => 'Facebook bejelentkezés engedélyezése',
            'app_id' => 'App ID',
            'app_secret' => 'App Secret',
            'helper' => 'Kérjük, látogasson el a https://developers.facebook.com oldalra új alkalmazás létrehozásához és az App ID, App Secret frissítéséhez. A visszahívási URL: :callback',
            'data_deletion_request_callback_url' => 'Állítsa be ezt az URL-t :url adattörlési kérelem URL-jeként a Facebook alkalmazás beállításaiban, hogy a felhasználók kérhessék adataik törlését.',
        ],
        'google' => [
            'enable' => 'Google bejelentkezés engedélyezése',
            'app_id' => 'App ID',
            'app_secret' => 'App Secret',
            'helper' => 'Kérjük, látogasson el a https://console.developers.google.com/apis/dashboard oldalra új alkalmazás létrehozásához és az App ID, App Secret frissítéséhez. A visszahívási URL: :callback',
            'use_google_button' => 'Google gomb használata',
            'use_google_button_helper' => 'Ha engedélyezi ezt az opciót, az alapértelmezett gomb helyett a Google gomb lesz használva.',
        ],
        'github' => [
            'enable' => 'GitHub bejelentkezés engedélyezése',
            'app_id' => 'App ID',
            'app_secret' => 'App Secret',
            'helper' => 'Kérjük, látogasson el a https://github.com/settings/developers oldalra új alkalmazás létrehozásához és az App ID, App Secret frissítéséhez. A visszahívási URL: :callback',
        ],
        'linkedin' => [
            'enable' => 'Linkedin bejelentkezés engedélyezése',
            'app_id' => 'App ID',
            'app_secret' => 'App Secret',
            'helper' => 'Kérjük, látogasson el a https://www.linkedin.com/developers/apps/new oldalra új alkalmazás létrehozásához és az App ID, App Secret frissítéséhez. A visszahívási URL: :callback',
        ],
        'linkedin-openid' => [
            'enable' => 'Linkedin bejelentkezés engedélyezése OpenID Connect használatával',
            'app_id' => 'App ID',
            'app_secret' => 'App Secret',
            'helper' => 'Kérjük, látogasson el a https://www.linkedin.com/developers/apps/new oldalra új alkalmazás létrehozásához és az App ID, App Secret frissítéséhez. A visszahívási URL: :callback',
        ],
        'x' => [
            'enable' => 'X (Twitter) bejelentkezés engedélyezése',
            'app_id' => 'Client ID',
            'app_secret' => 'Client Secret',
            'helper' => 'Kérjük, látogasson el a https://developer.x.com/en/portal/dashboard oldalra új alkalmazás létrehozásához és a Client ID, Client Secret frissítéséhez. A visszahívási URL: :callback',
        ],
        'enable' => 'Közösségi bejelentkezés engedélyezése?',
        'style' => 'Stílus',
        'minimal' => 'Minimális',
        'default' => 'Alapértelmezett',
        'basic' => 'Alapvető',
    ],
    'socials' => [
        'facebook' => 'Facebook',
        'google' => 'Google',
        'github' => 'GitHub',
        'linkedin' => 'Linkedin',
        'linkedin-openid' => 'Linkedin OpenID Connect',
        'x' => 'X (Twitter)',
    ],
    'menu' => 'Közösségi bejelentkezés',
    'description' => 'Közösségi bejelentkezési beállítások megtekintése és frissítése',
    'sign_in_with' => 'Bejelentkezés :provider használatával',
];
