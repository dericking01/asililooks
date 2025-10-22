<?php

return [
    'create' => 'Crea un nuovo articolo',
    'form' => [
        'name' => 'Nome',
        'name_placeholder' => 'Nome dell\'articolo (Massimo :c caratteri)',
        'description' => 'Descrizione',
        'description_placeholder' => 'Breve descrizione per l\'articolo (Massimo :c caratteri)',
        'categories' => 'Categorie',
        'tags' => 'Tag',
        'tags_placeholder' => 'Tag',
        'content' => 'Contenuto',
        'is_featured' => 'Metti in evidenza questo articolo',
        'note' => 'Contenuto della nota',
        'format_type' => 'Formato',

    ],
    'cannot_delete' => 'Impossibile eliminare l\'articolo',
    'post_deleted' => 'Articolo eliminato',
    'posts' => 'Articoli',
    'post' => 'Articolo',
    'edit_this_post' => 'Modifica questo articolo',
    'no_new_post_now' => 'Non ci sono nuovi articoli al momento!',
    'menu_name' => 'Articoli',
    'widget_posts_recent' => 'Articoli Recenti',
    'categories' => 'Categorie',
    'category' => 'Categoria',
    'author' => 'Autore',
    'is_featured' => 'È in evidenza?',
    'export' => [
        'description' => 'Esporta articoli in file CSV/Excel.',
        'total' => 'Totale Articoli',
        'limit' => 'Limite',
        'limit_placeholder' => 'Lascia vuoto per esportare tutti',
        'all_status' => 'Tutti gli Stati',
        'all_featured' => 'Tutti',
        'all_categories' => 'Tutte le Categorie',
        'start_date' => 'Data di Inizio',
        'start_date_placeholder' => 'Data di inizio',
        'end_date' => 'Data di Fine',
        'end_date_placeholder' => 'Data di fine',

    ],
    'import' => [
        'description' => 'Importa articoli da un file CSV/Excel.',
        'done_message' => ':created articoli creati e :updated articoli aggiornati.',
        'rules' => [
            'nullable_string_max' => 'Il campo :attribute accetta un valore stringa fino a :max caratteri o può essere lasciato vuoto.',
            'sometimes_array' => 'Il campo :attribute accetta un valore array o può essere lasciato vuoto.',
            'in' => ':attribute deve essere uno dei seguenti valori: :values.',
            'nullable_string' => 'Il campo :attribute accetta un valore stringa o può essere lasciato vuoto.',
            'nullable_string_max_in' => 'Il campo :attribute può essere lasciato vuoto, oppure deve essere una stringa con una lunghezza massima di :max caratteri se fornito e deve essere uno dei seguenti valori: :values.',
            'faq_schema_config' => 'La configurazione dello schema FAQ deve essere una stringa valida se fornita.',
            'faq_ids' => 'Gli ID delle FAQ devono essere un array valido se forniti.',

        ],

    ],
    'post_translations' => 'Traduzioni Articolo',
    'export_post_translations' => 'Esporta Traduzioni Articolo',
    'import_description' => 'Importa traduzioni per :name da un file CSV/Excel.',
    'export_description' => 'Esporta traduzioni per :name in un file CSV/Excel.',
];
