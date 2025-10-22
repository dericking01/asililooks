<?php

return  [
  'cache_management' => 'Cache management',
  'cache_management_description' => 'Löschen Sie den Cache, um Ihre Website auf dem neuesten Stand zu machen.',
  'cache_commands' => 'Cache -Befehle löschen',
  'commands' =>
   [
    'clear_cms_cache' =>
     [
      'title' => 'Löschen Sie alle CMS -Cache',
      'description' => 'CSMS -Caching löschen: Datenbank -Caching, statische Blöcke ... Führen Sie diesen Befehl aus, wenn Sie die Änderungen nach dem Aktualisieren von Daten nicht sehen.',
      'success_msg' => 'Cache gereinigt',
    ],
    'refresh_compiled_views' =>
     [
      'title' => 'Aktualisieren Sie kompilierte Ansichten',
      'description' => 'Klare kompilierte Ansichten, um die Ansichten auf dem neuesten Stand zu machen.',
      'success_msg' => 'Cache -Ansicht aktualisiert',
    ],
    'clear_config_cache' =>
     [
      'title' => 'Konfigurationscache löschen',
      'description' => 'Möglicherweise müssen Sie das Konfigurationsdaching aktualisieren, wenn Sie etwas in der Produktionsumgebung ändern.',
      'success_msg' => 'Konfigurationscache gereinigt',
    ],
    'clear_route_cache' =>
     [
      'title' => 'Routencache löschen',
      'description' => 'Cache -Routing löschen.',
      'success_msg' => 'Der Routencache wurde gereinigt',
    ],
    'clear_log' =>
     [
      'title' => 'Klares Protokoll',
      'description' => 'Systemprotokolldateien löschen',
      'success_msg' => 'Das Systemprotokoll wurde gereinigt',
    ],
  ],
  'optimization' =>
   [
    'title' => 'Leistungsoptimierung',
    'optimize' =>
     [
      'title' => 'Website-Leistung optimieren',
      'description' => 'Konfiguration, Routen und Ansichten für schnellere Ladezeiten zwischenspeichern.',
      'button' => 'Optimieren',
      'success_msg' => 'Optimierung erfolgreich abgeschlossen',
    ],
    'clear' =>
     [
      'title' => 'Optimierungs-Cache löschen',
      'description' => 'Optimierungs-Cache entfernen, um Konfigurationsänderungen zu ermöglichen.',
      'button' => 'Löschen',
      'success_msg' => 'Optimierungs-Cache erfolgreich gelöscht',
    ],
    'messages' =>
     [
      'config_cached' => 'Konfiguration zwischengespeichert',
      'routes_cleared' => 'Routen gelöscht (Befehlszeile für Caching erforderlich)',
      'views_compiled' => 'Ansichten kompiliert',
      'framework_cache_cleared' => 'Framework-Cache gelöscht',
      'optimization_completed' => 'Optimierung abgeschlossen: :details',
      'optimization_failed' => 'Optimierung fehlgeschlagen: :error',
      'clear_failed' => 'Optimierungs-Löschung fehlgeschlagen: :error',
    ],
  ],
  'type' => 'Typ',
  'description' => 'Beschreibung',
  'action' => 'Aktion',
  'current_size' => 'Aktuelle Größe',
  'clear_button' => 'Löschen',
  'refresh_button' => 'Aktualisieren',
  'cache_size_warning' => 'Die Cache-Größe Ihres CMS ist ziemlich groß (>50MB). Das Löschen kann die Systemleistung verbessern.',
  'footer_note' => 'Löschen Sie den Cache nach Änderungen an Ihrer Website, um sicherzustellen, dass sie korrekt angezeigt werden.',
];
