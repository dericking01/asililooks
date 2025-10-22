<?php

return [
    'create' => 'Új bejegyzés létrehozása',
    'form' => [
        'name' => 'Név',
        'name_placeholder' => 'Bejegyzés neve (Maximum :c karakter)',
        'description' => 'Leírás',
        'description_placeholder' => 'Rövid leírás a bejegyzéshez (Maximum :c karakter)',
        'categories' => 'Kategóriák',
        'tags' => 'Címkék',
        'tags_placeholder' => 'Címkék',
        'content' => 'Tartalom',
        'is_featured' => 'Kiemelt bejegyzés',
        'note' => 'Megjegyzés tartalma',
        'format_type' => 'Formátum',

    ],
    'cannot_delete' => 'A bejegyzés nem törölhető',
    'post_deleted' => 'Bejegyzés törölve',
    'posts' => 'Bejegyzések',
    'post' => 'Bejegyzés',
    'edit_this_post' => 'Bejegyzés szerkesztése',
    'no_new_post_now' => 'Jelenleg nincs új bejegyzés!',
    'menu_name' => 'Bejegyzések',
    'widget_posts_recent' => 'Legutóbbi bejegyzések',
    'categories' => 'Kategóriák',
    'category' => 'Kategória',
    'author' => 'Szerző',
    'is_featured' => 'Kiemelt?',
    'export' => [
        'description' => 'Bejegyzések exportálása CSV/Excel fájlba.',
        'total' => 'Összes bejegyzés',
        'limit' => 'Korlát',
        'limit_placeholder' => 'Hagyja üresen az összes exportálásához',
        'all_status' => 'Összes állapot',
        'all_featured' => 'Összes',
        'all_categories' => 'Összes kategória',
        'start_date' => 'Kezdő dátum',
        'start_date_placeholder' => 'Kezdő dátum',
        'end_date' => 'Befejező dátum',
        'end_date_placeholder' => 'Befejező dátum',

    ],
    'import' => [
        'description' => 'Bejegyzések importálása CSV/Excel fájlból.',
        'done_message' => ':created bejegyzés létrehozva és :updated bejegyzés frissítve.',
        'rules' => [
            'nullable_string_max' => 'A :attribute mező legfeljebb :max karakter hosszú szöveget fogad el, vagy üresen hagyható.',
            'sometimes_array' => 'A :attribute mező tömb értéket fogad el, vagy üresen hagyható.',
            'in' => 'A :attribute a következő értékek egyike lehet: :values.',
            'nullable_string' => 'A :attribute mező szöveget fogad el, vagy üresen hagyható.',
            'nullable_string_max_in' => 'A :attribute mező üresen hagyható, vagy legfeljebb :max karakter hosszú szöveg lehet, és a következő értékek egyike kell, hogy legyen: :values.',
            'faq_schema_config' => 'A GYIK séma konfiguráció érvényes szöveg kell, hogy legyen, ha meg van adva.',
            'faq_ids' => 'A GYIK azonosítók érvényes tömb kell, hogy legyenek, ha meg vannak adva.',

        ],

    ],
    'post_translations' => 'Bejegyzés fordítások',
    'export_post_translations' => 'Bejegyzés fordítások exportálása',
    'import_description' => 'Fordítások importálása :name számára CSV/Excel fájlból.',
    'export_description' => 'Fordítások exportálása :name számára CSV/Excel fájlba.',
];
