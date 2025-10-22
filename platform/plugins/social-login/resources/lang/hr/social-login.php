<?php

return [
    'settings' => [
        'title' => 'Postavke društvene prijave',
        'description' => 'Konfiguriranje opcija društvene prijave',
        'facebook' => [
            'enable' => 'Omogući prijavu putem Facebooka',
            'app_id' => 'App ID',
            'app_secret' => 'App Secret',
            'helper' => 'Molimo posjetite https://developers.facebook.com kako biste stvorili novu aplikaciju i ažurirali App ID, App Secret. Callback URL je :callback',
            'data_deletion_request_callback_url' => 'Postavite ovaj URL :url kao URL za zahtjev za brisanje podataka u postavkama vaše Facebook aplikacije kako biste korisnicima omogućili zahtijevanje brisanja njihovih podataka.',
        ],
        'google' => [
            'enable' => 'Omogući prijavu putem Googlea',
            'app_id' => 'App ID',
            'app_secret' => 'App Secret',
            'helper' => 'Molimo posjetite https://console.developers.google.com/apis/dashboard kako biste stvorili novu aplikaciju i ažurirali App ID, App Secret. Callback URL je :callback',
            'use_google_button' => 'Koristi Google gumb',
            'use_google_button_helper' => 'Ako omogućite ovu opciju, koristit će se Google gumb umjesto zadanog gumba.',
        ],
        'github' => [
            'enable' => 'Omogući prijavu putem GitHuba',
            'app_id' => 'App ID',
            'app_secret' => 'App Secret',
            'helper' => 'Molimo posjetite https://github.com/settings/developers kako biste stvorili novu aplikaciju i ažurirali App ID, App Secret. Callback URL je :callback',
        ],
        'linkedin' => [
            'enable' => 'Omogući prijavu putem Linkedina',
            'app_id' => 'App ID',
            'app_secret' => 'App Secret',
            'helper' => 'Molimo posjetite https://www.linkedin.com/developers/apps/new kako biste stvorili novu aplikaciju i ažurirali App ID, App Secret. Callback URL je :callback',
        ],
        'linkedin-openid' => [
            'enable' => 'Omogući prijavu putem Linkedina koristeći OpenID Connect',
            'app_id' => 'App ID',
            'app_secret' => 'App Secret',
            'helper' => 'Molimo posjetite https://www.linkedin.com/developers/apps/new kako biste stvorili novu aplikaciju i ažurirali App ID, App Secret. Callback URL je :callback',
        ],
        'x' => [
            'enable' => 'Omogući prijavu putem X (Twitter)',
            'app_id' => 'Client ID',
            'app_secret' => 'Client Secret',
            'helper' => 'Molimo posjetite https://developer.x.com/en/portal/dashboard kako biste stvorili novu aplikaciju i ažurirali Client ID, Client Secret. Callback URL je :callback',
        ],
        'enable' => 'Omogući društvenu prijavu?',
        'style' => 'Stil',
        'minimal' => 'Minimalan',
        'default' => 'Zadano',
        'basic' => 'Osnovno',
    ],
    'socials' => [
        'facebook' => 'Facebook',
        'google' => 'Google',
        'github' => 'GitHub',
        'linkedin' => 'Linkedin',
        'linkedin-openid' => 'Linkedin OpenID Connect',
        'x' => 'X (Twitter)',
    ],
    'menu' => 'Društvena prijava',
    'description' => 'Pregledajte i ažurirajte postavke društvene prijave',
    'sign_in_with' => 'Prijavite se s :provider',
];
