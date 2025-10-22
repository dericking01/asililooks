<?php

return [
    'product_specification' => 'Špecifikácia produktu',
    'specification_groups' => [
        'title' => 'Skupiny špecifikácií',
        'menu_name' => 'Skupiny',

        'create' => [
            'title' => 'Vytvoriť skupinu špecifikácií',
        ],

        'edit' => [
            'title' => 'Upraviť skupinu špecifikácií ":name"',
        ],
    ],

    'specification_attributes' => [
        'title' => 'Atribúty špecifikácií',
        'menu_name' => 'Atribúty',

        'group' => 'Pridružená skupina',
        'group_placeholder' => 'Vyberte akúkoľvek skupinu',
        'name_placeholder' => 'Zadajte názov atribútu',
        'type' => 'Typ poľa',
        'type_placeholder' => 'Vyberte typ poľa',
        'default_value' => 'Predvolená hodnota',
        'default_value_placeholder' => 'Zadajte predvolenú hodnotu (voliteľné)',
        'options' => [
            'heading' => 'Možnosti',

            'add' => [
                'label' => 'Pridať novú možnosť',
            ],
        ],

        'create' => [
            'title' => 'Vytvoriť atribút špecifikácie',
        ],

        'edit' => [
            'title' => 'Upraviť atribút špecifikácie ":name"',
        ],
    ],

    'specification_tables' => [
        'title' => 'Tabuľky špecifikácií',
        'menu_name' => 'Tabuľky',

        'create' => [
            'title' => 'Vytvoriť tabuľku špecifikácií',
        ],

        'edit' => [
            'title' => 'Upraviť tabuľku špecifikácií ":name"',
        ],

        'fields' => [
            'groups' => 'Vyberte skupiny na zobrazenie v tejto tabuľke',
            'name' => 'Názov skupiny',
            'assigned_groups' => 'Priradené skupiny',
            'sorting' => 'Zoradenie',
        ],
    ],

    'product' => [
        'specification_table' => [
            'options' => 'Možnosti',
            'title' => 'Tabuľka špecifikácií',
            'select_none' => 'Žiadne',
            'description' => 'Vyberte tabuľku špecifikácií na zobrazenie v tomto produkte',
            'group' => 'Skupina',
            'attribute' => 'Atribút',
            'value' => 'Hodnota atribútu',
            'hide' => 'Skryť',
            'sorting' => 'Zoradenie',
            'enter_value' => 'Zadajte hodnotu',
            'enter_translation' => 'Zadajte preklad',
            'not_set' => 'Nenastavené',
        ],
    ],

    'enums' => [
        'field_types' => [
            'text' => 'Text',
            'textarea' => 'Textová oblasť',
            'select' => 'Výber',
            'checkbox' => 'Zaškrtávacie pole',
            'radio' => 'Rádio tlačidlo',
        ],
    ],
];
