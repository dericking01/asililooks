<?php

return [
    'create' => 'Opprett et nytt innlegg',
    'form' => [
        'name' => 'Navn',
        'name_placeholder' => 'Innleggets navn (Maksimum :c tegn)',
        'description' => 'Beskrivelse',
        'description_placeholder' => 'Kort beskrivelse av innlegget (Maksimum :c tegn)',
        'categories' => 'Kategorier',
        'tags' => 'Tagger',
        'tags_placeholder' => 'Tagger',
        'content' => 'Innhold',
        'is_featured' => 'Marker dette innlegget som fremhevet',
        'note' => 'Notatinnhold',
        'format_type' => 'Format',

    ],
    'cannot_delete' => 'Innlegget kunne ikke slettes',
    'post_deleted' => 'Innlegg slettet',
    'posts' => 'Innlegg',
    'post' => 'Innlegg',
    'edit_this_post' => 'Rediger dette innlegget',
    'no_new_post_now' => 'Det er ingen nye innlegg nå!',
    'menu_name' => 'Innlegg',
    'widget_posts_recent' => 'Nylige innlegg',
    'categories' => 'Kategorier',
    'category' => 'Kategori',
    'author' => 'Forfatter',
    'is_featured' => 'Er fremhevet?',
    'export' => [
        'description' => 'Eksporter innlegg til CSV/Excel-fil.',
        'total' => 'Totalt antall innlegg',
        'limit' => 'Grense',
        'limit_placeholder' => 'La stå tom for å eksportere alle',
        'all_status' => 'Alle statuser',
        'all_featured' => 'Alle',
        'all_categories' => 'Alle kategorier',
        'start_date' => 'Startdato',
        'start_date_placeholder' => 'Startdato',
        'end_date' => 'Sluttdato',
        'end_date_placeholder' => 'Sluttdato',

    ],
    'import' => [
        'description' => 'Importer innlegg fra en CSV/Excel-fil.',
        'done_message' => ':created innlegg opprettet og :updated innlegg oppdatert.',
        'rules' => [
            'nullable_string_max' => 'Feltet :attribute godtar en strengverdi på opptil :max tegn eller kan stå tomt.',
            'sometimes_array' => 'Feltet :attribute godtar en array-verdi eller kan stå tomt.',
            'in' => ':attribute må være en av følgende verdier: :values.',
            'nullable_string' => 'Feltet :attribute godtar en strengverdi eller kan stå tomt.',
            'nullable_string_max_in' => 'Feltet :attribute kan stå tomt, eller må være en streng med maksimal lengde på :max tegn hvis oppgitt, og må være en av følgende verdier: :values.',
            'faq_schema_config' => 'FAQ-skjemakonfigurasjon må være en gyldig streng hvis oppgitt.',
            'faq_ids' => 'FAQ-IDer må være en gyldig array hvis oppgitt.',

        ],

    ],
    'post_translations' => 'Innleggsoversettelser',
    'export_post_translations' => 'Eksporter innleggsoversettelser',
    'import_description' => 'Importer oversettelser for :name fra en CSV/Excel-fil.',
    'export_description' => 'Eksporter oversettelser for :name til CSV/Excel-fil.',
];
