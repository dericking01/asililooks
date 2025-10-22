<?php

return [
    'settings' => [
        'title' => 'সোশ্যাল লগইন সেটিংস',
        'description' => 'সোশ্যাল লগইন বিকল্পগুলি কনফিগার করুন',
        'facebook' => [
            'enable' => 'Facebook লগইন সক্ষম করুন',
            'app_id' => 'App ID',
            'app_secret' => 'App Secret',
            'helper' => 'নতুন অ্যাপ তৈরি করতে এবং App ID, App Secret আপডেট করতে দয়া করে https://developers.facebook.com এ যান। Callback URL হল :callback',
            'data_deletion_request_callback_url' => 'ব্যবহারকারীদের তাদের ডেটা মুছে ফেলার অনুরোধ করার অনুমতি দিতে আপনার Facebook অ্যাপ সেটিংসে এই URL :url কে ডেটা মুছে ফেলার অনুরোধ URL হিসাবে সেট করুন।',
        ],
        'google' => [
            'enable' => 'Google লগইন সক্ষম করুন',
            'app_id' => 'App ID',
            'app_secret' => 'App Secret',
            'helper' => 'নতুন অ্যাপ তৈরি করতে এবং App ID, App Secret আপডেট করতে দয়া করে https://console.developers.google.com/apis/dashboard এ যান। Callback URL হল :callback',
            'use_google_button' => 'Google বাটন ব্যবহার করুন',
            'use_google_button_helper' => 'আপনি যদি এই বিকল্পটি সক্ষম করেন, তবে ডিফল্ট বাটনের পরিবর্তে Google বাটন ব্যবহার করা হবে।',
        ],
        'github' => [
            'enable' => 'GitHub লগইন সক্ষম করুন',
            'app_id' => 'App ID',
            'app_secret' => 'App Secret',
            'helper' => 'নতুন অ্যাপ তৈরি করতে এবং App ID, App Secret আপডেট করতে দয়া করে https://github.com/settings/developers এ যান। Callback URL হল :callback',
        ],
        'linkedin' => [
            'enable' => 'Linkedin লগইন সক্ষম করুন',
            'app_id' => 'App ID',
            'app_secret' => 'App Secret',
            'helper' => 'নতুন অ্যাপ তৈরি করতে এবং App ID, App Secret আপডেট করতে দয়া করে https://www.linkedin.com/developers/apps/new এ যান। Callback URL হল :callback',
        ],
        'linkedin-openid' => [
            'enable' => 'OpenID Connect ব্যবহার করে Linkedin লগইন সক্ষম করুন',
            'app_id' => 'App ID',
            'app_secret' => 'App Secret',
            'helper' => 'নতুন অ্যাপ তৈরি করতে এবং App ID, App Secret আপডেট করতে দয়া করে https://www.linkedin.com/developers/apps/new এ যান। Callback URL হল :callback',
        ],
        'x' => [
            'enable' => 'X (Twitter) লগইন সক্ষম করুন',
            'app_id' => 'Client ID',
            'app_secret' => 'Client Secret',
            'helper' => 'নতুন অ্যাপ তৈরি করতে এবং Client ID, Client Secret আপডেট করতে দয়া করে https://developer.x.com/en/portal/dashboard এ যান। Callback URL হল :callback',
        ],
        'enable' => 'সোশ্যাল লগইন সক্ষম করবেন?',
        'style' => 'স্টাইল',
        'minimal' => 'ন্যূনতম',
        'default' => 'ডিফল্ট',
        'basic' => 'বেসিক',
    ],
    'socials' => [
        'facebook' => 'Facebook',
        'google' => 'Google',
        'github' => 'GitHub',
        'linkedin' => 'Linkedin',
        'linkedin-openid' => 'Linkedin OpenID Connect',
        'x' => 'X (Twitter)',
    ],
    'menu' => 'সোশ্যাল লগইন',
    'description' => 'আপনার সোশ্যাল লগইন সেটিংস দেখুন এবং আপডেট করুন',
    'sign_in_with' => ':provider দিয়ে সাইন ইন করুন',
];
