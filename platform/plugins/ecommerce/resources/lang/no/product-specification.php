<?php

return [
    'product_specification' => 'Produktspesifikasjon',
    'specification_groups' => [
        'title' => 'Spesifikasjonsgrupper',
        'menu_name' => 'Grupper',

        'create' => [
            'title' => 'Opprett spesifikasjonsgruppe',
        ],

        'edit' => [
            'title' => 'Rediger spesifikasjonsgruppe ":name"',
        ],
    ],

    'specification_attributes' => [
        'title' => 'Spesifikasjonsattributter',
        'menu_name' => 'Attributter',

        'group' => 'Tilknyttet gruppe',
        'group_placeholder' => 'Velg en gruppe',
        'name_placeholder' => 'Skriv inn attributtnavn',
        'type' => 'Felttype',
        'type_placeholder' => 'Velg felttype',
        'default_value' => 'Standardverdi',
        'default_value_placeholder' => 'Skriv inn standardverdi (valgfritt)',
        'options' => [
            'heading' => 'Alternativer',

            'add' => [
                'label' => 'Legg til nytt alternativ',
            ],
        ],

        'create' => [
            'title' => 'Opprett spesifikasjonsattributt',
        ],

        'edit' => [
            'title' => 'Rediger spesifikasjonsattributt ":name"',
        ],
    ],

    'specification_tables' => [
        'title' => 'Spesifikasjonstabeller',
        'menu_name' => 'Tabeller',

        'create' => [
            'title' => 'Opprett spesifikasjonstabell',
        ],

        'edit' => [
            'title' => 'Rediger spesifikasjonstabell ":name"',
        ],

        'fields' => [
            'groups' => 'Velg gruppene som skal vises i denne tabellen',
            'name' => 'Gruppenavn',
            'assigned_groups' => 'Tildelte grupper',
            'sorting' => 'Sortering',
        ],
    ],

    'product' => [
        'specification_table' => [
            'options' => 'Alternativer',
            'title' => 'Spesifikasjonstabell',
            'select_none' => 'Ingen',
            'description' => 'Velg spesifikasjonstabellen som skal vises i dette produktet',
            'group' => 'Gruppe',
            'attribute' => 'Attributt',
            'value' => 'Attributtverdi',
            'hide' => 'Skjul',
            'sorting' => 'Sortering',
            'enter_value' => 'Skriv inn verdi',
            'enter_translation' => 'Skriv inn oversettelse',
            'not_set' => 'Ikke satt',
        ],
    ],

    'enums' => [
        'field_types' => [
            'text' => 'Tekst',
            'textarea' => 'Tekstområde',
            'select' => 'Velg',
            'checkbox' => 'Avkryssingsboks',
            'radio' => 'Radioknapp',
        ],
    ],
];
