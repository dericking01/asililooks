<?php

return [

    /**
     *
     * Shared translations.
     *
     */
    'title' => 'Installazione',
    'next' => 'Prossimo passo',
    'back' => 'Precedente',
    'finish' => 'Installa',
    'installation' => 'Installazione',
    'forms' => [
        'errorTitle' => 'Si sono verificati i seguenti errori:',
    ],

    /**
     *
     * Home page translations.
     *
     */
    'welcome' => [
        'title' => 'Benvenuto',
        'message' => 'Prima di iniziare, abbiamo bisogno di alcune informazioni sul database. Dovrai conoscere i seguenti elementi prima di procedere.',
        'language' => 'Lingua',
        'next' => 'Iniziamo',
    ],

    /**
     *
     * Requirements page translations.
     *
     */
    'requirements' => [
        'title' => 'Requisiti del server',
        'next' => 'Verifica permessi',
    ],

    /**
     *
     * Permissions page translations.
     *
     */
    'permissions' => [
        'next' => 'Configura ambiente',
    ],

    /**
     *
     * Environment page translations.
     *
     */
    'environment' => [
        'wizard' => [
            'title' => 'Impostazioni ambiente',
            'form' => [
                'name_required' => 'È richiesto un nome per l\'ambiente.',
                'app_name_label' => 'Titolo del sito',
                'app_name_placeholder' => 'Titolo del sito',
                'app_url_label' => 'URL',
                'app_url_placeholder' => 'URL',
                'db_connection_label' => 'Connessione database',
                'db_connection_label_mysql' => 'MySQL',
                'db_connection_label_sqlite' => 'SQLite',
                'db_connection_label_pgsql' => 'PostgreSQL',
                'db_host_label' => 'Host database',
                'db_host_placeholder' => 'Host database',
                'db_port_label' => 'Porta database',
                'db_port_placeholder' => 'Porta database',
                'db_name_label' => 'Nome database',
                'db_name_placeholder' => 'Nome database',
                'db_username_label' => 'Username database',
                'db_username_placeholder' => 'Username database',
                'db_password_label' => 'Password database',
                'db_password_placeholder' => 'Password database',
                'buttons' => [
                    'install' => 'Installa',
                ],
                'db_host_helper' => 'Se usi Laravel Sail, cambia semplicemente DB_HOST in DB_HOST=mysql. Su alcuni hosting DB_HOST può essere localhost invece di 127.0.0.1',
                'db_connections' => [
                    'mysql' => 'MySQL',
                    'sqlite' => 'SQLite',
                    'pgsql' => 'PostgreSQL',
                ],
            ],
        ],
        'success' => 'Le impostazioni del tuo file .env sono state salvate.',
        'errors' => 'Impossibile salvare il file .env, crealo manualmente.',
    ],

    'theme' => [
        'title' => 'Scegli tema',
        'message' => 'Scegli un tema per personalizzare l\'aspetto del tuo sito web. Questa selezione importerà anche dati di esempio adattati al tema scelto.',
    ],

    'theme_preset' => [
        'title' => 'Scegli preset tema',
        'message' => 'Scegli un preset tema per personalizzare l\'aspetto del tuo sito web. Questa selezione importerà anche dati di esempio adattati al tema scelto.',
    ],

    /**
     * Create account page.
     */
    'createAccount' => [
        'title' => 'Crea account',
        'form' => [
            'first_name' => 'Nome',
            'last_name' => 'Cognome',
            'username' => 'Username',
            'email' => 'Email',
            'password' => 'Password',
            'password_confirmation' => 'Conferma password',
            'create' => 'Crea',
        ],
    ],

    /**
     * License page.
     */

    'license' => [
        'title' => 'Attiva licenza',
        'skip' => 'Salta per ora',
    ],

    'install' => 'Installa',

    'final' => [
        'pageTitle' => 'Installazione completata',
        'title' => 'Fatto',
        'message' => 'L\'applicazione è stata installata con successo.',
        'exit' => 'Vai alla dashboard amministratore',
    ],

    'install_success' => 'Installato con successo!',

    'install_step_title' => 'Installazione - Passo :step: :title',
];
