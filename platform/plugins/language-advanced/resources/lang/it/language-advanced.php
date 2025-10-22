<?php

return [
    'name' => 'Lingua avanzata',
    'description' => 'Funzionalità linguistiche avanzate per contenuti multilingue',
    'import' => [
        'rules' => [
            'id' => 'L\'ID è obbligatorio e deve essere un ID valido.',
            'name' => 'Il nome è obbligatorio e deve essere una stringa con una lunghezza massima di 255 caratteri.',
            'description' => 'La descrizione deve essere una stringa con una lunghezza massima di 400 caratteri se fornita.',
            'content' => 'Il contenuto deve essere una stringa con una lunghezza massima di 300.000 caratteri se fornito.',
            'location' => 'La posizione deve essere una stringa con una lunghezza massima di 255 caratteri se fornita.',
            'floor_plans' => 'Le planimetrie devono essere una stringa valida se fornite.',
            'faq_schema_config' => 'La configurazione dello schema FAQ deve essere una stringa valida se fornita.',
            'faq_ids' => 'Gli ID FAQ devono essere un array valido se forniti.',
        ],
    ],
    'export' => [
        'total' => 'Totale',
    ],
    'import_model_translations' => 'Traduzioni di :model',
    'export_model_translations' => 'Traduzioni di :model',
    'import_description' => 'Importa traduzioni per :name da un file CSV/Excel.',
    'export_description' => 'Esporta traduzioni per :name in un file CSV/Excel.',
];
