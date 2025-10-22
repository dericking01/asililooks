<?php

return [

    /**
     *
     * Shared translations.
     *
     */
    'title' => 'Telepítés',
    'next' => 'Következő lépés',
    'back' => 'Előző',
    'finish' => 'Telepítés',
    'installation' => 'Telepítés',
    'forms' => [
        'errorTitle' => 'A következő hibák történtek:',
    ],

    /**
     *
     * Home page translations.
     *
     */
    'welcome' => [
        'title' => 'Üdvözöljük',
        'message' => 'Mielőtt elkezdenénk, szükségünk van néhány információra az adatbázisról. A következő elemeket kell tudnia a folytatás előtt.',
        'language' => 'Nyelv',
        'next' => 'Kezdjük el',
    ],

    /**
     *
     * Requirements page translations.
     *
     */
    'requirements' => [
        'title' => 'Szerver követelmények',
        'next' => 'Engedélyek ellenőrzése',
    ],

    /**
     *
     * Permissions page translations.
     *
     */
    'permissions' => [
        'next' => 'Környezet konfigurálása',
    ],

    /**
     *
     * Environment page translations.
     *
     */
    'environment' => [
        'wizard' => [
            'title' => 'Környezeti beállítások',
            'form' => [
                'name_required' => 'A környezet neve kötelező.',
                'app_name_label' => 'Oldal címe',
                'app_name_placeholder' => 'Oldal címe',
                'app_url_label' => 'URL',
                'app_url_placeholder' => 'URL',
                'db_connection_label' => 'Adatbázis kapcsolat',
                'db_connection_label_mysql' => 'MySQL',
                'db_connection_label_sqlite' => 'SQLite',
                'db_connection_label_pgsql' => 'PostgreSQL',
                'db_host_label' => 'Adatbázis host',
                'db_host_placeholder' => 'Adatbázis host',
                'db_port_label' => 'Adatbázis port',
                'db_port_placeholder' => 'Adatbázis port',
                'db_name_label' => 'Adatbázis neve',
                'db_name_placeholder' => 'Adatbázis neve',
                'db_username_label' => 'Adatbázis felhasználónév',
                'db_username_placeholder' => 'Adatbázis felhasználónév',
                'db_password_label' => 'Adatbázis jelszó',
                'db_password_placeholder' => 'Adatbázis jelszó',
                'buttons' => [
                    'install' => 'Telepítés',
                ],
                'db_host_helper' => 'Ha Laravel Sail-t használ, egyszerűen változtassa meg a DB_HOST értékét DB_HOST=mysql-re. Néhány tárhelyszolgáltatónál a DB_HOST lehet localhost a 127.0.0.1 helyett',
                'db_connections' => [
                    'mysql' => 'MySQL',
                    'sqlite' => 'SQLite',
                    'pgsql' => 'PostgreSQL',
                ],
            ],
        ],
        'success' => 'A .env fájl beállításai mentve lettek.',
        'errors' => 'Nem sikerült menteni a .env fájlt, kérjük, hozza létre manuálisan.',
    ],

    'theme' => [
        'title' => 'Téma kiválasztása',
        'message' => 'Válasszon egy témát weboldala megjelenésének személyre szabásához. Ez a választás mintaadatokat is importál, amelyek az adott témához igazodnak.',
    ],

    'theme_preset' => [
        'title' => 'Téma előbeállítás kiválasztása',
        'message' => 'Válasszon egy téma előbeállítást weboldala megjelenésének személyre szabásához. Ez a választás mintaadatokat is importál, amelyek az adott témához igazodnak.',
    ],

    /**
     * Create account page.
     */
    'createAccount' => [
        'title' => 'Fiók létrehozása',
        'form' => [
            'first_name' => 'Keresztnév',
            'last_name' => 'Vezetéknév',
            'username' => 'Felhasználónév',
            'email' => 'Email',
            'password' => 'Jelszó',
            'password_confirmation' => 'Jelszó megerősítése',
            'create' => 'Létrehozás',
        ],
    ],

    /**
     * License page.
     */

    'license' => [
        'title' => 'Licenc aktiválása',
        'skip' => 'Kihagyás most',
    ],

    'install' => 'Telepítés',

    'final' => [
        'pageTitle' => 'Telepítés befejezve',
        'title' => 'Kész',
        'message' => 'Az alkalmazás sikeresen telepítve lett.',
        'exit' => 'Ugrás az admin vezérlőpultra',
    ],

    'install_success' => 'Sikeresen telepítve!',

    'install_step_title' => 'Telepítés - Lépés :step: :title',
];
