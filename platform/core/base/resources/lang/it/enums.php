<?php

return [
    'statuses' => [
        'draft' => 'Bozza',
        'pending' => 'In attesa',
        'published' => 'Pubblicato',
    ],
    'system_updater_steps' => [
        'download' => 'Scarica file di aggiornamento',
        'update_files' => 'Aggiorna file di sistema',
        'update_database' => 'Aggiorna database',
        'publish_core_assets' => 'Pubblica risorse core',
        'publish_packages_assets' => 'Pubblica risorse pacchetti',
        'clean_up' => 'Pulisci file di aggiornamento del sistema',
        'done' => 'Sistema aggiornato con successo',

        'messages' => [
            'download' => 'Download file di aggiornamento...',
            'update_files' => 'Aggiornamento file di sistema...',
            'update_database' => 'Aggiornamento database...',
            'publish_core_assets' => 'Pubblicazione risorse core...',
            'publish_packages_assets' => 'Pubblicazione risorse pacchetti...',
            'clean_up' => 'Pulizia file di aggiornamento del sistema...',
            'done' => 'Fatto! Il browser verrà aggiornato tra 30 secondi.',
        ],

        'failed_messages' => [
            'download' => 'Impossibile scaricare i file di aggiornamento',
            'update_files' => 'Impossibile aggiornare i file di sistema',
            'update_database' => 'Impossibile aggiornare i database',
            'publish_core_assets' => 'Impossibile pubblicare le risorse core',
            'publish_packages_assets' => 'Impossibile pubblicare le risorse dei pacchetti',
            'clean_up' => 'Impossibile pulire i file di aggiornamento del sistema',
        ],

        'success_messages' => [
            'download' => 'File di aggiornamento scaricati con successo.',
            'update_files' => 'File di sistema aggiornati con successo.',
            'update_database' => 'Database aggiornati con successo.',
            'publish_core_assets' => 'Risorse core pubblicate con successo.',
            'publish_packages_assets' => 'Risorse pacchetti pubblicate con successo.',
            'clean_up' => 'File di aggiornamento del sistema puliti con successo.',
        ],
    ],
];
