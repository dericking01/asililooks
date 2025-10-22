<?php

return [
    'name' => 'Avanceret sprog',
    'description' => 'Avancerede sprogfunktioner til flersproget indhold',
    'import' => [
        'rules' => [
            'id' => 'ID er påkrævet og skal være et gyldigt ID.',
            'name' => 'Navn er påkrævet og skal være en streng med en maksimal længde på 255 tegn.',
            'description' => 'Beskrivelse skal være en streng med en maksimal længde på 400 tegn, hvis angivet.',
            'content' => 'Indhold skal være en streng med en maksimal længde på 300.000 tegn, hvis angivet.',
            'location' => 'Placering skal være en streng med en maksimal længde på 255 tegn, hvis angivet.',
            'floor_plans' => 'Plantegninger skal være en gyldig streng, hvis angivet.',
            'faq_schema_config' => 'FAQ-skemakonfiguration skal være en gyldig streng, hvis angivet.',
            'faq_ids' => 'FAQ-ID\'er skal være et gyldigt array, hvis angivet.',
        ],
    ],
    'export' => [
        'total' => 'Total',
    ],
    'import_model_translations' => ':model oversættelser',
    'export_model_translations' => ':model oversættelser',
    'import_description' => 'Importer oversættelser for :name fra en CSV/Excel-fil.',
    'export_description' => 'Eksporter oversættelser for :name til en CSV/Excel-fil.',
];
