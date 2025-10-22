<?php

return [
    'cache_management' => 'Talpyklos valdymas',
    'cache_management_description' => 'Išvalykite talpyklą, kad svetainė būtų atnaujinta.',
    'cache_commands' => 'Talpyklos valymo komandos',
    'current_size' => 'Dabartinis dydis',
    'clear_button' => 'Išvalyti',
    'refresh_button' => 'Atnaujinti',
    'cache_size_warning' => 'Jūsų CMS talpyklos dydis yra gana didelis (>50MB). Jos išvalymas gali pagerinti sistemos našumą.',
    'footer_note' => 'Išvalykite talpyklą po pakeitimų svetainėje, kad jie būtų rodomi teisingai.',
    'type' => 'Tipas',
    'description' => 'Aprašymas',
    'action' => 'Veiksmas',
    'commands' => [
        'clear_cms_cache' => [
            'title' => 'Išvalyti visą CMS talpyklą',
            'description' => 'Išvalyti CMS talpyklą: duomenų bazės talpyklą, statinius blokus... Paleiskite šią komandą, kai nematote pakeitimų atnaujinus duomenis.',
            'success_msg' => 'Talpykla išvalyta',
        ],
        'refresh_compiled_views' => [
            'title' => 'Atnaujinti kompiliuotus rodinius',
            'description' => 'Išvalyti kompiliuotus rodinius, kad jie būtų atnaujinti.',
            'success_msg' => 'Rodinių talpykla atnaujinta',
        ],
        'clear_config_cache' => [
            'title' => 'Išvalyti konfigūracijos talpyklą',
            'description' => 'Gali tekti atnaujinti konfigūracijos talpyklą, kai kažką keičiate gamybos aplinkoje.',
            'success_msg' => 'Konfigūracijos talpykla išvalyta',
        ],
        'clear_route_cache' => [
            'title' => 'Išvalyti maršrutų talpyklą',
            'description' => 'Išvalyti maršrutų talpyklą.',
            'success_msg' => 'Maršrutų talpykla išvalyta',
        ],
        'clear_log' => [
            'title' => 'Išvalyti žurnalą',
            'description' => 'Išvalyti sistemos žurnalo failus',
            'success_msg' => 'Sistemos žurnalas išvalytas',
        ],
    ],
    'optimization' => [
        'title' => 'Našumo optimizavimas',
        'optimize' => [
            'title' => 'Optimizuoti svetainės našumą',
            'description' => 'Talpykloje saugoti konfigūraciją, maršrutus ir rodinius greitesniam įkėlimo greičiui.',
            'button' => 'Optimizuoti',
            'success_msg' => 'Optimizavimas sėkmingai užbaigtas',
        ],
        'clear' => [
            'title' => 'Išvalyti optimizavimo talpyklą',
            'description' => 'Pašalinti optimizavimo talpyklas, kad būtų leista keisti konfigūraciją.',
            'button' => 'Išvalyti',
            'success_msg' => 'Optimizavimo talpykla sėkmingai išvalyta',
        ],
        'messages' => [
            'config_cached' => 'Konfigūracija išsaugota talpykloje',
            'routes_cleared' => 'Maršrutai išvalyti (talpyklai reikalinga komandinė eilutė)',
            'views_compiled' => 'Rodiniai sukompiliuoti',
            'framework_cache_cleared' => 'Sistemos talpykla išvalyta',
            'optimization_completed' => 'Optimizavimas užbaigtas: :details',
            'optimization_failed' => 'Optimizavimas nepavyko: :error',
            'clear_failed' => 'Optimizavimo valymas nepavyko: :error',
        ],
    ],
];
