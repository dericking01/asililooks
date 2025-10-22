<?php

return [
    'statuses' => [
        'draft' => 'Piszkozat',
        'pending' => 'Függőben',
        'published' => 'Közzétéve',
    ],
    'system_updater_steps' => [
        'download' => 'Frissítési fájlok letöltése',
        'update_files' => 'Rendszer fájlok frissítése',
        'update_database' => 'Adatbázisok frissítése',
        'publish_core_assets' => 'Mag eszközök közzététele',
        'publish_packages_assets' => 'Csomag eszközök közzététele',
        'clean_up' => 'Rendszer frissítési fájlok tisztítása',
        'done' => 'Rendszer sikeresen frissítve',

        'messages' => [
            'download' => 'Frissítési fájlok letöltése...',
            'update_files' => 'Rendszer fájlok frissítése...',
            'update_database' => 'Adatbázisok frissítése...',
            'publish_core_assets' => 'Mag eszközök közzététele...',
            'publish_packages_assets' => 'Csomag eszközök közzététele...',
            'clean_up' => 'Rendszer frissítési fájlok tisztítása...',
            'done' => 'Kész! A böngésző 30 másodpercen belül frissülni fog.',
        ],

        'failed_messages' => [
            'download' => 'Nem sikerült letölteni a frissítési fájlokat',
            'update_files' => 'Nem sikerült frissíteni a rendszer fájlokat',
            'update_database' => 'Nem sikerült frissíteni az adatbázisokat',
            'publish_core_assets' => 'Nem sikerült közzétenni a mag eszközöket',
            'publish_packages_assets' => 'Nem sikerült közzétenni a csomag eszközöket',
            'clean_up' => 'Nem sikerült tisztítani a rendszer frissítési fájlokat',
        ],

        'success_messages' => [
            'download' => 'Frissítési fájlok sikeresen letöltve.',
            'update_files' => 'Rendszer fájlok sikeresen frissítve.',
            'update_database' => 'Adatbázisok sikeresen frissítve.',
            'publish_core_assets' => 'Mag eszközök sikeresen közzétéve.',
            'publish_packages_assets' => 'Csomag eszközök sikeresen közzétéve.',
            'clean_up' => 'Rendszer frissítési fájlok sikeresen tisztítva.',
        ],
    ],
];
