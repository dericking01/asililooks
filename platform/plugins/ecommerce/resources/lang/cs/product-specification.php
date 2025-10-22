<?php

return [
    'product_specification' => 'Specifikace produktu',
    'specification_groups' => [
        'title' => 'Skupiny specifikací',
        'menu_name' => 'Skupiny',

        'create' => [
            'title' => 'Vytvořit skupinu specifikací',
        ],

        'edit' => [
            'title' => 'Upravit skupinu specifikací ":name"',
        ],
    ],

    'specification_attributes' => [
        'title' => 'Atributy specifikací',
        'menu_name' => 'Atributy',

        'group' => 'Přidružená skupina',
        'group_placeholder' => 'Vyberte skupinu',
        'name_placeholder' => 'Zadejte název atributu',
        'type' => 'Typ pole',
        'type_placeholder' => 'Vyberte typ pole',
        'default_value' => 'Výchozí hodnota',
        'default_value_placeholder' => 'Zadejte výchozí hodnotu (volitelné)',
        'options' => [
            'heading' => 'Možnosti',

            'add' => [
                'label' => 'Přidat novou možnost',
            ],
        ],

        'create' => [
            'title' => 'Vytvořit atribut specifikace',
        ],

        'edit' => [
            'title' => 'Upravit atribut specifikace ":name"',
        ],
    ],

    'specification_tables' => [
        'title' => 'Tabulky specifikací',
        'menu_name' => 'Tabulky',

        'create' => [
            'title' => 'Vytvořit tabulku specifikací',
        ],

        'edit' => [
            'title' => 'Upravit tabulku specifikací ":name"',
        ],

        'fields' => [
            'groups' => 'Vyberte skupiny k zobrazení v této tabulce',
            'name' => 'Název skupiny',
            'assigned_groups' => 'Přiřazené skupiny',
            'sorting' => 'Řazení',
        ],
    ],

    'product' => [
        'specification_table' => [
            'options' => 'Možnosti',
            'title' => 'Tabulka specifikací',
            'select_none' => 'Žádná',
            'description' => 'Vyberte tabulku specifikací k zobrazení u tohoto produktu',
            'group' => 'Skupina',
            'attribute' => 'Atribut',
            'value' => 'Hodnota atributu',
            'hide' => 'Skrýt',
            'sorting' => 'Řazení',
            'enter_value' => 'Zadejte hodnotu',
            'enter_translation' => 'Zadejte překlad',
            'not_set' => 'Nenastaveno',
        ],
    ],

    'enums' => [
        'field_types' => [
            'text' => 'Text',
            'textarea' => 'Textarea',
            'select' => 'Výběr',
            'checkbox' => 'Zaškrtávací pole',
            'radio' => 'Rádiové tlačítko',
        ],
    ],
];