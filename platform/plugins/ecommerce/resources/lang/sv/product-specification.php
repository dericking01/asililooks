<?php

return [
    'product_specification' => 'Produktspecifikation',
    'specification_groups' => [
        'title' => 'Specifikationsgrupper',
        'menu_name' => 'Grupper',

        'create' => [
            'title' => 'Skapa specifikationsgrupp',
        ],

        'edit' => [
            'title' => 'Redigera specifikationsgrupp ":name"',
        ],
    ],

    'specification_attributes' => [
        'title' => 'Specifikationsattribut',
        'menu_name' => 'Attribut',

        'group' => 'Associerad grupp',
        'group_placeholder' => 'Välj någon grupp',
        'name_placeholder' => 'Ange attributnamn',
        'type' => 'Fälttyp',
        'type_placeholder' => 'Välj fälttyp',
        'default_value' => 'Standardvärde',
        'default_value_placeholder' => 'Ange standardvärde (valfritt)',
        'options' => [
            'heading' => 'Alternativ',

            'add' => [
                'label' => 'Lägg till nytt alternativ',
            ],
        ],

        'create' => [
            'title' => 'Skapa specifikationsattribut',
        ],

        'edit' => [
            'title' => 'Redigera specifikationsattribut ":name"',
        ],
    ],

    'specification_tables' => [
        'title' => 'Specifikationstabeller',
        'menu_name' => 'Tabeller',

        'create' => [
            'title' => 'Skapa specifikationstabell',
        ],

        'edit' => [
            'title' => 'Redigera specifikationstabell ":name"',
        ],

        'fields' => [
            'groups' => 'Välj grupperna att visa i denna tabell',
            'name' => 'Gruppnamn',
            'assigned_groups' => 'Tilldelade grupper',
            'sorting' => 'Sortering',
        ],
    ],

    'product' => [
        'specification_table' => [
            'options' => 'Alternativ',
            'title' => 'Specifikationstabell',
            'select_none' => 'Ingen',
            'description' => 'Välj specifikationstabellen att visa i denna produkt',
            'group' => 'Grupp',
            'attribute' => 'Attribut',
            'value' => 'Attributvärde',
            'hide' => 'Dölj',
            'sorting' => 'Sortering',
            'enter_value' => 'Ange värde',
            'enter_translation' => 'Ange översättning',
            'not_set' => 'Ej inställd',
        ],
    ],

    'enums' => [
        'field_types' => [
            'text' => 'Text',
            'textarea' => 'Textarea',
            'select' => 'Välj',
            'checkbox' => 'Kryssruta',
            'radio' => 'Radio',
        ],
    ],
];