<?php

return [
    'settings' => [
        'title' => 'Nastavení sociálního přihlášení',
        'description' => 'Konfigurace možností sociálního přihlášení',
        'facebook' => [
            'enable' => 'Povolit přihlášení přes Facebook',
            'app_id' => 'App ID',
            'app_secret' => 'App Secret',
            'helper' => 'Navštivte prosím https://developers.facebook.com pro vytvoření nové aplikace a aktualizaci App ID, App Secret. Callback URL je :callback',
            'data_deletion_request_callback_url' => 'Nastavte tuto URL :url jako URL žádosti o smazání dat v nastavení vaší Facebook aplikace, aby uživatelé mohli požádat o smazání svých dat.',
        ],
        'google' => [
            'enable' => 'Povolit přihlášení přes Google',
            'app_id' => 'App ID',
            'app_secret' => 'App Secret',
            'helper' => 'Navštivte prosím https://console.developers.google.com/apis/dashboard pro vytvoření nové aplikace a aktualizaci App ID, App Secret. Callback URL je :callback',
            'use_google_button' => 'Použít tlačítko Google',
            'use_google_button_helper' => 'Pokud tuto možnost povolíte, bude místo výchozího tlačítka použito tlačítko Google.',
        ],
        'github' => [
            'enable' => 'Povolit přihlášení přes GitHub',
            'app_id' => 'App ID',
            'app_secret' => 'App Secret',
            'helper' => 'Navštivte prosím https://github.com/settings/developers pro vytvoření nové aplikace a aktualizaci App ID, App Secret. Callback URL je :callback',
        ],
        'linkedin' => [
            'enable' => 'Povolit přihlášení přes Linkedin',
            'app_id' => 'App ID',
            'app_secret' => 'App Secret',
            'helper' => 'Navštivte prosím https://www.linkedin.com/developers/apps/new pro vytvoření nové aplikace a aktualizaci App ID, App Secret. Callback URL je :callback',
        ],
        'linkedin-openid' => [
            'enable' => 'Povolit přihlášení přes Linkedin pomocí OpenID Connect',
            'app_id' => 'App ID',
            'app_secret' => 'App Secret',
            'helper' => 'Navštivte prosím https://www.linkedin.com/developers/apps/new pro vytvoření nové aplikace a aktualizaci App ID, App Secret. Callback URL je :callback',
        ],
        'x' => [
            'enable' => 'Povolit přihlášení přes X (Twitter)',
            'app_id' => 'Client ID',
            'app_secret' => 'Client Secret',
            'helper' => 'Navštivte prosím https://developer.x.com/en/portal/dashboard pro vytvoření nové aplikace a aktualizaci Client ID, Client Secret. Callback URL je :callback',
        ],
        'enable' => 'Povolit sociální přihlášení?',
        'style' => 'Styl',
        'minimal' => 'Minimální',
        'default' => 'Výchozí',
        'basic' => 'Základní',
    ],
    'socials' => [
        'facebook' => 'Facebook',
        'google' => 'Google',
        'github' => 'GitHub',
        'linkedin' => 'Linkedin',
        'linkedin-openid' => 'Linkedin OpenID Connect',
        'x' => 'X (Twitter)',
    ],
    'menu' => 'Sociální přihlášení',
    'description' => 'Zobrazit a aktualizovat nastavení sociálního přihlášení',
    'sign_in_with' => 'Přihlásit se pomocí :provider',
];
