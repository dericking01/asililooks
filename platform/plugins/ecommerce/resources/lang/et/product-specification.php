<?php

return [
    'product_specification' => 'Toote spetsifikatsioon',
    'specification_groups' => [
        'title' => 'Spetsifikatsiooni grupid',
        'menu_name' => 'Grupid',

        'create' => [
            'title' => 'Loo spetsifikatsiooni grupp',
        ],

        'edit' => [
            'title' => 'Muuda spetsifikatsiooni gruppi ":name"',
        ],
    ],

    'specification_attributes' => [
        'title' => 'Spetsifikatsiooni atribuudid',
        'menu_name' => 'Atribuudid',

        'group' => 'Seotud grupp',
        'group_placeholder' => 'Vali mis tahes grupp',
        'name_placeholder' => 'Sisesta atribuudi nimi',
        'type' => 'Välja tüüp',
        'type_placeholder' => 'Vali välja tüüp',
        'default_value' => 'Vaikeväärtus',
        'default_value_placeholder' => 'Sisesta vaikeväärtus (valikuline)',
        'options' => [
            'heading' => 'Valikud',

            'add' => [
                'label' => 'Lisa uus valik',
            ],
        ],

        'create' => [
            'title' => 'Loo spetsifikatsiooni atribuut',
        ],

        'edit' => [
            'title' => 'Muuda spetsifikatsiooni atribuuti ":name"',
        ],
    ],

    'specification_tables' => [
        'title' => 'Spetsifikatsioonitabelid',
        'menu_name' => 'Tabelid',

        'create' => [
            'title' => 'Loo spetsifikatsioonitabel',
        ],

        'edit' => [
            'title' => 'Muuda spetsifikatsioonitabelit ":name"',
        ],

        'fields' => [
            'groups' => 'Valige selles tabelis kuvatavad grupid',
            'name' => 'Grupi nimi',
            'assigned_groups' => 'Määratud grupid',
            'sorting' => 'Sorteerimine',
        ],
    ],

    'product' => [
        'specification_table' => [
            'options' => 'Valikud',
            'title' => 'Spetsifikatsioonitabel',
            'select_none' => 'Puudub',
            'description' => 'Valige selle toote jaoks kuvatav spetsifikatsioonitabel',
            'group' => 'Grupp',
            'attribute' => 'Atribuut',
            'value' => 'Atribuudi väärtus',
            'hide' => 'Peida',
            'sorting' => 'Sorteerimine',
            'enter_value' => 'Sisesta väärtus',
            'enter_translation' => 'Sisesta tõlge',
            'not_set' => 'Määramata',
        ],
    ],

    'enums' => [
        'field_types' => [
            'text' => 'Tekst',
            'textarea' => 'Tekstiala',
            'select' => 'Valik',
            'checkbox' => 'Märkeruut',
            'radio' => 'Raadionupp',
        ],
    ],
];
