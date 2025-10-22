<?php

return [
    'name' => 'Idioma avançado',
    'description' => 'Funcionalidades avançadas de idioma para conteúdo multilingue',
    'import' => [
        'rules' => [
            'id' => 'O ID é obrigatório e deve ser um ID válido.',
            'name' => 'O nome é obrigatório e deve ser uma string com um comprimento máximo de 255 caracteres.',
            'description' => 'A descrição deve ser uma string com um comprimento máximo de 400 caracteres, se fornecida.',
            'content' => 'O conteúdo deve ser uma string com um comprimento máximo de 300.000 caracteres, se fornecido.',
            'location' => 'A localização deve ser uma string com um comprimento máximo de 255 caracteres, se fornecida.',
            'floor_plans' => 'As plantas devem ser uma string válida, se fornecidas.',
            'faq_schema_config' => 'A configuração do esquema de FAQ deve ser uma string válida, se fornecida.',
            'faq_ids' => 'Os IDs de FAQ devem ser um array válido, se fornecidos.',
        ],
    ],
    'export' => [
        'total' => 'Total',
    ],
    'import_model_translations' => 'Traduções de :model',
    'export_model_translations' => 'Traduções de :model',
    'import_description' => 'Importar traduções para :name de um ficheiro CSV/Excel.',
    'export_description' => 'Exportar traduções para :name para um ficheiro CSV/Excel.',
];
