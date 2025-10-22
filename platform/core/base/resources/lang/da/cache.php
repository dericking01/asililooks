<?php

return [
    'cache_management' => 'Cache-administration',
    'cache_management_description' => 'Ryd cache for at holde din side opdateret.',
    'cache_commands' => 'Ryd cache kommandoer',
    'current_size' => 'Nuværende størrelse',
    'clear_button' => 'Ryd',
    'refresh_button' => 'Genindlæs',
    'cache_size_warning' => 'Din CMS cache-størrelse er ret stor (>50MB). At rydde den kan forbedre systemets ydeevne.',
    'footer_note' => 'Ryd cache efter at have foretaget ændringer på din side for at sikre, at de vises korrekt.',
    'type' => 'Type',
    'description' => 'Beskrivelse',
    'action' => 'Handling',
    'commands' => [
        'clear_cms_cache' => [
            'title' => 'Ryd al CMS cache',
            'description' => 'Ryd CMS caching: database caching, statiske blokke... Kør denne kommando, når du ikke ser ændringerne efter at have opdateret data.',
            'success_msg' => 'Cache ryddet',
        ],
        'refresh_compiled_views' => [
            'title' => 'Genindlæs kompilerede visninger',
            'description' => 'Ryd kompilerede visninger for at holde visninger opdateret.',
            'success_msg' => 'Cache-visning genindlæst',
        ],
        'clear_config_cache' => [
            'title' => 'Ryd konfigurationscache',
            'description' => 'Du skal muligvis genindlæse konfigurationscachen, når du ændrer noget i produktionsmiljøet.',
            'success_msg' => 'Konfigurationscache ryddet',
        ],
        'clear_route_cache' => [
            'title' => 'Ryd rutecache',
            'description' => 'Ryd cache routing.',
            'success_msg' => 'Rutecachen er blevet ryddet',
        ],
        'clear_log' => [
            'title' => 'Ryd log',
            'description' => 'Ryd systemlogfiler',
            'success_msg' => 'Systemloggen er blevet ryddet',
        ],
    ],
    'optimization' => [
        'title' => 'Ydelsesoptimering',
        'optimize' => [
            'title' => 'Optimer sideydelse',
            'description' => 'Cache konfiguration, ruter og visninger for hurtigere indlæsningshastighed.',
            'button' => 'Optimer',
            'success_msg' => 'Optimering gennemført',
        ],
        'clear' => [
            'title' => 'Ryd optimeringscache',
            'description' => 'Fjern optimeringscaches for at tillade konfigurationsændringer.',
            'button' => 'Ryd',
            'success_msg' => 'Optimeringscache ryddet',
        ],
        'messages' => [
            'config_cached' => 'Konfiguration cachet',
            'routes_cleared' => 'Ruter ryddet (kommandolinje påkrævet for caching)',
            'views_compiled' => 'Visninger kompileret',
            'framework_cache_cleared' => 'Framework cache ryddet',
            'optimization_completed' => 'Optimering gennemført: :details',
            'optimization_failed' => 'Optimering mislykkedes: :error',
            'clear_failed' => 'Ryd optimering mislykkedes: :error',
        ],
    ],
];
