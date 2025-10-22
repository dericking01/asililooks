<?php

return [
    'statuses' => [
        'draft' => 'Osnutek',
        'pending' => 'V čakanju',
        'published' => 'Objavljeno',
    ],
    'system_updater_steps' => [
        'download' => 'Prenesi datoteke posodobitve',
        'update_files' => 'Posodobi sistemske datoteke',
        'update_database' => 'Posodobi podatkovno bazo',
        'publish_core_assets' => 'Objavi osnovne vire',
        'publish_packages_assets' => 'Objavi vire paketov',
        'clean_up' => 'Počisti datoteke posodobitve sistema',
        'done' => 'Sistem uspešno posodobljen',

        'messages' => [
            'download' => 'Prenašanje datotek posodobitve...',
            'update_files' => 'Posodabljanje sistemskih datotek...',
            'update_database' => 'Posodabljanje podatkovnih baz...',
            'publish_core_assets' => 'Objavljanje osnovnih virov...',
            'publish_packages_assets' => 'Objavljanje virov paketov...',
            'clean_up' => 'Čiščenje datotek posodobitve sistema...',
            'done' => 'Končano! Vaš brskalnik bo osvežen čez 30 sekund.',
        ],

        'failed_messages' => [
            'download' => 'Ni bilo mogoče prenesti datotek posodobitve',
            'update_files' => 'Ni bilo mogoče posodobiti sistemskih datotek',
            'update_database' => 'Ni bilo mogoče posodobiti podatkovnih baz',
            'publish_core_assets' => 'Ni bilo mogoče objaviti osnovnih virov',
            'publish_packages_assets' => 'Ni bilo mogoče objaviti virov paketov',
            'clean_up' => 'Ni bilo mogoče počistiti datotek posodobitve sistema',
        ],

        'success_messages' => [
            'download' => 'Datoteke posodobitve uspešno prenesene.',
            'update_files' => 'Sistemske datoteke uspešno posodobljene.',
            'update_database' => 'Podatkovne baze uspešno posodobljene.',
            'publish_core_assets' => 'Osnovni viri uspešno objavljeni.',
            'publish_packages_assets' => 'Viri paketov uspešno objavljeni.',
            'clean_up' => 'Datoteke posodobitve sistema uspešno počiščene.',
        ],
    ],
];
