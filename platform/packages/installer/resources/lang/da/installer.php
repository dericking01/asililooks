<?php

return [

    /**
     *
     * Shared translations.
     *
     */
    'title' => 'Installation',
    'next' => 'Næste trin',
    'back' => 'Forrige',
    'finish' => 'Installer',
    'installation' => 'Installation',
    'forms' => [
        'errorTitle' => 'Følgende fejl opstod:',
    ],

    /**
     *
     * Home page translations.
     *
     */
    'welcome' => [
        'title' => 'Velkommen',
        'message' => 'Før vi starter, har vi brug for nogle oplysninger om databasen. Du skal kende følgende elementer før du fortsætter.',
        'language' => 'Sprog',
        'next' => 'Lad os komme i gang',
    ],

    /**
     *
     * Requirements page translations.
     *
     */
    'requirements' => [
        'title' => 'Serverkrav',
        'next' => 'Kontroller tilladelser',
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
            'title' => 'Miljøindstillinger',
            'form' => [
                'name_required' => 'Et miljønavn er påkrævet.',
                'app_name_label' => 'Sidetitel',
                'app_name_placeholder' => 'Sidetitel',
                'app_url_label' => 'URL',
                'app_url_placeholder' => 'URL',
                'db_connection_label' => 'Databaseforbindelse',
                'db_connection_label_mysql' => 'MySQL',
                'db_connection_label_sqlite' => 'SQLite',
                'db_connection_label_pgsql' => 'PostgreSQL',
                'db_host_label' => 'Database vært',
                'db_host_placeholder' => 'Database vært',
                'db_port_label' => 'Database port',
                'db_port_placeholder' => 'Database port',
                'db_name_label' => 'Database navn',
                'db_name_placeholder' => 'Database navn',
                'db_username_label' => 'Database brugernavn',
                'db_username_placeholder' => 'Database brugernavn',
                'db_password_label' => 'Database adgangskode',
                'db_password_placeholder' => 'Database adgangskode',
                'buttons' => [
                    'install' => 'Installer',
                ],
                'db_host_helper' => 'Hvis du bruger Laravel Sail, skal du blot ændre DB_HOST til DB_HOST=mysql. På nogle hosting kan DB_HOST være localhost i stedet for 127.0.0.1',
                'db_connections' => [
                    'mysql' => 'MySQL',
                    'sqlite' => 'SQLite',
                    'pgsql' => 'PostgreSQL',
                ],
            ],
        ],
        'success' => 'Dine .env filindstillinger er blevet gemt.',
        'errors' => 'Kan ikke gemme .env filen, Opret den venligst manuelt.',
    ],

    'theme' => [
        'title' => 'Vælg tema',
        'message' => 'Vælg et tema for at personliggøre dit websteds udseende. Dette valg vil også importere eksempeldata tilpasset det valgte tema.',
    ],

    'theme_preset' => [
        'title' => 'Vælg tema forudindstilling',
        'message' => 'Vælg en tema forudindstilling for at personliggøre dit websteds udseende. Dette valg vil også importere eksempeldata tilpasset det valgte tema.',
    ],

    /**
     * Create account page.
     */
    'createAccount' => [
        'title' => 'Opret konto',
        'form' => [
            'first_name' => 'Fornavn',
            'last_name' => 'Efternavn',
            'username' => 'Brugernavn',
            'email' => 'E-mail',
            'password' => 'Adgangskode',
            'password_confirmation' => 'Bekræft adgangskode',
            'create' => 'Opret',
        ],
    ],

    /**
     * License page.
     */

    'license' => [
        'title' => 'Aktiver licens',
        'skip' => 'Spring over for nu',
    ],

    'install' => 'Installer',

    'final' => [
        'pageTitle' => 'Installation afsluttet',
        'title' => 'Færdig',
        'message' => 'Applikationen er blevet installeret med succes.',
        'exit' => 'Gå til admin dashboard',
    ],

    'install_success' => 'Installeret med succes!',

    'install_step_title' => 'Installation - Trin :step: :title',
];
