<?php

return [
    'settings' => [
        'title' => 'Impostazioni di accesso social',
        'description' => 'Configura le opzioni di accesso social',
        'facebook' => [
            'enable' => 'Abilita accesso Facebook',
            'app_id' => 'App ID',
            'app_secret' => 'App Secret',
            'helper' => 'Si prega di visitare https://developers.facebook.com per creare una nuova app e aggiornare App ID, App Secret. L\'URL di callback è :callback',
            'data_deletion_request_callback_url' => 'Imposta questo URL :url come URL di richiesta di cancellazione dati nelle impostazioni della tua app Facebook per consentire agli utenti di richiedere la cancellazione dei loro dati.',
        ],
        'google' => [
            'enable' => 'Abilita accesso Google',
            'app_id' => 'App ID',
            'app_secret' => 'App Secret',
            'helper' => 'Si prega di visitare https://console.developers.google.com/apis/dashboard per creare una nuova app e aggiornare App ID, App Secret. L\'URL di callback è :callback',
            'use_google_button' => 'Usa pulsante Google',
            'use_google_button_helper' => 'Se abiliti questa opzione, verrà utilizzato il pulsante Google invece del pulsante predefinito.',
        ],
        'github' => [
            'enable' => 'Abilita accesso GitHub',
            'app_id' => 'App ID',
            'app_secret' => 'App Secret',
            'helper' => 'Si prega di visitare https://github.com/settings/developers per creare una nuova app e aggiornare App ID, App Secret. L\'URL di callback è :callback',
        ],
        'linkedin' => [
            'enable' => 'Abilita accesso Linkedin',
            'app_id' => 'App ID',
            'app_secret' => 'App Secret',
            'helper' => 'Si prega di visitare https://www.linkedin.com/developers/apps/new per creare una nuova app e aggiornare App ID, App Secret. L\'URL di callback è :callback',
        ],
        'linkedin-openid' => [
            'enable' => 'Abilita accesso Linkedin utilizzando OpenID Connect',
            'app_id' => 'App ID',
            'app_secret' => 'App Secret',
            'helper' => 'Si prega di visitare https://www.linkedin.com/developers/apps/new per creare una nuova app e aggiornare App ID, App Secret. L\'URL di callback è :callback',
        ],
        'x' => [
            'enable' => 'Abilita accesso X (Twitter)',
            'app_id' => 'Client ID',
            'app_secret' => 'Client Secret',
            'helper' => 'Si prega di visitare https://developer.x.com/en/portal/dashboard per creare una nuova app e aggiornare Client ID, Client Secret. L\'URL di callback è :callback',
        ],
        'enable' => 'Abilita accesso social?',
        'style' => 'Stile',
        'minimal' => 'Minimale',
        'default' => 'Predefinito',
        'basic' => 'Base',
    ],
    'socials' => [
        'facebook' => 'Facebook',
        'google' => 'Google',
        'github' => 'GitHub',
        'linkedin' => 'Linkedin',
        'linkedin-openid' => 'Linkedin OpenID Connect',
        'x' => 'X (Twitter)',
    ],
    'menu' => 'Accesso social',
    'description' => 'Visualizza e aggiorna le impostazioni di accesso social',
    'sign_in_with' => 'Accedi con :provider',
];
