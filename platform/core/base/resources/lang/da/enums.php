<?php

return [
    'statuses' => [
        'draft' => 'Kladde',
        'pending' => 'Afventende',
        'published' => 'Udgivet',
    ],
    'system_updater_steps' => [
        'download' => 'Download opdateringsfiler',
        'update_files' => 'Opdater systemfiler',
        'update_database' => 'Opdater databaser',
        'publish_core_assets' => 'Udgiv kerneaktiver',
        'publish_packages_assets' => 'Udgiv pakkeaktiver',
        'clean_up' => 'Ryd op i systemopdateringsfiler',
        'done' => 'System opdateret',

        'messages' => [
            'download' => 'Downloader opdateringsfiler...',
            'update_files' => 'Opdaterer systemfiler...',
            'update_database' => 'Opdaterer databaser...',
            'publish_core_assets' => 'Udgiver kerneaktiver...',
            'publish_packages_assets' => 'Udgiver pakkeaktiver...',
            'clean_up' => 'Rydder op i systemopdateringsfiler...',
            'done' => 'Færdig! Din browser vil blive genindlæst om 30 sekunder.',
        ],

        'failed_messages' => [
            'download' => 'Kunne ikke downloade opdateringsfiler',
            'update_files' => 'Kunne ikke opdatere systemfiler',
            'update_database' => 'Kunne ikke opdatere databaser',
            'publish_core_assets' => 'Kunne ikke udgive kerneaktiver',
            'publish_packages_assets' => 'Kunne ikke udgive pakkeaktiver',
            'clean_up' => 'Kunne ikke rydde op i systemopdateringsfiler',
        ],

        'success_messages' => [
            'download' => 'Opdateringsfiler downloadet.',
            'update_files' => 'Systemfiler opdateret.',
            'update_database' => 'Databaser opdateret.',
            'publish_core_assets' => 'Kerneaktiver udgivet.',
            'publish_packages_assets' => 'Pakkeaktiver udgivet.',
            'clean_up' => 'Systemopdateringsfiler ryddet op.',
        ],
    ],
];
