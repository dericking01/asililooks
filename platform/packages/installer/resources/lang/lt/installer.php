<?php

return [

    /**
     *
     * Shared translations.
     *
     */
    'title' => 'Diegimas',
    'next' => 'Kitas žingsnis',
    'back' => 'Ankstesnis',
    'finish' => 'Įdiegti',
    'installation' => 'Diegimas',
    'forms' => [
        'errorTitle' => 'Įvyko šios klaidos:',
    ],

    /**
     *
     * Home page translations.
     *
     */
    'welcome' => [
        'title' => 'Sveiki atvykę',
        'message' => 'Prieš pradedant, mums reikia informacijos apie duomenų bazę. Prieš tęsdami turėsite žinoti šiuos elementus.',
        'language' => 'Kalba',
        'next' => 'Pradėkime',
    ],

    /**
     *
     * Requirements page translations.
     *
     */
    'requirements' => [
        'title' => 'Serverio reikalavimai',
        'next' => 'Patikrinti leidimus',
    ],

    /**
     *
     * Permissions page translations.
     *
     */
    'permissions' => [
        'next' => 'Konfigūruoti aplinką',
    ],

    /**
     *
     * Environment page translations.
     *
     */
    'environment' => [
        'wizard' => [
            'title' => 'Aplinkos nustatymai',
            'form' => [
                'name_required' => 'Aplinkos pavadinimas yra privalomas.',
                'app_name_label' => 'Svetainės pavadinimas',
                'app_name_placeholder' => 'Svetainės pavadinimas',
                'app_url_label' => 'URL',
                'app_url_placeholder' => 'URL',
                'db_connection_label' => 'Duomenų bazės ryšys',
                'db_connection_label_mysql' => 'MySQL',
                'db_connection_label_sqlite' => 'SQLite',
                'db_connection_label_pgsql' => 'PostgreSQL',
                'db_host_label' => 'Duomenų bazės hostas',
                'db_host_placeholder' => 'Duomenų bazės hostas',
                'db_port_label' => 'Duomenų bazės prievadas',
                'db_port_placeholder' => 'Duomenų bazės prievadas',
                'db_name_label' => 'Duomenų bazės pavadinimas',
                'db_name_placeholder' => 'Duomenų bazės pavadinimas',
                'db_username_label' => 'Duomenų bazės vartotojo vardas',
                'db_username_placeholder' => 'Duomenų bazės vartotojo vardas',
                'db_password_label' => 'Duomenų bazės slaptažodis',
                'db_password_placeholder' => 'Duomenų bazės slaptažodis',
                'buttons' => [
                    'install' => 'Įdiegti',
                ],
                'db_host_helper' => 'Jei naudojate Laravel Sail, tiesiog pakeiskite DB_HOST į DB_HOST=mysql. Kai kuriose talpinimo paslaugose DB_HOST gali būti localhost, o ne 127.0.0.1',
                'db_connections' => [
                    'mysql' => 'MySQL',
                    'sqlite' => 'SQLite',
                    'pgsql' => 'PostgreSQL',
                ],
            ],
        ],
        'success' => 'Jūsų .env failo nustatymai išsaugoti.',
        'errors' => 'Nepavyko išsaugoti .env failo, sukurkite jį rankiniu būdu.',
    ],

    'theme' => [
        'title' => 'Pasirinkite temą',
        'message' => 'Pasirinkite temą, kad pritaikytumėte savo svetainės išvaizdą. Šis pasirinkimas taip pat importuos pavyzdinius duomenis, pritaikytus pasirinktai temai.',
    ],

    'theme_preset' => [
        'title' => 'Pasirinkite temos ruošinį',
        'message' => 'Pasirinkite temos ruošinį, kad pritaikytumėte savo svetainės išvaizdą. Šis pasirinkimas taip pat importuos pavyzdinius duomenis, pritaikytus pasirinktai temai.',
    ],

    /**
     * Create account page.
     */
    'createAccount' => [
        'title' => 'Sukurti paskyrą',
        'form' => [
            'first_name' => 'Vardas',
            'last_name' => 'Pavardė',
            'username' => 'Vartotojo vardas',
            'email' => 'El. paštas',
            'password' => 'Slaptažodis',
            'password_confirmation' => 'Slaptažodžio patvirtinimas',
            'create' => 'Sukurti',
        ],
    ],

    /**
     * License page.
     */

    'license' => [
        'title' => 'Aktyvuoti licenciją',
        'skip' => 'Praleisti kol kas',
    ],

    'install' => 'Įdiegti',

    'final' => [
        'pageTitle' => 'Diegimas baigtas',
        'title' => 'Atlikta',
        'message' => 'Programa sėkmingai įdiegta.',
        'exit' => 'Eiti į administratoriaus skydelį',
    ],

    'install_success' => 'Sėkmingai įdiegta!',

    'install_step_title' => 'Diegimas - Žingsnis :step: :title',
];
