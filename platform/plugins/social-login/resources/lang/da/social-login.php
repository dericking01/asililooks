<?php

return [
    'settings' => [
        'title' => 'Indstillinger for social login',
        'description' => 'Konfigurer muligheder for social login',
        'facebook' => [
            'enable' => 'Aktiver Facebook login',
            'app_id' => 'App ID',
            'app_secret' => 'App Secret',
            'helper' => 'Gå venligst til https://developers.facebook.com for at oprette en ny app og opdatere App ID, App Secret. Callback URL er :callback',
            'data_deletion_request_callback_url' => 'Indstil denne URL :url som URL for anmodning om sletning af data i dine Facebook app-indstillinger for at tillade brugere at anmode om sletning af deres data.',
        ],
        'google' => [
            'enable' => 'Aktiver Google login',
            'app_id' => 'App ID',
            'app_secret' => 'App Secret',
            'helper' => 'Gå venligst til https://console.developers.google.com/apis/dashboard for at oprette en ny app og opdatere App ID, App Secret. Callback URL er :callback',
            'use_google_button' => 'Brug Google-knap',
            'use_google_button_helper' => 'Hvis du aktiverer denne mulighed, vil Google-knappen blive brugt i stedet for standardknappen.',
        ],
        'github' => [
            'enable' => 'Aktiver GitHub login',
            'app_id' => 'App ID',
            'app_secret' => 'App Secret',
            'helper' => 'Gå venligst til https://github.com/settings/developers for at oprette en ny app og opdatere App ID, App Secret. Callback URL er :callback',
        ],
        'linkedin' => [
            'enable' => 'Aktiver Linkedin login',
            'app_id' => 'App ID',
            'app_secret' => 'App Secret',
            'helper' => 'Gå venligst til https://www.linkedin.com/developers/apps/new for at oprette en ny app og opdatere App ID, App Secret. Callback URL er :callback',
        ],
        'linkedin-openid' => [
            'enable' => 'Aktiver Linkedin login ved hjælp af OpenID Connect',
            'app_id' => 'App ID',
            'app_secret' => 'App Secret',
            'helper' => 'Gå venligst til https://www.linkedin.com/developers/apps/new for at oprette en ny app og opdatere App ID, App Secret. Callback URL er :callback',
        ],
        'x' => [
            'enable' => 'Aktiver X (Twitter) login',
            'app_id' => 'Client ID',
            'app_secret' => 'Client Secret',
            'helper' => 'Gå venligst til https://developer.x.com/en/portal/dashboard for at oprette en ny app og opdatere Client ID, Client Secret. Callback URL er :callback',
        ],
        'enable' => 'Aktiver social login?',
        'style' => 'Stil',
        'minimal' => 'Minimal',
        'default' => 'Standard',
        'basic' => 'Basis',
    ],
    'socials' => [
        'facebook' => 'Facebook',
        'google' => 'Google',
        'github' => 'GitHub',
        'linkedin' => 'Linkedin',
        'linkedin-openid' => 'Linkedin OpenID Connect',
        'x' => 'X (Twitter)',
    ],
    'menu' => 'Social login',
    'description' => 'Se og opdater dine indstillinger for social login',
    'sign_in_with' => 'Log ind med :provider',
];
