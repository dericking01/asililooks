<?php

return [
    'cache_management' => 'Upravljanje predmemorijom',
    'cache_management_description' => 'Očistite predmemoriju kako bi vaša stranica bila ažurna.',
    'cache_commands' => 'Naredbe za čišćenje predmemorije',
    'current_size' => 'Trenutna veličina',
    'clear_button' => 'Očisti',
    'refresh_button' => 'Osvježi',
    'cache_size_warning' => 'Veličina predmemorije vašeg CMS-a je prilično velika (>50MB). Čišćenje može poboljšati performanse sustava.',
    'footer_note' => 'Očistite predmemoriju nakon promjena na vašoj stranici kako bi se osiguralo da se pravilno prikazuju.',
    'type' => 'Vrsta',
    'description' => 'Opis',
    'action' => 'Akcija',
    'commands' => [
        'clear_cms_cache' => [
            'title' => 'Očisti svu CMS predmemoriju',
            'description' => 'Očisti CMS predmemoriju: predmemoriju baze podataka, statičke blokove... Pokrenite ovu naredbu kada ne vidite promjene nakon ažuriranja podataka.',
            'success_msg' => 'Predmemorija očišćena',
        ],
        'refresh_compiled_views' => [
            'title' => 'Osvježi kompajlirane poglede',
            'description' => 'Očisti kompajlirane poglede kako bi bili ažurni.',
            'success_msg' => 'Predmemorija pogleda osvježena',
        ],
        'clear_config_cache' => [
            'title' => 'Očisti predmemoriju konfiguracije',
            'description' => 'Možda će biti potrebno osvježiti predmemoriju konfiguracije kada promijenite nešto u produkcijskom okruženju.',
            'success_msg' => 'Predmemorija konfiguracije očišćena',
        ],
        'clear_route_cache' => [
            'title' => 'Očisti predmemoriju ruta',
            'description' => 'Očisti predmemoriju rutiranja.',
            'success_msg' => 'Predmemorija ruta je očišćena',
        ],
        'clear_log' => [
            'title' => 'Očisti dnevnik',
            'description' => 'Očisti datoteke dnevnika sustava',
            'success_msg' => 'Dnevnik sustava je očišćen',
        ],
    ],
    'optimization' => [
        'title' => 'Optimizacija performansi',
        'optimize' => [
            'title' => 'Optimiziraj performanse stranice',
            'description' => 'Predmemoriraj konfiguraciju, rute i poglede za bržu brzinu učitavanja.',
            'button' => 'Optimiziraj',
            'success_msg' => 'Optimizacija uspješno dovršena',
        ],
        'clear' => [
            'title' => 'Očisti predmemoriju optimizacije',
            'description' => 'Ukloni predmemoriju optimizacije kako bi se omogućile promjene konfiguracije.',
            'button' => 'Očisti',
            'success_msg' => 'Predmemorija optimizacije uspješno očišćena',
        ],
        'messages' => [
            'config_cached' => 'Konfiguracija predmemorirana',
            'routes_cleared' => 'Rute očišćene (potrebna je naredbena linija za predmemoriranje)',
            'views_compiled' => 'Pogledi kompajlirani',
            'framework_cache_cleared' => 'Predmemorija okvira očišćena',
            'optimization_completed' => 'Optimizacija dovršena: :details',
            'optimization_failed' => 'Optimizacija nije uspjela: :error',
            'clear_failed' => 'Čišćenje optimizacije nije uspjelo: :error',
        ],
    ],
];
