<?php

return [
    'cache_management' => 'Upravljanje predpomnilnika',
    'cache_management_description' => 'Počistite predpomnilnik, da bo vaša stran posodobljena.',
    'cache_commands' => 'Ukazi za čiščenje predpomnilnika',
    'current_size' => 'Trenutna velikost',
    'clear_button' => 'Počisti',
    'refresh_button' => 'Osveži',
    'cache_size_warning' => 'Velikost predpomnilnika CMS je precej velika (>50MB). Čiščenje lahko izboljša delovanje sistema.',
    'footer_note' => 'Počistite predpomnilnik po spremembah na vaši strani, da se bodo pravilno prikazale.',
    'type' => 'Tip',
    'description' => 'Opis',
    'action' => 'Dejanje',
    'commands' => [
        'clear_cms_cache' => [
            'title' => 'Počisti ves CMS predpomnilnik',
            'description' => 'Počisti predpomnjenje CMS: predpomnjenje podatkovne baze, statični bloki... Zaženite ta ukaz, če ne vidite sprememb po posodobitvi podatkov.',
            'success_msg' => 'Predpomnilnik počiščen',
        ],
        'refresh_compiled_views' => [
            'title' => 'Osveži kompilirane poglede',
            'description' => 'Počisti kompilirane poglede, da bodo pogledi posodobljeni.',
            'success_msg' => 'Predpomnilnik pogleda osvežen',
        ],
        'clear_config_cache' => [
            'title' => 'Počisti predpomnilnik konfiguracije',
            'description' => 'Morda boste morali osvežiti predpomnjenje konfiguracije, ko spremenite nekaj v produkcijskem okolju.',
            'success_msg' => 'Predpomnilnik konfiguracije počiščen',
        ],
        'clear_route_cache' => [
            'title' => 'Počisti predpomnilnik poti',
            'description' => 'Počisti predpomnjenje usmerjanja.',
            'success_msg' => 'Predpomnilnik poti je bil počiščen',
        ],
        'clear_log' => [
            'title' => 'Počisti dnevnik',
            'description' => 'Počisti dnevniške datoteke sistema',
            'success_msg' => 'Sistemski dnevnik je bil počiščen',
        ],
    ],
    'optimization' => [
        'title' => 'Optimizacija delovanja',
        'optimize' => [
            'title' => 'Optimiziraj delovanje strani',
            'description' => 'Predpomni konfiguracijo, poti in poglede za hitrejše nalaganje.',
            'button' => 'Optimiziraj',
            'success_msg' => 'Optimizacija uspešno zaključena',
        ],
        'clear' => [
            'title' => 'Počisti predpomnilnik optimizacije',
            'description' => 'Odstrani predpomnilnike optimizacije za omogočitev sprememb konfiguracije.',
            'button' => 'Počisti',
            'success_msg' => 'Predpomnilnik optimizacije uspešno počiščen',
        ],
        'messages' => [
            'config_cached' => 'Konfiguracija predpomnjena',
            'routes_cleared' => 'Poti počiščene (ukazna vrstica potrebna za predpomnjenje)',
            'views_compiled' => 'Pogledi kompilirani',
            'framework_cache_cleared' => 'Predpomnilnik ogrodja počiščen',
            'optimization_completed' => 'Optimizacija zaključena: :details',
            'optimization_failed' => 'Optimizacija neuspešna: :error',
            'clear_failed' => 'Čiščenje optimizacije neuspešno: :error',
        ],
    ],
];
