<?php

return [

    /**
     *
     * Shared translations.
     *
     */
    'title' => 'स्थापना',
    'next' => 'अगला कदम',
    'back' => 'पिछला',
    'finish' => 'इंस्टॉल करें',
    'installation' => 'स्थापना',
    'forms' => [
        'errorTitle' => 'निम्नलिखित त्रुटियां हुईं:',
    ],

    /**
     *
     * Home page translations.
     *
     */
    'welcome' => [
        'title' => 'स्वागत है',
        'message' => 'शुरू करने से पहले, हमें डेटाबेस के बारे में कुछ जानकारी चाहिए। आगे बढ़ने से पहले आपको निम्नलिखित आइटम्स को जानना होगा।',
        'language' => 'भाषा',
        'next' => 'चलिए शुरू करते हैं',
    ],

    /**
     *
     * Requirements page translations.
     *
     */
    'requirements' => [
        'title' => 'सर्वर की आवश्यकताएं',
        'next' => 'अनुमतियां जांचें',
    ],

    /**
     *
     * Permissions page translations.
     *
     */
    'permissions' => [
        'next' => 'वातावरण कॉन्फ़िगर करें',
    ],

    /**
     *
     * Environment page translations.
     *
     */
    'environment' => [
        'wizard' => [
            'title' => 'वातावरण सेटिंग्स',
            'form' => [
                'name_required' => 'वातावरण का नाम आवश्यक है।',
                'app_name_label' => 'साइट का शीर्षक',
                'app_name_placeholder' => 'साइट का शीर्षक',
                'app_url_label' => 'URL',
                'app_url_placeholder' => 'URL',
                'db_connection_label' => 'डेटाबेस कनेक्शन',
                'db_connection_label_mysql' => 'MySQL',
                'db_connection_label_sqlite' => 'SQLite',
                'db_connection_label_pgsql' => 'PostgreSQL',
                'db_host_label' => 'डेटाबेस होस्ट',
                'db_host_placeholder' => 'डेटाबेस होस्ट',
                'db_port_label' => 'डेटाबेस पोर्ट',
                'db_port_placeholder' => 'डेटाबेस पोर्ट',
                'db_name_label' => 'डेटाबेस का नाम',
                'db_name_placeholder' => 'डेटाबेस का नाम',
                'db_username_label' => 'डेटाबेस उपयोगकर्ता नाम',
                'db_username_placeholder' => 'डेटाबेस उपयोगकर्ता नाम',
                'db_password_label' => 'डेटाबेस पासवर्ड',
                'db_password_placeholder' => 'डेटाबेस पासवर्ड',
                'buttons' => [
                    'install' => 'इंस्टॉल करें',
                ],
                'db_host_helper' => 'यदि आप Laravel Sail का उपयोग कर रहे हैं, तो बस DB_HOST को DB_HOST=mysql में बदलें। कुछ होस्टिंग पर DB_HOST 127.0.0.1 के बजाय localhost हो सकता है',
                'db_connections' => [
                    'mysql' => 'MySQL',
                    'sqlite' => 'SQLite',
                    'pgsql' => 'PostgreSQL',
                ],
            ],
        ],
        'success' => 'आपकी .env फ़ाइल सेटिंग्स सहेजी गई हैं।',
        'errors' => '.env फ़ाइल सहेजने में असमर्थ, कृपया इसे मैन्युअल रूप से बनाएं।',
    ],

    'theme' => [
        'title' => 'थीम चुनें',
        'message' => 'अपनी वेबसाइट के रूप को वैयक्तिकृत करने के लिए एक थीम चुनें। यह चयन चुनी गई थीम के अनुरूप नमूना डेटा भी आयात करेगा।',
    ],

    'theme_preset' => [
        'title' => 'थीम प्रीसेट चुनें',
        'message' => 'अपनी वेबसाइट के रूप को वैयक्तिकृत करने के लिए एक थीम प्रीसेट चुनें। यह चयन चुनी गई थीम के अनुरूप नमूना डेटा भी आयात करेगा।',
    ],

    /**
     * Create account page.
     */
    'createAccount' => [
        'title' => 'खाता बनाएं',
        'form' => [
            'first_name' => 'पहला नाम',
            'last_name' => 'अंतिम नाम',
            'username' => 'उपयोगकर्ता नाम',
            'email' => 'ईमेल',
            'password' => 'पासवर्ड',
            'password_confirmation' => 'पासवर्ड की पुष्टि',
            'create' => 'बनाएं',
        ],
    ],

    /**
     * License page.
     */

    'license' => [
        'title' => 'लाइसेंस सक्रिय करें',
        'skip' => 'अभी के लिए छोड़ें',
    ],

    'install' => 'इंस्टॉल करें',

    'final' => [
        'pageTitle' => 'स्थापना समाप्त',
        'title' => 'हो गया',
        'message' => 'एप्लिकेशन सफलतापूर्वक इंस्टॉल हो गया है।',
        'exit' => 'एडमिन डैशबोर्ड पर जाएं',
    ],

    'install_success' => 'सफलतापूर्वक इंस्टॉल हो गया!',

    'install_step_title' => 'स्थापना - चरण :step: :title',
];
