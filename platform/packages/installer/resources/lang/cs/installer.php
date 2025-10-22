<?php

return [

    /**
     *
     * Shared translations.
     *
     */
    'title' => 'Instalace',
    'next' => 'Další krok',
    'back' => 'Předchozí',
    'finish' => 'Instalovat',
    'installation' => 'Instalace',
    'forms' => [
        'errorTitle' => 'Došlo k následujícím chybám:',
    ],

    /**
     *
     * Home page translations.
     *
     */
    'welcome' => [
        'title' => 'Vítejte',
        'message' => 'Než začneme, potřebujeme některé informace o databázi. Před pokračováním budete muset znát následující položky.',
        'language' => 'Jazyk',
        'next' => 'Začněme',
    ],

    /**
     *
     * Requirements page translations.
     *
     */
    'requirements' => [
        'title' => 'Požadavky na server',
        'next' => 'Zkontrolovat oprávnění',
    ],

    /**
     *
     * Permissions page translations.
     *
     */
    'permissions' => [
        'next' => 'Konfigurovat prostředí',
    ],

    /**
     *
     * Environment page translations.
     *
     */
    'environment' => [
        'wizard' => [
            'title' => 'Nastavení prostředí',
            'form' => [
                'name_required' => 'Je vyžadován název prostředí.',
                'app_name_label' => 'Název webu',
                'app_name_placeholder' => 'Název webu',
                'app_url_label' => 'URL',
                'app_url_placeholder' => 'URL',
                'db_connection_label' => 'Připojení k databázi',
                'db_connection_label_mysql' => 'MySQL',
                'db_connection_label_sqlite' => 'SQLite',
                'db_connection_label_pgsql' => 'PostgreSQL',
                'db_host_label' => 'Hostitel databáze',
                'db_host_placeholder' => 'Hostitel databáze',
                'db_port_label' => 'Port databáze',
                'db_port_placeholder' => 'Port databáze',
                'db_name_label' => 'Název databáze',
                'db_name_placeholder' => 'Název databáze',
                'db_username_label' => 'Uživatelské jméno databáze',
                'db_username_placeholder' => 'Uživatelské jméno databáze',
                'db_password_label' => 'Heslo databáze',
                'db_password_placeholder' => 'Heslo databáze',
                'buttons' => [
                    'install' => 'Instalovat',
                ],
                'db_host_helper' => 'Pokud používáte Laravel Sail, jednoduše změňte DB_HOST na DB_HOST=mysql. U některých hostingů může být DB_HOST localhost místo 127.0.0.1',
                'db_connections' => [
                    'mysql' => 'MySQL',
                    'sqlite' => 'SQLite',
                    'pgsql' => 'PostgreSQL',
                ],
            ],
        ],
        'success' => 'Nastavení vašeho souboru .env byla uložena.',
        'errors' => 'Nelze uložit soubor .env, vytvořte jej prosím ručně.',
    ],

    'theme' => [
        'title' => 'Vyberte motiv',
        'message' => 'Vyberte motiv pro přizpůsobení vzhledu vašeho webu. Tento výběr také importuje vzorová data přizpůsobená vybranému motivu.',
    ],

    'theme_preset' => [
        'title' => 'Vyberte předvolbu motivu',
        'message' => 'Vyberte předvolbu motivu pro přizpůsobení vzhledu vašeho webu. Tento výběr také importuje vzorová data přizpůsobená vybranému motivu.',
    ],

    /**
     * Create account page.
     */
    'createAccount' => [
        'title' => 'Vytvořit účet',
        'form' => [
            'first_name' => 'Jméno',
            'last_name' => 'Příjmení',
            'username' => 'Uživatelské jméno',
            'email' => 'Email',
            'password' => 'Heslo',
            'password_confirmation' => 'Potvrzení hesla',
            'create' => 'Vytvořit',
        ],
    ],

    /**
     * License page.
     */

    'license' => [
        'title' => 'Aktivovat licenci',
        'skip' => 'Přeskočit zatím',
    ],

    'install' => 'Instalovat',

    'final' => [
        'pageTitle' => 'Instalace dokončena',
        'title' => 'Hotovo',
        'message' => 'Aplikace byla úspěšně nainstalována.',
        'exit' => 'Přejít na administrační panel',
    ],

    'install_success' => 'Úspěšně nainstalováno!',

    'install_step_title' => 'Instalace - Krok :step: :title',
];
