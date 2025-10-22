<?php

return [
    'create' => 'Crie uma nova postagem',
    'form' => [
        'name' => 'Nome',
        'name_placeholder' => 'Post\'s name (Maximum :c characters)',
        'description' => 'Descrição',
        'description_placeholder' => 'Short description for post (Maximum :c characters)',
        'categories' => 'Categorias',
        'tags' => 'Etiquetas',
        'tags_placeholder' => 'Etiquetas',
        'content' => 'Contente',
        'is_featured' => 'Destaque esta postagem',
        'note' => 'Conteúdo da nota',
        'format_type' => 'Formatar',

    ],
    'cannot_delete' => 'Não foi possível excluir a postagem',
    'post_deleted' => 'Postagem excluída',
    'posts' => 'Postagens',
    'post' => 'Publicar',
    'edit_this_post' => 'Edite esta postagem',
    'no_new_post_now' => 'Não há nenhuma postagem nova agora!',
    'menu_name' => 'Postagens',
    'widget_posts_recent' => 'Postagens recentes',
    'categories' => 'Categorias',
    'category' => 'Categoria',
    'author' => 'Autor',
    'export' => [
        'description' => 'Exporte postagens para arquivo CSV/Excel.',
        'total' => 'Total de postagens',
        'limit' => 'Limit',
        'limit_placeholder' => 'Leave empty to export all',
        'all_status' => 'All Status',
        'all_featured' => 'All',
        'all_categories' => 'All Categories',
        'start_date' => 'Start Date',
        'start_date_placeholder' => 'Start date',
        'end_date' => 'End Date',
        'end_date_placeholder' => 'End date',

    ],
    'import' => [
        'description' => 'Importe postagens de um arquivo CSV/Excel.',
        'done_message' => ':created posts created and :updated posts updated.',
        'rules' => [
            'nullable_string_max' => 'The :attribute field accepts a string value of up to :max characters or may be left blank.',
            'sometimes_array' => 'The :attribute field accepts an array value or may be left blank.',
            'in' => ':attribute must be one of the following values: :values.',
            'nullable_string' => 'The :attribute field accepts a string value or may be left blank.',
            'nullable_string_max_in' => 'The :attribute field can be left blank, or must be a string with a maximum length of :max characters if provided and must be one of the following values: :values.',
            'faq_schema_config' => 'FAQ schema configuration must be a valid string if provided.',
            'faq_ids' => 'FAQ IDs must be a valid array if provided.',

        ],

    ],
    'is_featured' => 'Is featured?',
    'post_translations' => 'Post Translations',
    'export_post_translations' => 'Export Post Translations',
    'import_description' => 'Import translations for :name from a CSV/Excel file.',
    'export_description' => 'Export translations for :name to a CSV/Excel file.',
];
