<?php

return [
    'name' => 'Napredni jezik',
    'description' => 'Napredne jezične značajke za višejezični sadržaj',
    'import' => [
        'rules' => [
            'id' => 'ID je obavezan i mora biti važeći ID.',
            'name' => 'Naziv je obavezan i mora biti niz s maksimalnom duljinom od 255 znakova.',
            'description' => 'Opis mora biti niz s maksimalnom duljinom od 400 znakova ako je naveden.',
            'content' => 'Sadržaj mora biti niz s maksimalnom duljinom od 300.000 znakova ako je naveden.',
            'location' => 'Lokacija mora biti niz s maksimalnom duljinom od 255 znakova ako je navedena.',
            'floor_plans' => 'Tlocrti moraju biti važeći niz ako su navedeni.',
            'faq_schema_config' => 'Konfiguracija FAQ sheme mora biti važeći niz ako je navedena.',
            'faq_ids' => 'FAQ ID-ovi moraju biti važeće polje ako su navedeni.',
        ],
    ],
    'export' => [
        'total' => 'Ukupno',
    ],
    'import_model_translations' => 'Prijevodi :model',
    'export_model_translations' => 'Prijevodi :model',
    'import_description' => 'Uvezi prijevode za :name iz CSV/Excel datoteke.',
    'export_description' => 'Izvezi prijevode za :name u CSV/Excel datoteku.',
];
