<?php

return [
    'name' => 'Zaawansowany język',
    'description' => 'Zaawansowane funkcje językowe dla treści wielojęzycznych',
    'import' => [
        'rules' => [
            'id' => 'ID jest wymagane i musi być prawidłowym ID.',
            'name' => 'Nazwa jest wymagana i musi być ciągiem znaków o maksymalnej długości 255 znaków.',
            'description' => 'Opis musi być ciągiem znaków o maksymalnej długości 400 znaków, jeśli został podany.',
            'content' => 'Zawartość musi być ciągiem znaków o maksymalnej długości 300 000 znaków, jeśli została podana.',
            'location' => 'Lokalizacja musi być ciągiem znaków o maksymalnej długości 255 znaków, jeśli została podana.',
            'floor_plans' => 'Plany pięter muszą być prawidłowym ciągiem znaków, jeśli zostały podane.',
            'faq_schema_config' => 'Konfiguracja schematu FAQ musi być prawidłowym ciągiem znaków, jeśli została podana.',
            'faq_ids' => 'Identyfikatory FAQ muszą być prawidłową tablicą, jeśli zostały podane.',
        ],
    ],
    'export' => [
        'total' => 'Łącznie',
    ],
    'import_model_translations' => 'Tłumaczenia :model',
    'export_model_translations' => 'Tłumaczenia :model',
    'import_description' => 'Importuj tłumaczenia dla :name z pliku CSV/Excel.',
    'export_description' => 'Eksportuj tłumaczenia dla :name do pliku CSV/Excel.',
];
