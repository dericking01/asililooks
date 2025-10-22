<?php

return [

    /**
     *
     * Shared translations.
     *
     */
    'title' => 'ინსტალაცია',
    'next' => 'შემდეგი ნაბიჯი',
    'back' => 'წინა',
    'finish' => 'ინსტალაცია',
    'installation' => 'ინსტალაცია',
    'forms' => [
        'errorTitle' => 'მოხდა შემდეგი შეცდომები:',
    ],

    /**
     *
     * Home page translations.
     *
     */
    'welcome' => [
        'title' => 'კეთილი იყოს თქვენი მობრძანება',
        'message' => 'დაწყებამდე, ჩვენ გვჭირდება ინფორმაცია მონაცემთა ბაზის შესახებ. თქვენ უნდა იცოდეთ შემდეგი ელემენტები გაგრძელებამდე.',
        'language' => 'ენა',
        'next' => 'დავიწყოთ',
    ],

    /**
     *
     * Requirements page translations.
     *
     */
    'requirements' => [
        'title' => 'სერვერის მოთხოვნები',
        'next' => 'შეამოწმეთ ნებართვები',
    ],

    /**
     *
     * Permissions page translations.
     *
     */
    'permissions' => [
        'next' => 'გარემოს კონფიგურაცია',
    ],

    /**
     *
     * Environment page translations.
     *
     */
    'environment' => [
        'wizard' => [
            'title' => 'გარემოს პარამეტრები',
            'form' => [
                'name_required' => 'გარემოს სახელი აუცილებელია.',
                'app_name_label' => 'საიტის სათაური',
                'app_name_placeholder' => 'საიტის სათაური',
                'app_url_label' => 'URL',
                'app_url_placeholder' => 'URL',
                'db_connection_label' => 'მონაცემთა ბაზის კავშირი',
                'db_connection_label_mysql' => 'MySQL',
                'db_connection_label_sqlite' => 'SQLite',
                'db_connection_label_pgsql' => 'PostgreSQL',
                'db_host_label' => 'მონაცემთა ბაზის ჰოსტი',
                'db_host_placeholder' => 'მონაცემთა ბაზის ჰოსტი',
                'db_port_label' => 'მონაცემთა ბაზის პორტი',
                'db_port_placeholder' => 'მონაცემთა ბაზის პორტი',
                'db_name_label' => 'მონაცემთა ბაზის სახელი',
                'db_name_placeholder' => 'მონაცემთა ბაზის სახელი',
                'db_username_label' => 'მონაცემთა ბაზის მომხმარებლის სახელი',
                'db_username_placeholder' => 'მონაცემთა ბაზის მომხმარებლის სახელი',
                'db_password_label' => 'მონაცემთა ბაზის პაროლი',
                'db_password_placeholder' => 'მონაცემთა ბაზის პაროლი',
                'buttons' => [
                    'install' => 'ინსტალაცია',
                ],
                'db_host_helper' => 'თუ იყენებთ Laravel Sail-ს, უბრალოდ შეცვალეთ DB_HOST DB_HOST=mysql-ზე. ზოგიერთ ჰოსტინგზე DB_HOST შეიძლება იყოს localhost 127.0.0.1-ის ნაცვლად',
                'db_connections' => [
                    'mysql' => 'MySQL',
                    'sqlite' => 'SQLite',
                    'pgsql' => 'PostgreSQL',
                ],
            ],
        ],
        'success' => 'თქვენი .env ფაილის პარამეტრები შენახულია.',
        'errors' => '.env ფაილის შენახვა შეუძლებელია, გთხოვთ შექმნათ იგი ხელით.',
    ],

    'theme' => [
        'title' => 'აირჩიეთ თემა',
        'message' => 'აირჩიეთ თემა თქვენი ვებსაიტის გარეგნობის პერსონალიზაციისთვის. ეს არჩევანი ასევე იმპორტირებს ნიმუშის მონაცემებს, რომლებიც მორგებულია არჩეულ თემაზე.',
    ],

    'theme_preset' => [
        'title' => 'აირჩიეთ თემის პრესეტი',
        'message' => 'აირჩიეთ თემის პრესეტი თქვენი ვებსაიტის გარეგნობის პერსონალიზაციისთვის. ეს არჩევანი ასევე იმპორტირებს ნიმუშის მონაცემებს, რომლებიც მორგებულია არჩეულ თემაზე.',
    ],

    /**
     * Create account page.
     */
    'createAccount' => [
        'title' => 'შექმენით ანგარიში',
        'form' => [
            'first_name' => 'სახელი',
            'last_name' => 'გვარი',
            'username' => 'მომხმარებლის სახელი',
            'email' => 'ელფოსტა',
            'password' => 'პაროლი',
            'password_confirmation' => 'პაროლის დადასტურება',
            'create' => 'შექმნა',
        ],
    ],

    /**
     * License page.
     */

    'license' => [
        'title' => 'ლიცენზიის გააქტიურება',
        'skip' => 'გამოტოვება ახლა',
    ],

    'install' => 'ინსტალაცია',

    'final' => [
        'pageTitle' => 'ინსტალაცია დასრულებულია',
        'title' => 'დასრულდა',
        'message' => 'აპლიკაცია წარმატებით დაინსტალირდა.',
        'exit' => 'გადასვლა ადმინის დაფაზე',
    ],

    'install_success' => 'წარმატებით დაინსტალირდა!',

    'install_step_title' => 'ინსტალაცია - ნაბიჯი :step: :title',
];
