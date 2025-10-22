<?php

return [

    /**
     *
     * Shared translations.
     *
     */
    'title' => 'Инсталација',
    'next' => 'Следећи корак',
    'back' => 'Претходни',
    'finish' => 'Инсталирај',
    'installation' => 'Инсталација',
    'forms' => [
        'errorTitle' => 'Дошло је до следећих грешака:',
    ],

    /**
     *
     * Home page translations.
     *
     */
    'welcome' => [
        'title' => 'Добродошли',
        'message' => 'Пре него што почнемо, потребне су нам неке информације о бази података. Морате знати следеће ставке пре него што наставите.',
        'language' => 'Језик',
        'next' => 'Почнимо',
    ],

    /**
     *
     * Requirements page translations.
     *
     */
    'requirements' => [
        'title' => 'Захтеви сервера',
        'next' => 'Провери дозволе',
    ],

    /**
     *
     * Permissions page translations.
     *
     */
    'permissions' => [
        'next' => 'Конфигуриши окружење',
    ],

    /**
     *
     * Environment page translations.
     *
     */
    'environment' => [
        'wizard' => [
            'title' => 'Подешавања окружења',
            'form' => [
                'name_required' => 'Назив окружења је обавезан.',
                'app_name_label' => 'Наслов сајта',
                'app_name_placeholder' => 'Наслов сајта',
                'app_url_label' => 'URL',
                'app_url_placeholder' => 'URL',
                'db_connection_label' => 'Веза са базом података',
                'db_connection_label_mysql' => 'MySQL',
                'db_connection_label_sqlite' => 'SQLite',
                'db_connection_label_pgsql' => 'PostgreSQL',
                'db_host_label' => 'Хост базе података',
                'db_host_placeholder' => 'Хост базе података',
                'db_port_label' => 'Порт базе података',
                'db_port_placeholder' => 'Порт базе података',
                'db_name_label' => 'Назив базе података',
                'db_name_placeholder' => 'Назив базе података',
                'db_username_label' => 'Корисничко име базе података',
                'db_username_placeholder' => 'Корисничко име базе података',
                'db_password_label' => 'Лозинка базе података',
                'db_password_placeholder' => 'Лозинка базе података',
                'buttons' => [
                    'install' => 'Инсталирај',
                ],
                'db_host_helper' => 'Ако користите Laravel Sail, једноставно промените DB_HOST у DB_HOST=mysql. На неким хостинзима DB_HOST може бити localhost уместо 127.0.0.1',
                'db_connections' => [
                    'mysql' => 'MySQL',
                    'sqlite' => 'SQLite',
                    'pgsql' => 'PostgreSQL',
                ],
            ],
        ],
        'success' => 'Подешавања вашег .env фајла су сачувана.',
        'errors' => 'Није могуће сачувати .env фајл, молимо направите га ручно.',
    ],

    'theme' => [
        'title' => 'Изаберите тему',
        'message' => 'Изаберите тему да персонализујете изглед ваше веб странице. Овај избор ће такође увести примере података прилагођених изабраној теми.',
    ],

    'theme_preset' => [
        'title' => 'Изаберите предефинисану тему',
        'message' => 'Изаберите предефинисану тему да персонализујете изглед ваше веб странице. Овај избор ће такође увести примере података прилагођених изабраној теми.',
    ],

    /**
     * Create account page.
     */
    'createAccount' => [
        'title' => 'Направи налог',
        'form' => [
            'first_name' => 'Име',
            'last_name' => 'Презиме',
            'username' => 'Корисничко име',
            'email' => 'Имејл',
            'password' => 'Лозинка',
            'password_confirmation' => 'Потврда лозинке',
            'create' => 'Направи',
        ],
    ],

    /**
     * License page.
     */

    'license' => [
        'title' => 'Активирај лиценцу',
        'skip' => 'Прескочи за сада',
    ],

    'install' => 'Инсталирај',

    'final' => [
        'pageTitle' => 'Инсталација завршена',
        'title' => 'Готово',
        'message' => 'Апликација је успешно инсталирана.',
        'exit' => 'Иди на админ контролну таблу',
    ],

    'install_success' => 'Успешно инсталирано!',

    'install_step_title' => 'Инсталација - Корак :step: :title',
];
