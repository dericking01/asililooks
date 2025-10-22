<?php

return [
    'cache_management' => 'Gyorsítótár kezelés',
    'cache_management_description' => 'Törölje a gyorsítótárat, hogy webhelye naprakész legyen.',
    'cache_commands' => 'Gyorsítótár törlési parancsok',
    'current_size' => 'Jelenlegi méret',
    'clear_button' => 'Törlés',
    'refresh_button' => 'Frissítés',
    'cache_size_warning' => 'A CMS gyorsítótár mérete meglehetősen nagy (>50MB). A törlés javíthatja a rendszer teljesítményét.',
    'footer_note' => 'Törölje a gyorsítótárat, miután módosításokat végzett a webhelyén, hogy azok megfelelően megjelenjenek.',
    'type' => 'Típus',
    'description' => 'Leírás',
    'action' => 'Művelet',
    'commands' => [
        'clear_cms_cache' => [
            'title' => 'Összes CMS gyorsítótár törlése',
            'description' => 'CMS gyorsítótár törlése: adatbázis gyorsítótár, statikus blokkok... Futtassa ezt a parancsot, ha nem látja a változásokat az adatok frissítése után.',
            'success_msg' => 'Gyorsítótár törölve',
        ],
        'refresh_compiled_views' => [
            'title' => 'Lefordított nézetek frissítése',
            'description' => 'Lefordított nézetek törlése a nézetek naprakésszé tételéhez.',
            'success_msg' => 'Nézet gyorsítótár frissítve',
        ],
        'clear_config_cache' => [
            'title' => 'Konfigurációs gyorsítótár törlése',
            'description' => 'Előfordulhat, hogy frissítenie kell a konfigurációs gyorsítótárat, amikor módosít valamit az éles környezetben.',
            'success_msg' => 'Konfigurációs gyorsítótár törölve',
        ],
        'clear_route_cache' => [
            'title' => 'Útvonal gyorsítótár törlése',
            'description' => 'Útvonal gyorsítótár törlése.',
            'success_msg' => 'Az útvonal gyorsítótár törölve lett',
        ],
        'clear_log' => [
            'title' => 'Napló törlése',
            'description' => 'Rendszer napló fájlok törlése',
            'success_msg' => 'A rendszer napló törölve lett',
        ],
    ],
    'optimization' => [
        'title' => 'Teljesítmény optimalizálás',
        'optimize' => [
            'title' => 'Webhely teljesítményének optimalizálása',
            'description' => 'Konfiguráció, útvonalak és nézetek gyorsítótárazása a gyorsabb betöltési sebesség érdekében.',
            'button' => 'Optimalizálás',
            'success_msg' => 'Optimalizálás sikeresen befejezve',
        ],
        'clear' => [
            'title' => 'Optimalizálási gyorsítótár törlése',
            'description' => 'Optimalizálási gyorsítótárak eltávolítása a konfigurációs módosítások engedélyezéséhez.',
            'button' => 'Törlés',
            'success_msg' => 'Optimalizálási gyorsítótár sikeresen törölve',
        ],
        'messages' => [
            'config_cached' => 'Konfiguráció gyorsítótárazva',
            'routes_cleared' => 'Útvonalak törölve (parancssor szükséges a gyorsítótárazáshoz)',
            'views_compiled' => 'Nézetek lefordítva',
            'framework_cache_cleared' => 'Keretrendszer gyorsítótár törölve',
            'optimization_completed' => 'Optimalizálás befejezve: :details',
            'optimization_failed' => 'Optimalizálás sikertelen: :error',
            'clear_failed' => 'Optimalizálás törlése sikertelen: :error',
        ],
    ],
];
