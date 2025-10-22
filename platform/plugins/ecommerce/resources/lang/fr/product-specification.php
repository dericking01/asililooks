<?php

return [
    'product_specification' => 'Spécification du produit',
    'specification_groups' => [
        'title' => 'Groupes de spécifications',
        'menu_name' => 'Groupes',

        'create' => [
            'title' => 'Créer un groupe de spécifications',
        ],

        'edit' => [
            'title' => 'Modifier le groupe de spécifications ":name"',
        ],
    ],

    'specification_attributes' => [
        'title' => 'Attributs de spécifications',
        'menu_name' => 'Attributs',

        'group' => 'Groupe associé',
        'group_placeholder' => 'Choisir un groupe',
        'name_placeholder' => 'Saisir le nom de l\'attribut',
        'type' => 'Type de champ',
        'type_placeholder' => 'Sélectionner le type de champ',
        'default_value' => 'Valeur par défaut',
        'default_value_placeholder' => 'Saisir la valeur par défaut (optionnel)',
        'options' => [
            'heading' => 'Options',

            'add' => [
                'label' => 'Ajouter une nouvelle option',
            ],
        ],

        'create' => [
            'title' => 'Créer un attribut de spécification',
        ],

        'edit' => [
            'title' => 'Modifier l\'attribut de spécification ":name"',
        ],
    ],

    'specification_tables' => [
        'title' => 'Tableaux de spécifications',
        'menu_name' => 'Tableaux',

        'create' => [
            'title' => 'Créer un tableau de spécifications',
        ],

        'edit' => [
            'title' => 'Modifier le tableau de spécifications ":name"',
        ],

        'fields' => [
            'groups' => 'Sélectionner les groupes à afficher dans ce tableau',
            'name' => 'Nom du groupe',
            'assigned_groups' => 'Groupes assignés',
            'sorting' => 'Tri',
        ],
    ],

    'product' => [
        'specification_table' => [
            'options' => 'Options',
            'title' => 'Tableau de spécifications',
            'select_none' => 'Aucun',
            'description' => 'Sélectionner le tableau de spécifications à afficher dans ce produit',
            'group' => 'Groupe',
            'attribute' => 'Attribut',
            'value' => 'Valeur d\'attribut',
            'hide' => 'Masquer',
            'sorting' => 'Tri',
            'enter_value' => 'Saisir la valeur',
            'enter_translation' => 'Saisir la traduction',
            'not_set' => 'Non défini',
        ],
    ],

    'enums' => [
        'field_types' => [
            'text' => 'Texte',
            'textarea' => 'Zone de texte',
            'select' => 'Sélection',
            'checkbox' => 'Case à cocher',
            'radio' => 'Bouton radio',
        ],
    ],
];