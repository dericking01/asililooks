<?php

return [
    'product_specification' => 'Specyfikacja produktu',
    'specification_groups' => [
        'title' => 'Grupy specyfikacji',
        'menu_name' => 'Grupy',

        'create' => [
            'title' => 'Utwórz grupę specyfikacji',
        ],

        'edit' => [
            'title' => 'Edytuj grupę specyfikacji ":name"',
        ],
    ],

    'specification_attributes' => [
        'title' => 'Atrybuty specyfikacji',
        'menu_name' => 'Atrybuty',

        'group' => 'Przypisana grupa',
        'group_placeholder' => 'Wybierz dowolną grupę',
        'name_placeholder' => 'Wprowadź nazwę atrybutu',
        'type' => 'Typ pola',
        'type_placeholder' => 'Wybierz typ pola',
        'default_value' => 'Wartość domyślna',
        'default_value_placeholder' => 'Wprowadź wartość domyślną (opcjonalne)',
        'options' => [
            'heading' => 'Opcje',

            'add' => [
                'label' => 'Dodaj nową opcję',
            ],
        ],

        'create' => [
            'title' => 'Utwórz atrybut specyfikacji',
        ],

        'edit' => [
            'title' => 'Edytuj atrybut specyfikacji ":name"',
        ],
    ],

    'specification_tables' => [
        'title' => 'Tabele specyfikacji',
        'menu_name' => 'Tabele',

        'create' => [
            'title' => 'Utwórz tabelę specyfikacji',
        ],

        'edit' => [
            'title' => 'Edytuj tabelę specyfikacji ":name"',
        ],

        'fields' => [
            'groups' => 'Wybierz grupy do wyświetlenia w tej tabeli',
            'name' => 'Nazwa grupy',
            'assigned_groups' => 'Przypisane grupy',
            'sorting' => 'Sortowanie',
        ],
    ],

    'product' => [
        'specification_table' => [
            'options' => 'Opcje',
            'title' => 'Tabela specyfikacji',
            'select_none' => 'Brak',
            'description' => 'Wybierz tabelę specyfikacji do wyświetlenia w tym produkcie',
            'group' => 'Grupa',
            'attribute' => 'Atrybut',
            'value' => 'Wartość atrybutu',
            'hide' => 'Ukryj',
            'sorting' => 'Sortowanie',
            'enter_value' => 'Wprowadź wartość',
            'enter_translation' => 'Wprowadź tłumaczenie',
            'not_set' => 'Nie ustawiono',
        ],
    ],

    'enums' => [
        'field_types' => [
            'text' => 'Tekst',
            'textarea' => 'Obszar tekstowy',
            'select' => 'Wybór',
            'checkbox' => 'Pole wyboru',
            'radio' => 'Przycisk radio',
        ],
    ],
];