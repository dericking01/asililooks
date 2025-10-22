<?php

return [
    'settings' => [
        'title' => 'Ustawienia logowania społecznościowego',
        'description' => 'Konfiguruj opcje logowania społecznościowego',
        'facebook' => [
            'enable' => 'Włącz logowanie przez Facebook',
            'app_id' => 'App ID',
            'app_secret' => 'App Secret',
            'helper' => 'Przejdź do https://developers.facebook.com, aby utworzyć nową aplikację i zaktualizować App ID, App Secret. Adres URL wywołania zwrotnego to :callback',
            'data_deletion_request_callback_url' => 'Ustaw ten adres URL :url jako adres URL żądania usunięcia danych w ustawieniach aplikacji Facebook, aby umożliwić użytkownikom żądanie usunięcia ich danych.',
        ],
        'google' => [
            'enable' => 'Włącz logowanie przez Google',
            'app_id' => 'App ID',
            'app_secret' => 'App Secret',
            'helper' => 'Przejdź do https://console.developers.google.com/apis/dashboard, aby utworzyć nową aplikację i zaktualizować App ID, App Secret. Adres URL wywołania zwrotnego to :callback',
            'use_google_button' => 'Użyj przycisku Google',
            'use_google_button_helper' => 'Jeśli włączysz tę opcję, zostanie użyty przycisk Google zamiast przycisku domyślnego.',
        ],
        'github' => [
            'enable' => 'Włącz logowanie przez GitHub',
            'app_id' => 'App ID',
            'app_secret' => 'App Secret',
            'helper' => 'Przejdź do https://github.com/settings/developers, aby utworzyć nową aplikację i zaktualizować App ID, App Secret. Adres URL wywołania zwrotnego to :callback',
        ],
        'linkedin' => [
            'enable' => 'Włącz logowanie przez Linkedin',
            'app_id' => 'App ID',
            'app_secret' => 'App Secret',
            'helper' => 'Przejdź do https://www.linkedin.com/developers/apps/new, aby utworzyć nową aplikację i zaktualizować App ID, App Secret. Adres URL wywołania zwrotnego to :callback',
        ],
        'linkedin-openid' => [
            'enable' => 'Włącz logowanie przez Linkedin przy użyciu OpenID Connect',
            'app_id' => 'App ID',
            'app_secret' => 'App Secret',
            'helper' => 'Przejdź do https://www.linkedin.com/developers/apps/new, aby utworzyć nową aplikację i zaktualizować App ID, App Secret. Adres URL wywołania zwrotnego to :callback',
        ],
        'x' => [
            'enable' => 'Włącz logowanie przez X (Twitter)',
            'app_id' => 'Client ID',
            'app_secret' => 'Client Secret',
            'helper' => 'Przejdź do https://developer.x.com/en/portal/dashboard, aby utworzyć nową aplikację i zaktualizować Client ID, Client Secret. Adres URL wywołania zwrotnego to :callback',
        ],
        'enable' => 'Włączyć logowanie społecznościowe?',
        'style' => 'Styl',
        'minimal' => 'Minimalny',
        'default' => 'Domyślny',
        'basic' => 'Podstawowy',
    ],
    'socials' => [
        'facebook' => 'Facebook',
        'google' => 'Google',
        'github' => 'GitHub',
        'linkedin' => 'Linkedin',
        'linkedin-openid' => 'Linkedin OpenID Connect',
        'x' => 'X (Twitter)',
    ],
    'menu' => 'Logowanie społecznościowe',
    'description' => 'Wyświetl i zaktualizuj ustawienia logowania społecznościowego',
    'sign_in_with' => 'Zaloguj się przez :provider',
];
