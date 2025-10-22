<?php

return [

    /**
     *
     * Shared translations.
     *
     */
    'title' => 'Pag-install',
    'next' => 'Susunod na Hakbang',
    'back' => 'Nakaraan',
    'finish' => 'I-install',
    'installation' => 'Pag-install',
    'forms' => [
        'errorTitle' => 'Nangyari ang mga sumusunod na error:',
    ],

    /**
     *
     * Home page translations.
     *
     */
    'welcome' => [
        'title' => 'Maligayang pagdating',
        'message' => 'Bago magsimula, kailangan namin ng ilang impormasyon tungkol sa database. Kailangan mong malaman ang mga sumusunod na item bago magpatuloy.',
        'language' => 'Wika',
        'next' => 'Tara na',
    ],

    /**
     *
     * Requirements page translations.
     *
     */
    'requirements' => [
        'title' => 'Mga Kinakailangan ng Server',
        'next' => 'Suriin ang mga Pahintulot',
    ],

    /**
     *
     * Permissions page translations.
     *
     */
    'permissions' => [
        'next' => 'I-configure ang Kapaligiran',
    ],

    /**
     *
     * Environment page translations.
     *
     */
    'environment' => [
        'wizard' => [
            'title' => 'Mga Setting ng Kapaligiran',
            'form' => [
                'name_required' => 'Kailangan ang pangalan ng kapaligiran.',
                'app_name_label' => 'Pamagat ng site',
                'app_name_placeholder' => 'Pamagat ng site',
                'app_url_label' => 'URL',
                'app_url_placeholder' => 'URL',
                'db_connection_label' => 'Koneksyon sa Database',
                'db_connection_label_mysql' => 'MySQL',
                'db_connection_label_sqlite' => 'SQLite',
                'db_connection_label_pgsql' => 'PostgreSQL',
                'db_host_label' => 'Database host',
                'db_host_placeholder' => 'Database host',
                'db_port_label' => 'Database port',
                'db_port_placeholder' => 'Database port',
                'db_name_label' => 'Pangalan ng database',
                'db_name_placeholder' => 'Pangalan ng database',
                'db_username_label' => 'Username ng database',
                'db_username_placeholder' => 'Username ng database',
                'db_password_label' => 'Password ng database',
                'db_password_placeholder' => 'Password ng database',
                'buttons' => [
                    'install' => 'I-install',
                ],
                'db_host_helper' => 'Kung gumagamit ka ng Laravel Sail, baguhin lang ang DB_HOST sa DB_HOST=mysql. Sa ilang hosting, maaaring localhost ang DB_HOST sa halip na 127.0.0.1',
                'db_connections' => [
                    'mysql' => 'MySQL',
                    'sqlite' => 'SQLite',
                    'pgsql' => 'PostgreSQL',
                ],
            ],
        ],
        'success' => 'Na-save ang iyong mga setting ng .env file.',
        'errors' => 'Hindi ma-save ang .env file, Pakigawa ito nang manu-mano.',
    ],

    'theme' => [
        'title' => 'Pumili ng tema',
        'message' => 'Pumili ng tema upang i-personalize ang hitsura ng iyong website. Ang pagpiling ito ay mag-import din ng sample data na inangkop sa napiling tema.',
    ],

    'theme_preset' => [
        'title' => 'Pumili ng preset ng tema',
        'message' => 'Pumili ng preset ng tema upang i-personalize ang hitsura ng iyong website. Ang pagpiling ito ay mag-import din ng sample data na inangkop sa napiling tema.',
    ],

    /**
     * Create account page.
     */
    'createAccount' => [
        'title' => 'Lumikha ng account',
        'form' => [
            'first_name' => 'Unang pangalan',
            'last_name' => 'Apelyido',
            'username' => 'Username',
            'email' => 'Email',
            'password' => 'Password',
            'password_confirmation' => 'Kumpirmasyon ng password',
            'create' => 'Lumikha',
        ],
    ],

    /**
     * License page.
     */

    'license' => [
        'title' => 'I-activate ang Lisensya',
        'skip' => 'Laktawan muna',
    ],

    'install' => 'I-install',

    'final' => [
        'pageTitle' => 'Tapos na ang Pag-install',
        'title' => 'Tapos na',
        'message' => 'Matagumpay na na-install ang application.',
        'exit' => 'Pumunta sa admin dashboard',
    ],

    'install_success' => 'Matagumpay na na-install!',

    'install_step_title' => 'Pag-install - Hakbang :step: :title',
];
