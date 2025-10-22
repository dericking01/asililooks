<?php

return [
    'name' => 'Avansert språk',
    'description' => 'Avanserte språkfunksjoner for flerspråklig innhold',
    'import' => [
        'rules' => [
            'id' => 'ID er påkrevd og må være en gyldig ID.',
            'name' => 'Navn er påkrevd og må være en streng med en maksimal lengde på 255 tegn.',
            'description' => 'Beskrivelse må være en streng med en maksimal lengde på 400 tegn hvis oppgitt.',
            'content' => 'Innhold må være en streng med en maksimal lengde på 300 000 tegn hvis oppgitt.',
            'location' => 'Plassering må være en streng med en maksimal lengde på 255 tegn hvis oppgitt.',
            'floor_plans' => 'Plantegninger må være en gyldig streng hvis oppgitt.',
            'faq_schema_config' => 'FAQ-skjemakonfigurasjon må være en gyldig streng hvis oppgitt.',
            'faq_ids' => 'FAQ-IDer må være en gyldig matrise hvis oppgitt.',
        ],
    ],
    'export' => [
        'total' => 'Totalt',
    ],
    'import_model_translations' => ':model oversettelser',
    'export_model_translations' => ':model oversettelser',
    'import_description' => 'Importer oversettelser for :name fra en CSV/Excel-fil.',
    'export_description' => 'Eksporter oversettelser for :name til en CSV/Excel-fil.',
];
