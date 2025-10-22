<?php

return [

    /**
     *
     * Shared translations.
     *
     */
    'title' => 'Установка',
    'next' => 'Следующий шаг',
    'back' => 'Предыдущий',
    'finish' => 'Установить',
    'installation' => 'Установка',
    'forms' => [
        'errorTitle' => 'Произошли следующие ошибки:',
    ],

    /**
     *
     * Home page translations.
     *
     */
    'welcome' => [
        'title' => 'Добро пожаловать',
        'message' => 'Прежде чем начать, нам нужна информация о базе данных. Вам нужно знать следующие элементы перед продолжением.',
        'language' => 'Язык',
        'next' => 'Начнём',
    ],

    /**
     *
     * Requirements page translations.
     *
     */
    'requirements' => [
        'title' => 'Требования к серверу',
        'next' => 'Проверить разрешения',
    ],

    /**
     *
     * Permissions page translations.
     *
     */
    'permissions' => [
        'next' => 'Настроить окружение',
    ],

    /**
     *
     * Environment page translations.
     *
     */
    'environment' => [
        'wizard' => [
            'title' => 'Настройки окружения',
            'form' => [
                'name_required' => 'Требуется имя окружения.',
                'app_name_label' => 'Название сайта',
                'app_name_placeholder' => 'Название сайта',
                'app_url_label' => 'URL',
                'app_url_placeholder' => 'URL',
                'db_connection_label' => 'Подключение к базе данных',
                'db_connection_label_mysql' => 'MySQL',
                'db_connection_label_sqlite' => 'SQLite',
                'db_connection_label_pgsql' => 'PostgreSQL',
                'db_host_label' => 'Хост базы данных',
                'db_host_placeholder' => 'Хост базы данных',
                'db_port_label' => 'Порт базы данных',
                'db_port_placeholder' => 'Порт базы данных',
                'db_name_label' => 'Имя базы данных',
                'db_name_placeholder' => 'Имя базы данных',
                'db_username_label' => 'Имя пользователя базы данных',
                'db_username_placeholder' => 'Имя пользователя базы данных',
                'db_password_label' => 'Пароль базы данных',
                'db_password_placeholder' => 'Пароль базы данных',
                'buttons' => [
                    'install' => 'Установить',
                ],
                'db_host_helper' => 'Если вы используете Laravel Sail, просто измените DB_HOST на DB_HOST=mysql. На некоторых хостингах DB_HOST может быть localhost вместо 127.0.0.1',
                'db_connections' => [
                    'mysql' => 'MySQL',
                    'sqlite' => 'SQLite',
                    'pgsql' => 'PostgreSQL',
                ],
            ],
        ],
        'success' => 'Настройки вашего файла .env сохранены.',
        'errors' => 'Не удалось сохранить файл .env, пожалуйста, создайте его вручную.',
    ],

    'theme' => [
        'title' => 'Выберите тему',
        'message' => 'Выберите тему для персонализации внешнего вида вашего сайта. Этот выбор также импортирует примеры данных, адаптированные к выбранной теме.',
    ],

    'theme_preset' => [
        'title' => 'Выберите предустановку темы',
        'message' => 'Выберите предустановку темы для персонализации внешнего вида вашего сайта. Этот выбор также импортирует примеры данных, адаптированные к выбранной теме.',
    ],

    /**
     * Create account page.
     */
    'createAccount' => [
        'title' => 'Создать учетную запись',
        'form' => [
            'first_name' => 'Имя',
            'last_name' => 'Фамилия',
            'username' => 'Имя пользователя',
            'email' => 'Email',
            'password' => 'Пароль',
            'password_confirmation' => 'Подтверждение пароля',
            'create' => 'Создать',
        ],
    ],

    /**
     * License page.
     */

    'license' => [
        'title' => 'Активировать лицензию',
        'skip' => 'Пропустить пока',
    ],

    'install' => 'Установить',

    'final' => [
        'pageTitle' => 'Установка завершена',
        'title' => 'Готово',
        'message' => 'Приложение успешно установлено.',
        'exit' => 'Перейти в панель администратора',
    ],

    'install_success' => 'Успешно установлено!',

    'install_step_title' => 'Установка - Шаг :step: :title',
];
