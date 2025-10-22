<?php

return [

    /**
     *
     * Shared translations.
     *
     */
    'title' => 'Installasjon',
    'next' => 'Neste trinn',
    'back' => 'Forrige',
    'finish' => 'Installer',
    'installation' => 'Installasjon',
    'forms' => [
        'errorTitle' => 'Følgende feil oppstod:',
    ],

    /**
     *
     * Home page translations.
     *
     */
    'welcome' => [
        'title' => 'Velkommen',
        'message' => 'Før vi starter, trenger vi litt informasjon om databasen. Du må kjenne til følgende elementer før du fortsetter.',
        'language' => 'Språk',
        'next' => 'La oss komme i gang',
    ],

    /**
     *
     * Requirements page translations.
     *
     */
    'requirements' => [
        'title' => 'Serverkrav',
        'next' => 'Sjekk tillatelser',
    ],

    /**
     *
     * Permissions page translations.
     *
     */
    'permissions' => [
        'next' => 'Konfigurer miljø',
    ],

    /**
     *
     * Environment page translations.
     *
     */
    'environment' => [
        'wizard' => [
            'title' => 'Miljøinnstillinger',
            'form' => [
                'name_required' => 'Et miljønavn er påkrevd.',
                'app_name_label' => 'Nettstedstittel',
                'app_name_placeholder' => 'Nettstedstittel',
                'app_url_label' => 'URL',
                'app_url_placeholder' => 'URL',
                'db_connection_label' => 'Databaseforbindelse',
                'db_connection_label_mysql' => 'MySQL',
                'db_connection_label_sqlite' => 'SQLite',
                'db_connection_label_pgsql' => 'PostgreSQL',
                'db_host_label' => 'Database vert',
                'db_host_placeholder' => 'Database vert',
                'db_port_label' => 'Database port',
                'db_port_placeholder' => 'Database port',
                'db_name_label' => 'Database navn',
                'db_name_placeholder' => 'Database navn',
                'db_username_label' => 'Database brukernavn',
                'db_username_placeholder' => 'Database brukernavn',
                'db_password_label' => 'Database passord',
                'db_password_placeholder' => 'Database passord',
                'buttons' => [
                    'install' => 'Installer',
                ],
                'db_host_helper' => 'Hvis du bruker Laravel Sail, bare endre DB_HOST til DB_HOST=mysql. På noen hosting kan DB_HOST være localhost i stedet for 127.0.0.1',
                'db_connections' => [
                    'mysql' => 'MySQL',
                    'sqlite' => 'SQLite',
                    'pgsql' => 'PostgreSQL',
                ],
            ],
        ],
        'success' => 'Dine .env filinnstillinger har blitt lagret.',
        'errors' => 'Kan ikke lagre .env filen, Opprett den manuelt.',
    ],

    'theme' => [
        'title' => 'Velg tema',
        'message' => 'Velg et tema for å tilpasse utseendet på nettstedet ditt. Dette valget vil også importere eksempeldata tilpasset det valgte temaet.',
    ],

    'theme_preset' => [
        'title' => 'Velg tema forhåndsinnstilling',
        'message' => 'Velg en tema forhåndsinnstilling for å tilpasse utseendet på nettstedet ditt. Dette valget vil også importere eksempeldata tilpasset det valgte temaet.',
    ],

    /**
     * Create account page.
     */
    'createAccount' => [
        'title' => 'Opprett konto',
        'form' => [
            'first_name' => 'Fornavn',
            'last_name' => 'Etternavn',
            'username' => 'Brukernavn',
            'email' => 'E-post',
            'password' => 'Passord',
            'password_confirmation' => 'Passordbekreftelse',
            'create' => 'Opprett',
        ],
    ],

    /**
     * License page.
     */

    'license' => [
        'title' => 'Aktiver lisens',
        'skip' => 'Hopp over foreløpig',
    ],

    'install' => 'Installer',

    'final' => [
        'pageTitle' => 'Installasjon fullført',
        'title' => 'Ferdig',
        'message' => 'Applikasjonen har blitt installert.',
        'exit' => 'Gå til admin dashbord',
    ],

    'install_success' => 'Installert vellykket!',

    'install_step_title' => 'Installasjon - Trinn :step: :title',
];
