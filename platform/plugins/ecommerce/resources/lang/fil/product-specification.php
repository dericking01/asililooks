<?php

return [
    'product_specification' => 'Detalyadong Paglalarawan ng Produkto',
    'specification_groups' => [
        'title' => 'Mga Grupo ng Specification',
        'menu_name' => 'Mga Grupo',

        'create' => [
            'title' => 'Lumikha ng Grupo ng Specification',
        ],

        'edit' => [
            'title' => 'I-edit ang Grupo ng Specification ":name"',
        ],
    ],

    'specification_attributes' => [
        'title' => 'Mga Katangian ng Specification',
        'menu_name' => 'Mga Katangian',

        'group' => 'Nauugnay na Grupo',
        'group_placeholder' => 'Pumili ng kahit anong Grupo',
        'name_placeholder' => 'Ilagay ang pangalan ng katangian',
        'type' => 'Uri ng Field',
        'type_placeholder' => 'Pumili ng uri ng field',
        'default_value' => 'Default na Halaga',
        'default_value_placeholder' => 'Ilagay ang default na halaga (opsyonal)',
        'options' => [
            'heading' => 'Mga Opsyon',

            'add' => [
                'label' => 'Magdagdag ng bagong opsyon',
            ],
        ],

        'create' => [
            'title' => 'Lumikha ng Katangian ng Specification',
        ],

        'edit' => [
            'title' => 'I-edit ang Katangian ng Specification ":name"',
        ],
    ],

    'specification_tables' => [
        'title' => 'Mga Talahanayan ng Specification',
        'menu_name' => 'Mga Talahanayan',

        'create' => [
            'title' => 'Lumikha ng Talahanayan ng Specification',
        ],

        'edit' => [
            'title' => 'I-edit ang Talahanayan ng Specification ":name"',
        ],

        'fields' => [
            'groups' => 'Piliin ang mga grupo na ipapakita sa talahanayan na ito',
            'name' => 'Pangalan ng grupo',
            'assigned_groups' => 'Mga Nakatalagang Grupo',
            'sorting' => 'Pag-aayos',
        ],
    ],

    'product' => [
        'specification_table' => [
            'options' => 'Mga Opsyon',
            'title' => 'Talahanayan ng Specification',
            'select_none' => 'Wala',
            'description' => 'Piliin ang talahanayan ng specification na ipapakita sa produktong ito',
            'group' => 'Grupo',
            'attribute' => 'Katangian',
            'value' => 'Halaga ng katangian',
            'hide' => 'Itago',
            'sorting' => 'Pag-aayos',
            'enter_value' => 'Ilagay ang halaga',
            'enter_translation' => 'Ilagay ang pagsasalin',
            'not_set' => 'Hindi nakatakda',
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
