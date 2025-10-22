<?php

return [
    'cache_management' => 'Kešatmiņas pārvaldība',
    'cache_management_description' => 'Notīriet kešatmiņu, lai jūsu vietne būtu aktuāla.',
    'cache_commands' => 'Kešatmiņas notīrīšanas komandas',
    'current_size' => 'Pašreizējais izmērs',
    'clear_button' => 'Notīrīt',
    'refresh_button' => 'Atsvaidzināt',
    'cache_size_warning' => 'Jūsu CMS kešatmiņas izmērs ir diezgan liels (>50MB). Tās notīrīšana var uzlabot sistēmas veiktspēju.',
    'footer_note' => 'Notīriet kešatmiņu pēc izmaiņu veikšanas jūsu vietnē, lai nodrošinātu, ka tās tiek rādītas pareizi.',
    'type' => 'Tips',
    'description' => 'Apraksts',
    'action' => 'Darbība',
    'commands' => [
        'clear_cms_cache' => [
            'title' => 'Notīrīt visu CMS kešatmiņu',
            'description' => 'Notīrīt CMS kešatmiņu: datu bāzes kešatmiņu, statiskos blokus... Palaidiet šo komandu, ja neredzat izmaiņas pēc datu atjaunināšanas.',
            'success_msg' => 'Kešatmiņa notīrīta',
        ],
        'refresh_compiled_views' => [
            'title' => 'Atsvaidzināt kompilētos skatus',
            'description' => 'Notīrīt kompilētos skatus, lai skati būtu aktuāli.',
            'success_msg' => 'Skatu kešatmiņa atsvaidzināta',
        ],
        'clear_config_cache' => [
            'title' => 'Notīrīt konfigurācijas kešatmiņu',
            'description' => 'Jums var būt nepieciešams atsvaidzināt konfigurācijas kešatmiņu, mainot kaut ko ražošanas vidē.',
            'success_msg' => 'Konfigurācijas kešatmiņa notīrīta',
        ],
        'clear_route_cache' => [
            'title' => 'Notīrīt maršruta kešatmiņu',
            'description' => 'Notīrīt maršrutēšanas kešatmiņu.',
            'success_msg' => 'Maršruta kešatmiņa ir notīrīta',
        ],
        'clear_log' => [
            'title' => 'Notīrīt žurnālu',
            'description' => 'Notīrīt sistēmas žurnāla failus',
            'success_msg' => 'Sistēmas žurnāls ir notīrīts',
        ],
    ],
    'optimization' => [
        'title' => 'Veiktspējas optimizācija',
        'optimize' => [
            'title' => 'Optimizēt vietnes veiktspēju',
            'description' => 'Kešatmiņā saglabāt konfigurāciju, maršrutus un skatus ātrākai ielādes ātrumam.',
            'button' => 'Optimizēt',
            'success_msg' => 'Optimizācija veiksmīgi pabeigta',
        ],
        'clear' => [
            'title' => 'Notīrīt optimizācijas kešatmiņu',
            'description' => 'Noņemt optimizācijas kešatmiņu, lai atļautu konfigurācijas izmaiņas.',
            'button' => 'Notīrīt',
            'success_msg' => 'Optimizācijas kešatmiņa veiksmīgi notīrīta',
        ],
        'messages' => [
            'config_cached' => 'Konfigurācija saglabāta kešatmiņā',
            'routes_cleared' => 'Maršruti notīrīti (kešatmiņai nepieciešama komandu rinda)',
            'views_compiled' => 'Skati kompilēti',
            'framework_cache_cleared' => 'Sistēmas kešatmiņa notīrīta',
            'optimization_completed' => 'Optimizācija pabeigta: :details',
            'optimization_failed' => 'Optimizācija neizdevās: :error',
            'clear_failed' => 'Optimizācijas notīrīšana neizdevās: :error',
        ],
    ],
];
