<?php

return [
    'product_specification' => 'Спецификация на продукта',
    'specification_groups' => [
        'title' => 'Групи спецификации',
        'menu_name' => 'Групи',

        'create' => [
            'title' => 'Създай група спецификации',
        ],

        'edit' => [
            'title' => 'Редактирай група спецификации ":name"',
        ],
    ],

    'specification_attributes' => [
        'title' => 'Атрибути на спецификации',
        'menu_name' => 'Атрибути',

        'group' => 'Свързана група',
        'group_placeholder' => 'Изберете група',
        'name_placeholder' => 'Въведете име на атрибут',
        'type' => 'Тип поле',
        'type_placeholder' => 'Изберете тип поле',
        'default_value' => 'Стойност по подразбиране',
        'default_value_placeholder' => 'Въведете стойност по подразбиране (незадължително)',
        'options' => [
            'heading' => 'Опции',

            'add' => [
                'label' => 'Добави нова опция',
            ],
        ],

        'create' => [
            'title' => 'Създай атрибут на спецификация',
        ],

        'edit' => [
            'title' => 'Редактирай атрибут на спецификация ":name"',
        ],
    ],

    'specification_tables' => [
        'title' => 'Таблици със спецификации',
        'menu_name' => 'Таблици',

        'create' => [
            'title' => 'Създай таблица със спецификации',
        ],

        'edit' => [
            'title' => 'Редактирай таблица със спецификации ":name"',
        ],

        'fields' => [
            'groups' => 'Изберете групите за показване в тази таблица',
            'name' => 'Име на групата',
            'assigned_groups' => 'Назначени групи',
            'sorting' => 'Сортиране',
        ],
    ],

    'product' => [
        'specification_table' => [
            'options' => 'Опции',
            'title' => 'Таблица със спецификации',
            'select_none' => 'Няма',
            'description' => 'Изберете таблицата със спецификации за показване в този продукт',
            'group' => 'Група',
            'attribute' => 'Атрибут',
            'value' => 'Стойност на атрибута',
            'hide' => 'Скрий',
            'sorting' => 'Сортиране',
            'enter_value' => 'Въведете стойност',
            'enter_translation' => 'Въведете превод',
            'not_set' => 'Не е зададено',
        ],
    ],

    'enums' => [
        'field_types' => [
            'text' => 'Текст',
            'textarea' => 'Текстова област',
            'select' => 'Избор',
            'checkbox' => 'Отметка',
            'radio' => 'Радио бутон',
        ],
    ],
];
