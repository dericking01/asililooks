<?php

return [
    'settings' => [
        'title' => 'Nastavenia sociálneho prihlásenia',
        'description' => 'Konfigurácia možností sociálneho prihlásenia',
        'facebook' => [
            'enable' => 'Povoliť prihlásenie cez Facebook',
            'app_id' => 'App ID',
            'app_secret' => 'App Secret',
            'helper' => 'Navštívte prosím https://developers.facebook.com pre vytvorenie novej aplikácie a aktualizáciu App ID, App Secret. URL spätného volania je :callback',
            'data_deletion_request_callback_url' => 'Nastavte túto URL :url ako URL žiadosti o vymazanie údajov v nastaveniach vašej Facebook aplikácie, aby používatelia mohli požiadať o vymazanie svojich údajov.',
        ],
        'google' => [
            'enable' => 'Povoliť prihlásenie cez Google',
            'app_id' => 'App ID',
            'app_secret' => 'App Secret',
            'helper' => 'Navštívte prosím https://console.developers.google.com/apis/dashboard pre vytvorenie novej aplikácie a aktualizáciu App ID, App Secret. URL spätného volania je :callback',
            'use_google_button' => 'Použiť tlačidlo Google',
            'use_google_button_helper' => 'Ak povolíte túto možnosť, bude použité tlačidlo Google namiesto predvoleného tlačidla.',
        ],
        'github' => [
            'enable' => 'Povoliť prihlásenie cez GitHub',
            'app_id' => 'App ID',
            'app_secret' => 'App Secret',
            'helper' => 'Navštívte prosím https://github.com/settings/developers pre vytvorenie novej aplikácie a aktualizáciu App ID, App Secret. URL spätného volania je :callback',
        ],
        'linkedin' => [
            'enable' => 'Povoliť prihlásenie cez Linkedin',
            'app_id' => 'App ID',
            'app_secret' => 'App Secret',
            'helper' => 'Navštívte prosím https://www.linkedin.com/developers/apps/new pre vytvorenie novej aplikácie a aktualizáciu App ID, App Secret. URL spätného volania je :callback',
        ],
        'linkedin-openid' => [
            'enable' => 'Povoliť prihlásenie cez Linkedin pomocou OpenID Connect',
            'app_id' => 'App ID',
            'app_secret' => 'App Secret',
            'helper' => 'Navštívte prosím https://www.linkedin.com/developers/apps/new pre vytvorenie novej aplikácie a aktualizáciu App ID, App Secret. URL spätného volania je :callback',
        ],
        'x' => [
            'enable' => 'Povoliť prihlásenie cez X (Twitter)',
            'app_id' => 'Client ID',
            'app_secret' => 'Client Secret',
            'helper' => 'Navštívte prosím https://developer.x.com/en/portal/dashboard pre vytvorenie novej aplikácie a aktualizáciu Client ID, Client Secret. URL spätného volania je :callback',
        ],
        'enable' => 'Povoliť sociálne prihlásenie?',
        'style' => 'Štýl',
        'minimal' => 'Minimálny',
        'default' => 'Predvolený',
        'basic' => 'Základný',
    ],
    'socials' => [
        'facebook' => 'Facebook',
        'google' => 'Google',
        'github' => 'GitHub',
        'linkedin' => 'Linkedin',
        'linkedin-openid' => 'Linkedin OpenID Connect',
        'x' => 'X (Twitter)',
    ],
    'menu' => 'Sociálne prihlásenie',
    'description' => 'Zobraziť a aktualizovať nastavenia sociálneho prihlásenia',
    'sign_in_with' => 'Prihlásiť sa pomocou :provider',
];
