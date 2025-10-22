<?php

return [
    'create' => 'Izveidot jaunu ierakstu',
    'form' => [
        'name' => 'Nosaukums',
        'name_placeholder' => 'Ieraksta nosaukums (Maksimums :c rakstzīmes)',
        'description' => 'Apraksts',
        'description_placeholder' => 'Īss ieraksta apraksts (Maksimums :c rakstzīmes)',
        'categories' => 'Kategorijas',
        'tags' => 'Iezīmes',
        'tags_placeholder' => 'Iezīmes',
        'content' => 'Saturs',
        'is_featured' => 'Izcelt šo ierakstu',
        'note' => 'Piezīmes saturs',
        'format_type' => 'Formāts',

    ],
    'cannot_delete' => 'Ierakstu nevarēja izdzēst',
    'post_deleted' => 'Ieraksts izdzēsts',
    'posts' => 'Ieraksti',
    'post' => 'Ieraksts',
    'edit_this_post' => 'Rediģēt šo ierakstu',
    'no_new_post_now' => 'Pašlaik nav jaunu ierakstu!',
    'menu_name' => 'Ieraksti',
    'widget_posts_recent' => 'Jaunākie ieraksti',
    'categories' => 'Kategorijas',
    'category' => 'Kategorija',
    'author' => 'Autors',
    'is_featured' => 'Vai izcelt?',
    'export' => [
        'description' => 'Eksportēt ierakstus uz CSV/Excel failu.',
        'total' => 'Ierakstu kopskaits',
        'limit' => 'Limits',
        'limit_placeholder' => 'Atstājiet tukšu, lai eksportētu visus',
        'all_status' => 'Visi statusi',
        'all_featured' => 'Visi',
        'all_categories' => 'Visas kategorijas',
        'start_date' => 'Sākuma datums',
        'start_date_placeholder' => 'Sākuma datums',
        'end_date' => 'Beigu datums',
        'end_date_placeholder' => 'Beigu datums',

    ],
    'import' => [
        'description' => 'Importēt ierakstus no CSV/Excel faila.',
        'done_message' => ':created ieraksti izveidoti un :updated ieraksti atjaunināti.',
        'rules' => [
            'nullable_string_max' => 'Lauks :attribute pieņem virknes vērtību līdz :max rakstzīmēm vai var būt tukšs.',
            'sometimes_array' => 'Lauks :attribute pieņem masīva vērtību vai var būt tukšs.',
            'in' => ':attribute jābūt vienai no šīm vērtībām: :values.',
            'nullable_string' => 'Lauks :attribute pieņem virknes vērtību vai var būt tukšs.',
            'nullable_string_max_in' => 'Lauks :attribute var būt tukšs vai jābūt virknei ar maksimālo garumu :max rakstzīmes, ja norādīts, un jābūt vienai no šīm vērtībām: :values.',
            'faq_schema_config' => 'BUJ shēmas konfigurācijai jābūt derīgai virknei, ja norādīta.',
            'faq_ids' => 'BUJ ID jābūt derīgam masīvam, ja norādīts.',

        ],

    ],
    'post_translations' => 'Ierakstu tulkojumi',
    'export_post_translations' => 'Eksportēt ierakstu tulkojumus',
    'import_description' => 'Importēt tulkojumus :name no CSV/Excel faila.',
    'export_description' => 'Eksportēt tulkojumus :name uz CSV/Excel failu.',
];
