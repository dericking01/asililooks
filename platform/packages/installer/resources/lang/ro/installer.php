<?php

return [

    /**
     *
     * Shared translations.
     *
     */
    'title' => 'Instalare',
    'next' => 'Pasul următor',
    'back' => 'Anterior',
    'finish' => 'Instalează',
    'installation' => 'Instalare',
    'forms' => [
        'errorTitle' => 'Au apărut următoarele erori:',
    ],

    /**
     *
     * Home page translations.
     *
     */
    'welcome' => [
        'title' => 'Bun venit',
        'message' => 'Înainte de a începe, avem nevoie de câteva informații despre baza de date. Va trebui să cunoașteți următoarele elemente înainte de a continua.',
        'language' => 'Limbă',
        'next' => 'Să începem',
    ],

    /**
     *
     * Requirements page translations.
     *
     */
    'requirements' => [
        'title' => 'Cerințe server',
        'next' => 'Verifică permisiunile',
    ],

    /**
     *
     * Permissions page translations.
     *
     */
    'permissions' => [
        'next' => 'Configurează mediul',
    ],

    /**
     *
     * Environment page translations.
     *
     */
    'environment' => [
        'wizard' => [
            'title' => 'Setări mediu',
            'form' => [
                'name_required' => 'Este necesar un nume de mediu.',
                'app_name_label' => 'Titlul site-ului',
                'app_name_placeholder' => 'Titlul site-ului',
                'app_url_label' => 'URL',
                'app_url_placeholder' => 'URL',
                'db_connection_label' => 'Conexiune bază de date',
                'db_connection_label_mysql' => 'MySQL',
                'db_connection_label_sqlite' => 'SQLite',
                'db_connection_label_pgsql' => 'PostgreSQL',
                'db_host_label' => 'Gazdă bază de date',
                'db_host_placeholder' => 'Gazdă bază de date',
                'db_port_label' => 'Port bază de date',
                'db_port_placeholder' => 'Port bază de date',
                'db_name_label' => 'Nume bază de date',
                'db_name_placeholder' => 'Nume bază de date',
                'db_username_label' => 'Nume utilizator bază de date',
                'db_username_placeholder' => 'Nume utilizator bază de date',
                'db_password_label' => 'Parolă bază de date',
                'db_password_placeholder' => 'Parolă bază de date',
                'buttons' => [
                    'install' => 'Instalează',
                ],
                'db_host_helper' => 'Dacă folosiți Laravel Sail, schimbați pur și simplu DB_HOST în DB_HOST=mysql. La unele gazde DB_HOST poate fi localhost în loc de 127.0.0.1',
                'db_connections' => [
                    'mysql' => 'MySQL',
                    'sqlite' => 'SQLite',
                    'pgsql' => 'PostgreSQL',
                ],
            ],
        ],
        'success' => 'Setările fișierului .env au fost salvate.',
        'errors' => 'Nu se poate salva fișierul .env, vă rugăm să îl creați manual.',
    ],

    'theme' => [
        'title' => 'Alegeți tema',
        'message' => 'Alegeți o temă pentru a personaliza aspectul site-ului dvs. web. Această selecție va importa și date eșantion adaptate temei alese.',
    ],

    'theme_preset' => [
        'title' => 'Alegeți presetarea temei',
        'message' => 'Alegeți o presetare a temei pentru a personaliza aspectul site-ului dvs. web. Această selecție va importa și date eșantion adaptate temei alese.',
    ],

    /**
     * Create account page.
     */
    'createAccount' => [
        'title' => 'Creează cont',
        'form' => [
            'first_name' => 'Prenume',
            'last_name' => 'Nume',
            'username' => 'Nume utilizator',
            'email' => 'Email',
            'password' => 'Parolă',
            'password_confirmation' => 'Confirmare parolă',
            'create' => 'Creează',
        ],
    ],

    /**
     * License page.
     */

    'license' => [
        'title' => 'Activează licența',
        'skip' => 'Omite deocamdată',
    ],

    'install' => 'Instalează',

    'final' => [
        'pageTitle' => 'Instalare finalizată',
        'title' => 'Terminat',
        'message' => 'Aplicația a fost instalată cu succes.',
        'exit' => 'Mergi la panoul de administrare',
    ],

    'install_success' => 'Instalat cu succes!',

    'install_step_title' => 'Instalare - Pasul :step: :title',
];
