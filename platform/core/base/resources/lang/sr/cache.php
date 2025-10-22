<?php

return [
    'cache_management' => 'Upravljanje kešom',
    'cache_management_description' => 'Obrišite keš da bi vaš sajt bio ažuran.',
    'cache_commands' => 'Komande za brisanje keša',
    'current_size' => 'Trenutna veličina',
    'clear_button' => 'Obrišite',
    'refresh_button' => 'Osvežite',
    'cache_size_warning' => 'Vaš CMS keš je prilično velik (>50MB). Brisanje može poboljšati performanse sistema.',
    'footer_note' => 'Obrišite keš nakon promena na vašem sajtu kako bi se osiguralo da se prikazuju pravilno.',
    'type' => 'Tip',
    'description' => 'Opis',
    'action' => 'Akcija',
    'commands' => [
        'clear_cms_cache' => [
            'title' => 'Obrišite sav CMS keš',
            'description' => 'Obrišite CMS keš: keš baze podataka, statičke blokove... Pokrenite ovu komandu kada ne vidite promene nakon ažuriranja podataka.',
            'success_msg' => 'Keš obrisan',
        ],
        'refresh_compiled_views' => [
            'title' => 'Osvežite kompajlirane prikaze',
            'description' => 'Obrišite kompajlirane prikaze da bi prikazi bili ažurni.',
            'success_msg' => 'Keš prikaza osvežen',
        ],
        'clear_config_cache' => [
            'title' => 'Obrišite keš konfiguracije',
            'description' => 'Možda ćete morati da osvežite keš konfiguracije kada promenite nešto u produkcijskom okruženju.',
            'success_msg' => 'Keš konfiguracije obrisan',
        ],
        'clear_route_cache' => [
            'title' => 'Obrišite keš ruta',
            'description' => 'Obrišite keš rutiranja.',
            'success_msg' => 'Keš ruta je obrisan',
        ],
        'clear_log' => [
            'title' => 'Obrišite log',
            'description' => 'Obrišite fajlove sistemskog loga',
            'success_msg' => 'Sistemski log je obrisan',
        ],
    ],
    'optimization' => [
        'title' => 'Optimizacija performansi',
        'optimize' => [
            'title' => 'Optimizujte performanse sajta',
            'description' => 'Keširajte konfiguraciju, rute i prikaze za bržu brzinu učitavanja.',
            'button' => 'Optimizujte',
            'success_msg' => 'Optimizacija uspešno završena',
        ],
        'clear' => [
            'title' => 'Obrišite keš optimizacije',
            'description' => 'Uklonite keš optimizacije da omogućite promene konfiguracije.',
            'button' => 'Obrišite',
            'success_msg' => 'Keš optimizacije uspešno obrisan',
        ],
        'messages' => [
            'config_cached' => 'Konfiguracija keširana',
            'routes_cleared' => 'Rute obrisane (potrebna komandna linija za keširanje)',
            'views_compiled' => 'Prikazi kompajlirani',
            'framework_cache_cleared' => 'Keš framework-a obrisan',
            'optimization_completed' => 'Optimizacija završena: :details',
            'optimization_failed' => 'Optimizacija neuspela: :error',
            'clear_failed' => 'Brisanje optimizacije neuspelo: :error',
        ],
    ],
];
