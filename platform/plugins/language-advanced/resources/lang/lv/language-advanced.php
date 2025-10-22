<?php

return [
    'name' => 'Paplašinātā valoda',
    'description' => 'Paplašinātas valodas funkcijas daudzvalodu saturam',
    'import' => [
        'rules' => [
            'id' => 'ID ir obligāts un tam jābūt derīgam ID.',
            'name' => 'Nosaukums ir obligāts un tam jābūt virknei ar maksimālo garumu 255 rakstzīmes.',
            'description' => 'Aprakstam jābūt virknei ar maksimālo garumu 400 rakstzīmes, ja tas ir norādīts.',
            'content' => 'Saturam jābūt virknei ar maksimālo garumu 300 000 rakstzīmes, ja tas ir norādīts.',
            'location' => 'Atrašanās vietai jābūt virknei ar maksimālo garumu 255 rakstzīmes, ja tā ir norādīta.',
            'floor_plans' => 'Stāvu plāniem jābūt derīgai virknei, ja tie ir norādīti.',
            'faq_schema_config' => 'BUJ shēmas konfigurācijai jābūt derīgai virknei, ja tā ir norādīta.',
            'faq_ids' => 'BUJ ID jābūt derīgam masīvam, ja tie ir norādīti.',
        ],
    ],
    'export' => [
        'total' => 'Kopā',
    ],
    'import_model_translations' => ':model tulkojumi',
    'export_model_translations' => ':model tulkojumi',
    'import_description' => 'Importēt tulkojumus :name no CSV/Excel faila.',
    'export_description' => 'Eksportēt tulkojumus :name uz CSV/Excel failu.',
];
