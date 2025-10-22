<?php

return [
    'settings' => [
        'title' => 'सोशल लॉगिन सेटिंग्स',
        'description' => 'सोशल लॉगिन विकल्प कॉन्फ़िगर करें',
        'facebook' => [
            'enable' => 'Facebook लॉगिन सक्षम करें',
            'app_id' => 'App ID',
            'app_secret' => 'App Secret',
            'helper' => 'नया ऐप बनाने और App ID, App Secret अपडेट करने के लिए कृपया https://developers.facebook.com पर जाएं। Callback URL है :callback',
            'data_deletion_request_callback_url' => 'उपयोगकर्ताओं को उनके डेटा को हटाने का अनुरोध करने की अनुमतिदेने के लिए अपनी Facebook ऐप सेटिंग्स में इस URL :url को डेटा विलोपन अनुरोध URL के रूप में सेट करें।',
        ],
        'google' => [
            'enable' => 'Google लॉगिन सक्षम करें',
            'app_id' => 'App ID',
            'app_secret' => 'App Secret',
            'helper' => 'नया ऐप बनाने और App ID, App Secret अपडेट करने के लिए कृपया https://console.developers.google.com/apis/dashboard पर जाएं। Callback URL है :callback',
            'use_google_button' => 'Google बटन का उपयोग करें',
            'use_google_button_helper' => 'यदि आप इस विकल्प को सक्षम करते हैं, तो डिफ़ॉल्ट बटन के बजाय Google बटन का उपयोग किया जाएगा।',
        ],
        'github' => [
            'enable' => 'GitHub लॉगिन सक्षम करें',
            'app_id' => 'App ID',
            'app_secret' => 'App Secret',
            'helper' => 'नया ऐप बनाने और App ID, App Secret अपडेट करने के लिए कृपया https://github.com/settings/developers पर जाएं। Callback URL है :callback',
        ],
        'linkedin' => [
            'enable' => 'Linkedin लॉगिन सक्षम करें',
            'app_id' => 'App ID',
            'app_secret' => 'App Secret',
            'helper' => 'नया ऐप बनाने और App ID, App Secret अपडेट करने के लिए कृपया https://www.linkedin.com/developers/apps/new पर जाएं। Callback URL है :callback',
        ],
        'linkedin-openid' => [
            'enable' => 'OpenID Connect का उपयोग करके Linkedin लॉगिन सक्षम करें',
            'app_id' => 'App ID',
            'app_secret' => 'App Secret',
            'helper' => 'नया ऐप बनाने और App ID, App Secret अपडेट करने के लिए कृपया https://www.linkedin.com/developers/apps/new पर जाएं। Callback URL है :callback',
        ],
        'x' => [
            'enable' => 'X (Twitter) लॉगिन सक्षम करें',
            'app_id' => 'Client ID',
            'app_secret' => 'Client Secret',
            'helper' => 'नया ऐप बनाने और Client ID, Client Secret अपडेट करने के लिए कृपया https://developer.x.com/en/portal/dashboard पर जाएं। Callback URL है :callback',
        ],
        'enable' => 'सोशल लॉगिन सक्षम करें?',
        'style' => 'शैली',
        'minimal' => 'न्यूनतम',
        'default' => 'डिफ़ॉल्ट',
        'basic' => 'बेसिक',
    ],
    'socials' => [
        'facebook' => 'Facebook',
        'google' => 'Google',
        'github' => 'GitHub',
        'linkedin' => 'Linkedin',
        'linkedin-openid' => 'Linkedin OpenID Connect',
        'x' => 'X (Twitter)',
    ],
    'menu' => 'सोशल लॉगिन',
    'description' => 'अपनी सोशल लॉगिन सेटिंग्स देखें और अपडेट करें',
    'sign_in_with' => ':provider के साथ साइन इन करें',
];
