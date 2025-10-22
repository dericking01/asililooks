<?php

return [
    'settings' => [
        'title' => 'Tetapan Log Masuk Sosial',
        'description' => 'Konfigurasikan pilihan log masuk sosial',
        'facebook' => [
            'enable' => 'Dayakan log masuk Facebook',
            'app_id' => 'App ID',
            'app_secret' => 'App Secret',
            'helper' => 'Sila lawati https://developers.facebook.com untuk mencipta aplikasi baharu dan mengemaskini App ID, App Secret. URL Callback ialah :callback',
            'data_deletion_request_callback_url' => 'Tetapkan URL ini :url sebagai URL Permintaan Pemadaman Data dalam tetapan aplikasi Facebook anda untuk membenarkan pengguna meminta pemadaman data mereka.',
        ],
        'google' => [
            'enable' => 'Dayakan log masuk Google',
            'app_id' => 'App ID',
            'app_secret' => 'App Secret',
            'helper' => 'Sila lawati https://console.developers.google.com/apis/dashboard untuk mencipta aplikasi baharu dan mengemaskini App ID, App Secret. URL Callback ialah :callback',
            'use_google_button' => 'Gunakan butang Google',
            'use_google_button_helper' => 'Jika anda mendayakan pilihan ini, butang Google akan digunakan dan bukannya butang lalai.',
        ],
        'github' => [
            'enable' => 'Dayakan log masuk GitHub',
            'app_id' => 'App ID',
            'app_secret' => 'App Secret',
            'helper' => 'Sila lawati https://github.com/settings/developers untuk mencipta aplikasi baharu dan mengemaskini App ID, App Secret. URL Callback ialah :callback',
        ],
        'linkedin' => [
            'enable' => 'Dayakan log masuk Linkedin',
            'app_id' => 'App ID',
            'app_secret' => 'App Secret',
            'helper' => 'Sila lawati https://www.linkedin.com/developers/apps/new untuk mencipta aplikasi baharu dan mengemaskini App ID, App Secret. URL Callback ialah :callback',
        ],
        'linkedin-openid' => [
            'enable' => 'Dayakan log masuk Linkedin menggunakan OpenID Connect',
            'app_id' => 'App ID',
            'app_secret' => 'App Secret',
            'helper' => 'Sila lawati https://www.linkedin.com/developers/apps/new untuk mencipta aplikasi baharu dan mengemaskini App ID, App Secret. URL Callback ialah :callback',
        ],
        'x' => [
            'enable' => 'Dayakan log masuk X (Twitter)',
            'app_id' => 'Client ID',
            'app_secret' => 'Client Secret',
            'helper' => 'Sila lawati https://developer.x.com/en/portal/dashboard untuk mencipta aplikasi baharu dan mengemaskini Client ID, Client Secret. URL Callback ialah :callback',
        ],
        'enable' => 'Dayakan log masuk sosial?',
        'style' => 'Gaya',
        'minimal' => 'Minimal',
        'default' => 'Lalai',
        'basic' => 'Asas',
    ],
    'socials' => [
        'facebook' => 'Facebook',
        'google' => 'Google',
        'github' => 'GitHub',
        'linkedin' => 'Linkedin',
        'linkedin-openid' => 'Linkedin OpenID Connect',
        'x' => 'X (Twitter)',
    ],
    'menu' => 'Log Masuk Sosial',
    'description' => 'Lihat dan kemas kini tetapan log masuk sosial anda',
    'sign_in_with' => 'Log masuk dengan :provider',
];
