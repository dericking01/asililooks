<?php

return [

    /**
     *
     * Shared translations.
     *
     */
    'title' => 'Installation',
    'next' => 'Nästa steg',
    'back' => 'Föregående',
    'finish' => 'Installera',
    'installation' => 'Installation',
    'forms' => [
        'errorTitle' => 'Följande fel uppstod:',
    ],

    /**
     *
     * Home page translations.
     *
     */
    'welcome' => [
        'title' => 'Välkommen',
        'message' => 'Innan vi börjar behöver vi lite information om databasen. Du behöver veta följande saker innan du fortsätter.',
        'language' => 'Språk',
        'next' => 'Låt oss börja',
    ],

    /**
     *
     * Requirements page translations.
     *
     */
    'requirements' => [
        'title' => 'Serverkrav',
        'next' => 'Kontrollera behörigheter',
    ],

    /**
     *
     * Permissions page translations.
     *
     */
    'permissions' => [
        'next' => 'Konfigurera miljö',
    ],

    /**
     *
     * Environment page translations.
     *
     */
    'environment' => [
        'wizard' => [
            'title' => 'Miljöinställningar',
            'form' => [
                'name_required' => 'Ett miljönamn krävs.',
                'app_name_label' => 'Webbplatsens titel',
                'app_name_placeholder' => 'Webbplatsens titel',
                'app_url_label' => 'URL',
                'app_url_placeholder' => 'URL',
                'db_connection_label' => 'Databasanslutning',
                'db_connection_label_mysql' => 'MySQL',
                'db_connection_label_sqlite' => 'SQLite',
                'db_connection_label_pgsql' => 'PostgreSQL',
                'db_host_label' => 'Databasvärd',
                'db_host_placeholder' => 'Databasvärd',
                'db_port_label' => 'Databasport',
                'db_port_placeholder' => 'Databasport',
                'db_name_label' => 'Databasnamn',
                'db_name_placeholder' => 'Databasnamn',
                'db_username_label' => 'Användarnamn för databas',
                'db_username_placeholder' => 'Användarnamn för databas',
                'db_password_label' => 'Databaslösenord',
                'db_password_placeholder' => 'Databaslösenord',
                'buttons' => [
                    'install' => 'Installera',
                ],
                'db_host_helper' => 'Om du använder Laravel Sail, ändra bara DB_HOST till DB_HOST=mysql. På vissa webbhotell kan DB_HOST vara localhost istället för 127.0.0.1',
                'db_connections' => [
                    'mysql' => 'MySQL',
                    'sqlite' => 'SQLite',
                    'pgsql' => 'PostgreSQL',
                ],
            ],
        ],
        'success' => 'Dina .env-filinställningar har sparats.',
        'errors' => 'Kan inte spara .env-filen, vänligen skapa den manuellt.',
    ],

    'theme' => [
        'title' => 'Välj tema',
        'message' => 'Välj ett tema för att personifiera utseendet på din webbplats. Detta val kommer också att importera exempeldata anpassade till det valda temat.',
    ],

    'theme_preset' => [
        'title' => 'Välj temaförinställning',
        'message' => 'Välj en temaförinställning för att personifiera utseendet på din webbplats. Detta val kommer också att importera exempeldata anpassade till det valda temat.',
    ],

    /**
     * Create account page.
     */
    'createAccount' => [
        'title' => 'Skapa konto',
        'form' => [
            'first_name' => 'Förnamn',
            'last_name' => 'Efternamn',
            'username' => 'Användarnamn',
            'email' => 'E-post',
            'password' => 'Lösenord',
            'password_confirmation' => 'Bekräfta lösenord',
            'create' => 'Skapa',
        ],
    ],

    /**
     * License page.
     */

    'license' => [
        'title' => 'Aktivera licens',
        'skip' => 'Hoppa över för nu',
    ],

    'install' => 'Installera',

    'final' => [
        'pageTitle' => 'Installation slutförd',
        'title' => 'Klar',
        'message' => 'Applikationen har installerats framgångsrikt.',
        'exit' => 'Gå till adminpanelen',
    ],

    'install_success' => 'Installerat framgångsrikt!',

    'install_step_title' => 'Installation - Steg :step: :title',
];
