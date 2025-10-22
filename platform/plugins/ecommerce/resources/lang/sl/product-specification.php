<?php

return [
    'product_specification' => 'Specifikacija izdelka',
    'specification_groups' => [
        'title' => 'Skupine specifikacij',
        'menu_name' => 'Skupine',

        'create' => [
            'title' => 'Ustvari skupino specifikacij',
        ],

        'edit' => [
            'title' => 'Uredi skupino specifikacij ":name"',
        ],
    ],

    'specification_attributes' => [
        'title' => 'Atributi specifikacij',
        'menu_name' => 'Atributi',

        'group' => 'Povezana skupina',
        'group_placeholder' => 'Izberite katerokoli skupino',
        'name_placeholder' => 'Vnesite ime atributa',
        'type' => 'Vrsta polja',
        'type_placeholder' => 'Izberite vrsto polja',
        'default_value' => 'Privzeta vrednost',
        'default_value_placeholder' => 'Vnesite privzeto vrednost (neobvezno)',
        'options' => [
            'heading' => 'Možnosti',

            'add' => [
                'label' => 'Dodaj novo možnost',
            ],
        ],

        'create' => [
            'title' => 'Ustvari atribut specifikacije',
        ],

        'edit' => [
            'title' => 'Uredi atribut specifikacije ":name"',
        ],
    ],

    'specification_tables' => [
        'title' => 'Tabele specifikacij',
        'menu_name' => 'Tabele',

        'create' => [
            'title' => 'Ustvari tabelo specifikacij',
        ],

        'edit' => [
            'title' => 'Uredi tabelo specifikacij ":name"',
        ],

        'fields' => [
            'groups' => 'Izberite skupine za prikaz v tej tabeli',
            'name' => 'Ime skupine',
            'assigned_groups' => 'Dodeljene skupine',
            'sorting' => 'Razvrščanje',
        ],
    ],

    'product' => [
        'specification_table' => [
            'options' => 'Možnosti',
            'title' => 'Tabela specifikacij',
            'select_none' => 'Brez',
            'description' => 'Izberite tabelo specifikacij za prikaz pri tem izdelku',
            'group' => 'Skupina',
            'attribute' => 'Atribut',
            'value' => 'Vrednost atributa',
            'hide' => 'Skrij',
            'sorting' => 'Razvrščanje',
            'enter_value' => 'Vnesite vrednost',
            'enter_translation' => 'Vnesite prevod',
            'not_set' => 'Ni nastavljeno',
        ],
    ],

    'enums' => [
        'field_types' => [
            'text' => 'Besedilo',
            'textarea' => 'Besedilno območje',
            'select' => 'Izbira',
            'checkbox' => 'Potrditveno polje',
            'radio' => 'Radio',
        ],
    ],
];
