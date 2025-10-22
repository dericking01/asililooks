<?php

return [
    'product_specification' => 'Produktspezifikation',
    'specification_groups' => [
        'title' => 'Spezifikationsgruppen',
        'menu_name' => 'Gruppen',

        'create' => [
            'title' => 'Spezifikationsgruppe erstellen',
        ],

        'edit' => [
            'title' => 'Spezifikationsgruppe ":name" bearbeiten',
        ],
    ],

    'specification_attributes' => [
        'title' => 'Spezifikationsattribute',
        'menu_name' => 'Attribute',

        'group' => 'Zugehörige Gruppe',
        'group_placeholder' => 'Gruppe auswählen',
        'name_placeholder' => 'Attributname eingeben',
        'type' => 'Feldtyp',
        'type_placeholder' => 'Feldtyp auswählen',
        'default_value' => 'Standardwert',
        'default_value_placeholder' => 'Standardwert eingeben (optional)',
        'options' => [
            'heading' => 'Optionen',

            'add' => [
                'label' => 'Neue Option hinzufügen',
            ],
        ],

        'create' => [
            'title' => 'Spezifikationsattribut erstellen',
        ],

        'edit' => [
            'title' => 'Spezifikationsattribut ":name" bearbeiten',
        ],
    ],

    'specification_tables' => [
        'title' => 'Spezifikationstabellen',
        'menu_name' => 'Tabellen',

        'create' => [
            'title' => 'Spezifikationstabelle erstellen',
        ],

        'edit' => [
            'title' => 'Spezifikationstabelle ":name" bearbeiten',
        ],

        'fields' => [
            'groups' => 'Wählen Sie die Gruppen aus, die in dieser Tabelle angezeigt werden sollen',
            'name' => 'Gruppenname',
            'assigned_groups' => 'Zugewiesene Gruppen',
            'sorting' => 'Sortierung',
        ],
    ],

    'product' => [
        'specification_table' => [
            'options' => 'Optionen',
            'title' => 'Spezifikationstabelle',
            'select_none' => 'Keine',
            'description' => 'Wählen Sie die Spezifikationstabelle aus, die in diesem Produkt angezeigt werden soll',
            'group' => 'Gruppe',
            'attribute' => 'Attribut',
            'value' => 'Attributwert',
            'hide' => 'Verbergen',
            'sorting' => 'Sortierung',
            'enter_value' => 'Wert eingeben',
            'enter_translation' => 'Übersetzung eingeben',
            'not_set' => 'Nicht gesetzt',
        ],
    ],

    'enums' => [
        'field_types' => [
            'text' => 'Text',
            'textarea' => 'Textbereich',
            'select' => 'Auswählen',
            'checkbox' => 'Kontrollkästchen',
            'radio' => 'Radio',
        ],
    ],
];