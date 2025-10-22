<?php

return [
    'create' => 'Sukurti naują įrašą',
    'form' => [
        'name' => 'Pavadinimas',
        'name_placeholder' => 'Įrašo pavadinimas (Maksimaliai :c simbolių)',
        'description' => 'Aprašymas',
        'description_placeholder' => 'Trumpas įrašo aprašymas (Maksimaliai :c simbolių)',
        'categories' => 'Kategorijos',
        'tags' => 'Žymės',
        'tags_placeholder' => 'Žymės',
        'content' => 'Turinys',
        'is_featured' => 'Pažymėti šį įrašą',
        'note' => 'Pastabos turinys',
        'format_type' => 'Formatas',

    ],
    'cannot_delete' => 'Įrašas negali būti ištrintas',
    'post_deleted' => 'Įrašas ištrintas',
    'posts' => 'Įrašai',
    'post' => 'Įrašas',
    'edit_this_post' => 'Redaguoti šį įrašą',
    'no_new_post_now' => 'Šiuo metu nėra naujų įrašų!',
    'menu_name' => 'Įrašai',
    'widget_posts_recent' => 'Naujausi įrašai',
    'categories' => 'Kategorijos',
    'category' => 'Kategorija',
    'author' => 'Autorius',
    'is_featured' => 'Ar pažymėtas?',
    'export' => [
        'description' => 'Eksportuoti įrašus į CSV/Excel failą.',
        'total' => 'Viso įrašų',
        'limit' => 'Limitas',
        'limit_placeholder' => 'Palikite tuščią, kad eksportuoti visus',
        'all_status' => 'Visi statusai',
        'all_featured' => 'Visi',
        'all_categories' => 'Visos kategorijos',
        'start_date' => 'Pradžios data',
        'start_date_placeholder' => 'Pradžios data',
        'end_date' => 'Pabaigos data',
        'end_date_placeholder' => 'Pabaigos data',

    ],
    'import' => [
        'description' => 'Importuoti įrašus iš CSV/Excel failo.',
        'done_message' => ':created įrašai sukurti ir :updated įrašai atnaujinti.',
        'rules' => [
            'nullable_string_max' => 'Laukas :attribute priima tekstinę reikšmę iki :max simbolių arba gali būti paliktas tuščias.',
            'sometimes_array' => 'Laukas :attribute priima masyvo reikšmę arba gali būti paliktas tuščias.',
            'in' => ':attribute turi būti viena iš šių reikšmių: :values.',
            'nullable_string' => 'Laukas :attribute priima tekstinę reikšmę arba gali būti paliktas tuščias.',
            'nullable_string_max_in' => 'Laukas :attribute gali būti paliktas tuščias arba turi būti tekstas su maksimaliu ilgiu :max simbolių ir turi būti viena iš šių reikšmių: :values.',
            'faq_schema_config' => 'DUK schemos konfigūracija turi būti tinkama tekstinė reikšmė, jei nurodyta.',
            'faq_ids' => 'DUK ID turi būti tinkamas masyvas, jei nurodytas.',

        ],

    ],
    'post_translations' => 'Įrašų vertimai',
    'export_post_translations' => 'Eksportuoti įrašų vertimus',
    'import_description' => 'Importuoti vertimus :name iš CSV/Excel failo.',
    'export_description' => 'Eksportuoti vertimus :name į CSV/Excel failą.',
];
