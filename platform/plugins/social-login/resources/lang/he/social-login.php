<?php

return [
    'settings' => [
        'title' => 'הגדרות התחברות חברתית',
        'description' => 'הגדר אפשרויות התחברות חברתית',
        'facebook' => [
            'enable' => 'הפעל התחברות דרך Facebook',
            'app_id' => 'App ID',
            'app_secret' => 'App Secret',
            'helper' => 'אנא עבור אל https://developers.facebook.com כדי להקים אפליקציה חדשה ולעדכן את App ID, App Secret. כתובת ה-Callback היא :callback',
            'data_deletion_request_callback_url' => 'הגדר את כתובת URL זו :url ככתובת URL לבקשת מחיקת נתונים בהגדרות אפליקציית Facebook שלך כדי לאפשר למשתמשים לבקש מחיקת הנתונים שלהם.',
        ],
        'google' => [
            'enable' => 'הפעל התחברות דרך Google',
            'app_id' => 'App ID',
            'app_secret' => 'App Secret',
            'helper' => 'אנא עבור אל https://console.developers.google.com/apis/dashboard כדי להקים אפליקציה חדשה ולעדכן את App ID, App Secret. כתובת ה-Callback היא :callback',
            'use_google_button' => 'השתמש בכפתור Google',
            'use_google_button_helper' => 'אם תפעיל אפשרות זו, ייעשה שימוש בכפתור Google במקום הכפתור ברירת המחדל.',
        ],
        'github' => [
            'enable' => 'הפעל התחברות דרך GitHub',
            'app_id' => 'App ID',
            'app_secret' => 'App Secret',
            'helper' => 'אנא עבור אל https://github.com/settings/developers כדי להקים אפליקציה חדשה ולעדכן את App ID, App Secret. כתובת ה-Callback היא :callback',
        ],
        'linkedin' => [
            'enable' => 'הפעל התחברות דרך Linkedin',
            'app_id' => 'App ID',
            'app_secret' => 'App Secret',
            'helper' => 'אנא עבור אל https://www.linkedin.com/developers/apps/new כדי להקים אפליקציה חדשה ולעדכן את App ID, App Secret. כתובת ה-Callback היא :callback',
        ],
        'linkedin-openid' => [
            'enable' => 'הפעל התחברות Linkedin באמצעות OpenID Connect',
            'app_id' => 'App ID',
            'app_secret' => 'App Secret',
            'helper' => 'אנא עבור אל https://www.linkedin.com/developers/apps/new כדי להקים אפליקציה חדשה ולעדכן את App ID, App Secret. כתובת ה-Callback היא :callback',
        ],
        'x' => [
            'enable' => 'הפעל התחברות דרך X (Twitter)',
            'app_id' => 'Client ID',
            'app_secret' => 'Client Secret',
            'helper' => 'אנא עבור אל https://developer.x.com/en/portal/dashboard כדי להקים אפליקציה חדשה ולעדכן את Client ID, Client Secret. כתובת ה-Callback היא :callback',
        ],
        'enable' => 'הפעל התחברות חברתית?',
        'style' => 'סגנון',
        'minimal' => 'מינימלי',
        'default' => 'ברירת מחדל',
        'basic' => 'בסיסי',
    ],
    'socials' => [
        'facebook' => 'Facebook',
        'google' => 'Google',
        'github' => 'GitHub',
        'linkedin' => 'Linkedin',
        'linkedin-openid' => 'Linkedin OpenID Connect',
        'x' => 'X (Twitter)',
    ],
    'menu' => 'התחברות חברתית',
    'description' => 'הצג ועדכן את הגדרות ההתחברות החברתית שלך',
    'sign_in_with' => 'היכנס באמצעות :provider',
];
