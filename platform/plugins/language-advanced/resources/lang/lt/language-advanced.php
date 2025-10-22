<?php

return [
    'name' => 'Išplėstinė kalba',
    'description' => 'Išplėstinės kalbos funkcijos daugiakalbiam turiniui',
    'import' => [
        'rules' => [
            'id' => 'ID yra privalomas ir turi būti teisingas ID.',
            'name' => 'Pavadinimas yra privalomas ir turi būti eilutė, kurios didžiausias ilgis yra 255 simboliai.',
            'description' => 'Aprašymas turi būti eilutė, kurios didžiausias ilgis yra 400 simbolių, jei pateiktas.',
            'content' => 'Turinys turi būti eilutė, kurios didžiausias ilgis yra 300 000 simbolių, jei pateiktas.',
            'location' => 'Vieta turi būti eilutė, kurios didžiausias ilgis yra 255 simboliai, jei pateikta.',
            'floor_plans' => 'Aukštų planai turi būti teisinga eilutė, jei pateikti.',
            'faq_schema_config' => 'DUK schemos konfigūracija turi būti teisinga eilutė, jei pateikta.',
            'faq_ids' => 'DUK ID turi būti teisingas masyvas, jei pateikti.',
        ],
    ],
    'export' => [
        'total' => 'Iš viso',
    ],
    'import_model_translations' => ':model vertimai',
    'export_model_translations' => ':model vertimai',
    'import_description' => 'Importuoti vertimus :name iš CSV/Excel failo.',
    'export_description' => 'Eksportuoti vertimus :name į CSV/Excel failą.',
];
