<?php

return [
    'cache_management' => 'Cachehantering',
    'cache_management_description' => 'Rensa cachen för att hålla din webbplats uppdaterad.',
    'cache_commands' => 'Rensa cache-kommandon',
    'current_size' => 'Aktuell storlek',
    'clear_button' => 'Rensa',
    'refresh_button' => 'Uppdatera',
    'cache_size_warning' => 'Din CMS-cachestorlek är ganska stor (>50MB). Att rensa den kan förbättra systemprestandan.',
    'footer_note' => 'Rensa cachen efter att ha gjort ändringar på din webbplats för att säkerställa att de visas korrekt.',
    'type' => 'Typ',
    'description' => 'Beskrivning',
    'action' => 'Åtgärd',
    'commands' => [
        'clear_cms_cache' => [
            'title' => 'Rensa all CMS-cache',
            'description' => 'Rensa CMS-cachning: databascachning, statiska block... Kör detta kommando när du inte ser ändringarna efter att ha uppdaterat data.',
            'success_msg' => 'Cache rensad',
        ],
        'refresh_compiled_views' => [
            'title' => 'Uppdatera kompilerade vyer',
            'description' => 'Rensa kompilerade vyer för att hålla vyerna uppdaterade.',
            'success_msg' => 'Cachevyn uppdaterad',
        ],
        'clear_config_cache' => [
            'title' => 'Rensa konfigurationscache',
            'description' => 'Du kan behöva uppdatera konfigurationscachen när du ändrar något i produktionsmiljön.',
            'success_msg' => 'Konfigurationscache rensad',
        ],
        'clear_route_cache' => [
            'title' => 'Rensa ruttcache',
            'description' => 'Rensa cacheroutning.',
            'success_msg' => 'Ruttcachen har rensats',
        ],
        'clear_log' => [
            'title' => 'Rensa logg',
            'description' => 'Rensa systemloggfiler',
            'success_msg' => 'Systemloggen har rensats',
        ],
    ],
    'optimization' => [
        'title' => 'Prestandaoptimering',
        'optimize' => [
            'title' => 'Optimera webbplatsens prestanda',
            'description' => 'Cachea konfiguration, rutter och vyer för snabbare laddningshastighet.',
            'button' => 'Optimera',
            'success_msg' => 'Optimering slutförd',
        ],
        'clear' => [
            'title' => 'Rensa optimeringscache',
            'description' => 'Ta bort optimeringscacher för att tillåta konfigurationsändringar.',
            'button' => 'Rensa',
            'success_msg' => 'Optimeringscache rensad',
        ],
        'messages' => [
            'config_cached' => 'Konfiguration cachad',
            'routes_cleared' => 'Rutter rensade (kommandorad krävs för cachning)',
            'views_compiled' => 'Vyer kompilerade',
            'framework_cache_cleared' => 'Ramverkscache rensad',
            'optimization_completed' => 'Optimering slutförd: :details',
            'optimization_failed' => 'Optimering misslyckades: :error',
            'clear_failed' => 'Rensning av optimering misslyckades: :error',
        ],
    ],
];
