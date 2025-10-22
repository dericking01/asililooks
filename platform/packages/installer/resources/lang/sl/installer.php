<?php

return [

    /**
     *
     * Shared translations.
     *
     */
    'title' => 'Namestitev',
    'next' => 'Naslednji korak',
    'back' => 'Prejšnji',
    'finish' => 'Namesti',
    'installation' => 'Namestitev',
    'forms' => [
        'errorTitle' => 'Zgodile so se naslednje napake:',
    ],

    /**
     *
     * Home page translations.
     *
     */
    'welcome' => [
        'title' => 'Dobrodošli',
        'message' => 'Preden začnemo, potrebujemo nekaj informacij o podatkovni bazi. Preden nadaljujete, morate poznati naslednje elemente.',
        'language' => 'Jezik',
        'next' => 'Začnimo',
    ],

    /**
     *
     * Requirements page translations.
     *
     */
    'requirements' => [
        'title' => 'Zahteve strežnika',
        'next' => 'Preveri dovoljenja',
    ],

    /**
     *
     * Permissions page translations.
     *
     */
    'permissions' => [
        'next' => 'Konfiguriraj okolje',
    ],

    /**
     *
     * Environment page translations.
     *
     */
    'environment' => [
        'wizard' => [
            'title' => 'Nastavitve okolja',
            'form' => [
                'name_required' => 'Ime okolja je obvezno.',
                'app_name_label' => 'Naslov spletne strani',
                'app_name_placeholder' => 'Naslov spletne strani',
                'app_url_label' => 'URL',
                'app_url_placeholder' => 'URL',
                'db_connection_label' => 'Povezava s podatkovno bazo',
                'db_connection_label_mysql' => 'MySQL',
                'db_connection_label_sqlite' => 'SQLite',
                'db_connection_label_pgsql' => 'PostgreSQL',
                'db_host_label' => 'Gostitelj podatkovne baze',
                'db_host_placeholder' => 'Gostitelj podatkovne baze',
                'db_port_label' => 'Vrata podatkovne baze',
                'db_port_placeholder' => 'Vrata podatkovne baze',
                'db_name_label' => 'Ime podatkovne baze',
                'db_name_placeholder' => 'Ime podatkovne baze',
                'db_username_label' => 'Uporabniško ime podatkovne baze',
                'db_username_placeholder' => 'Uporabniško ime podatkovne baze',
                'db_password_label' => 'Geslo podatkovne baze',
                'db_password_placeholder' => 'Geslo podatkovne baze',
                'buttons' => [
                    'install' => 'Namesti',
                ],
                'db_host_helper' => 'Če uporabljate Laravel Sail, preprosto spremenite DB_HOST v DB_HOST=mysql. Pri nekaterih gostiteljih je lahko DB_HOST localhost namesto 127.0.0.1',
                'db_connections' => [
                    'mysql' => 'MySQL',
                    'sqlite' => 'SQLite',
                    'pgsql' => 'PostgreSQL',
                ],
            ],
        ],
        'success' => 'Nastavitve vaše datoteke .env so bile shranjene.',
        'errors' => 'Datoteke .env ni mogoče shraniti, ustvarite jo ročno.',
    ],

    'theme' => [
        'title' => 'Izberite temo',
        'message' => 'Izberite temo za prilagoditev videza vaše spletne strani. Ta izbira bo tudi uvozila vzorčne podatke, prilagojene izbrani temi.',
    ],

    'theme_preset' => [
        'title' => 'Izberite prednastavitev teme',
        'message' => 'Izberite prednastavitev teme za prilagoditev videza vaše spletne strani. Ta izbira bo tudi uvozila vzorčne podatke, prilagojene izbrani temi.',
    ],

    /**
     * Create account page.
     */
    'createAccount' => [
        'title' => 'Ustvari račun',
        'form' => [
            'first_name' => 'Ime',
            'last_name' => 'Priimek',
            'username' => 'Uporabniško ime',
            'email' => 'E-pošta',
            'password' => 'Geslo',
            'password_confirmation' => 'Potrditev gesla',
            'create' => 'Ustvari',
        ],
    ],

    /**
     * License page.
     */

    'license' => [
        'title' => 'Aktiviraj licenco',
        'skip' => 'Preskoči za zdaj',
    ],

    'install' => 'Namesti',

    'final' => [
        'pageTitle' => 'Namestitev dokončana',
        'title' => 'Končano',
        'message' => 'Aplikacija je bila uspešno nameščena.',
        'exit' => 'Pojdi na nadzorno ploščo',
    ],

    'install_success' => 'Uspešno nameščeno!',

    'install_step_title' => 'Namestitev - Korak :step: :title',
];
