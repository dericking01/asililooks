<?php

return [
    'name' => 'Langue avancée',
    'description' => 'Fonctionnalités linguistiques avancées pour le contenu multilingue',
    'import' => [
        'rules' => [
            'id' => 'L\'ID est requis et doit être un ID valide.',
            'name' => 'Le nom est requis et doit être une chaîne d\'une longueur maximale de 255 caractères.',
            'description' => 'La description doit être une chaîne d\'une longueur maximale de 400 caractères si fournie.',
            'content' => 'Le contenu doit être une chaîne d\'une longueur maximale de 300 000 caractères si fourni.',
            'location' => 'L\'emplacement doit être une chaîne d\'une longueur maximale de 255 caractères si fourni.',
            'floor_plans' => 'Les plans d\'étage doivent être une chaîne valide si fournis.',
            'faq_schema_config' => 'La configuration du schéma FAQ doit être une chaîne valide si fournie.',
            'faq_ids' => 'Les identifiants FAQ doivent être un tableau valide si fournis.',
        ],
    ],
    'export' => [
        'total' => 'Total',
    ],
    'import_model_translations' => 'Traductions de :model',
    'export_model_translations' => 'Traductions de :model',
    'import_description' => 'Importer les traductions pour :name à partir d\'un fichier CSV/Excel.',
    'export_description' => 'Exporter les traductions pour :name vers un fichier CSV/Excel.',
];
