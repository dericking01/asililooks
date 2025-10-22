<?php

return  [
  'cache_management' => 'Cachebeheer',
  'cache_management_description' => 'Wis cache om uw site up-to-date te maken.',
  'cache_commands' => 'Cache wissen commando\'s',
  'current_size' => 'Huidige grootte',
  'clear_button' => 'Wissen',
  'refresh_button' => 'Vernieuwen',
  'cache_size_warning' => 'De cachegrootte van uw CMS is vrij groot (>50MB). Het wissen ervan kan de systeemprestaties verbeteren.',
  'footer_note' => 'Wis de cache na het aanbrengen van wijzigingen aan uw site om ervoor te zorgen dat ze correct worden weergegeven.',
  'type' => 'Type',
  'description' => 'Beschrijving',
  'action' => 'Actie',
  'commands' =>
   [
    'clear_cms_cache' =>
     [
      'title' => 'Wis alle CMS cache',
      'description' => 'Wis CMS caching: database caching, statische blokken... Voer dit commando uit wanneer u de wijzigingen niet ziet na het bijwerken van gegevens.',
      'success_msg' => 'Cache gewist',
    ],
    'refresh_compiled_views' =>
     [
      'title' => 'Ververs gecompileerde weergaven',
      'description' => 'Wis gecompileerde weergaven om weergaven up-to-date te maken.',
      'success_msg' => 'Cache weergave ververst',
    ],
    'clear_config_cache' =>
     [
      'title' => 'Wis configuratiecache',
      'description' => 'U moet mogelijk de configuratiecache vernieuwen wanneer u iets wijzigt in de productieomgeving.',
      'success_msg' => 'Configuratiecache gewist',
    ],
    'clear_route_cache' =>
     [
      'title' => 'Wis routecache',
      'description' => 'Wis cache routing.',
      'success_msg' => 'De routecache is gewist',
    ],
    'clear_log' =>
     [
      'title' => 'Wis log',
      'description' => 'Wis systeem logbestanden',
      'success_msg' => 'Het systeemlogboek is gewist',
    ],
  ],
  'optimization' =>
   [
    'title' => 'Prestatieoptimalisatie',
    'optimize' =>
     [
      'title' => 'Websiteprestaties optimaliseren',
      'description' => 'Cache configuratie, routes en views voor snellere laadsnelheid.',
      'button' => 'Optimaliseren',
      'success_msg' => 'Optimalisatie succesvol voltooid',
    ],
    'clear' =>
     [
      'title' => 'Optimalisatiecache wissen',
      'description' => 'Verwijder optimalisatiecache om configuratiewijzigingen mogelijk te maken.',
      'button' => 'Wissen',
      'success_msg' => 'Optimalisatiecache succesvol gewist',
    ],
    'messages' =>
     [
      'config_cached' => 'Configuratie gecached',
      'routes_cleared' => 'Routes gewist (commandoregel vereist voor caching)',
      'views_compiled' => 'Views gecompileerd',
      'framework_cache_cleared' => 'Framework cache gewist',
      'optimization_completed' => 'Optimalisatie voltooid: :details',
      'optimization_failed' => 'Optimalisatie mislukt: :error',
      'clear_failed' => 'Wissen optimalisatie mislukt: :error',
    ],
  ],
];
