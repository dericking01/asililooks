<?php

return [
    'create' => 'Creează o postare nouă',
    'form' => [
        'name' => 'Nume',
        'name_placeholder' => 'Numele postării (Maximum :c caractere)',
        'description' => 'Descriere',
        'description_placeholder' => 'Descriere scurtă pentru postare (Maximum :c caractere)',
        'categories' => 'Categorii',
        'tags' => 'Etichete',
        'tags_placeholder' => 'Etichete',
        'content' => 'Conținut',
        'is_featured' => 'Postare recomandată',
        'note' => 'Conținut notă',
        'format_type' => 'Format',

    ],
    'cannot_delete' => 'Postarea nu a putut fi ștearsă',
    'post_deleted' => 'Postare ștearsă',
    'posts' => 'Postări',
    'post' => 'Postare',
    'edit_this_post' => 'Editează această postare',
    'no_new_post_now' => 'Nu există postări noi momentan!',
    'menu_name' => 'Postări',
    'widget_posts_recent' => 'Postări Recente',
    'categories' => 'Categorii',
    'category' => 'Categorie',
    'author' => 'Autor',
    'is_featured' => 'Este recomandată?',
    'export' => [
        'description' => 'Exportă postările în fișier CSV/Excel.',
        'total' => 'Total Postări',
        'limit' => 'Limită',
        'limit_placeholder' => 'Lasă gol pentru a exporta toate',
        'all_status' => 'Toate Statusurile',
        'all_featured' => 'Toate',
        'all_categories' => 'Toate Categoriile',
        'start_date' => 'Data de Început',
        'start_date_placeholder' => 'Data de început',
        'end_date' => 'Data de Sfârșit',
        'end_date_placeholder' => 'Data de sfârșit',

    ],
    'import' => [
        'description' => 'Importă postări dintr-un fișier CSV/Excel.',
        'done_message' => ':created postări create și :updated postări actualizate.',
        'rules' => [
            'nullable_string_max' => 'Câmpul :attribute acceptă o valoare șir de până la :max caractere sau poate fi lăsat gol.',
            'sometimes_array' => 'Câmpul :attribute acceptă o valoare de tip array sau poate fi lăsat gol.',
            'in' => ':attribute trebuie să fie una dintre următoarele valori: :values.',
            'nullable_string' => 'Câmpul :attribute acceptă o valoare șir sau poate fi lăsat gol.',
            'nullable_string_max_in' => 'Câmpul :attribute poate fi lăsat gol, sau trebuie să fie un șir cu o lungime maximă de :max caractere dacă este furnizat și trebuie să fie una dintre următoarele valori: :values.',
            'faq_schema_config' => 'Configurația schemei FAQ trebuie să fie un șir valid dacă este furnizată.',
            'faq_ids' => 'ID-urile FAQ trebuie să fie un array valid dacă sunt furnizate.',

        ],

    ],
    'post_translations' => 'Traduceri Postări',
    'export_post_translations' => 'Exportă Traduceri Postări',
    'import_description' => 'Importă traduceri pentru :name dintr-un fișier CSV/Excel.',
    'export_description' => 'Exportă traduceri pentru :name într-un fișier CSV/Excel.',
];
