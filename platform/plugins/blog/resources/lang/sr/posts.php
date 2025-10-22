<?php

return [
    'create' => 'Креирај нову објаву',
    'form' => [
        'name' => 'Назив',
        'name_placeholder' => 'Назив објаве (максимум :c карактера)',
        'description' => 'Опис',
        'description_placeholder' => 'Кратак опис објаве (максимум :c карактера)',
        'categories' => 'Категорије',
        'tags' => 'Ознаке',
        'tags_placeholder' => 'Ознаке',
        'content' => 'Садржај',
        'is_featured' => 'Истакни ову објаву',
        'note' => 'Садржај напомене',
        'format_type' => 'Формат',

    ],
    'cannot_delete' => 'Објава не може бити обрисана',
    'post_deleted' => 'Објава обрисана',
    'posts' => 'Објаве',
    'post' => 'Објава',
    'edit_this_post' => 'Уреди ову објаву',
    'no_new_post_now' => 'Тренутно нема нових објава!',
    'menu_name' => 'Објаве',
    'widget_posts_recent' => 'Недавне објаве',
    'categories' => 'Категорије',
    'category' => 'Категорија',
    'author' => 'Аутор',
    'is_featured' => 'Истакнуто?',
    'export' => [
        'description' => 'Извези објаве у CSV/Excel датотеку.',
        'total' => 'Укупно објава',
        'limit' => 'Ограничење',
        'limit_placeholder' => 'Оставите празно да извезете све',
        'all_status' => 'Сви статуси',
        'all_featured' => 'Све',
        'all_categories' => 'Све категорије',
        'start_date' => 'Датум почетка',
        'start_date_placeholder' => 'Датум почетка',
        'end_date' => 'Датум краја',
        'end_date_placeholder' => 'Датум краја',

    ],
    'import' => [
        'description' => 'Увези објаве из CSV/Excel датотеке.',
        'done_message' => ':created објава креирано и :updated објава ажурирано.',
        'rules' => [
            'nullable_string_max' => 'Поље :attribute прихвата текстуалну вредност до :max карактера или може бити празно.',
            'sometimes_array' => 'Поље :attribute прихвата низ вредности или може бити празно.',
            'in' => ':attribute мора бити једна од следећих вредности: :values.',
            'nullable_string' => 'Поље :attribute прихвата текстуалну вредност или може бити празно.',
            'nullable_string_max_in' => 'Поље :attribute може бити празно или мора бити текст са максималном дужином од :max карактера ако је наведено и мора бити једна од следећих вредности: :values.',
            'faq_schema_config' => 'Конфигурација FAQ schema мора бити валидан текст ако је наведена.',
            'faq_ids' => 'FAQ ID-ови морају бити валидан низ ако су наведени.',

        ],

    ],
    'post_translations' => 'Преводи објава',
    'export_post_translations' => 'Извези преводе објава',
    'import_description' => 'Увези преводе за :name из CSV/Excel датотеке.',
    'export_description' => 'Извези преводе за :name у CSV/Excel датотеку.',
];
