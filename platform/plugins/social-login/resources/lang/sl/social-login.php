<?php

return [
    'settings' => [
        'title' => 'Nastavitve socialne prijave',
        'description' => 'Konfigurirajte možnosti socialne prijave',
        'facebook' => [
            'enable' => 'Omogoči prijavo preko Facebooka',
            'app_id' => 'App ID',
            'app_secret' => 'App Secret',
            'helper' => 'Obiščite https://developers.facebook.com za ustvarjanje nove aplikacije in posodobitev App ID, App Secret. URL povratnega klica je :callback',
            'data_deletion_request_callback_url' => 'Nastavite ta URL :url kot URL zahtevka za izbris podatkov v nastavitvah aplikacije Facebook, da uporabnikom omogočite zahtevo po izbrisu njihovih podatkov.',
        ],
        'google' => [
            'enable' => 'Omogoči prijavo preko Googla',
            'app_id' => 'App ID',
            'app_secret' => 'App Secret',
            'helper' => 'Obiščite https://console.developers.google.com/apis/dashboard za ustvarjanje nove aplikacije in posodobitev App ID, App Secret. URL povratnega klica je :callback',
            'use_google_button' => 'Uporabi gumb Google',
            'use_google_button_helper' => 'Če omogočite to možnost, bo uporabljen gumb Google namesto privzetega gumba.',
        ],
        'github' => [
            'enable' => 'Omogoči prijavo preko GitHuba',
            'app_id' => 'App ID',
            'app_secret' => 'App Secret',
            'helper' => 'Obiščite https://github.com/settings/developers za ustvarjanje nove aplikacije in posodobitev App ID, App Secret. URL povratnega klica je :callback',
        ],
        'linkedin' => [
            'enable' => 'Omogoči prijavo preko Linkedina',
            'app_id' => 'App ID',
            'app_secret' => 'App Secret',
            'helper' => 'Obiščite https://www.linkedin.com/developers/apps/new za ustvarjanje nove aplikacije in posodobitev App ID, App Secret. URL povratnega klica je :callback',
        ],
        'linkedin-openid' => [
            'enable' => 'Omogoči prijavo preko Linkedina z uporabo OpenID Connect',
            'app_id' => 'App ID',
            'app_secret' => 'App Secret',
            'helper' => 'Obiščite https://www.linkedin.com/developers/apps/new za ustvarjanje nove aplikacije in posodobitev App ID, App Secret. URL povratnega klica je :callback',
        ],
        'x' => [
            'enable' => 'Omogoči prijavo preko X (Twitter)',
            'app_id' => 'Client ID',
            'app_secret' => 'Client Secret',
            'helper' => 'Obiščite https://developer.x.com/en/portal/dashboard za ustvarjanje nove aplikacije in posodobitev Client ID, Client Secret. URL povratnega klica je :callback',
        ],
        'enable' => 'Omogoči socialno prijavo?',
        'style' => 'Slog',
        'minimal' => 'Minimalen',
        'default' => 'Privzeto',
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
    'menu' => 'Socialna prijava',
    'description' => 'Oglejte si in posodobite nastavitve socialne prijave',
    'sign_in_with' => 'Prijavite se z :provider',
];
