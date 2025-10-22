<?php

return [
    'product_specification' => 'מפרט מוצר',
    'specification_groups' => [
        'title' => 'קבוצות מפרט',
        'menu_name' => 'קבוצות',

        'create' => [
            'title' => 'צור קבוצת מפרט',
        ],

        'edit' => [
            'title' => 'ערוך קבוצת מפרט ":name"',
        ],
    ],

    'specification_attributes' => [
        'title' => 'תכונות מפרט',
        'menu_name' => 'תכונות',

        'group' => 'קבוצה משוייכת',
        'group_placeholder' => 'בחר קבוצה כלשהי',
        'name_placeholder' => 'הזן שם תכונה',
        'type' => 'סוג שדה',
        'type_placeholder' => 'בחר סוג שדה',
        'default_value' => 'ערך ברירת מחדל',
        'default_value_placeholder' => 'הזן ערך ברירת מחדל (אופציונלי)',
        'options' => [
            'heading' => 'אפשרויות',

            'add' => [
                'label' => 'הוסף אפשרות חדשה',
            ],
        ],

        'create' => [
            'title' => 'צור תכונת מפרט',
        ],

        'edit' => [
            'title' => 'ערוך תכונת מפרט ":name"',
        ],
    ],

    'specification_tables' => [
        'title' => 'טבלאות מפרט',
        'menu_name' => 'טבלאות',

        'create' => [
            'title' => 'צור טבלת מפרט',
        ],

        'edit' => [
            'title' => 'ערוך טבלת מפרט ":name"',
        ],

        'fields' => [
            'groups' => 'בחר את הקבוצות להצגה בטבלה זו',
            'name' => 'שם קבוצה',
            'assigned_groups' => 'קבוצות שהוקצו',
            'sorting' => 'מיון',
        ],
    ],

    'product' => [
        'specification_table' => [
            'options' => 'אפשרויות',
            'title' => 'טבלת מפרט',
            'select_none' => 'ללא',
            'description' => 'בחר את טבלת המפרט להצגה במוצר זה',
            'group' => 'קבוצה',
            'attribute' => 'תכונה',
            'value' => 'ערך תכונה',
            'hide' => 'הסתר',
            'sorting' => 'מיון',
            'enter_value' => 'הזן ערך',
            'enter_translation' => 'הזן תרגום',
            'not_set' => 'לא מוגדר',
        ],
    ],

    'enums' => [
        'field_types' => [
            'text' => 'טקסט',
            'textarea' => 'אזור טקסט',
            'select' => 'בחירה',
            'checkbox' => 'תיבת סימון',
            'radio' => 'רדיו',
        ],
    ],
];
