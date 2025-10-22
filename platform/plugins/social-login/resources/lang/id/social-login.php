<?php

return [
    'settings' => [
        'title' => 'Pengaturan Login Sosial',
        'description' => 'Konfigurasi opsi login sosial',
        'facebook' => [
            'enable' => 'Aktifkan login Facebook',
            'app_id' => 'App ID',
            'app_secret' => 'App Secret',
            'helper' => 'Silakan kunjungi https://developers.facebook.com untuk membuat aplikasi baru dan memperbarui App ID, App Secret. URL Callback adalah :callback',
            'data_deletion_request_callback_url' => 'Atur URL ini :url sebagai URL Permintaan Penghapusan Data di pengaturan aplikasi Facebook Anda untuk memungkinkan pengguna meminta penghapusan data mereka.',
        ],
        'google' => [
            'enable' => 'Aktifkan login Google',
            'app_id' => 'App ID',
            'app_secret' => 'App Secret',
            'helper' => 'Silakan kunjungi https://console.developers.google.com/apis/dashboard untuk membuat aplikasi baru dan memperbarui App ID, App Secret. URL Callback adalah :callback',
            'use_google_button' => 'Gunakan tombol Google',
            'use_google_button_helper' => 'Jika Anda mengaktifkan opsi ini, tombol Google akan digunakan sebagai ganti tombol default.',
        ],
        'github' => [
            'enable' => 'Aktifkan login GitHub',
            'app_id' => 'App ID',
            'app_secret' => 'App Secret',
            'helper' => 'Silakan kunjungi https://github.com/settings/developers untuk membuat aplikasi baru dan memperbarui App ID, App Secret. URL Callback adalah :callback',
        ],
        'linkedin' => [
            'enable' => 'Aktifkan login Linkedin',
            'app_id' => 'App ID',
            'app_secret' => 'App Secret',
            'helper' => 'Silakan kunjungi https://www.linkedin.com/developers/apps/new untuk membuat aplikasi baru dan memperbarui App ID, App Secret. URL Callback adalah :callback',
        ],
        'linkedin-openid' => [
            'enable' => 'Aktifkan login Linkedin menggunakan OpenID Connect',
            'app_id' => 'App ID',
            'app_secret' => 'App Secret',
            'helper' => 'Silakan kunjungi https://www.linkedin.com/developers/apps/new untuk membuat aplikasi baru dan memperbarui App ID, App Secret. URL Callback adalah :callback',
        ],
        'x' => [
            'enable' => 'Aktifkan login X (Twitter)',
            'app_id' => 'Client ID',
            'app_secret' => 'Client Secret',
            'helper' => 'Silakan kunjungi https://developer.x.com/en/portal/dashboard untuk membuat aplikasi baru dan memperbarui Client ID, Client Secret. URL Callback adalah :callback',
        ],
        'enable' => 'Aktifkan login sosial?',
        'style' => 'Gaya',
        'minimal' => 'Minimal',
        'default' => 'Default',
        'basic' => 'Dasar',
    ],
    'socials' => [
        'facebook' => 'Facebook',
        'google' => 'Google',
        'github' => 'GitHub',
        'linkedin' => 'Linkedin',
        'linkedin-openid' => 'Linkedin OpenID Connect',
        'x' => 'X (Twitter)',
    ],
    'menu' => 'Login Sosial',
    'description' => 'Lihat dan perbarui pengaturan login sosial Anda',
    'sign_in_with' => 'Masuk dengan :provider',
];
