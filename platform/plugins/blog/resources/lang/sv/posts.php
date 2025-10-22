<?php

return [
    'create' => 'Skapa ett nytt inlägg',
    'form' => [
        'name' => 'Namn',
        'name_placeholder' => 'Inläggets namn (Max :c tecken)',
        'description' => 'Beskrivning',
        'description_placeholder' => 'Kort beskrivning av inlägget (Max :c tecken)',
        'categories' => 'Kategorier',
        'tags' => 'Taggar',
        'tags_placeholder' => 'Taggar',
        'content' => 'Innehåll',
        'is_featured' => 'Framhäv detta inlägg',
        'note' => 'Anteckningsinnehåll',
        'format_type' => 'Format',

    ],
    'cannot_delete' => 'Inlägget kunde inte raderas',
    'post_deleted' => 'Inlägg raderat',
    'posts' => 'Inlägg',
    'post' => 'Inlägg',
    'edit_this_post' => 'Redigera detta inlägg',
    'no_new_post_now' => 'Det finns inga nya inlägg just nu!',
    'menu_name' => 'Inlägg',
    'widget_posts_recent' => 'Senaste inläggen',
    'categories' => 'Kategorier',
    'category' => 'Kategori',
    'author' => 'Författare',
    'is_featured' => 'Är framhävt?',
    'export' => [
        'description' => 'Exportera inlägg till CSV/Excel fil.',
        'total' => 'Totalt antal inlägg',
        'limit' => 'Gräns',
        'limit_placeholder' => 'Lämna tomt för att exportera alla',
        'all_status' => 'Alla statusar',
        'all_featured' => 'Alla',
        'all_categories' => 'Alla kategorier',
        'start_date' => 'Startdatum',
        'start_date_placeholder' => 'Startdatum',
        'end_date' => 'Slutdatum',
        'end_date_placeholder' => 'Slutdatum',

    ],
    'import' => [
        'description' => 'Importera inlägg från en CSV/Excel fil.',
        'done_message' => ':created inlägg skapade och :updated inlägg uppdaterade.',
        'rules' => [
            'nullable_string_max' => 'Fältet :attribute accepterar ett strängvärde på upp till :max tecken eller kan lämnas tomt.',
            'sometimes_array' => 'Fältet :attribute accepterar ett array-värde eller kan lämnas tomt.',
            'in' => ':attribute måste vara ett av följande värden: :values.',
            'nullable_string' => 'Fältet :attribute accepterar ett strängvärde eller kan lämnas tomt.',
            'nullable_string_max_in' => 'Fältet :attribute kan lämnas tomt, eller måste vara en sträng med en maximal längd på :max tecken om det anges och måste vara ett av följande värden: :values.',
            'faq_schema_config' => 'FAQ-schemakonfiguration måste vara en giltig sträng om den anges.',
            'faq_ids' => 'FAQ-ID:n måste vara en giltig array om de anges.',

        ],

    ],
    'post_translations' => 'Inläggsöversättningar',
    'export_post_translations' => 'Exportera inläggsöversättningar',
    'import_description' => 'Importera översättningar för :name från en CSV/Excel fil.',
    'export_description' => 'Exportera översättningar för :name till en CSV/Excel fil.',
];
