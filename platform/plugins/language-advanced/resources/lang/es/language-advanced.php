<?php

return [
    'name' => 'Idioma avanzado',
    'description' => 'Funciones avanzadas de idioma para contenido multilingüe',
    'import' => [
        'rules' => [
            'id' => 'El ID es obligatorio y debe ser un ID válido.',
            'name' => 'El nombre es obligatorio y debe ser una cadena con una longitud máxima de 255 caracteres.',
            'description' => 'La descripción debe ser una cadena con una longitud máxima de 400 caracteres si se proporciona.',
            'content' => 'El contenido debe ser una cadena con una longitud máxima de 300,000 caracteres si se proporciona.',
            'location' => 'La ubicación debe ser una cadena con una longitud máxima de 255 caracteres si se proporciona.',
            'floor_plans' => 'Los planos de planta deben ser una cadena válida si se proporcionan.',
            'faq_schema_config' => 'La configuración del esquema de FAQ debe ser una cadena válida si se proporciona.',
            'faq_ids' => 'Los IDs de FAQ deben ser un array válido si se proporcionan.',
        ],
    ],
    'export' => [
        'total' => 'Total',
    ],
    'import_model_translations' => 'Traducciones de :model',
    'export_model_translations' => 'Traducciones de :model',
    'import_description' => 'Importar traducciones para :name desde un archivo CSV/Excel.',
    'export_description' => 'Exportar traducciones para :name a un archivo CSV/Excel.',
];
