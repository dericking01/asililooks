<?php

return [
    'product_specification' => 'Produkto specifikacija',
    'specification_groups' => [
        'title' => 'Specifikacijos grupės',
        'menu_name' => 'Grupės',

        'create' => [
            'title' => 'Sukurti specifikacijos grupę',
        ],

        'edit' => [
            'title' => 'Redaguoti specifikacijos grupę ":name"',
        ],
    ],

    'specification_attributes' => [
        'title' => 'Specifikacijos atributai',
        'menu_name' => 'Atributai',

        'group' => 'Susijusi grupė',
        'group_placeholder' => 'Pasirinkite grupę',
        'name_placeholder' => 'Įveskite atributo pavadinimą',
        'type' => 'Lauko tipas',
        'type_placeholder' => 'Pasirinkite lauko tipą',
        'default_value' => 'Numatytoji reikšmė',
        'default_value_placeholder' => 'Įveskite numatytąją reikšmę (neprivaloma)',
        'options' => [
            'heading' => 'Parinktys',

            'add' => [
                'label' => 'Pridėti naują parinktį',
            ],
        ],

        'create' => [
            'title' => 'Sukurti specifikacijos atributą',
        ],

        'edit' => [
            'title' => 'Redaguoti specifikacijos atributą ":name"',
        ],
    ],

    'specification_tables' => [
        'title' => 'Specifikacijos lentelės',
        'menu_name' => 'Lentelės',

        'create' => [
            'title' => 'Sukurti specifikacijos lentelę',
        ],

        'edit' => [
            'title' => 'Redaguoti specifikacijos lentelę ":name"',
        ],

        'fields' => [
            'groups' => 'Pasirinkite grupes, kurias rodyti šioje lentelėje',
            'name' => 'Grupės pavadinimas',
            'assigned_groups' => 'Priskirtos grupės',
            'sorting' => 'Rūšiavimas',
        ],
    ],

    'product' => [
        'specification_table' => [
            'options' => 'Parinktys',
            'title' => 'Specifikacijos lentelė',
            'select_none' => 'Nėra',
            'description' => 'Pasirinkite specifikacijos lentelę, kuri bus rodoma šiame produkte',
            'group' => 'Grupė',
            'attribute' => 'Atributas',
            'value' => 'Atributo reikšmė',
            'hide' => 'Slėpti',
            'sorting' => 'Rūšiavimas',
            'enter_value' => 'Įveskite reikšmę',
            'enter_translation' => 'Įveskite vertimą',
            'not_set' => 'Nenustatyta',
        ],
    ],

    'enums' => [
        'field_types' => [
            'text' => 'Tekstas',
            'textarea' => 'Tekstinė sritis',
            'select' => 'Pasirinkimas',
            'checkbox' => 'Žymimasis laukelis',
            'radio' => 'Radijo mygtukas',
        ],
    ],
];
