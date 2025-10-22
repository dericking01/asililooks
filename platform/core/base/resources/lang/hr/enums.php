<?php

return [
    'statuses' => [
        'draft' => 'Nacrt',
        'pending' => 'Na čekanju',
        'published' => 'Objavljeno',
    ],
    'system_updater_steps' => [
        'download' => 'Preuzmi datoteke ažuriranja',
        'update_files' => 'Ažuriraj datoteke sustava',
        'update_database' => 'Ažuriraj baze podataka',
        'publish_core_assets' => 'Objavi osnovne resurse',
        'publish_packages_assets' => 'Objavi resurse paketa',
        'clean_up' => 'Očisti datoteke ažuriranja sustava',
        'done' => 'Sustav uspješno ažuriran',

        'messages' => [
            'download' => 'Preuzimanje datoteka ažuriranja...',
            'update_files' => 'Ažuriranje datoteka sustava...',
            'update_database' => 'Ažuriranje baza podataka...',
            'publish_core_assets' => 'Objavljivanje osnovnih resursa...',
            'publish_packages_assets' => 'Objavljivanje resursa paketa...',
            'clean_up' => 'Čišćenje datoteka ažuriranja sustava...',
            'done' => 'Gotovo! Vaš preglednik će se osvježiti za 30 sekundi.',
        ],

        'failed_messages' => [
            'download' => 'Nije moguće preuzeti datoteke ažuriranja',
            'update_files' => 'Nije moguće ažurirati datoteke sustava',
            'update_database' => 'Nije moguće ažurirati baze podataka',
            'publish_core_assets' => 'Nije moguće objaviti osnovne resurse',
            'publish_packages_assets' => 'Nije moguće objaviti resurse paketa',
            'clean_up' => 'Nije moguće očistiti datoteke ažuriranja sustava',
        ],

        'success_messages' => [
            'download' => 'Datoteke ažuriranja uspješno preuzete.',
            'update_files' => 'Datoteke sustava uspješno ažurirane.',
            'update_database' => 'Baze podataka uspješno ažurirane.',
            'publish_core_assets' => 'Osnovni resursi uspješno objavljeni.',
            'publish_packages_assets' => 'Resursi paketa uspješno objavljeni.',
            'clean_up' => 'Datoteke ažuriranja sustava uspješno očišćene.',
        ],
    ],
];
