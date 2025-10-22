<?php

return [
    'statuses' => [
        'draft' => 'Utkast',
        'pending' => 'Väntande',
        'published' => 'Publicerad',
    ],
    'system_updater_steps' => [
        'download' => 'Ladda ner uppdateringsfiler',
        'update_files' => 'Uppdatera systemfiler',
        'update_database' => 'Uppdatera databaser',
        'publish_core_assets' => 'Publicera kärntillgångar',
        'publish_packages_assets' => 'Publicera pakettillgångar',
        'clean_up' => 'Rensa systemuppdateringsfiler',
        'done' => 'Systemet uppdaterat',

        'messages' => [
            'download' => 'Laddar ner uppdateringsfiler...',
            'update_files' => 'Uppdaterar systemfiler...',
            'update_database' => 'Uppdaterar databaser...',
            'publish_core_assets' => 'Publicerar kärntillgångar...',
            'publish_packages_assets' => 'Publicerar pakettillgångar...',
            'clean_up' => 'Rensar systemuppdateringsfiler...',
            'done' => 'Klart! Din webbläsare kommer att uppdateras om 30 sekunder.',
        ],

        'failed_messages' => [
            'download' => 'Kunde inte ladda ner uppdateringsfiler',
            'update_files' => 'Kunde inte uppdatera systemfiler',
            'update_database' => 'Kunde inte uppdatera databaser',
            'publish_core_assets' => 'Kunde inte publicera kärntillgångar',
            'publish_packages_assets' => 'Kunde inte publicera pakettillgångar',
            'clean_up' => 'Kunde inte rensa systemuppdateringsfiler',
        ],

        'success_messages' => [
            'download' => 'Uppdateringsfiler nedladdade.',
            'update_files' => 'Systemfiler uppdaterade.',
            'update_database' => 'Databaser uppdaterade.',
            'publish_core_assets' => 'Kärntillgångar publicerade.',
            'publish_packages_assets' => 'Pakettillgångar publicerade.',
            'clean_up' => 'Systemuppdateringsfiler rensade.',
        ],
    ],
];
