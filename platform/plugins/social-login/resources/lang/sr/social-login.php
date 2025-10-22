<?php

return [
    'settings' => [
        'title' => 'Подешавања друштвене пријаве',
        'description' => 'Конфигуришите опције друштвене пријаве',
        'facebook' => [
            'enable' => 'Омогући пријаву преко Facebook-а',
            'app_id' => 'App ID',
            'app_secret' => 'App Secret',
            'helper' => 'Молимо посетите https://developers.facebook.com да бисте креирали нову апликацију и ажурирали App ID, App Secret. Callback URL је :callback',
            'data_deletion_request_callback_url' => 'Поставите овај URL :url као URL захтева за брисање података у подешавањима ваше Facebook апликације како бисте корисницима омогућили да захтевају брисање њихових података.',
        ],
        'google' => [
            'enable' => 'Омогући пријаву преко Google-а',
            'app_id' => 'App ID',
            'app_secret' => 'App Secret',
            'helper' => 'Молимо посетите https://console.developers.google.com/apis/dashboard да бисте креирали нову апликацију и ажурирали App ID, App Secret. Callback URL је :callback',
            'use_google_button' => 'Користи Google дугме',
            'use_google_button_helper' => 'Ако омогућите ову опцију, Google дугме ће се користити уместо подразумеваног дугмета.',
        ],
        'github' => [
            'enable' => 'Омогући пријаву преко GitHub-а',
            'app_id' => 'App ID',
            'app_secret' => 'App Secret',
            'helper' => 'Молимо посетите https://github.com/settings/developers да бисте креирали нову апликацију и ажурирали App ID, App Secret. Callback URL је :callback',
        ],
        'linkedin' => [
            'enable' => 'Омогући пријаву преко Linkedin-а',
            'app_id' => 'App ID',
            'app_secret' => 'App Secret',
            'helper' => 'Молимо посетите https://www.linkedin.com/developers/apps/new да бисте креирали нову апликацију и ажурирали App ID, App Secret. Callback URL је :callback',
        ],
        'linkedin-openid' => [
            'enable' => 'Омогући пријаву преко Linkedin-а користећи OpenID Connect',
            'app_id' => 'App ID',
            'app_secret' => 'App Secret',
            'helper' => 'Молимо посетите https://www.linkedin.com/developers/apps/new да бисте креирали нову апликацију и ажурирали App ID, App Secret. Callback URL је :callback',
        ],
        'x' => [
            'enable' => 'Омогући пријаву преко X (Twitter)',
            'app_id' => 'Client ID',
            'app_secret' => 'Client Secret',
            'helper' => 'Молимо посетите https://developer.x.com/en/portal/dashboard да бисте креирали нову апликацију и ажурирали Client ID, Client Secret. Callback URL је :callback',
        ],
        'enable' => 'Омогући друштвену пријаву?',
        'style' => 'Стил',
        'minimal' => 'Минималан',
        'default' => 'Подразумевано',
        'basic' => 'Основно',
    ],
    'socials' => [
        'facebook' => 'Facebook',
        'google' => 'Google',
        'github' => 'GitHub',
        'linkedin' => 'Linkedin',
        'linkedin-openid' => 'Linkedin OpenID Connect',
        'x' => 'X (Twitter)',
    ],
    'menu' => 'Друштвена пријава',
    'description' => 'Прегледајте и ажурирајте подешавања друштвене пријаве',
    'sign_in_with' => 'Пријавите се са :provider',
];
