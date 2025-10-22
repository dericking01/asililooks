<?php

return [
    'settings' => [
        'title' => 'Sosiaalisen kirjautumisen asetukset',
        'description' => 'Määritä sosiaalisen kirjautumisen asetukset',
        'facebook' => [
            'enable' => 'Ota käyttöön Facebook-kirjautuminen',
            'app_id' => 'App ID',
            'app_secret' => 'App Secret',
            'helper' => 'Siirry osoitteeseen https://developers.facebook.com luodaksesi uuden sovelluksen ja päivittääksesi App ID:n, App Secretin. Callback URL on :callback',
            'data_deletion_request_callback_url' => 'Aseta tämä URL :url tietojen poistamispyynnön URL-osoitteeksi Facebook-sovelluksesi asetuksissa, jotta käyttäjät voivat pyytää tietojensa poistamista.',
        ],
        'google' => [
            'enable' => 'Ota käyttöön Google-kirjautuminen',
            'app_id' => 'App ID',
            'app_secret' => 'App Secret',
            'helper' => 'Siirry osoitteeseen https://console.developers.google.com/apis/dashboard luodaksesi uuden sovelluksen ja päivittääksesi App ID:n, App Secretin. Callback URL on :callback',
            'use_google_button' => 'Käytä Google-painiketta',
            'use_google_button_helper' => 'Jos otat tämän vaihtoehdon käyttöön, käytetään Google-painiketta oletuspainikkeen sijaan.',
        ],
        'github' => [
            'enable' => 'Ota käyttöön GitHub-kirjautuminen',
            'app_id' => 'App ID',
            'app_secret' => 'App Secret',
            'helper' => 'Siirry osoitteeseen https://github.com/settings/developers luodaksesi uuden sovelluksen ja päivittääksesi App ID:n, App Secretin. Callback URL on :callback',
        ],
        'linkedin' => [
            'enable' => 'Ota käyttöön Linkedin-kirjautuminen',
            'app_id' => 'App ID',
            'app_secret' => 'App Secret',
            'helper' => 'Siirry osoitteeseen https://www.linkedin.com/developers/apps/new luodaksesi uuden sovelluksen ja päivittääksesi App ID:n, App Secretin. Callback URL on :callback',
        ],
        'linkedin-openid' => [
            'enable' => 'Ota käyttöön Linkedin-kirjautuminen OpenID Connectilla',
            'app_id' => 'App ID',
            'app_secret' => 'App Secret',
            'helper' => 'Siirry osoitteeseen https://www.linkedin.com/developers/apps/new luodaksesi uuden sovelluksen ja päivittääksesi App ID:n, App Secretin. Callback URL on :callback',
        ],
        'x' => [
            'enable' => 'Ota käyttöön X (Twitter) -kirjautuminen',
            'app_id' => 'Client ID',
            'app_secret' => 'Client Secret',
            'helper' => 'Siirry osoitteeseen https://developer.x.com/en/portal/dashboard luodaksesi uuden sovelluksen ja päivittääksesi Client ID:n, Client Secretin. Callback URL on :callback',
        ],
        'enable' => 'Ota käyttöön sosiaalinen kirjautuminen?',
        'style' => 'Tyyli',
        'minimal' => 'Minimaalinen',
        'default' => 'Oletus',
        'basic' => 'Perus',
    ],
    'socials' => [
        'facebook' => 'Facebook',
        'google' => 'Google',
        'github' => 'GitHub',
        'linkedin' => 'Linkedin',
        'linkedin-openid' => 'Linkedin OpenID Connect',
        'x' => 'X (Twitter)',
    ],
    'menu' => 'Sosiaalinen kirjautuminen',
    'description' => 'Tarkastele ja päivitä sosiaalisen kirjautumisen asetuksia',
    'sign_in_with' => 'Kirjaudu sisään :provider avulla',
];
