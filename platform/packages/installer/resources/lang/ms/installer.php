<?php

return [

    /**
     *
     * Shared translations.
     *
     */
    'title' => 'Pemasangan',
    'next' => 'Langkah Seterusnya',
    'back' => 'Sebelumnya',
    'finish' => 'Pasang',
    'installation' => 'Pemasangan',
    'forms' => [
        'errorTitle' => 'Ralat berikut berlaku:',
    ],

    /**
     *
     * Home page translations.
     *
     */
    'welcome' => [
        'title' => 'Selamat Datang',
        'message' => 'Sebelum bermula, kami memerlukan beberapa maklumat mengenai pangkalan data. Anda perlu mengetahui item berikut sebelum meneruskan.',
        'language' => 'Bahasa',
        'next' => 'Mari mulakan',
    ],

    /**
     *
     * Requirements page translations.
     *
     */
    'requirements' => [
        'title' => 'Keperluan Pelayan',
        'next' => 'Semak Kebenaran',
    ],

    /**
     *
     * Permissions page translations.
     *
     */
    'permissions' => [
        'next' => 'Konfigurasi Persekitaran',
    ],

    /**
     *
     * Environment page translations.
     *
     */
    'environment' => [
        'wizard' => [
            'title' => 'Tetapan Persekitaran',
            'form' => [
                'name_required' => 'Nama persekitaran diperlukan.',
                'app_name_label' => 'Tajuk laman',
                'app_name_placeholder' => 'Tajuk laman',
                'app_url_label' => 'URL',
                'app_url_placeholder' => 'URL',
                'db_connection_label' => 'Sambungan Pangkalan Data',
                'db_connection_label_mysql' => 'MySQL',
                'db_connection_label_sqlite' => 'SQLite',
                'db_connection_label_pgsql' => 'PostgreSQL',
                'db_host_label' => 'Hos pangkalan data',
                'db_host_placeholder' => 'Hos pangkalan data',
                'db_port_label' => 'Port pangkalan data',
                'db_port_placeholder' => 'Port pangkalan data',
                'db_name_label' => 'Nama pangkalan data',
                'db_name_placeholder' => 'Nama pangkalan data',
                'db_username_label' => 'Nama pengguna pangkalan data',
                'db_username_placeholder' => 'Nama pengguna pangkalan data',
                'db_password_label' => 'Kata laluan pangkalan data',
                'db_password_placeholder' => 'Kata laluan pangkalan data',
                'buttons' => [
                    'install' => 'Pasang',
                ],
                'db_host_helper' => 'Jika anda menggunakan Laravel Sail, tukar sahaja DB_HOST kepada DB_HOST=mysql. Pada sesetengah hosting DB_HOST boleh menjadi localhost berbanding 127.0.0.1',
                'db_connections' => [
                    'mysql' => 'MySQL',
                    'sqlite' => 'SQLite',
                    'pgsql' => 'PostgreSQL',
                ],
            ],
        ],
        'success' => 'Tetapan fail .env anda telah disimpan.',
        'errors' => 'Tidak dapat menyimpan fail .env, Sila buat secara manual.',
    ],

    'theme' => [
        'title' => 'Pilih tema',
        'message' => 'Pilih tema untuk memperibadikan rupa laman web anda. Pemilihan ini juga akan mengimport data sampel yang disesuaikan untuk tema yang dipilih.',
    ],

    'theme_preset' => [
        'title' => 'Pilih pratetap tema',
        'message' => 'Pilih pratetap tema untuk memperibadikan rupa laman web anda. Pemilihan ini juga akan mengimport data sampel yang disesuaikan untuk tema yang dipilih.',
    ],

    /**
     * Create account page.
     */
    'createAccount' => [
        'title' => 'Buat akaun',
        'form' => [
            'first_name' => 'Nama pertama',
            'last_name' => 'Nama akhir',
            'username' => 'Nama pengguna',
            'email' => 'E-mel',
            'password' => 'Kata laluan',
            'password_confirmation' => 'Pengesahan kata laluan',
            'create' => 'Buat',
        ],
    ],

    /**
     * License page.
     */

    'license' => [
        'title' => 'Aktifkan Lesen',
        'skip' => 'Langkau buat masa ini',
    ],

    'install' => 'Pasang',

    'final' => [
        'pageTitle' => 'Pemasangan Selesai',
        'title' => 'Selesai',
        'message' => 'Aplikasi telah berjaya dipasang.',
        'exit' => 'Pergi ke papan pemuka admin',
    ],

    'install_success' => 'Berjaya dipasang!',

    'install_step_title' => 'Pemasangan - Langkah :step: :title',
];
