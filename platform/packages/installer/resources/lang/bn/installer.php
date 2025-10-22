<?php

return [

    /**
     *
     * Shared translations.
     *
     */
    'title' => 'ইনস্টলেশন',
    'next' => 'পরবর্তী ধাপ',
    'back' => 'পূর্ববর্তী',
    'finish' => 'ইনস্টল করুন',
    'installation' => 'ইনস্টলেশন',
    'forms' => [
        'errorTitle' => 'নিম্নলিখিত ত্রুটি ঘটেছে:',
    ],

    /**
     *
     * Home page translations.
     *
     */
    'welcome' => [
        'title' => 'স্বাগতম',
        'message' => 'শুরু করার আগে, আমাদের ডাটাবেস সম্পর্কে কিছু তথ্যের প্রয়োজন। এগিয়ে যাওয়ার আগে আপনাকে নিম্নলিখিত আইটেমগুলি জানতে হবে।',
        'language' => 'ভাষা',
        'next' => 'চলুন শুরু করি',
    ],

    /**
     *
     * Requirements page translations.
     *
     */
    'requirements' => [
        'title' => 'সার্ভারের প্রয়োজনীয়তা',
        'next' => 'অনুমতি পরীক্ষা করুন',
    ],

    /**
     *
     * Permissions page translations.
     *
     */
    'permissions' => [
        'next' => 'পরিবেশ কনফিগার করুন',
    ],

    /**
     *
     * Environment page translations.
     *
     */
    'environment' => [
        'wizard' => [
            'title' => 'পরিবেশ সেটিংস',
            'form' => [
                'name_required' => 'একটি পরিবেশের নাম প্রয়োজন।',
                'app_name_label' => 'সাইট শিরোনাম',
                'app_name_placeholder' => 'সাইট শিরোনাম',
                'app_url_label' => 'URL',
                'app_url_placeholder' => 'URL',
                'db_connection_label' => 'ডাটাবেস সংযোগ',
                'db_connection_label_mysql' => 'MySQL',
                'db_connection_label_sqlite' => 'SQLite',
                'db_connection_label_pgsql' => 'PostgreSQL',
                'db_host_label' => 'ডাটাবেস হোস্ট',
                'db_host_placeholder' => 'ডাটাবেস হোস্ট',
                'db_port_label' => 'ডাটাবেস পোর্ট',
                'db_port_placeholder' => 'ডাটাবেস পোর্ট',
                'db_name_label' => 'ডাটাবেসের নাম',
                'db_name_placeholder' => 'ডাটাবেসের নাম',
                'db_username_label' => 'ডাটাবেস ইউজারনেম',
                'db_username_placeholder' => 'ডাটাবেস ইউজারনেম',
                'db_password_label' => 'ডাটাবেস পাসওয়ার্ড',
                'db_password_placeholder' => 'ডাটাবেস পাসওয়ার্ড',
                'buttons' => [
                    'install' => 'ইনস্টল করুন',
                ],
                'db_host_helper' => 'আপনি যদি Laravel Sail ব্যবহার করেন, তাহলে শুধু DB_HOST কে DB_HOST=mysql এ পরিবর্তন করুন। কিছু হোস্টিং-এ DB_HOST 127.0.0.1 এর পরিবর্তে localhost হতে পারে',
                'db_connections' => [
                    'mysql' => 'MySQL',
                    'sqlite' => 'SQLite',
                    'pgsql' => 'PostgreSQL',
                ],
            ],
        ],
        'success' => 'আপনার .env ফাইল সেটিংস সংরক্ষিত হয়েছে।',
        'errors' => '.env ফাইল সংরক্ষণ করতে অক্ষম, অনুগ্রহ করে এটি ম্যানুয়ালি তৈরি করুন।',
    ],

    'theme' => [
        'title' => 'থিম নির্বাচন করুন',
        'message' => 'আপনার ওয়েবসাইটের চেহারা ব্যক্তিগতকৃত করতে একটি থিম নির্বাচন করুন। এই নির্বাচন নির্বাচিত থিমের জন্য তৈরি নমুনা ডেটাও আমদানি করবে।',
    ],

    'theme_preset' => [
        'title' => 'থিম প্রিসেট নির্বাচন করুন',
        'message' => 'আপনার ওয়েবসাইটের চেহারা ব্যক্তিগতকৃত করতে একটি থিম প্রিসেট নির্বাচন করুন। এই নির্বাচন নির্বাচিত থিমের জন্য তৈরি নমুনা ডেটাও আমদানি করবে।',
    ],

    /**
     * Create account page.
     */
    'createAccount' => [
        'title' => 'অ্যাকাউন্ট তৈরি করুন',
        'form' => [
            'first_name' => 'প্রথম নাম',
            'last_name' => 'শেষ নাম',
            'username' => 'ইউজারনেম',
            'email' => 'ইমেইল',
            'password' => 'পাসওয়ার্ড',
            'password_confirmation' => 'পাসওয়ার্ড নিশ্চিতকরণ',
            'create' => 'তৈরি করুন',
        ],
    ],

    /**
     * License page.
     */

    'license' => [
        'title' => 'লাইসেন্স সক্রিয় করুন',
        'skip' => 'আপাতত এড়িয়ে যান',
    ],

    'install' => 'ইনস্টল করুন',

    'final' => [
        'pageTitle' => 'ইনস্টলেশন সম্পন্ন',
        'title' => 'সম্পন্ন',
        'message' => 'অ্যাপ্লিকেশন সফলভাবে ইনস্টল করা হয়েছে।',
        'exit' => 'অ্যাডমিন ড্যাশবোর্ডে যান',
    ],

    'install_success' => 'সফলভাবে ইনস্টল হয়েছে!',

    'install_step_title' => 'ইনস্টলেশন - ধাপ :step: :title',
];
