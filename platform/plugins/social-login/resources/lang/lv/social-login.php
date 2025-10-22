<?php

return [
    'settings' => [
        'title' => 'Sociālās pieteikšanās iestatījumi',
        'description' => 'Konfigurēt sociālās pieteikšanās opcijas',
        'facebook' => [
            'enable' => 'Iespējot Facebook pieteikšanos',
            'app_id' => 'App ID',
            'app_secret' => 'App Secret',
            'helper' => 'Lūdzu, apmeklējiet https://developers.facebook.com, lai izveidotu jaunu lietotni un atjauninātu App ID, App Secret. Callback URL ir :callback',
            'data_deletion_request_callback_url' => 'Iestatiet šo URL :url kā datu dzēšanas pieprasījuma URL savos Facebook lietotnes iestatījumos, lai ļautu lietotājiem pieprasīt savu datu dzēšanu.',
        ],
        'google' => [
            'enable' => 'Iespējot Google pieteikšanos',
            'app_id' => 'App ID',
            'app_secret' => 'App Secret',
            'helper' => 'Lūdzu, apmeklējiet https://console.developers.google.com/apis/dashboard, lai izveidotu jaunu lietotni un atjauninātu App ID, App Secret. Callback URL ir :callback',
            'use_google_button' => 'Izmantot Google pogu',
            'use_google_button_helper' => 'Ja iespējosiet šo opciju, tiks izmantota Google poga noklusējuma pogas vietā.',
        ],
        'github' => [
            'enable' => 'Iespējot GitHub pieteikšanos',
            'app_id' => 'App ID',
            'app_secret' => 'App Secret',
            'helper' => 'Lūdzu, apmeklējiet https://github.com/settings/developers, lai izveidotu jaunu lietotni un atjauninātu App ID, App Secret. Callback URL ir :callback',
        ],
        'linkedin' => [
            'enable' => 'Iespējot Linkedin pieteikšanos',
            'app_id' => 'App ID',
            'app_secret' => 'App Secret',
            'helper' => 'Lūdzu, apmeklējiet https://www.linkedin.com/developers/apps/new, lai izveidotu jaunu lietotni un atjauninātu App ID, App Secret. Callback URL ir :callback',
        ],
        'linkedin-openid' => [
            'enable' => 'Iespējot Linkedin pieteikšanos, izmantojot OpenID Connect',
            'app_id' => 'App ID',
            'app_secret' => 'App Secret',
            'helper' => 'Lūdzu, apmeklējiet https://www.linkedin.com/developers/apps/new, lai izveidotu jaunu lietotni un atjauninātu App ID, App Secret. Callback URL ir :callback',
        ],
        'x' => [
            'enable' => 'Iespējot X (Twitter) pieteikšanos',
            'app_id' => 'Client ID',
            'app_secret' => 'Client Secret',
            'helper' => 'Lūdzu, apmeklējiet https://developer.x.com/en/portal/dashboard, lai izveidotu jaunu lietotni un atjauninātu Client ID, Client Secret. Callback URL ir :callback',
        ],
        'enable' => 'Iespējot sociālo pieteikšanos?',
        'style' => 'Stils',
        'minimal' => 'Minimāls',
        'default' => 'Noklusējums',
        'basic' => 'Pamata',
    ],
    'socials' => [
        'facebook' => 'Facebook',
        'google' => 'Google',
        'github' => 'GitHub',
        'linkedin' => 'Linkedin',
        'linkedin-openid' => 'Linkedin OpenID Connect',
        'x' => 'X (Twitter)',
    ],
    'menu' => 'Sociālā pieteikšanās',
    'description' => 'Skatīt un atjaunināt sociālās pieteikšanās iestatījumus',
    'sign_in_with' => 'Pierakstīties ar :provider',
];
