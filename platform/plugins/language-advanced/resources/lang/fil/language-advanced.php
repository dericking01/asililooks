<?php

return [
    'name' => 'Advanced na Wika',
    'description' => 'Mga advanced na feature ng wika para sa multilingual na content',
    'import' => [
        'rules' => [
            'id' => 'Ang ID ay kinakailangan at dapat na wastong ID.',
            'name' => 'Ang pangalan ay kinakailangan at dapat na string na may maximum na haba na 255 character.',
            'description' => 'Ang paglalarawan ay dapat na string na may maximum na haba na 400 character kung ibinigay.',
            'content' => 'Ang nilalaman ay dapat na string na may maximum na haba na 300,000 character kung ibinigay.',
            'location' => 'Ang lokasyon ay dapat na string na may maximum na haba na 255 character kung ibinigay.',
            'floor_plans' => 'Ang mga plano ng palapag ay dapat na wastong string kung ibinigay.',
            'faq_schema_config' => 'Ang configuration ng FAQ schema ay dapat na wastong string kung ibinigay.',
            'faq_ids' => 'Ang mga FAQ ID ay dapat na wastong array kung ibinigay.',
        ],
    ],
    'export' => [
        'total' => 'Kabuuan',
    ],
    'import_model_translations' => 'Mga Pagsasalin ng :model',
    'export_model_translations' => 'Mga Pagsasalin ng :model',
    'import_description' => 'Mag-import ng mga pagsasalin para sa :name mula sa CSV/Excel file.',
    'export_description' => 'Mag-export ng mga pagsasalin para sa :name sa CSV/Excel file.',
];
