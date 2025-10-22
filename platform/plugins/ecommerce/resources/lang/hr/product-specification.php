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
            'title' => 'Uredi grupu specifikacija ":name"',
        ],
    ],

    'specification_attributes' => [
        'title' => 'Atributi specifikacija',
        'menu_name' => 'Atributi',

        'group' => 'Povezana grupa',
        'group_placeholder' => 'Odaberite bilo koju grupu',
        'name_placeholder' => 'Unesite naziv atributa',
        'type' => 'Vrsta polja',
        'type_placeholder' => 'Odaberite vrstu polja',
        'default_value' => 'Zadana vrijednost',
        'default_value_placeholder' => 'Unesite zadanu vrijednost (neobavezno)',
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
            'title' => 'Uredi atribut specifikacije ":name"',
        ],
    ],

    'specification_tables' => [
        'title' => 'Tablice specifikacija',
        'menu_name' => 'Tablice',

        'create' => [
            'title' => 'Kreiraj tablicu specifikacija',
        ],

        'edit' => [
            'title' => 'Uredi tablicu specifikacija ":name"',
        ],

        'fields' => [
            'groups' => 'Odaberite grupe za prikaz u ovoj tablici',
            'name' => 'Naziv grupe',
            'assigned_groups' => 'Dodijeljene grupe',
            'sorting' => 'Sortiranje',
        ],
    ],

    'product' => [
        'specification_table' => [
            'options' => 'Opcije',
            'title' => 'Tablica specifikacija',
            'select_none' => 'Nijedna',
            'description' => 'Odaberite tablicu specifikacija za prikaz kod ovog proizvoda',
            'group' => 'Grupa',
            'attribute' => 'Atribut',
            'value' => 'Vrijednost atributa',
            'hide' => 'Sakrij',
            'sorting' => 'Sortiranje',
            'enter_value' => 'Unesite vrijednost',
            'enter_translation' => 'Unesite prijevod',
            'not_set' => 'Nije postavljeno',
        ],
    ],

    'enums' => [
        'field_types' => [
            'text' => 'Tekst',
            'textarea' => 'Tekstualno područje',
            'select' => 'Odabir',
            'checkbox' => 'Potvrdni okvir',
            'radio' => 'Radio gumb',
        ],
    ],
];
