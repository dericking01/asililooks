<?php

return [

    /**
     *
     * Shared translations.
     *
     */
    'title' => 'Installimine',
    'next' => 'Järgmine samm',
    'back' => 'Eelmine',
    'finish' => 'Installi',
    'installation' => 'Installimine',
    'forms' => [
        'errorTitle' => 'Ilmnesid järgmised vead:',
    ],

    /**
     *
     * Home page translations.
     *
     */
    'welcome' => [
        'title' => 'Tere tulemast',
        'message' => 'Enne alustamist vajame andmebaasi kohta teavet. Enne jätkamist peate teadma järgmisi üksusi.',
        'language' => 'Keel',
        'next' => 'Alustame',
    ],

    /**
     *
     * Requirements page translations.
     *
     */
    'requirements' => [
        'title' => 'Serveri nõuded',
        'next' => 'Kontrolli õigusi',
    ],

    /**
     *
     * Permissions page translations.
     *
     */
    'permissions' => [
        'next' => 'Konfigureeri keskkond',
    ],

    /**
     *
     * Environment page translations.
     *
     */
    'environment' => [
        'wizard' => [
            'title' => 'Keskkonna seaded',
            'form' => [
                'name_required' => 'Keskkonna nimi on nõutav.',
                'app_name_label' => 'Saidi pealkiri',
                'app_name_placeholder' => 'Saidi pealkiri',
                'app_url_label' => 'URL',
                'app_url_placeholder' => 'URL',
                'db_connection_label' => 'Andmebaasi ühendus',
                'db_connection_label_mysql' => 'MySQL',
                'db_connection_label_sqlite' => 'SQLite',
                'db_connection_label_pgsql' => 'PostgreSQL',
                'db_host_label' => 'Andmebaasi host',
                'db_host_placeholder' => 'Andmebaasi host',
                'db_port_label' => 'Andmebaasi port',
                'db_port_placeholder' => 'Andmebaasi port',
                'db_name_label' => 'Andmebaasi nimi',
                'db_name_placeholder' => 'Andmebaasi nimi',
                'db_username_label' => 'Andmebaasi kasutajanimi',
                'db_username_placeholder' => 'Andmebaasi kasutajanimi',
                'db_password_label' => 'Andmebaasi parool',
                'db_password_placeholder' => 'Andmebaasi parool',
                'buttons' => [
                    'install' => 'Installi',
                ],
                'db_host_helper' => 'Kui kasutate Laravel Sail, muutke lihtsalt DB_HOST väärtuseks DB_HOST=mysql. Mõnel hostinguteenusel võib DB_HOST olla localhost asemel 127.0.0.1',
                'db_connections' => [
                    'mysql' => 'MySQL',
                    'sqlite' => 'SQLite',
                    'pgsql' => 'PostgreSQL',
                ],
            ],
        ],
        'success' => 'Teie .env faili seaded on salvestatud.',
        'errors' => '.env faili salvestamine ebaõnnestus, palun looge see käsitsi.',
    ],

    'theme' => [
        'title' => 'Valige teema',
        'message' => 'Valige teema, et isikupärastada oma veebisaidi välimust. See valik impordib ka valitud teemale kohandatud näidisandmed.',
    ],

    'theme_preset' => [
        'title' => 'Valige teema eelseadistus',
        'message' => 'Valige teema eelseadistus, et isikupärastada oma veebisaidi välimust. See valik impordib ka valitud teemale kohandatud näidisandmed.',
    ],

    /**
     * Create account page.
     */
    'createAccount' => [
        'title' => 'Loo konto',
        'form' => [
            'first_name' => 'Eesnimi',
            'last_name' => 'Perekonnanimi',
            'username' => 'Kasutajanimi',
            'email' => 'E-post',
            'password' => 'Parool',
            'password_confirmation' => 'Parooli kinnitus',
            'create' => 'Loo',
        ],
    ],

    /**
     * License page.
     */

    'license' => [
        'title' => 'Aktiveeri litsents',
        'skip' => 'Jäta praegu vahele',
    ],

    'install' => 'Installi',

    'final' => [
        'pageTitle' => 'Installimine lõpetatud',
        'title' => 'Valmis',
        'message' => 'Rakendus on edukalt installitud.',
        'exit' => 'Mine administraatori töölaua juurde',
    ],

    'install_success' => 'Edukalt installitud!',

    'install_step_title' => 'Installimine - Samm :step: :title',
];
