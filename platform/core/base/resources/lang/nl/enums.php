<?php

return [
    'statuses' => [
        'draft' => 'Klad',
        'pending' => 'In Afwachting',
        'published' => 'Gepubliceerd',
    ],
    'system_updater_steps' => [
        'download' => 'Update bestanden downloaden',
        'update_files' => 'Systeembestanden bijwerken',
        'update_database' => 'Databases bijwerken',
        'publish_core_assets' => 'Core assets publiceren',
        'publish_packages_assets' => 'Package assets publiceren',
        'clean_up' => 'Update bestanden opschonen',
        'done' => 'Systeem succesvol bijgewerkt',

        'messages' => [
            'download' => 'Update bestanden downloaden...',
            'update_files' => 'Systeembestanden bijwerken...',
            'update_database' => 'Databases bijwerken...',
            'publish_core_assets' => 'Core assets publiceren...',
            'publish_packages_assets' => 'Package assets publiceren...',
            'clean_up' => 'Update bestanden opschonen...',
            'done' => 'Klaar! Uw browser wordt over 30 seconden vernieuwd.',
        ],

        'failed_messages' => [
            'download' => 'Kon update bestanden niet downloaden',
            'update_files' => 'Kon systeembestanden niet bijwerken',
            'update_database' => 'Kon databases niet bijwerken',
            'publish_core_assets' => 'Kon core assets niet publiceren',
            'publish_packages_assets' => 'Kon package assets niet publiceren',
            'clean_up' => 'Kon update bestanden niet opschonen',
        ],

        'success_messages' => [
            'download' => 'Update bestanden succesvol gedownload.',
            'update_files' => 'Systeembestanden succesvol bijgewerkt.',
            'update_database' => 'Databases succesvol bijgewerkt.',
            'publish_core_assets' => 'Core assets succesvol gepubliceerd.',
            'publish_packages_assets' => 'Package assets succesvol gepubliceerd.',
            'clean_up' => 'Update bestanden succesvol opgeschoond.',
        ],
    ],
];
