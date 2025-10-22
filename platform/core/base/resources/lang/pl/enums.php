<?php

return [
    'statuses' => [
        'draft' => 'Wersja robocza',
        'pending' => 'Oczekujące',
        'published' => 'Opublikowane',
    ],
    'system_updater_steps' => [
        'download' => 'Pobierz pliki aktualizacji',
        'update_files' => 'Zaktualizuj pliki systemowe',
        'update_database' => 'Zaktualizuj bazy danych',
        'publish_core_assets' => 'Opublikuj zasoby główne',
        'publish_packages_assets' => 'Opublikuj zasoby pakietów',
        'clean_up' => 'Wyczyść pliki aktualizacji systemu',
        'done' => 'System zaktualizowany pomyślnie',

        'messages' => [
            'download' => 'Pobieranie plików aktualizacji...',
            'update_files' => 'Aktualizowanie plików systemowych...',
            'update_database' => 'Aktualizowanie baz danych...',
            'publish_core_assets' => 'Publikowanie zasobów głównych...',
            'publish_packages_assets' => 'Publikowanie zasobów pakietów...',
            'clean_up' => 'Czyszczenie plików aktualizacji systemu...',
            'done' => 'Gotowe! Twoja przeglądarka zostanie odświeżona za 30 sekund.',
        ],

        'failed_messages' => [
            'download' => 'Nie można pobrać plików aktualizacji',
            'update_files' => 'Nie można zaktualizować plików systemowych',
            'update_database' => 'Nie można zaktualizować baz danych',
            'publish_core_assets' => 'Nie można opublikować zasobów głównych',
            'publish_packages_assets' => 'Nie można opublikować zasobów pakietów',
            'clean_up' => 'Nie można wyczyścić plików aktualizacji systemu',
        ],

        'success_messages' => [
            'download' => 'Pobrano pliki aktualizacji pomyślnie.',
            'update_files' => 'Zaktualizowano pliki systemowe pomyślnie.',
            'update_database' => 'Zaktualizowano bazy danych pomyślnie.',
            'publish_core_assets' => 'Opublikowano zasoby główne pomyślnie.',
            'publish_packages_assets' => 'Opublikowano zasoby pakietów pomyślnie.',
            'clean_up' => 'Wyczyszczono pliki aktualizacji systemu pomyślnie.',
        ],
    ],
];
