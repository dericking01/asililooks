<?php

return [
    'statuses' => [
        'draft' => 'Juodraštis',
        'pending' => 'Laukiantis',
        'published' => 'Paskelbtas',
    ],
    'system_updater_steps' => [
        'download' => 'Atsisiųsti atnaujinimo failus',
        'update_files' => 'Atnaujinti sistemos failus',
        'update_database' => 'Atnaujinti duomenų bazes',
        'publish_core_assets' => 'Paskelbti pagrindinius išteklius',
        'publish_packages_assets' => 'Paskelbti paketų išteklius',
        'clean_up' => 'Išvalyti sistemos atnaujinimo failus',
        'done' => 'Sistema sėkmingai atnaujinta',

        'messages' => [
            'download' => 'Atsiunčiami atnaujinimo failai...',
            'update_files' => 'Atnaujinami sistemos failai...',
            'update_database' => 'Atnaujinamos duomenų bazės...',
            'publish_core_assets' => 'Skelbiami pagrindiniai ištekliai...',
            'publish_packages_assets' => 'Skelbiami paketų ištekliai...',
            'clean_up' => 'Valomi sistemos atnaujinimo failai...',
            'done' => 'Atlikta! Jūsų naršyklė bus atnaujinta per 30 sekundžių.',
        ],

        'failed_messages' => [
            'download' => 'Nepavyko atsisiųsti atnaujinimo failų',
            'update_files' => 'Nepavyko atnaujinti sistemos failų',
            'update_database' => 'Nepavyko atnaujinti duomenų bazių',
            'publish_core_assets' => 'Nepavyko paskelbti pagrindinių išteklių',
            'publish_packages_assets' => 'Nepavyko paskelbti paketų išteklių',
            'clean_up' => 'Nepavyko išvalyti sistemos atnaujinimo failų',
        ],

        'success_messages' => [
            'download' => 'Atnaujinimo failai sėkmingai atsisiųsti.',
            'update_files' => 'Sistemos failai sėkmingai atnaujinti.',
            'update_database' => 'Duomenų bazės sėkmingai atnaujintos.',
            'publish_core_assets' => 'Pagrindiniai ištekliai sėkmingai paskelbti.',
            'publish_packages_assets' => 'Paketų ištekliai sėkmingai paskelbti.',
            'clean_up' => 'Sistemos atnaujinimo failai sėkmingai išvalyti.',
        ],
    ],
];
