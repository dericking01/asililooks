<?php

return [
    'statuses' => [
        'draft' => 'Utkast',
        'pending' => 'Venter',
        'published' => 'Publisert',
    ],
    'system_updater_steps' => [
        'download' => 'Last ned oppdateringsfiler',
        'update_files' => 'Oppdater systemfiler',
        'update_database' => 'Oppdater databaser',
        'publish_core_assets' => 'Publiser kjerneressurser',
        'publish_packages_assets' => 'Publiser pakkeressurser',
        'clean_up' => 'Rydd opp i systemoppdateringsfiler',
        'done' => 'System oppdatert',

        'messages' => [
            'download' => 'Laster ned oppdateringsfiler...',
            'update_files' => 'Oppdaterer systemfiler...',
            'update_database' => 'Oppdaterer databaser...',
            'publish_core_assets' => 'Publiserer kjerneressurser...',
            'publish_packages_assets' => 'Publiserer pakkeressurser...',
            'clean_up' => 'Rydder opp i systemoppdateringsfiler...',
            'done' => 'Ferdig! Nettleseren din vil bli oppdatert om 30 sekunder.',
        ],

        'failed_messages' => [
            'download' => 'Kunne ikke laste ned oppdateringsfiler',
            'update_files' => 'Kunne ikke oppdatere systemfiler',
            'update_database' => 'Kunne ikke oppdatere databaser',
            'publish_core_assets' => 'Kunne ikke publisere kjerneressurser',
            'publish_packages_assets' => 'Kunne ikke publisere pakkeressurser',
            'clean_up' => 'Kunne ikke rydde opp i systemoppdateringsfiler',
        ],

        'success_messages' => [
            'download' => 'Lastet ned oppdateringsfiler.',
            'update_files' => 'Oppdaterte systemfiler.',
            'update_database' => 'Oppdaterte databaser.',
            'publish_core_assets' => 'Publiserte kjerneressurser.',
            'publish_packages_assets' => 'Publiserte pakkeressurser.',
            'clean_up' => 'Ryddet opp i systemoppdateringsfiler.',
        ],
    ],
];
