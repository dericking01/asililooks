<?php

return [
    'name' => 'Avancerat språk',
    'description' => 'Avancerade språkfunktioner för flerspråkigt innehåll',
    'import' => [
        'rules' => [
            'id' => 'ID är obligatoriskt och måste vara ett giltigt ID.',
            'name' => 'Namn är obligatoriskt och måste vara en sträng med en maximal längd på 255 tecken.',
            'description' => 'Beskrivning måste vara en sträng med en maximal längd på 400 tecken om det anges.',
            'content' => 'Innehåll måste vara en sträng med en maximal längd på 300 000 tecken om det anges.',
            'location' => 'Plats måste vara en sträng med en maximal längd på 255 tecken om det anges.',
            'floor_plans' => 'Planlösningar måste vara en giltig sträng om de anges.',
            'faq_schema_config' => 'FAQ-schemakonfiguration måste vara en giltig sträng om den anges.',
            'faq_ids' => 'FAQ-ID:n måste vara en giltig matris om de anges.',
        ],
    ],
    'export' => [
        'total' => 'Totalt',
    ],
    'import_model_translations' => ':model översättningar',
    'export_model_translations' => ':model översättningar',
    'import_description' => 'Importera översättningar för :name från en CSV/Excel-fil.',
    'export_description' => 'Exportera översättningar för :name till en CSV/Excel-fil.',
];
