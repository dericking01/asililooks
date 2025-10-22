<?php

return [
    'cache_management' => 'Gestione della cache',
    'cache_management_description' => 'Cancella la cache per mantenere il tuo sito aggiornato.',
    'cache_commands' => 'Comandi di cancellazione cache',
    'current_size' => 'Dimensione attuale',
    'clear_button' => 'Cancella',
    'refresh_button' => 'Aggiorna',
    'cache_size_warning' => 'La dimensione della cache del CMS è piuttosto grande (>50MB). Cancellarla potrebbe migliorare le prestazioni del sistema.',
    'footer_note' => 'Cancella la cache dopo aver apportato modifiche al tuo sito per assicurarti che appaiano correttamente.',
    'type' => 'Tipo',
    'description' => 'Descrizione',
    'action' => 'Azione',
    'commands' => [
        'clear_cms_cache' => [
            'title' => 'Cancella tutta la cache CMS',
            'description' => 'Cancella la cache del CMS: cache del database, blocchi statici... Esegui questo comando quando non vedi le modifiche dopo l\'aggiornamento dei dati.',
            'success_msg' => 'Cache cancellata',
        ],
        'refresh_compiled_views' => [
            'title' => 'Aggiorna viste compilate',
            'description' => 'Cancella le viste compilate per mantenerle aggiornate.',
            'success_msg' => 'Cache delle viste aggiornata',
        ],
        'clear_config_cache' => [
            'title' => 'Cancella cache configurazione',
            'description' => 'Potrebbe essere necessario aggiornare la cache della configurazione quando si modifica qualcosa nell\'ambiente di produzione.',
            'success_msg' => 'Cache configurazione cancellata',
        ],
        'clear_route_cache' => [
            'title' => 'Cancella cache route',
            'description' => 'Cancella la cache delle route.',
            'success_msg' => 'La cache delle route è stata cancellata',
        ],
        'clear_log' => [
            'title' => 'Cancella log',
            'description' => 'Cancella i file di log del sistema',
            'success_msg' => 'Il log del sistema è stato cancellato',
        ],
    ],
    'optimization' => [
        'title' => 'Ottimizzazione delle prestazioni',
        'optimize' => [
            'title' => 'Ottimizza prestazioni del sito',
            'description' => 'Memorizza nella cache configurazione, route e viste per una velocità di caricamento più rapida.',
            'button' => 'Ottimizza',
            'success_msg' => 'Ottimizzazione completata con successo',
        ],
        'clear' => [
            'title' => 'Cancella cache di ottimizzazione',
            'description' => 'Rimuovi le cache di ottimizzazione per consentire modifiche alla configurazione.',
            'button' => 'Cancella',
            'success_msg' => 'Cache di ottimizzazione cancellata con successo',
        ],
        'messages' => [
            'config_cached' => 'Configurazione memorizzata nella cache',
            'routes_cleared' => 'Route cancellate (richiesta riga di comando per la memorizzazione nella cache)',
            'views_compiled' => 'Viste compilate',
            'framework_cache_cleared' => 'Cache del framework cancellata',
            'optimization_completed' => 'Ottimizzazione completata: :details',
            'optimization_failed' => 'Ottimizzazione fallita: :error',
            'clear_failed' => 'Cancellazione ottimizzazione fallita: :error',
        ],
    ],
];
