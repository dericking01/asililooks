<?php

return [
    'settings' => [
        'title' => 'Sotsiaalse sisselogimise seaded',
        'description' => 'Konfigureerige sotsiaalse sisselogimise valikuid',
        'facebook' => [
            'enable' => 'Luba Facebook sisselogimine',
            'app_id' => 'App ID',
            'app_secret' => 'App Secret',
            'helper' => 'Palun minge aadressile https://developers.facebook.com, et luua uus rakendus ja värskendada App ID, App Secret. Callback URL on :callback',
            'data_deletion_request_callback_url' => 'Määrake see URL :url andmete kustutamise taotluse URL-ina oma Facebook rakenduse seadetes, et võimaldada kasutajatel taotleda oma andmete kustutamist.',
        ],
        'google' => [
            'enable' => 'Luba Google sisselogimine',
            'app_id' => 'App ID',
            'app_secret' => 'App Secret',
            'helper' => 'Palun minge aadressile https://console.developers.google.com/apis/dashboard, et luua uus rakendus ja värskendada App ID, App Secret. Callback URL on :callback',
            'use_google_button' => 'Kasuta Google nuppu',
            'use_google_button_helper' => 'Kui lubate selle valiku, kasutatakse vaikenuppu asemel Google nuppu.',
        ],
        'github' => [
            'enable' => 'Luba GitHub sisselogimine',
            'app_id' => 'App ID',
            'app_secret' => 'App Secret',
            'helper' => 'Palun minge aadressile https://github.com/settings/developers, et luua uus rakendus ja värskendada App ID, App Secret. Callback URL on :callback',
        ],
        'linkedin' => [
            'enable' => 'Luba Linkedin sisselogimine',
            'app_id' => 'App ID',
            'app_secret' => 'App Secret',
            'helper' => 'Palun minge aadressile https://www.linkedin.com/developers/apps/new, et luua uus rakendus ja värskendada App ID, App Secret. Callback URL on :callback',
        ],
        'linkedin-openid' => [
            'enable' => 'Luba Linkedin sisselogimine OpenID Connect abil',
            'app_id' => 'App ID',
            'app_secret' => 'App Secret',
            'helper' => 'Palun minge aadressile https://www.linkedin.com/developers/apps/new, et luua uus rakendus ja värskendada App ID, App Secret. Callback URL on :callback',
        ],
        'x' => [
            'enable' => 'Luba X (Twitter) sisselogimine',
            'app_id' => 'Client ID',
            'app_secret' => 'Client Secret',
            'helper' => 'Palun minge aadressile https://developer.x.com/en/portal/dashboard, et luua uus rakendus ja värskendada Client ID, Client Secret. Callback URL on :callback',
        ],
        'enable' => 'Luba sotsiaalne sisselogimine?',
        'style' => 'Stiil',
        'minimal' => 'Minimaalne',
        'default' => 'Vaikimisi',
        'basic' => 'Põhiline',
    ],
    'socials' => [
        'facebook' => 'Facebook',
        'google' => 'Google',
        'github' => 'GitHub',
        'linkedin' => 'Linkedin',
        'linkedin-openid' => 'Linkedin OpenID Connect',
        'x' => 'X (Twitter)',
    ],
    'menu' => 'Sotsiaalne sisselogimine',
    'description' => 'Vaadake ja värskendage oma sotsiaalse sisselogimise seadeid',
    'sign_in_with' => 'Logi sisse :provider abil',
];
