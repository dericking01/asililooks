<?php

return [
    'create' => 'Створити новий пост',
    'form' => [
        'name' => 'Назва',
        'name_placeholder' => 'Назва посту (Максимум :c символів)',
        'description' => 'Опис',
        'description_placeholder' => 'Короткий опис посту (Максимум :c символів)',
        'categories' => 'Категорії',
        'tags' => 'Теги',
        'tags_placeholder' => 'Теги',
        'content' => 'Зміст',
        'is_featured' => 'Рекомендований?',
        'note' => 'Примітка',
        'format_type' => 'Формат',

    ],
    'cannot_delete' => 'Не вдалося видалити пост',
    'post_deleted' => 'Пост видалено',
    'posts' => 'Пости',
    'post' => 'Пост',
    'edit_this_post' => 'Редагувати цей пост',
    'no_new_post_now' => 'Наразі немає нових постів!',
    'menu_name' => 'Пости',
    'widget_posts_recent' => 'Останні пости',
    'categories' => 'Категорії',
    'category' => 'Категорія',
    'author' => 'Автор',
    'export' => [
        'description' => 'Експорт публікацій у файл CSV/Excel.',
        'total' => 'Всього дописів',
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
        'description' => 'Імпорт публікацій із файлу CSV/Excel.',
        'done_message' => ':created posts created and :updated posts updated.',
        'rules' => [
            'nullable_string_max' => ':attribute can be empty or a string with a maximum length of :max characters if provided.',
            'sometimes_array' => ':attribute can be left empty or must be an array if provided.',
            'in' => ':attribute must be one of the following values: :values.',
            'nullable_string' => ':attribute can be left empty or must be a string if provided.',
            'nullable_string_max_in' => ':attribute can be left empty or must be a string with a maximum length of :max characters if provided and must be one of the following values: :values.',
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
