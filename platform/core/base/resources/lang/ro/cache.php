<?php

return [
    'cache_management' => 'Gestionare cache',
    'cache_management_description' => 'Ștergeți cache-ul pentru a actualiza site-ul.',
    'cache_commands' => 'Comenzi de ștergere cache',
    'current_size' => 'Dimensiune curentă',
    'clear_button' => 'Șterge',
    'refresh_button' => 'Reîmprospătează',
    'cache_size_warning' => 'Dimensiunea cache-ului CMS este destul de mare (>50MB). Ștergerea acestuia poate îmbunătăți performanța sistemului.',
    'footer_note' => 'Ștergeți cache-ul după ce faceți modificări pe site pentru a vă asigura că acestea apar corect.',
    'type' => 'Tip',
    'description' => 'Descriere',
    'action' => 'Acțiune',
    'commands' => [
        'clear_cms_cache' => [
            'title' => 'Șterge tot cache-ul CMS',
            'description' => 'Șterge cache-ul CMS: cache bază de date, blocuri statice... Rulați această comandă când nu vedeți modificările după actualizarea datelor.',
            'success_msg' => 'Cache curățat',
        ],
        'refresh_compiled_views' => [
            'title' => 'Reîmprospătează view-urile compilate',
            'description' => 'Șterge view-urile compilate pentru a le actualiza.',
            'success_msg' => 'Cache view reîmprospătat',
        ],
        'clear_config_cache' => [
            'title' => 'Șterge cache configurare',
            'description' => 'Este posibil să fie nevoie să reîmprospătați cache-ul de configurare când modificați ceva în mediul de producție.',
            'success_msg' => 'Cache configurare curățat',
        ],
        'clear_route_cache' => [
            'title' => 'Șterge cache rute',
            'description' => 'Șterge cache-ul de rutare.',
            'success_msg' => 'Cache-ul de rute a fost curățat',
        ],
        'clear_log' => [
            'title' => 'Șterge jurnal',
            'description' => 'Șterge fișierele jurnal ale sistemului',
            'success_msg' => 'Jurnalul sistemului a fost curățat',
        ],
    ],
    'optimization' => [
        'title' => 'Optimizare performanță',
        'optimize' => [
            'title' => 'Optimizează performanța site-ului',
            'description' => 'Cache pentru configurare, rute și view-uri pentru viteză de încărcare mai rapidă.',
            'button' => 'Optimizează',
            'success_msg' => 'Optimizare finalizată cu succes',
        ],
        'clear' => [
            'title' => 'Șterge cache optimizare',
            'description' => 'Elimină cache-urile de optimizare pentru a permite modificări de configurare.',
            'button' => 'Șterge',
            'success_msg' => 'Cache optimizare șters cu succes',
        ],
        'messages' => [
            'config_cached' => 'Configurare salvată în cache',
            'routes_cleared' => 'Rute șterse (linie de comandă necesară pentru cache)',
            'views_compiled' => 'View-uri compilate',
            'framework_cache_cleared' => 'Cache framework șters',
            'optimization_completed' => 'Optimizare finalizată: :details',
            'optimization_failed' => 'Optimizare eșuată: :error',
            'clear_failed' => 'Ștergere optimizare eșuată: :error',
        ],
    ],
];
