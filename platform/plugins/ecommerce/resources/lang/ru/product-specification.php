<?php

return [
    'product_specification' => 'Спецификация товара',
    'specification_groups' => [
        'title' => 'Группы спецификаций',
        'menu_name' => 'Группы',

        'create' => [
            'title' => 'Создать группу спецификаций',
        ],

        'edit' => [
            'title' => 'Редактировать группу спецификаций ":name"',
        ],
    ],

    'specification_attributes' => [
        'title' => 'Атрибуты спецификаций',
        'menu_name' => 'Атрибуты',

        'group' => 'Связанная группа',
        'group_placeholder' => 'Выберите любую группу',
        'name_placeholder' => 'Введите название атрибута',
        'type' => 'Тип поля',
        'type_placeholder' => 'Выберите тип поля',
        'default_value' => 'Значение по умолчанию',
        'default_value_placeholder' => 'Введите значение по умолчанию (необязательно)',
        'options' => [
            'heading' => 'Опции',

            'add' => [
                'label' => 'Добавить новую опцию',
            ],
        ],

        'create' => [
            'title' => 'Создать атрибут спецификации',
        ],

        'edit' => [
            'title' => 'Редактировать атрибут спецификации ":name"',
        ],
    ],

    'specification_tables' => [
        'title' => 'Таблицы спецификаций',
        'menu_name' => 'Таблицы',

        'create' => [
            'title' => 'Создать таблицу спецификаций',
        ],

        'edit' => [
            'title' => 'Редактировать таблицу спецификаций ":name"',
        ],

        'fields' => [
            'groups' => 'Выберите группы для отображения в этой таблице',
            'name' => 'Название группы',
            'assigned_groups' => 'Назначенные группы',
            'sorting' => 'Сортировка',
        ],
    ],

    'product' => [
        'specification_table' => [
            'options' => 'Опции',
            'title' => 'Таблица спецификаций',
            'select_none' => 'Нет',
            'description' => 'Выберите таблицу спецификаций для отображения в этом товаре',
            'group' => 'Группа',
            'attribute' => 'Атрибут',
            'value' => 'Значение атрибута',
            'hide' => 'Скрыть',
            'sorting' => 'Сортировка',
            'enter_value' => 'Введите значение',
            'enter_translation' => 'Введите перевод',
            'not_set' => 'Не установлено',
        ],
    ],

    'enums' => [
        'field_types' => [
            'text' => 'Текст',
            'textarea' => 'Текстовая область',
            'select' => 'Выбор',
            'checkbox' => 'Флажок',
            'radio' => 'Переключатель',
        ],
    ],
];