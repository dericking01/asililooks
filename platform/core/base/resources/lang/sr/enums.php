<?php

return [
    'statuses' => [
        'draft' => 'Nacrt',
        'pending' => 'Na čekanju',
        'published' => 'Objavljeno',
    ],
    'system_updater_steps' => [
        'download' => 'Preuzmite fajlove ažuriranja',
        'update_files' => 'Ažurirajte sistemske fajlove',
        'update_database' => 'Ažurirajte baze podataka',
        'publish_core_assets' => 'Objavite osnovne resurse',
        'publish_packages_assets' => 'Objavite resurse paketa',
        'clean_up' => 'Očistite fajlove sistemskog ažuriranja',
        'done' => 'Sistem uspešno ažuriran',

        'messages' => [
            'download' => 'Preuzimanje fajlova ažuriranja...',
            'update_files' => 'Ažuriranje sistemskih fajlova...',
            'update_database' => 'Ažuriranje baza podataka...',
            'publish_core_assets' => 'Objavljivanje osnovnih resursa...',
            'publish_packages_assets' => 'Objavljivanje resursa paketa...',
            'clean_up' => 'Čišćenje fajlova sistemskog ažuriranja...',
            'done' => 'Gotovo! Vaš pretraživač će biti osvežen za 30 sekundi.',
        ],

        'failed_messages' => [
            'download' => 'Nije moguće preuzeti fajlove ažuriranja',
            'update_files' => 'Nije moguće ažurirati sistemske fajlove',
            'update_database' => 'Nije moguće ažurirati baze podataka',
            'publish_core_assets' => 'Nije moguće objaviti osnovne resurse',
            'publish_packages_assets' => 'Nije moguće objaviti resurse paketa',
            'clean_up' => 'Nije moguće očistiti fajlove sistemskog ažuriranja',
        ],

        'success_messages' => [
            'download' => 'Fajlovi ažuriranja uspešno preuzeti.',
            'update_files' => 'Sistemski fajlovi uspešno ažurirani.',
            'update_database' => 'Baze podataka uspešno ažurirane.',
            'publish_core_assets' => 'Osnovni resursi uspešno objavljeni.',
            'publish_packages_assets' => 'Resursi paketa uspešno objavljeni.',
            'clean_up' => 'Fajlovi sistemskog ažuriranja uspešno očišćeni.',
        ],
    ],
];
