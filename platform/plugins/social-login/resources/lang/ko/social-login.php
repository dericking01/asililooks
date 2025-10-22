<?php

return [
    'settings' => [
        'title' => '소셜 로그인 설정',
        'description' => '소셜 로그인 옵션 구성',
        'facebook' => [
            'enable' => 'Facebook 로그인 활성화',
            'app_id' => 'App ID',
            'app_secret' => 'App Secret',
            'helper' => '새 앱을 생성하고 App ID, App Secret을 업데이트하려면 https://developers.facebook.com으로 이동하세요. Callback URL은 :callback입니다',
            'data_deletion_request_callback_url' => '사용자가 데이터 삭제를 요청할 수 있도록 Facebook 앱 설정에서 이 URL :url을 데이터 삭제 요청 URL로 설정하세요.',
        ],
        'google' => [
            'enable' => 'Google 로그인 활성화',
            'app_id' => 'App ID',
            'app_secret' => 'App Secret',
            'helper' => '새 앱을 생성하고 App ID, App Secret을 업데이트하려면 https://console.developers.google.com/apis/dashboard로 이동하세요. Callback URL은 :callback입니다',
            'use_google_button' => 'Google 버튼 사용',
            'use_google_button_helper' => '이 옵션을 활성화하면 기본 버튼 대신 Google 버튼이 사용됩니다.',
        ],
        'github' => [
            'enable' => 'GitHub 로그인 활성화',
            'app_id' => 'App ID',
            'app_secret' => 'App Secret',
            'helper' => '새 앱을 생성하고 App ID, App Secret을 업데이트하려면 https://github.com/settings/developers로 이동하세요. Callback URL은 :callback입니다',
        ],
        'linkedin' => [
            'enable' => 'Linkedin 로그인 활성화',
            'app_id' => 'App ID',
            'app_secret' => 'App Secret',
            'helper' => '새 앱을 생성하고 App ID, App Secret을 업데이트하려면 https://www.linkedin.com/developers/apps/new로 이동하세요. Callback URL은 :callback입니다',
        ],
        'linkedin-openid' => [
            'enable' => 'OpenID Connect를 사용한 Linkedin 로그인 활성화',
            'app_id' => 'App ID',
            'app_secret' => 'App Secret',
            'helper' => '새 앱을 생성하고 App ID, App Secret을 업데이트하려면 https://www.linkedin.com/developers/apps/new로 이동하세요. Callback URL은 :callback입니다',
        ],
        'x' => [
            'enable' => 'X (Twitter) 로그인 활성화',
            'app_id' => 'Client ID',
            'app_secret' => 'Client Secret',
            'helper' => '새 앱을 생성하고 Client ID, Client Secret을 업데이트하려면 https://developer.x.com/en/portal/dashboard로 이동하세요. Callback URL은 :callback입니다',
        ],
        'enable' => '소셜 로그인을 활성화하시겠습니까?',
        'style' => '스타일',
        'minimal' => '최소',
        'default' => '기본',
        'basic' => '베이직',
    ],
    'socials' => [
        'facebook' => 'Facebook',
        'google' => 'Google',
        'github' => 'GitHub',
        'linkedin' => 'Linkedin',
        'linkedin-openid' => 'Linkedin OpenID Connect',
        'x' => 'X (Twitter)',
    ],
    'menu' => '소셜 로그인',
    'description' => '소셜 로그인 설정 보기 및 업데이트',
    'sign_in_with' => ':provider로 로그인',
];
