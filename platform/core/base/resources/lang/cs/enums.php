<?php

return [
    'statuses' => [
        'draft' => 'Koncept',
        'pending' => 'Čekající',
        'published' => 'Publikováno',
    ],
    'system_updater_steps' => [
        'download' => 'Stáhnout soubory aktualizace',
        'update_files' => 'Aktualizovat systémové soubory',
        'update_database' => 'Aktualizovat databáze',
        'publish_core_assets' => 'Publikovat základní assets',
        'publish_packages_assets' => 'Publikovat assets balíčků',
        'clean_up' => 'Vyčistit soubory aktualizace systému',
        'done' => 'Systém úspěšně aktualizován',

        'messages' => [
            'download' => 'Stahování souborů aktualizace...',
            'update_files' => 'Aktualizace systémových souborů...',
            'update_database' => 'Aktualizace databází...',
            'publish_core_assets' => 'Publikování základních assets...',
            'publish_packages_assets' => 'Publikování assets balíčků...',
            'clean_up' => 'Čištění souborů aktualizace systému...',
            'done' => 'Hotovo! Váš prohlížeč bude obnoven za 30 sekund.',
        ],

        'failed_messages' => [
            'download' => 'Nepodařilo se stáhnout soubory aktualizace',
            'update_files' => 'Nepodařilo se aktualizovat systémové soubory',
            'update_database' => 'Nepodařilo se aktualizovat databáze',
            'publish_core_assets' => 'Nepodařilo se publikovat základní assets',
            'publish_packages_assets' => 'Nepodařilo se publikovat assets balíčků',
            'clean_up' => 'Nepodařilo se vyčistit soubory aktualizace systému',
        ],

        'success_messages' => [
            'download' => 'Soubory aktualizace úspěšně staženy.',
            'update_files' => 'Systémové soubory úspěšně aktualizovány.',
            'update_database' => 'Databáze úspěšně aktualizovány.',
            'publish_core_assets' => 'Základní assets úspěšně publikovány.',
            'publish_packages_assets' => 'Assets balíčků úspěšně publikovány.',
            'clean_up' => 'Soubory aktualizace systému úspěšně vyčištěny.',
        ],
    ],
];
