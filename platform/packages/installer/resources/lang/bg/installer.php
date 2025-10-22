<?php

return [

    /**
     *
     * Shared translations.
     *
     */
    'title' => 'Инсталация',
    'next' => 'Следваща стъпка',
    'back' => 'Предишна',
    'finish' => 'Инсталирай',
    'installation' => 'Инсталация',
    'forms' => [
        'errorTitle' => 'Възникнаха следните грешки:',
    ],

    /**
     *
     * Home page translations.
     *
     */
    'welcome' => [
        'title' => 'Добре дошли',
        'message' => 'Преди да започнем, имаме нужда от информация за базата данни. Ще трябва да знаете следните елементи преди да продължите.',
        'language' => 'Език',
        'next' => 'Да започваме',
    ],

    /**
     *
     * Requirements page translations.
     *
     */
    'requirements' => [
        'title' => 'Изисквания на сървъра',
        'next' => 'Проверка на разрешенията',
    ],

    /**
     *
     * Permissions page translations.
     *
     */
    'permissions' => [
        'next' => 'Конфигуриране на средата',
    ],

    /**
     *
     * Environment page translations.
     *
     */
    'environment' => [
        'wizard' => [
            'title' => 'Настройки на средата',
            'form' => [
                'name_required' => 'Изисква се име на среда.',
                'app_name_label' => 'Заглавие на сайта',
                'app_name_placeholder' => 'Заглавие на сайта',
                'app_url_label' => 'URL',
                'app_url_placeholder' => 'URL',
                'db_connection_label' => 'Връзка с база данни',
                'db_connection_label_mysql' => 'MySQL',
                'db_connection_label_sqlite' => 'SQLite',
                'db_connection_label_pgsql' => 'PostgreSQL',
                'db_host_label' => 'Хост на базата данни',
                'db_host_placeholder' => 'Хост на базата данни',
                'db_port_label' => 'Порт на базата данни',
                'db_port_placeholder' => 'Порт на базата данни',
                'db_name_label' => 'Име на базата данни',
                'db_name_placeholder' => 'Име на базата данни',
                'db_username_label' => 'Потребителско име на базата данни',
                'db_username_placeholder' => 'Потребителско име на базата данни',
                'db_password_label' => 'Парола на базата данни',
                'db_password_placeholder' => 'Парола на базата данни',
                'buttons' => [
                    'install' => 'Инсталирай',
                ],
                'db_host_helper' => 'Ако използвате Laravel Sail, просто променете DB_HOST на DB_HOST=mysql. При някои хостинги DB_HOST може да бъде localhost вместо 127.0.0.1',
                'db_connections' => [
                    'mysql' => 'MySQL',
                    'sqlite' => 'SQLite',
                    'pgsql' => 'PostgreSQL',
                ],
            ],
        ],
        'success' => 'Настройките на вашия .env файл са запазени.',
        'errors' => 'Не може да се запази .env файлът, моля създайте го ръчно.',
    ],

    'theme' => [
        'title' => 'Изберете тема',
        'message' => 'Изберете тема, за да персонализирате външния вид на вашия уебсайт. Този избор също ще импортира примерни данни, адаптирани към избраната тема.',
    ],

    'theme_preset' => [
        'title' => 'Изберете предварително зададена тема',
        'message' => 'Изберете предварително зададена тема, за да персонализирате външния вид на вашия уебсайт. Този избор също ще импортира примерни данни, адаптирани към избраната тема.',
    ],

    /**
     * Create account page.
     */
    'createAccount' => [
        'title' => 'Създай акаунт',
        'form' => [
            'first_name' => 'Име',
            'last_name' => 'Фамилия',
            'username' => 'Потребителско име',
            'email' => 'Имейл',
            'password' => 'Парола',
            'password_confirmation' => 'Потвърждение на паролата',
            'create' => 'Създай',
        ],
    ],

    /**
     * License page.
     */

    'license' => [
        'title' => 'Активирай лиценз',
        'skip' => 'Пропусни засега',
    ],

    'install' => 'Инсталирай',

    'final' => [
        'pageTitle' => 'Инсталацията приключи',
        'title' => 'Готово',
        'message' => 'Приложението е успешно инсталирано.',
        'exit' => 'Отиди в административния панел',
    ],

    'install_success' => 'Инсталирано успешно!',

    'install_step_title' => 'Инсталация - Стъпка :step: :title',
];
