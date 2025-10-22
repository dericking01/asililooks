<?php

return [
    'product_specification' => 'Termék specifikáció',
    'specification_groups' => [
        'title' => 'Specifikációs csoportok',
        'menu_name' => 'Csoportok',

        'create' => [
            'title' => 'Specifikációs csoport létrehozása',
        ],

        'edit' => [
            'title' => 'Specifikációs csoport szerkesztése ":name"',
        ],
    ],

    'specification_attributes' => [
        'title' => 'Specifikációs attribútumok',
        'menu_name' => 'Attribútumok',

        'group' => 'Társított csoport',
        'group_placeholder' => 'Válasszon csoportot',
        'name_placeholder' => 'Adja meg az attribútum nevét',
        'type' => 'Mező típusa',
        'type_placeholder' => 'Válasszon mező típust',
        'default_value' => 'Alapértelmezett érték',
        'default_value_placeholder' => 'Adja meg az alapértelmezett értéket (opcionális)',
        'options' => [
            'heading' => 'Opciók',

            'add' => [
                'label' => 'Új opció hozzáadása',
            ],
        ],

        'create' => [
            'title' => 'Specifikációs attribútum létrehozása',
        ],

        'edit' => [
            'title' => 'Specifikációs attribútum szerkesztése ":name"',
        ],
    ],

    'specification_tables' => [
        'title' => 'Specifikációs táblázatok',
        'menu_name' => 'Táblázatok',

        'create' => [
            'title' => 'Specifikációs táblázat létrehozása',
        ],

        'edit' => [
            'title' => 'Specifikációs táblázat szerkesztése ":name"',
        ],

        'fields' => [
            'groups' => 'Válassza ki a táblázatban megjelenítendő csoportokat',
            'name' => 'Csoport neve',
            'assigned_groups' => 'Hozzárendelt csoportok',
            'sorting' => 'Rendezés',
        ],
    ],

    'product' => [
        'specification_table' => [
            'options' => 'Opciók',
            'title' => 'Specifikációs táblázat',
            'select_none' => 'Nincs',
            'description' => 'Válassza ki a termékben megjelenítendő specifikációs táblázatot',
            'group' => 'Csoport',
            'attribute' => 'Attribútum',
            'value' => 'Attribútum értéke',
            'hide' => 'Elrejtés',
            'sorting' => 'Rendezés',
            'enter_value' => 'Adja meg az értéket',
            'enter_translation' => 'Adja meg a fordítást',
            'not_set' => 'Nincs beállítva',
        ],
    ],

    'enums' => [
        'field_types' => [
            'text' => 'Szöveg',
            'textarea' => 'Szövegterület',
            'select' => 'Választó',
            'checkbox' => 'Jelölőnégyzet',
            'radio' => 'Rádió',
        ],
    ],
];
