<?php

return [
    'statuses' => [
        'draft' => 'Koncept',
        'pending' => 'Čakajúce',
        'published' => 'Publikované',
    ],
    'system_updater_steps' => [
        'download' => 'Stiahnuť aktualizačné súbory',
        'update_files' => 'Aktualizovať systémové súbory',
        'update_database' => 'Aktualizovať databázy',
        'publish_core_assets' => 'Publikovať základné assety',
        'publish_packages_assets' => 'Publikovať assety balíkov',
        'clean_up' => 'Vyčistiť aktualizačné súbory systému',
        'done' => 'Systém úspešne aktualizovaný',

        'messages' => [
            'download' => 'Sťahovanie aktualizačných súborov...',
            'update_files' => 'Aktualizácia systémových súborov...',
            'update_database' => 'Aktualizácia databáz...',
            'publish_core_assets' => 'Publikovanie základných assetov...',
            'publish_packages_assets' => 'Publikovanie assetov balíkov...',
            'clean_up' => 'Čistenie aktualizačných súborov systému...',
            'done' => 'Hotovo! Váš prehliadač sa obnoví o 30 sekúnd.',
        ],

        'failed_messages' => [
            'download' => 'Nepodarilo sa stiahnuť aktualizačné súbory',
            'update_files' => 'Nepodarilo sa aktualizovať systémové súbory',
            'update_database' => 'Nepodarilo sa aktualizovať databázy',
            'publish_core_assets' => 'Nepodarilo sa publikovať základné assety',
            'publish_packages_assets' => 'Nepodarilo sa publikovať assety balíkov',
            'clean_up' => 'Nepodarilo sa vyčistiť aktualizačné súbory systému',
        ],

        'success_messages' => [
            'download' => 'Aktualizačné súbory úspešne stiahnuté.',
            'update_files' => 'Systémové súbory úspešne aktualizované.',
            'update_database' => 'Databázy úspešne aktualizované.',
            'publish_core_assets' => 'Základné assety úspešne publikované.',
            'publish_packages_assets' => 'Assety balíkov úspešne publikované.',
            'clean_up' => 'Aktualizačné súbory systému úspešne vyčistené.',
        ],
    ],
];
