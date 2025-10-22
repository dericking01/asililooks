<?php

return [
    'settings' => [
        'title' => 'Setări de autentificare socială',
        'description' => 'Configurați opțiunile de autentificare socială',
        'facebook' => [
            'enable' => 'Activați autentificarea prin Facebook',
            'app_id' => 'App ID',
            'app_secret' => 'App Secret',
            'helper' => 'Vă rugăm să accesați https://developers.facebook.com pentru a crea o aplicație nouă și a actualiza App ID, App Secret. URL-ul de callback este :callback',
            'data_deletion_request_callback_url' => 'Setați acest URL :url ca URL de solicitare de ștergere a datelor în setările aplicației dvs. Facebook pentru a permite utilizatorilor să solicite ștergerea datelor lor.',
        ],
        'google' => [
            'enable' => 'Activați autentificarea prin Google',
            'app_id' => 'App ID',
            'app_secret' => 'App Secret',
            'helper' => 'Vă rugăm să accesați https://console.developers.google.com/apis/dashboard pentru a crea o aplicație nouă și a actualiza App ID, App Secret. URL-ul de callback este :callback',
            'use_google_button' => 'Utilizați butonul Google',
            'use_google_button_helper' => 'Dacă activați această opțiune, butonul Google va fi utilizat în locul butonului implicit.',
        ],
        'github' => [
            'enable' => 'Activați autentificarea prin GitHub',
            'app_id' => 'App ID',
            'app_secret' => 'App Secret',
            'helper' => 'Vă rugăm să accesați https://github.com/settings/developers pentru a crea o aplicație nouă și a actualiza App ID, App Secret. URL-ul de callback este :callback',
        ],
        'linkedin' => [
            'enable' => 'Activați autentificarea prin Linkedin',
            'app_id' => 'App ID',
            'app_secret' => 'App Secret',
            'helper' => 'Vă rugăm să accesați https://www.linkedin.com/developers/apps/new pentru a crea o aplicație nouă și a actualiza App ID, App Secret. URL-ul de callback este :callback',
        ],
        'linkedin-openid' => [
            'enable' => 'Activați autentificarea prin Linkedin folosind OpenID Connect',
            'app_id' => 'App ID',
            'app_secret' => 'App Secret',
            'helper' => 'Vă rugăm să accesați https://www.linkedin.com/developers/apps/new pentru a crea o aplicație nouă și a actualiza App ID, App Secret. URL-ul de callback este :callback',
        ],
        'x' => [
            'enable' => 'Activați autentificarea prin X (Twitter)',
            'app_id' => 'Client ID',
            'app_secret' => 'Client Secret',
            'helper' => 'Vă rugăm să accesați https://developer.x.com/en/portal/dashboard pentru a crea o aplicație nouă și a actualiza Client ID, Client Secret. URL-ul de callback este :callback',
        ],
        'enable' => 'Activați autentificarea socială?',
        'style' => 'Stil',
        'minimal' => 'Minimal',
        'default' => 'Implicit',
        'basic' => 'De bază',
    ],
    'socials' => [
        'facebook' => 'Facebook',
        'google' => 'Google',
        'github' => 'GitHub',
        'linkedin' => 'Linkedin',
        'linkedin-openid' => 'Linkedin OpenID Connect',
        'x' => 'X (Twitter)',
    ],
    'menu' => 'Autentificare socială',
    'description' => 'Vizualizați și actualizați setările de autentificare socială',
    'sign_in_with' => 'Conectați-vă cu :provider',
];
