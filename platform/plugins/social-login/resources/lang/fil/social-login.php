<?php

return [
    'settings' => [
        'title' => 'Mga setting ng Social Login',
        'description' => 'I-configure ang mga opsyon ng social login',
        'facebook' => [
            'enable' => 'Paganahin ang Facebook login',
            'app_id' => 'App ID',
            'app_secret' => 'App Secret',
            'helper' => 'Mangyaring pumunta sa https://developers.facebook.com upang lumikha ng bagong app at i-update ang App ID, App Secret. Ang Callback URL ay :callback',
            'data_deletion_request_callback_url' => 'Itakda ang URL na ito :url bilang Data Deletion Request URL sa iyong mga setting ng Facebook app upang payagan ang mga user na humiling ng pagtanggal ng kanilang data.',
        ],
        'google' => [
            'enable' => 'Paganahin ang Google login',
            'app_id' => 'App ID',
            'app_secret' => 'App Secret',
            'helper' => 'Mangyaring pumunta sa https://console.developers.google.com/apis/dashboard upang lumikha ng bagong app at i-update ang App ID, App Secret. Ang Callback URL ay :callback',
            'use_google_button' => 'Gumamit ng Google button',
            'use_google_button_helper' => 'Kung pagaganahin mo ang opsyong ito, ang Google button ay gagamitin sa halip ng default na button.',
        ],
        'github' => [
            'enable' => 'Paganahin ang GitHub login',
            'app_id' => 'App ID',
            'app_secret' => 'App Secret',
            'helper' => 'Mangyaring pumunta sa https://github.com/settings/developers upang lumikha ng bagong app at i-update ang App ID, App Secret. Ang Callback URL ay :callback',
        ],
        'linkedin' => [
            'enable' => 'Paganahin ang Linkedin login',
            'app_id' => 'App ID',
            'app_secret' => 'App Secret',
            'helper' => 'Mangyaring pumunta sa https://www.linkedin.com/developers/apps/new upang lumikha ng bagong app at i-update ang App ID, App Secret. Ang Callback URL ay :callback',
        ],
        'linkedin-openid' => [
            'enable' => 'Paganahin ang Linkedin gamit ang OpenID Connect login',
            'app_id' => 'App ID',
            'app_secret' => 'App Secret',
            'helper' => 'Mangyaring pumunta sa https://www.linkedin.com/developers/apps/new upang lumikha ng bagong app at i-update ang App ID, App Secret. Ang Callback URL ay :callback',
        ],
        'x' => [
            'enable' => 'Paganahin ang X (Twitter) login',
            'app_id' => 'Client ID',
            'app_secret' => 'Client Secret',
            'helper' => 'Mangyaring pumunta sa https://developer.x.com/en/portal/dashboard upang lumikha ng bagong app at i-update ang Client ID, Client Secret. Ang Callback URL ay :callback',
        ],
        'enable' => 'Paganahin ang Social login?',
        'style' => 'Istilo',
        'minimal' => 'Minimal',
        'default' => 'Default',
        'basic' => 'Basic',
    ],
    'socials' => [
        'facebook' => 'Facebook',
        'google' => 'Google',
        'github' => 'GitHub',
        'linkedin' => 'Linkedin',
        'linkedin-openid' => 'Linkedin OpenID Connect',
        'x' => 'X (Twitter)',
    ],
    'menu' => 'Social Login',
    'description' => 'Tingnan at i-update ang iyong mga setting ng social login',
    'sign_in_with' => 'Mag-sign in gamit ang :provider',
];
