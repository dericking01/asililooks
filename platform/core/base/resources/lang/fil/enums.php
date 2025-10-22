<?php

return [
    'statuses' => [
        'draft' => 'Draft',
        'pending' => 'Nakabinbin',
        'published' => 'Nai-publish',
    ],
    'system_updater_steps' => [
        'download' => 'I-download ang mga update files',
        'update_files' => 'I-update ang mga system files',
        'update_database' => 'I-update ang mga databases',
        'publish_core_assets' => 'I-publish ang mga core assets',
        'publish_packages_assets' => 'I-publish ang mga packages assets',
        'clean_up' => 'Linisin ang mga system update files',
        'done' => 'Matagumpay na na-update ang sistema',

        'messages' => [
            'download' => 'Nag-download ng mga update files...',
            'update_files' => 'Nag-a-update ng mga system files...',
            'update_database' => 'Nag-a-update ng mga databases...',
            'publish_core_assets' => 'Nag-p-publish ng mga core assets...',
            'publish_packages_assets' => 'Nag-p-publish ng mga packages assets...',
            'clean_up' => 'Nag-l-linis ng mga system update files...',
            'done' => 'Tapos na! Ang iyong browser ay mare-refresh sa loob ng 30 segundo.',
        ],

        'failed_messages' => [
            'download' => 'Hindi ma-download ang mga update files',
            'update_files' => 'Hindi ma-update ang mga system files',
            'update_database' => 'Hindi ma-update ang mga databases',
            'publish_core_assets' => 'Hindi ma-publish ang mga core assets',
            'publish_packages_assets' => 'Hindi ma-publish ang mga packages assets',
            'clean_up' => 'Hindi malinis ang mga system update files',
        ],

        'success_messages' => [
            'download' => 'Matagumpay na na-download ang mga update files.',
            'update_files' => 'Matagumpay na na-update ang mga system files.',
            'update_database' => 'Matagumpay na na-update ang mga databases.',
            'publish_core_assets' => 'Matagumpay na na-publish ang mga core assets.',
            'publish_packages_assets' => 'Matagumpay na na-publish ang mga packages assets.',
            'clean_up' => 'Matagumpay na nalinis ang mga system update files.',
        ],
    ],
];
