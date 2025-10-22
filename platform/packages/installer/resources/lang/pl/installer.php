<?php

return [

    /**
     *
     * Shared translations.
     *
     */
    'title' => 'Instalacja',
    'next' => 'Następny krok',
    'back' => 'Poprzedni',
    'finish' => 'Instaluj',
    'installation' => 'Instalacja',
    'forms' => [
        'errorTitle' => 'Wystąpiły następujące błędy:',
    ],

    /**
     *
     * Home page translations.
     *
     */
    'welcome' => [
        'title' => 'Witamy',
        'message' => 'Zanim zaczniemy, potrzebujemy kilku informacji o bazie danych. Będziesz musiał znać następujące elementy przed kontynuowaniem.',
        'language' => 'Język',
        'next' => 'Zaczynajmy',
    ],

    /**
     *
     * Requirements page translations.
     *
     */
    'requirements' => [
        'title' => 'Wymagania serwera',
        'next' => 'Sprawdź uprawnienia',
    ],

    /**
     *
     * Permissions page translations.
     *
     */
    'permissions' => [
        'next' => 'Konfiguruj środowisko',
    ],

    /**
     *
     * Environment page translations.
     *
     */
    'environment' => [
        'wizard' => [
            'title' => 'Ustawienia środowiska',
            'form' => [
                'name_required' => 'Nazwa środowiska jest wymagana.',
                'app_name_label' => 'Tytuł strony',
                'app_name_placeholder' => 'Tytuł strony',
                'app_url_label' => 'URL',
                'app_url_placeholder' => 'URL',
                'db_connection_label' => 'Połączenie z bazą danych',
                'db_connection_label_mysql' => 'MySQL',
                'db_connection_label_sqlite' => 'SQLite',
                'db_connection_label_pgsql' => 'PostgreSQL',
                'db_host_label' => 'Host bazy danych',
                'db_host_placeholder' => 'Host bazy danych',
                'db_port_label' => 'Port bazy danych',
                'db_port_placeholder' => 'Port bazy danych',
                'db_name_label' => 'Nazwa bazy danych',
                'db_name_placeholder' => 'Nazwa bazy danych',
                'db_username_label' => 'Nazwa użytkownika bazy danych',
                'db_username_placeholder' => 'Nazwa użytkownika bazy danych',
                'db_password_label' => 'Hasło bazy danych',
                'db_password_placeholder' => 'Hasło bazy danych',
                'buttons' => [
                    'install' => 'Instaluj',
                ],
                'db_host_helper' => 'Jeśli używasz Laravel Sail, po prostu zmień DB_HOST na DB_HOST=mysql. Na niektórych hostingach DB_HOST może być localhost zamiast 127.0.0.1',
                'db_connections' => [
                    'mysql' => 'MySQL',
                    'sqlite' => 'SQLite',
                    'pgsql' => 'PostgreSQL',
                ],
            ],
        ],
        'success' => 'Ustawienia pliku .env zostały zapisane.',
        'errors' => 'Nie można zapisać pliku .env, utwórz go ręcznie.',
    ],

    'theme' => [
        'title' => 'Wybierz motyw',
        'message' => 'Wybierz motyw, aby spersonalizować wygląd swojej witryny. Ten wybór zaimportuje również przykładowe dane dostosowane do wybranego motywu.',
    ],

    'theme_preset' => [
        'title' => 'Wybierz preset motywu',
        'message' => 'Wybierz preset motywu, aby spersonalizować wygląd swojej witryny. Ten wybór zaimportuje również przykładowe dane dostosowane do wybranego motywu.',
    ],

    /**
     * Create account page.
     */
    'createAccount' => [
        'title' => 'Utwórz konto',
        'form' => [
            'first_name' => 'Imię',
            'last_name' => 'Nazwisko',
            'username' => 'Nazwa użytkownika',
            'email' => 'Email',
            'password' => 'Hasło',
            'password_confirmation' => 'Potwierdzenie hasła',
            'create' => 'Utwórz',
        ],
    ],

    /**
     * License page.
     */

    'license' => [
        'title' => 'Aktywuj licencję',
        'skip' => 'Pomiń na razie',
    ],

    'install' => 'Instaluj',

    'final' => [
        'pageTitle' => 'Instalacja zakończona',
        'title' => 'Gotowe',
        'message' => 'Aplikacja została pomyślnie zainstalowana.',
        'exit' => 'Przejdź do panelu administratora',
    ],

    'install_success' => 'Zainstalowano pomyślnie!',

    'install_step_title' => 'Instalacja - Krok :step: :title',
];
