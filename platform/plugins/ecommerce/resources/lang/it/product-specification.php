<?php

return [
    'product_specification' => 'Specifiche Prodotto',
    'specification_groups' => [
        'title' => 'Gruppi Specifiche',
        'menu_name' => 'Gruppi',

        'create' => [
            'title' => 'Crea Gruppo Specifiche',
        ],

        'edit' => [
            'title' => 'Modifica Gruppo Specifiche ":name"',
        ],
    ],

    'specification_attributes' => [
        'title' => 'Attributi Specifiche',
        'menu_name' => 'Attributi',

        'group' => 'Gruppo Associato',
        'group_placeholder' => 'Scegli un Gruppo',
        'name_placeholder' => 'Inserisci nome attributo',
        'type' => 'Tipo Campo',
        'type_placeholder' => 'Seleziona tipo campo',
        'default_value' => 'Valore Predefinito',
        'default_value_placeholder' => 'Inserisci valore predefinito (opzionale)',
        'options' => [
            'heading' => 'Opzioni',

            'add' => [
                'label' => 'Aggiungi nuova opzione',
            ],
        ],

        'create' => [
            'title' => 'Crea Attributo Specifiche',
        ],

        'edit' => [
            'title' => 'Modifica Attributo Specifiche ":name"',
        ],
    ],

    'specification_tables' => [
        'title' => 'Tabelle Specifiche',
        'menu_name' => 'Tabelle',

        'create' => [
            'title' => 'Crea Tabella Specifiche',
        ],

        'edit' => [
            'title' => 'Modifica Tabella Specifiche ":name"',
        ],

        'fields' => [
            'groups' => 'Seleziona i gruppi da visualizzare in questa tabella',
            'name' => 'Nome gruppo',
            'assigned_groups' => 'Gruppi Assegnati',
            'sorting' => 'Ordinamento',
        ],
    ],

    'product' => [
        'specification_table' => [
            'options' => 'Opzioni',
            'title' => 'Tabella Specifiche',
            'select_none' => 'Nessuna',
            'description' => 'Seleziona la tabella specifiche da visualizzare in questo prodotto',
            'group' => 'Gruppo',
            'attribute' => 'Attributo',
            'value' => 'Valore attributo',
            'hide' => 'Nascondi',
            'sorting' => 'Ordinamento',
            'enter_value' => 'Inserisci valore',
            'enter_translation' => 'Inserisci traduzione',
            'not_set' => 'Non impostato',
        ],
    ],

    'enums' => [
        'field_types' => [
            'text' => 'Testo',
            'textarea' => 'Area di testo',
            'select' => 'Seleziona',
            'checkbox' => 'Checkbox',
            'radio' => 'Radio',
        ],
    ],
];