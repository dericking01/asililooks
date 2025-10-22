<?php

return [
    'settings' => [
        'title' => 'Inställningar för social inloggning',
        'description' => 'Konfigurera alternativ för social inloggning',
        'facebook' => [
            'enable' => 'Aktivera Facebook-inloggning',
            'app_id' => 'App ID',
            'app_secret' => 'App Secret',
            'helper' => 'Vänligen gå till https://developers.facebook.com för att skapa en ny app och uppdatera App ID, App Secret. Callback URL är :callback',
            'data_deletion_request_callback_url' => 'Ange denna URL :url som URL för begäran om radering av data i dina Facebook-appinställningar för att tillåta användare att begära radering av sina data.',
        ],
        'google' => [
            'enable' => 'Aktivera Google-inloggning',
            'app_id' => 'App ID',
            'app_secret' => 'App Secret',
            'helper' => 'Vänligen gå till https://console.developers.google.com/apis/dashboard för att skapa en ny app och uppdatera App ID, App Secret. Callback URL är :callback',
            'use_google_button' => 'Använd Google-knapp',
            'use_google_button_helper' => 'Om du aktiverar detta alternativ kommer Google-knappen att användas istället för standardknappen.',
        ],
        'github' => [
            'enable' => 'Aktivera GitHub-inloggning',
            'app_id' => 'App ID',
            'app_secret' => 'App Secret',
            'helper' => 'Vänligen gå till https://github.com/settings/developers för att skapa en ny app och uppdatera App ID, App Secret. Callback URL är :callback',
        ],
        'linkedin' => [
            'enable' => 'Aktivera Linkedin-inloggning',
            'app_id' => 'App ID',
            'app_secret' => 'App Secret',
            'helper' => 'Vänligen gå till https://www.linkedin.com/developers/apps/new för att skapa en ny app och uppdatera App ID, App Secret. Callback URL är :callback',
        ],
        'linkedin-openid' => [
            'enable' => 'Aktivera Linkedin-inloggning med OpenID Connect',
            'app_id' => 'App ID',
            'app_secret' => 'App Secret',
            'helper' => 'Vänligen gå till https://www.linkedin.com/developers/apps/new för att skapa en ny app och uppdatera App ID, App Secret. Callback URL är :callback',
        ],
        'x' => [
            'enable' => 'Aktivera X (Twitter)-inloggning',
            'app_id' => 'Client ID',
            'app_secret' => 'Client Secret',
            'helper' => 'Vänligen gå till https://developer.x.com/en/portal/dashboard för att skapa en ny app och uppdatera Client ID, Client Secret. Callback URL är :callback',
        ],
        'enable' => 'Aktivera social inloggning?',
        'style' => 'Stil',
        'minimal' => 'Minimal',
        'default' => 'Standard',
        'basic' => 'Grundläggande',
    ],
    'socials' => [
        'facebook' => 'Facebook',
        'google' => 'Google',
        'github' => 'GitHub',
        'linkedin' => 'Linkedin',
        'linkedin-openid' => 'Linkedin OpenID Connect',
        'x' => 'X (Twitter)',
    ],
    'menu' => 'Social inloggning',
    'description' => 'Visa och uppdatera dina inställningar för social inloggning',
    'sign_in_with' => 'Logga in med :provider',
];
