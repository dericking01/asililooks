<?php

return [
    'settings' => [
        'title' => 'Innstillinger for sosial pålogging',
        'description' => 'Konfigurer alternativer for sosial pålogging',
        'facebook' => [
            'enable' => 'Aktiver Facebook-pålogging',
            'app_id' => 'App ID',
            'app_secret' => 'App Secret',
            'helper' => 'Vennligst gå til https://developers.facebook.com for å opprette en ny app og oppdatere App ID, App Secret. Callback URL er :callback',
            'data_deletion_request_callback_url' => 'Angi denne URL-en :url som URL for forespørsel om sletting av data i innstillingene for Facebook-appen din for å la brukere be om sletting av dataene deres.',
        ],
        'google' => [
            'enable' => 'Aktiver Google-pålogging',
            'app_id' => 'App ID',
            'app_secret' => 'App Secret',
            'helper' => 'Vennligst gå til https://console.developers.google.com/apis/dashboard for å opprette en ny app og oppdatere App ID, App Secret. Callback URL er :callback',
            'use_google_button' => 'Bruk Google-knapp',
            'use_google_button_helper' => 'Hvis du aktiverer dette alternativet, vil Google-knappen bli brukt i stedet for standardknappen.',
        ],
        'github' => [
            'enable' => 'Aktiver GitHub-pålogging',
            'app_id' => 'App ID',
            'app_secret' => 'App Secret',
            'helper' => 'Vennligst gå til https://github.com/settings/developers for å opprette en ny app og oppdatere App ID, App Secret. Callback URL er :callback',
        ],
        'linkedin' => [
            'enable' => 'Aktiver Linkedin-pålogging',
            'app_id' => 'App ID',
            'app_secret' => 'App Secret',
            'helper' => 'Vennligst gå til https://www.linkedin.com/developers/apps/new for å opprette en ny app og oppdatere App ID, App Secret. Callback URL er :callback',
        ],
        'linkedin-openid' => [
            'enable' => 'Aktiver Linkedin-pålogging ved hjelp av OpenID Connect',
            'app_id' => 'App ID',
            'app_secret' => 'App Secret',
            'helper' => 'Vennligst gå til https://www.linkedin.com/developers/apps/new for å opprette en ny app og oppdatere App ID, App Secret. Callback URL er :callback',
        ],
        'x' => [
            'enable' => 'Aktiver X (Twitter)-pålogging',
            'app_id' => 'Client ID',
            'app_secret' => 'Client Secret',
            'helper' => 'Vennligst gå til https://developer.x.com/en/portal/dashboard for å opprette en ny app og oppdatere Client ID, Client Secret. Callback URL er :callback',
        ],
        'enable' => 'Aktiver sosial pålogging?',
        'style' => 'Stil',
        'minimal' => 'Minimal',
        'default' => 'Standard',
        'basic' => 'Grunnleggende',
    ],
    'socials' => [
        'facebook' => 'Facebook',
        'google' => 'Google',
        'github' => 'GitHub',
        'linkedin' => 'Linkedin',
        'linkedin-openid' => 'Linkedin OpenID Connect',
        'x' => 'X (Twitter)',
    ],
    'menu' => 'Sosial pålogging',
    'description' => 'Se og oppdater innstillingene for sosial pålogging',
    'sign_in_with' => 'Logg inn med :provider',
];
