<?php

return [
    'product_specification' => 'Specifikacija proizvoda',
    'specification_groups' => [
        'title' => 'Grupe specifikacija',
        'menu_name' => 'Grupe',

        'create' => [
            'title' => 'Kreiraj grupu specifikacija',
        ],

        'edit' => [
            'title' => 'Izmeni grupu specifikacija ":name"',
        ],
    ],

    'specification_attributes' => [
        'title' => 'Atributi specifikacija',
        'menu_name' => 'Atributi',

        'group' => 'Povezana grupa',
        'group_placeholder' => 'Izaberite bilo koju grupu',
        'name_placeholder' => 'Unesite naziv atributa',
        'type' => 'Tip polja',
        'type_placeholder' => 'Izaberite tip polja',
        'default_value' => 'Podrazumevana vrednost',
        'default_value_placeholder' => 'Unesite podrazumevanu vrednost (opciono)',
        'options' => [
            'heading' => 'Opcije',

            'add' => [
                'label' => 'Dodaj novu opciju',
            ],
        ],

        'create' => [
            'title' => 'Kreiraj atribut specifikacije',
        ],

        'edit' => [
            'title' => 'Izmeni atribut specifikacije ":name"',
        ],
    ],

    'specification_tables' => [
        'title' => 'Tabele specifikacija',
        'menu_name' => 'Tabele',

        'create' => [
            'title' => 'Kreiraj tabelu specifikacija',
        ],

        'edit' => [
            'title' => 'Izmeni tabelu specifikacija ":name"',
        ],

        'fields' => [
            'groups' => 'Izaberite grupe za prikaz u ovoj tabeli',
            'name' => 'Naziv grupe',
            'assigned_groups' => 'Dodeljene grupe',
            'sorting' => 'Sortiranje',
        ],
    ],

    'product' => [
        'specification_table' => [
            'options' => 'Opcije',
            'title' => 'Tabela specifikacija',
            'select_none' => 'Bez',
            'description' => 'Izaberite tabelu specifikacija za prikaz u ovom proizvodu',
            'group' => 'Grupa',
            'attribute' => 'Atribut',
            'value' => 'Vrednost atributa',
            'hide' => 'Sakrij',
            'sorting' => 'Sortiranje',
            'enter_value' => 'Unesite vrednost',
            'enter_translation' => 'Unesite prevod',
            'not_set' => 'Nije postavljeno',
        ],
    ],

    'enums' => [
        'field_types' => [
            'text' => 'Tekst',
            'textarea' => 'Tekstualno polje',
            'select' => 'Izbor',
            'checkbox' => 'Polje za potvrdu',
            'radio' => 'Radio dugme',
        ],
    ],
];
