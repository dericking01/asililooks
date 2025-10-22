<?php

return [
    'statuses' => [
        'draft' => 'Melnraksts',
        'pending' => 'Gaida',
        'published' => 'Publicēts',
    ],
    'system_updater_steps' => [
        'download' => 'Lejupielādēt atjauninājuma failus',
        'update_files' => 'Atjaunināt sistēmas failus',
        'update_database' => 'Atjaunināt datu bāzes',
        'publish_core_assets' => 'Publicēt pamata resursus',
        'publish_packages_assets' => 'Publicēt pakotņu resursus',
        'clean_up' => 'Notīrīt sistēmas atjauninājuma failus',
        'done' => 'Sistēma veiksmīgi atjaunināta',

        'messages' => [
            'download' => 'Lejupielādē atjauninājuma failus...',
            'update_files' => 'Atjaunina sistēmas failus...',
            'update_database' => 'Atjaunina datu bāzes...',
            'publish_core_assets' => 'Publicē pamata resursus...',
            'publish_packages_assets' => 'Publicē pakotņu resursus...',
            'clean_up' => 'Notīra sistēmas atjauninājuma failus...',
            'done' => 'Pabeigts! Jūsu pārlūkprogramma tiks atsvaidzināta pēc 30 sekundēm.',
        ],

        'failed_messages' => [
            'download' => 'Neizdevās lejupielādēt atjauninājuma failus',
            'update_files' => 'Neizdevās atjaunināt sistēmas failus',
            'update_database' => 'Neizdevās atjaunināt datu bāzes',
            'publish_core_assets' => 'Neizdevās publicēt pamata resursus',
            'publish_packages_assets' => 'Neizdevās publicēt pakotņu resursus',
            'clean_up' => 'Neizdevās notīrīt sistēmas atjauninājuma failus',
        ],

        'success_messages' => [
            'download' => 'Atjauninājuma faili veiksmīgi lejupielādēti.',
            'update_files' => 'Sistēmas faili veiksmīgi atjaunināti.',
            'update_database' => 'Datu bāzes veiksmīgi atjauninātas.',
            'publish_core_assets' => 'Pamata resursi veiksmīgi publicēti.',
            'publish_packages_assets' => 'Pakotņu resursi veiksmīgi publicēti.',
            'clean_up' => 'Sistēmas atjauninājuma faili veiksmīgi notīrīti.',
        ],
    ],
];
