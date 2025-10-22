<?php

return [
    'name' => 'Erweiterte Sprache',
    'description' => 'Erweiterte Sprachfunktionen für mehrsprachige Inhalte',
    'import' => [
        'rules' => [
            'id' => 'ID ist erforderlich und muss eine gültige ID sein.',
            'name' => 'Name ist erforderlich und muss eine Zeichenfolge mit einer maximalen Länge von 255 Zeichen sein.',
            'description' => 'Beschreibung muss eine Zeichenfolge mit einer maximalen Länge von 400 Zeichen sein, falls angegeben.',
            'content' => 'Inhalt muss eine Zeichenfolge mit einer maximalen Länge von 300.000 Zeichen sein, falls angegeben.',
            'location' => 'Standort muss eine Zeichenfolge mit einer maximalen Länge von 255 Zeichen sein, falls angegeben.',
            'floor_plans' => 'Grundrisse müssen eine gültige Zeichenfolge sein, falls angegeben.',
            'faq_schema_config' => 'FAQ-Schema-Konfiguration muss eine gültige Zeichenfolge sein, falls angegeben.',
            'faq_ids' => 'FAQ-IDs müssen ein gültiges Array sein, falls angegeben.',
        ],
    ],
    'export' => [
        'total' => 'Gesamt',
    ],
    'import_model_translations' => ':model Übersetzungen',
    'export_model_translations' => ':model Übersetzungen',
    'import_description' => 'Übersetzungen für :name aus einer CSV/Excel-Datei importieren.',
    'export_description' => 'Übersetzungen für :name in eine CSV/Excel-Datei exportieren.',
];
