<?php

return [
    'product_specification' => 'Product Specificatie',
    'specification_groups' => [
        'title' => 'Specificatie Groepen',
        'menu_name' => 'Groepen',

        'create' => [
            'title' => 'Specificatie Groep Aanmaken',
        ],

        'edit' => [
            'title' => 'Specificatie Groep Bewerken ":name"',
        ],
    ],

    'specification_attributes' => [
        'title' => 'Specificatie Attributen',
        'menu_name' => 'Attributen',

        'group' => 'Gekoppelde Groep',
        'group_placeholder' => 'Kies een Groep',
        'name_placeholder' => 'Voer attribuut naam in',
        'type' => 'Veld Type',
        'type_placeholder' => 'Selecteer veld type',
        'default_value' => 'Standaard Waarde',
        'default_value_placeholder' => 'Voer standaard waarde in (optioneel)',
        'options' => [
            'heading' => 'Opties',

            'add' => [
                'label' => 'Nieuwe optie toevoegen',
            ],
        ],

        'create' => [
            'title' => 'Specificatie Attribuut Aanmaken',
        ],

        'edit' => [
            'title' => 'Specificatie Attribuut Bewerken ":name"',
        ],
    ],

    'specification_tables' => [
        'title' => 'Specificatie Tabellen',
        'menu_name' => 'Tabellen',

        'create' => [
            'title' => 'Specificatie Tabel Aanmaken',
        ],

        'edit' => [
            'title' => 'Specificatie Tabel Bewerken ":name"',
        ],

        'fields' => [
            'groups' => 'Selecteer de groepen om in deze tabel weer te geven',
            'name' => 'Groep naam',
            'assigned_groups' => 'Toegewezen Groepen',
            'sorting' => 'Sortering',
        ],
    ],

    'product' => [
        'specification_table' => [
            'options' => 'Opties',
            'title' => 'Specificatie Tabel',
            'select_none' => 'Geen',
            'description' => 'Selecteer de specificatie tabel om in dit product weer te geven',
            'group' => 'Groep',
            'attribute' => 'Attribuut',
            'value' => 'Attribuut waarde',
            'hide' => 'Verbergen',
            'sorting' => 'Sortering',
            'enter_value' => 'Voer waarde in',
            'enter_translation' => 'Voer vertaling in',
            'not_set' => 'Niet ingesteld',
        ],
    ],

    'enums' => [
        'field_types' => [
            'text' => 'Tekst',
            'textarea' => 'Tekst gebied',
            'select' => 'Selecteren',
            'checkbox' => 'Checkbox',
            'radio' => 'Radio',
        ],
    ],
];