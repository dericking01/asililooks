<?php

return [
    'name' => 'Napredni jezik',
    'description' => 'Napredne jezikovne funkcije za večjezično vsebino',
    'import' => [
        'rules' => [
            'id' => 'ID je obvezen in mora biti veljaven ID.',
            'name' => 'Ime je obvezno in mora biti niz z največjo dolžino 255 znakov.',
            'description' => 'Opis mora biti niz z največjo dolžino 400 znakov, če je naveden.',
            'content' => 'Vsebina mora biti niz z največjo dolžino 300.000 znakov, če je navedena.',
            'location' => 'Lokacija mora biti niz z največjo dolžino 255 znakov, če je navedena.',
            'floor_plans' => 'Tloris mora biti veljaven niz, če je naveden.',
            'faq_schema_config' => 'Konfiguracija sheme FAQ mora biti veljaven niz, če je navedena.',
            'faq_ids' => 'FAQ ID-ji morajo biti veljaven niz, če so navedeni.',
        ],
    ],
    'export' => [
        'total' => 'Skupaj',
    ],
    'import_model_translations' => 'Prevodi :model',
    'export_model_translations' => 'Prevodi :model',
    'import_description' => 'Uvozi prevode za :name iz datoteke CSV/Excel.',
    'export_description' => 'Izvozi prevode za :name v datoteko CSV/Excel.',
];
