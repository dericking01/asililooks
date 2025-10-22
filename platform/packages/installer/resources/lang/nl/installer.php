<?php

return [

    /**
     *
     * Shared translations.
     *
     */
    'title' => 'Installatie',
    'next' => 'Volgende stap',
    'back' => 'Vorige',
    'finish' => 'Installeren',
    'installation' => 'Installatie',
    'forms' => [
        'errorTitle' => 'De volgende fouten zijn opgetreden:',
    ],

    /**
     *
     * Home page translations.
     *
     */
    'welcome' => [
        'title' => 'Welkom',
        'message' => 'Voordat we beginnen, hebben we wat informatie over de database nodig. U moet de volgende items weten voordat u verdergaat.',
        'language' => 'Taal',
        'next' => 'Laten we beginnen',
    ],

    /**
     *
     * Requirements page translations.
     *
     */
    'requirements' => [
        'title' => 'Serververeisten',
        'next' => 'Machtigingen controleren',
    ],

    /**
     *
     * Permissions page translations.
     *
     */
    'permissions' => [
        'next' => 'Omgeving configureren',
    ],

    /**
     *
     * Environment page translations.
     *
     */
    'environment' => [
        'wizard' => [
            'title' => 'Omgevingsinstellingen',
            'form' => [
                'name_required' => 'Een omgevingsnaam is vereist.',
                'app_name_label' => 'Sitetitel',
                'app_name_placeholder' => 'Sitetitel',
                'app_url_label' => 'URL',
                'app_url_placeholder' => 'URL',
                'db_connection_label' => 'Databaseverbinding',
                'db_connection_label_mysql' => 'MySQL',
                'db_connection_label_sqlite' => 'SQLite',
                'db_connection_label_pgsql' => 'PostgreSQL',
                'db_host_label' => 'Database host',
                'db_host_placeholder' => 'Database host',
                'db_port_label' => 'Database poort',
                'db_port_placeholder' => 'Database poort',
                'db_name_label' => 'Databasenaam',
                'db_name_placeholder' => 'Databasenaam',
                'db_username_label' => 'Database gebruikersnaam',
                'db_username_placeholder' => 'Database gebruikersnaam',
                'db_password_label' => 'Database wachtwoord',
                'db_password_placeholder' => 'Database wachtwoord',
                'buttons' => [
                    'install' => 'Installeren',
                ],
                'db_host_helper' => 'Als u Laravel Sail gebruikt, wijzig dan gewoon DB_HOST naar DB_HOST=mysql. Bij sommige hostingproviders kan DB_HOST localhost zijn in plaats van 127.0.0.1',
                'db_connections' => [
                    'mysql' => 'MySQL',
                    'sqlite' => 'SQLite',
                    'pgsql' => 'PostgreSQL',
                ],
            ],
        ],
        'success' => 'Uw .env bestandsinstellingen zijn opgeslagen.',
        'errors' => 'Kan het .env bestand niet opslaan, maak het handmatig aan.',
    ],

    'theme' => [
        'title' => 'Kies thema',
        'message' => 'Kies een thema om het uiterlijk van uw website te personaliseren. Deze selectie importeert ook voorbeeldgegevens die zijn afgestemd op het gekozen thema.',
    ],

    'theme_preset' => [
        'title' => 'Kies thema voorinstelling',
        'message' => 'Kies een thema voorinstelling om het uiterlijk van uw website te personaliseren. Deze selectie importeert ook voorbeeldgegevens die zijn afgestemd op het gekozen thema.',
    ],

    /**
     * Create account page.
     */
    'createAccount' => [
        'title' => 'Account aanmaken',
        'form' => [
            'first_name' => 'Voornaam',
            'last_name' => 'Achternaam',
            'username' => 'Gebruikersnaam',
            'email' => 'E-mail',
            'password' => 'Wachtwoord',
            'password_confirmation' => 'Wachtwoordbevestiging',
            'create' => 'Aanmaken',
        ],
    ],

    /**
     * License page.
     */

    'license' => [
        'title' => 'Licentie activeren',
        'skip' => 'Voorlopig overslaan',
    ],

    'install' => 'Installeren',

    'final' => [
        'pageTitle' => 'Installatie voltooid',
        'title' => 'Klaar',
        'message' => 'Applicatie is succesvol geïnstalleerd.',
        'exit' => 'Ga naar admin dashboard',
    ],

    'install_success' => 'Succesvol geïnstalleerd!',

    'install_step_title' => 'Installatie - Stap :step: :title',
];
