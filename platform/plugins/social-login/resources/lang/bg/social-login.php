<?php

return [
    'settings' => [
        'title' => 'Настройки за социално влизане',
        'description' => 'Конфигуриране на опциите за социално влизане',
        'facebook' => [
            'enable' => 'Активиране на влизане чрез Facebook',
            'app_id' => 'App ID',
            'app_secret' => 'App Secret',
            'helper' => 'Моля, посетете https://developers.facebook.com за да създадете ново приложение и актуализирате App ID, App Secret. Callback URL е :callback',
            'data_deletion_request_callback_url' => 'Задайте този URL :url като URL за заявка за изтриване на данни в настройките на вашето Facebook приложение, за да позволите на потребителите да поискат изтриване на техните данни.',
        ],
        'google' => [
            'enable' => 'Активиране на влизане чрез Google',
            'app_id' => 'App ID',
            'app_secret' => 'App Secret',
            'helper' => 'Моля, посетете https://console.developers.google.com/apis/dashboard за да създадете ново приложение и актуализирате App ID, App Secret. Callback URL е :callback',
            'use_google_button' => 'Използване на бутон на Google',
            'use_google_button_helper' => 'Ако активирате тази опция, ще се използва бутонът на Google вместо стандартния бутон.',
        ],
        'github' => [
            'enable' => 'Активиране на влизане чрез GitHub',
            'app_id' => 'App ID',
            'app_secret' => 'App Secret',
            'helper' => 'Моля, посетете https://github.com/settings/developers за да създадете ново приложение и актуализирате App ID, App Secret. Callback URL е :callback',
        ],
        'linkedin' => [
            'enable' => 'Активиране на влизане чрез Linkedin',
            'app_id' => 'App ID',
            'app_secret' => 'App Secret',
            'helper' => 'Моля, посетете https://www.linkedin.com/developers/apps/new за да създадете ново приложение и актуализирате App ID, App Secret. Callback URL е :callback',
        ],
        'linkedin-openid' => [
            'enable' => 'Активиране на влизане чрез Linkedin с OpenID Connect',
            'app_id' => 'App ID',
            'app_secret' => 'App Secret',
            'helper' => 'Моля, посетете https://www.linkedin.com/developers/apps/new за да създадете ново приложение и актуализирате App ID, App Secret. Callback URL е :callback',
        ],
        'x' => [
            'enable' => 'Активиране на влизане чрез X (Twitter)',
            'app_id' => 'Client ID',
            'app_secret' => 'Client Secret',
            'helper' => 'Моля, посетете https://developer.x.com/en/portal/dashboard за да създадете ново приложение и актуализирате Client ID, Client Secret. Callback URL е :callback',
        ],
        'enable' => 'Активиране на социално влизане?',
        'style' => 'Стил',
        'minimal' => 'Минимален',
        'default' => 'По подразбиране',
        'basic' => 'Основен',
    ],
    'socials' => [
        'facebook' => 'Facebook',
        'google' => 'Google',
        'github' => 'GitHub',
        'linkedin' => 'Linkedin',
        'linkedin-openid' => 'Linkedin OpenID Connect',
        'x' => 'X (Twitter)',
    ],
    'menu' => 'Социално влизане',
    'description' => 'Преглед и актуализиране на настройките за социално влизане',
    'sign_in_with' => 'Влезте с :provider',
];
