<?php

return [
    'product_specification' => 'Специфікація товару',
    'specification_groups' => [
        'title' => 'Групи специфікацій',
        'menu_name' => 'Групи',

        'create' => [
            'title' => 'Створити групу специфікацій',
        ],

        'edit' => [
            'title' => 'Редагувати групу специфікацій ":name"',
        ],
    ],

    'specification_attributes' => [
        'title' => 'Атрибути специфікацій',
        'menu_name' => 'Атрибути',

        'group' => 'Пов\'язана група',
        'group_placeholder' => 'Виберіть групу',
        'name_placeholder' => 'Введіть назву атрибута',
        'type' => 'Тип поля',
        'type_placeholder' => 'Виберіть тип поля',
        'default_value' => 'Значення за замовчуванням',
        'default_value_placeholder' => 'Введіть значення за замовчуванням (необов\'язково)',
        'options' => [
            'heading' => 'Опції',

            'add' => [
                'label' => 'Додати нову опцію',
            ],
        ],

        'create' => [
            'title' => 'Створити атрибут специфікації',
        ],

        'edit' => [
            'title' => 'Редагувати атрибут специфікації ":name"',
        ],
    ],

    'specification_tables' => [
        'title' => 'Таблиці специфікацій',
        'menu_name' => 'Таблиці',

        'create' => [
            'title' => 'Створити таблицю специфікацій',
        ],

        'edit' => [
            'title' => 'Редагувати таблицю специфікацій ":name"',
        ],

        'fields' => [
            'groups' => 'Виберіть групи для відображення в цій таблиці',
            'name' => 'Назва групи',
            'assigned_groups' => 'Призначені групи',
            'sorting' => 'Сортування',
        ],
    ],

    'product' => [
        'specification_table' => [
            'options' => 'Опції',
            'title' => 'Таблиця специфікацій',
            'select_none' => 'Немає',
            'description' => 'Виберіть таблицю специфікацій для відображення в цьому товарі',
            'group' => 'Група',
            'attribute' => 'Атрибут',
            'value' => 'Значення атрибута',
            'hide' => 'Приховати',
            'sorting' => 'Сортування',
            'enter_value' => 'Введіть значення',
            'enter_translation' => 'Введіть переклад',
            'not_set' => 'Не встановлено',
        ],
    ],

    'enums' => [
        'field_types' => [
            'text' => 'Текст',
            'textarea' => 'Текстова область',
            'select' => 'Вибір',
            'checkbox' => 'Прапорець',
            'radio' => 'Радіо',
        ],
    ],
];
