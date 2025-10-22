<?php

return [
    'cache_management' => 'Hurtigbufferbehandling',
    'cache_management_description' => 'Tøm hurtigbufferen for å oppdatere nettstedet ditt.',
    'cache_commands' => 'Tøm hurtigbuffer-kommandoer',
    'current_size' => 'Gjeldende størrelse',
    'clear_button' => 'Tøm',
    'refresh_button' => 'Oppdater',
    'cache_size_warning' => 'CMS-hurtigbufferstørrelsen din er ganske stor (>50MB). Tømming kan forbedre systemytelsen.',
    'footer_note' => 'Tøm hurtigbufferen etter at du har gjort endringer på nettstedet ditt for å sikre at de vises riktig.',
    'type' => 'Type',
    'description' => 'Beskrivelse',
    'action' => 'Handling',
    'commands' => [
        'clear_cms_cache' => [
            'title' => 'Tøm all CMS-hurtigbuffer',
            'description' => 'Tøm CMS-hurtigbuffering: database-hurtigbuffering, statiske blokker... Kjør denne kommandoen når du ikke ser endringene etter oppdatering av data.',
            'success_msg' => 'Hurtigbuffer tømt',
        ],
        'refresh_compiled_views' => [
            'title' => 'Oppdater kompilerte visninger',
            'description' => 'Tøm kompilerte visninger for å oppdatere visninger.',
            'success_msg' => 'Hurtigbuffervisning oppdatert',
        ],
        'clear_config_cache' => [
            'title' => 'Tøm konfigurasjonshurtigbuffer',
            'description' => 'Du må kanskje oppdatere konfigurasjonshurtigbufferet når du endrer noe i produksjonsmiljøet.',
            'success_msg' => 'Konfigurasjonshurtigbuffer tømt',
        ],
        'clear_route_cache' => [
            'title' => 'Tøm rutehurtigbuffer',
            'description' => 'Tøm hurtigbufferruting.',
            'success_msg' => 'Rutehurtigbufferen er tømt',
        ],
        'clear_log' => [
            'title' => 'Tøm logg',
            'description' => 'Tøm systemloggfiler',
            'success_msg' => 'Systemloggen er tømt',
        ],
    ],
    'optimization' => [
        'title' => 'Ytelsesoptimalisering',
        'optimize' => [
            'title' => 'Optimaliser nettstedytelse',
            'description' => 'Hurtigbuffer konfigurasjon, ruter og visninger for raskere innlastingshastighet.',
            'button' => 'Optimaliser',
            'success_msg' => 'Optimalisering fullført',
        ],
        'clear' => [
            'title' => 'Tøm optimaliseringshurtigbuffer',
            'description' => 'Fjern optimaliseringshurtigbuffer for å tillate konfigurasjonsendringer.',
            'button' => 'Tøm',
            'success_msg' => 'Optimaliseringshurtigbuffer tømt',
        ],
        'messages' => [
            'config_cached' => 'Konfigurasjon hurtigbuffret',
            'routes_cleared' => 'Ruter tømt (kommandolinje kreves for hurtigbuffering)',
            'views_compiled' => 'Visninger kompilert',
            'framework_cache_cleared' => 'Rammeverk-hurtigbuffer tømt',
            'optimization_completed' => 'Optimalisering fullført: :details',
            'optimization_failed' => 'Optimalisering mislyktes: :error',
            'clear_failed' => 'Tømming av optimalisering mislyktes: :error',
        ],
    ],
];
