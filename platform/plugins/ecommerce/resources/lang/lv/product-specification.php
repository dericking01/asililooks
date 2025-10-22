<?php

return [
    'product_specification' => 'Produkta specifikācija',
    'specification_groups' => [
        'title' => 'Specifikāciju grupas',
        'menu_name' => 'Grupas',

        'create' => [
            'title' => 'Izveidot specifikāciju grupu',
        ],

        'edit' => [
            'title' => 'Rediģēt specifikāciju grupu ":name"',
        ],
    ],

    'specification_attributes' => [
        'title' => 'Specifikāciju atribūti',
        'menu_name' => 'Atribūti',

        'group' => 'Saistītā grupa',
        'group_placeholder' => 'Izvēlieties jebkuru grupu',
        'name_placeholder' => 'Ievadiet atribūta nosaukumu',
        'type' => 'Lauka tips',
        'type_placeholder' => 'Izvēlieties lauka tipu',
        'default_value' => 'Noklusējuma vērtība',
        'default_value_placeholder' => 'Ievadiet noklusējuma vērtību (neobligāti)',
        'options' => [
            'heading' => 'Opcijas',

            'add' => [
                'label' => 'Pievienot jaunu opciju',
            ],
        ],

        'create' => [
            'title' => 'Izveidot specifikāciju atribūtu',
        ],

        'edit' => [
            'title' => 'Rediģēt specifikāciju atribūtu ":name"',
        ],
    ],

    'specification_tables' => [
        'title' => 'Specifikāciju tabulas',
        'menu_name' => 'Tabulas',

        'create' => [
            'title' => 'Izveidot specifikāciju tabulu',
        ],

        'edit' => [
            'title' => 'Rediģēt specifikāciju tabulu ":name"',
        ],

        'fields' => [
            'groups' => 'Izvēlieties grupas, kas jārāda šajā tabulā',
            'name' => 'Grupas nosaukums',
            'assigned_groups' => 'Piešķirtās grupas',
            'sorting' => 'Kārtošana',
        ],
    ],

    'product' => [
        'specification_table' => [
            'options' => 'Opcijas',
            'title' => 'Specifikāciju tabula',
            'select_none' => 'Neviens',
            'description' => 'Izvēlieties specifikāciju tabulu, lai parādītu šajā produktā',
            'group' => 'Grupa',
            'attribute' => 'Atribūts',
            'value' => 'Atribūta vērtība',
            'hide' => 'Paslēpt',
            'sorting' => 'Kārtošana',
            'enter_value' => 'Ievadiet vērtību',
            'enter_translation' => 'Ievadiet tulkojumu',
            'not_set' => 'Nav iestatīts',
        ],
    ],

    'enums' => [
        'field_types' => [
            'text' => 'Teksts',
            'textarea' => 'Teksta lauks',
            'select' => 'Izvēlēties',
            'checkbox' => 'Izvēles rūtiņa',
            'radio' => 'Radio',
        ],
    ],
];
