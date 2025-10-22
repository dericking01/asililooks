<?php

return [
    'product_specification' => 'Specificații Produs',
    'specification_groups' => [
        'title' => 'Grupuri de Specificații',
        'menu_name' => 'Grupuri',

        'create' => [
            'title' => 'Creează Grup de Specificații',
        ],

        'edit' => [
            'title' => 'Editează Grupul de Specificații ":name"',
        ],
    ],

    'specification_attributes' => [
        'title' => 'Atribute Specificații',
        'menu_name' => 'Atribute',

        'group' => 'Grup Asociat',
        'group_placeholder' => 'Alegeți orice Grup',
        'name_placeholder' => 'Introduceți numele atributului',
        'type' => 'Tip Câmp',
        'type_placeholder' => 'Selectați tipul câmpului',
        'default_value' => 'Valoare Implicită',
        'default_value_placeholder' => 'Introduceți valoarea implicită (opțional)',
        'options' => [
            'heading' => 'Opțiuni',

            'add' => [
                'label' => 'Adaugă opțiune nouă',
            ],
        ],

        'create' => [
            'title' => 'Creează Atribut Specificație',
        ],

        'edit' => [
            'title' => 'Editează Atributul Specificație ":name"',
        ],
    ],

    'specification_tables' => [
        'title' => 'Tabele Specificații',
        'menu_name' => 'Tabele',

        'create' => [
            'title' => 'Creează Tabel Specificații',
        ],

        'edit' => [
            'title' => 'Editează Tabelul de Specificații ":name"',
        ],

        'fields' => [
            'groups' => 'Selectați grupurile de afișat în acest tabel',
            'name' => 'Nume grup',
            'assigned_groups' => 'Grupuri Atribuite',
            'sorting' => 'Sortare',
        ],
    ],

    'product' => [
        'specification_table' => [
            'options' => 'Opțiuni',
            'title' => 'Tabel Specificații',
            'select_none' => 'Niciuna',
            'description' => 'Selectați tabelul de specificații de afișat în acest produs',
            'group' => 'Grup',
            'attribute' => 'Atribut',
            'value' => 'Valoare atribut',
            'hide' => 'Ascunde',
            'sorting' => 'Sortare',
            'enter_value' => 'Introduceți valoarea',
            'enter_translation' => 'Introduceți traducerea',
            'not_set' => 'Nesetat',
        ],
    ],

    'enums' => [
        'field_types' => [
            'text' => 'Text',
            'textarea' => 'Textarea',
            'select' => 'Select',
            'checkbox' => 'Checkbox',
            'radio' => 'Radio',
        ],
    ],
];
