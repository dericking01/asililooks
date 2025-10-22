<?php

return [
    'create' => 'Vytvoriť nový príspevok',
    'form' => [
        'name' => 'Názov',
        'name_placeholder' => 'Názov príspevku (Maximum :c znakov)',
        'description' => 'Popis',
        'description_placeholder' => 'Krátky popis príspevku (Maximum :c znakov)',
        'categories' => 'Kategórie',
        'tags' => 'Štítky',
        'tags_placeholder' => 'Štítky',
        'content' => 'Obsah',
        'is_featured' => 'Vyzdvihnúť tento príspevok',
        'note' => 'Poznámka k obsahu',
        'format_type' => 'Formát',

    ],
    'cannot_delete' => 'Príspevok sa nepodarilo vymazať',
    'post_deleted' => 'Príspevok vymazaný',
    'posts' => 'Príspevky',
    'post' => 'Príspevok',
    'edit_this_post' => 'Upraviť tento príspevok',
    'no_new_post_now' => 'Momentálne nie je žiadny nový príspevok!',
    'menu_name' => 'Príspevky',
    'widget_posts_recent' => 'Nedávne príspevky',
    'categories' => 'Kategórie',
    'category' => 'Kategória',
    'author' => 'Autor',
    'is_featured' => 'Je vyzdvihnutý?',
    'export' => [
        'description' => 'Exportovať príspevky do CSV/Excel súboru.',
        'total' => 'Celkový počet príspevkov',
        'limit' => 'Limit',
        'limit_placeholder' => 'Nechajte prázdne pre export všetkých',
        'all_status' => 'Všetky stavy',
        'all_featured' => 'Všetky',
        'all_categories' => 'Všetky kategórie',
        'start_date' => 'Dátum začiatku',
        'start_date_placeholder' => 'Dátum začiatku',
        'end_date' => 'Dátum konca',
        'end_date_placeholder' => 'Dátum konca',

    ],
    'import' => [
        'description' => 'Importovať príspevky z CSV/Excel súboru.',
        'done_message' => ':created príspevkov vytvorených a :updated príspevkov aktualizovaných.',
        'rules' => [
            'nullable_string_max' => 'Pole :attribute akceptuje reťazcovú hodnotu s maximálne :max znakmi alebo môže byť ponechané prázdne.',
            'sometimes_array' => 'Pole :attribute akceptuje hodnotu poľa alebo môže byť ponechané prázdne.',
            'in' => ':attribute musí byť jedna z nasledujúcich hodnôt: :values.',
            'nullable_string' => 'Pole :attribute akceptuje reťazcovú hodnotu alebo môže byť ponechané prázdne.',
            'nullable_string_max_in' => 'Pole :attribute môže byť ponechané prázdne alebo musí byť reťazec s maximálnou dĺžkou :max znakov, ak je uvedené, a musí byť jedna z nasledujúcich hodnôt: :values.',
            'faq_schema_config' => 'Konfigurácia schémy FAQ musí byť platný reťazec, ak je uvedená.',
            'faq_ids' => 'ID FAQ musia byť platné pole, ak sú uvedené.',

        ],

    ],
    'post_translations' => 'Preklady príspevkov',
    'export_post_translations' => 'Exportovať preklady príspevkov',
    'import_description' => 'Importovať preklady pre :name z CSV/Excel súboru.',
    'export_description' => 'Exportovať preklady pre :name do CSV/Excel súboru.',
];
