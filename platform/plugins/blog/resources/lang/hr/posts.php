<?php

return [
    'create' => 'Kreiraj novu objavu',
    'form' => [
        'name' => 'Naziv',
        'name_placeholder' => 'Naziv objave (Maksimalno :c znakova)',
        'description' => 'Opis',
        'description_placeholder' => 'Kratak opis objave (Maksimalno :c znakova)',
        'categories' => 'Kategorije',
        'tags' => 'Oznake',
        'tags_placeholder' => 'Oznake',
        'content' => 'Sadržaj',
        'is_featured' => 'Istakni ovu objavu',
        'note' => 'Sadržaj bilješke',
        'format_type' => 'Format',

    ],
    'cannot_delete' => 'Objava nije mogla biti obrisana',
    'post_deleted' => 'Objava obrisana',
    'posts' => 'Objave',
    'post' => 'Objava',
    'edit_this_post' => 'Uredi ovu objavu',
    'no_new_post_now' => 'Trenutno nema novih objava!',
    'menu_name' => 'Objave',
    'widget_posts_recent' => 'Nedavne objave',
    'categories' => 'Kategorije',
    'category' => 'Kategorija',
    'author' => 'Autor',
    'is_featured' => 'Je istaknuto?',
    'export' => [
        'description' => 'Izvezi objave u CSV/Excel datoteku.',
        'total' => 'Ukupno objava',
        'limit' => 'Ograničenje',
        'limit_placeholder' => 'Ostavi prazno za izvoz svih',
        'all_status' => 'Svi statusi',
        'all_featured' => 'Sve',
        'all_categories' => 'Sve kategorije',
        'start_date' => 'Datum početka',
        'start_date_placeholder' => 'Datum početka',
        'end_date' => 'Datum završetka',
        'end_date_placeholder' => 'Datum završetka',

    ],
    'import' => [
        'description' => 'Uvezi objave iz CSV/Excel datoteke.',
        'done_message' => ':created objava kreirano i :updated objava ažurirano.',
        'rules' => [
            'nullable_string_max' => 'Polje :attribute prihvaća vrijednost niza do :max znakova ili može biti prazno.',
            'sometimes_array' => 'Polje :attribute prihvaća vrijednost niza ili može biti prazno.',
            'in' => ':attribute mora biti jedna od sljedećih vrijednosti: :values.',
            'nullable_string' => 'Polje :attribute prihvaća vrijednost niza ili može biti prazno.',
            'nullable_string_max_in' => 'Polje :attribute može biti prazno ili mora biti niz s maksimalnom duljinom od :max znakova ako je navedeno i mora biti jedna od sljedećih vrijednosti: :values.',
            'faq_schema_config' => 'Konfiguracija FAQ sheme mora biti valjani niz ako je navedena.',
            'faq_ids' => 'FAQ ID-ovi moraju biti valjani niz ako su navedeni.',

        ],

    ],
    'post_translations' => 'Prijevodi objava',
    'export_post_translations' => 'Izvezi prijevode objava',
    'import_description' => 'Uvezi prijevode za :name iz CSV/Excel datoteke.',
    'export_description' => 'Izvezi prijevode za :name u CSV/Excel datoteku.',
];
