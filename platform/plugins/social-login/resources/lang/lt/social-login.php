<?php

return [
    'settings' => [
        'title' => 'Socialinio prisijungimo nustatymai',
        'description' => 'Konfigūruoti socialinio prisijungimo parinktis',
        'facebook' => [
            'enable' => 'Įgalinti Facebook prisijungimą',
            'app_id' => 'App ID',
            'app_secret' => 'App Secret',
            'helper' => 'Apsilankykite https://developers.facebook.com norėdami sukurti naują programą ir atnaujinti App ID, App Secret. Callback URL yra :callback',
            'data_deletion_request_callback_url' => 'Nustatykite šį URL :url kaip duomenų šalinimo užklausos URL savo Facebook programos nustatymuose, kad vartotojai galėtų prašyti ištrinti savo duomenis.',
        ],
        'google' => [
            'enable' => 'Įgalinti Google prisijungimą',
            'app_id' => 'App ID',
            'app_secret' => 'App Secret',
            'helper' => 'Apsilankykite https://console.developers.google.com/apis/dashboard norėdami sukurti naują programą ir atnaujinti App ID, App Secret. Callback URL yra :callback',
            'use_google_button' => 'Naudoti Google mygtuką',
            'use_google_button_helper' => 'Jei įgalinsite šią parinktį, bus naudojamas Google mygtukas vietoj numatytojo mygtuko.',
        ],
        'github' => [
            'enable' => 'Įgalinti GitHub prisijungimą',
            'app_id' => 'App ID',
            'app_secret' => 'App Secret',
            'helper' => 'Apsilankykite https://github.com/settings/developers norėdami sukurti naują programą ir atnaujinti App ID, App Secret. Callback URL yra :callback',
        ],
        'linkedin' => [
            'enable' => 'Įgalinti Linkedin prisijungimą',
            'app_id' => 'App ID',
            'app_secret' => 'App Secret',
            'helper' => 'Apsilankykite https://www.linkedin.com/developers/apps/new norėdami sukurti naują programą ir atnaujinti App ID, App Secret. Callback URL yra :callback',
        ],
        'linkedin-openid' => [
            'enable' => 'Įgalinti Linkedin prisijungimą naudojant OpenID Connect',
            'app_id' => 'App ID',
            'app_secret' => 'App Secret',
            'helper' => 'Apsilankykite https://www.linkedin.com/developers/apps/new norėdami sukurti naują programą ir atnaujinti App ID, App Secret. Callback URL yra :callback',
        ],
        'x' => [
            'enable' => 'Įgalinti X (Twitter) prisijungimą',
            'app_id' => 'Client ID',
            'app_secret' => 'Client Secret',
            'helper' => 'Apsilankykite https://developer.x.com/en/portal/dashboard norėdami sukurti naują programą ir atnaujinti Client ID, Client Secret. Callback URL yra :callback',
        ],
        'enable' => 'Įgalinti socialinį prisijungimą?',
        'style' => 'Stilius',
        'minimal' => 'Minimalus',
        'default' => 'Numatytasis',
        'basic' => 'Paprastas',
    ],
    'socials' => [
        'facebook' => 'Facebook',
        'google' => 'Google',
        'github' => 'GitHub',
        'linkedin' => 'Linkedin',
        'linkedin-openid' => 'Linkedin OpenID Connect',
        'x' => 'X (Twitter)',
    ],
    'menu' => 'Socialinis prisijungimas',
    'description' => 'Peržiūrėti ir atnaujinti socialinio prisijungimo nustatymus',
    'sign_in_with' => 'Prisijunkite su :provider',
];
