<?php

return [
    'settings' => [
        'title' => 'სოციალური შესვლის პარამეტრები',
        'description' => 'სოციალური შესვლის ვარიანტების კონფიგურაცია',
        'facebook' => [
            'enable' => 'Facebook შესვლის ჩართვა',
            'app_id' => 'App ID',
            'app_secret' => 'App Secret',
            'helper' => 'გთხოვთ, გახსნათ https://developers.facebook.com ახალი აპლიკაციის შესაქმნელად და App ID, App Secret განახლებისთვის. Callback URL არის :callback',
            'data_deletion_request_callback_url' => 'დააყენეთ ეს URL :url როგორც მონაცემთა წაშლის მოთხოვნის URL თქვენი Facebook აპლიკაციის პარამეტრებში, რომ მომხმარებლებს მისცეთ საშუალება მოითხოვონ მათი მონაცემების წაშლა.',
        ],
        'google' => [
            'enable' => 'Google შესვლის ჩართვა',
            'app_id' => 'App ID',
            'app_secret' => 'App Secret',
            'helper' => 'გთხოვთ, გახსნათ https://console.developers.google.com/apis/dashboard ახალი აპლიკაციის შესაქმნელად და App ID, App Secret განახლებისთვის. Callback URL არის :callback',
            'use_google_button' => 'Google ღილაკის გამოყენება',
            'use_google_button_helper' => 'თუ ჩართავთ ამ ვარიანტს, გამოყენებული იქნება Google ღილაკი ნაგულისხმევის ნაცვლად.',
        ],
        'github' => [
            'enable' => 'GitHub შესვლის ჩართვა',
            'app_id' => 'App ID',
            'app_secret' => 'App Secret',
            'helper' => 'გთხოვთ, გახსნათ https://github.com/settings/developers ახალი აპლიკაციის შესაქმნელად და App ID, App Secret განახლებისთვის. Callback URL არის :callback',
        ],
        'linkedin' => [
            'enable' => 'Linkedin შესვლის ჩართვა',
            'app_id' => 'App ID',
            'app_secret' => 'App Secret',
            'helper' => 'გთხოვთ, გახსნათ https://www.linkedin.com/developers/apps/new ახალი აპლიკაციის შესაქმნელად და App ID, App Secret განახლებისთვის. Callback URL არის :callback',
        ],
        'linkedin-openid' => [
            'enable' => 'Linkedin შესვლის ჩართვა OpenID Connect-ის გამოყენებით',
            'app_id' => 'App ID',
            'app_secret' => 'App Secret',
            'helper' => 'გთხოვთ, გახსნათ https://www.linkedin.com/developers/apps/new ახალი აპლიკაციის შესაქმნელად და App ID, App Secret განახლებისთვის. Callback URL არის :callback',
        ],
        'x' => [
            'enable' => 'X (Twitter) შესვლის ჩართვა',
            'app_id' => 'Client ID',
            'app_secret' => 'Client Secret',
            'helper' => 'გთხოვთ, გახსნათ https://developer.x.com/en/portal/dashboard ახალი აპლიკაციის შესაქმნელად და Client ID, Client Secret განახლებისთვის. Callback URL არის :callback',
        ],
        'enable' => 'სოციალური შესვლის ჩართვა?',
        'style' => 'სტილი',
        'minimal' => 'მინიმალური',
        'default' => 'ნაგულისხმევი',
        'basic' => 'ძირითადი',
    ],
    'socials' => [
        'facebook' => 'Facebook',
        'google' => 'Google',
        'github' => 'GitHub',
        'linkedin' => 'Linkedin',
        'linkedin-openid' => 'Linkedin OpenID Connect',
        'x' => 'X (Twitter)',
    ],
    'menu' => 'სოციალური შესვლა',
    'description' => 'იხილეთ და განაახლეთ თქვენი სოციალური შესვლის პარამეტრები',
    'sign_in_with' => 'შედით :provider-ით',
];
