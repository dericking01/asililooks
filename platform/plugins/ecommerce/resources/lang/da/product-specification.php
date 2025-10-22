<?php

return [
    'product_specification' => 'Produktspecifikation',
    'specification_groups' => [
        'title' => 'Specifikationsgrupper',
        'menu_name' => 'Grupper',

        'create' => [
            'title' => 'Opret specifikationsgruppe',
        ],

        'edit' => [
            'title' => 'Rediger specifikationsgruppe ":name"',
        ],
    ],

    'specification_attributes' => [
        'title' => 'Specifikationsattributter',
        'menu_name' => 'Attributter',

        'group' => 'Tilknyttet gruppe',
        'group_placeholder' => 'Vælg en gruppe',
        'name_placeholder' => 'Indtast attributnavn',
        'type' => 'Felttype',
        'type_placeholder' => 'Vælg felttype',
        'default_value' => 'Standardværdi',
        'default_value_placeholder' => 'Indtast standardværdi (valgfri)',
        'options' => [
            'heading' => 'Muligheder',

            'add' => [
                'label' => 'Tilføj ny mulighed',
            ],
        ],

        'create' => [
            'title' => 'Opret specifikationsattribut',
        ],

        'edit' => [
            'title' => 'Rediger specifikationsattribut ":name"',
        ],
    ],

    'specification_tables' => [
        'title' => 'Specifikationstabeller',
        'menu_name' => 'Tabeller',

        'create' => [
            'title' => 'Opret specifikationstabel',
        ],

        'edit' => [
            'title' => 'Rediger specifikationstabel ":name"',
        ],

        'fields' => [
            'groups' => 'Vælg grupperne der skal vises i denne tabel',
            'name' => 'Gruppenavn',
            'assigned_groups' => 'Tildelte grupper',
            'sorting' => 'Sortering',
        ],
    ],

    'product' => [
        'specification_table' => [
            'options' => 'Muligheder',
            'title' => 'Specifikationstabel',
            'select_none' => 'Ingen',
            'description' => 'Vælg specifikationstabellen der skal vises i dette produkt',
            'group' => 'Gruppe',
            'attribute' => 'Attribut',
            'value' => 'Attributværdi',
            'hide' => 'Skjul',
            'sorting' => 'Sortering',
            'enter_value' => 'Indtast værdi',
            'enter_translation' => 'Indtast oversættelse',
            'not_set' => 'Ikke indstillet',
        ],
    ],

    'enums' => [
        'field_types' => [
            'text' => 'Tekst',
            'textarea' => 'Tekstområde',
            'select' => 'Vælg',
            'checkbox' => 'Afkrydsningsfelt',
            'radio' => 'Radio',
        ],
    ],
];
