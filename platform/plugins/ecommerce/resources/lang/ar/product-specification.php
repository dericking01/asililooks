<?php

return [
    'product_specification' => 'مواصفات المنتج',
    'specification_groups' => [
        'title' => 'مجموعات المواصفات',
        'menu_name' => 'المجموعات',

        'create' => [
            'title' => 'إنشاء مجموعة مواصفات',
        ],

        'edit' => [
            'title' => 'تعديل مجموعة المواصفات ":name"',
        ],
    ],

    'specification_attributes' => [
        'title' => 'خصائص المواصفات',
        'menu_name' => 'الخصائص',

        'group' => 'المجموعة المرتبطة',
        'group_placeholder' => 'اختر أي مجموعة',
        'name_placeholder' => 'أدخل اسم الخاصية',
        'type' => 'نوع الحقل',
        'type_placeholder' => 'اختر نوع الحقل',
        'default_value' => 'القيمة الافتراضية',
        'default_value_placeholder' => 'أدخل القيمة الافتراضية (اختياري)',
        'options' => [
            'heading' => 'الخيارات',

            'add' => [
                'label' => 'إضافة خيار جديد',
            ],
        ],

        'create' => [
            'title' => 'إنشاء خاصية مواصفات',
        ],

        'edit' => [
            'title' => 'تعديل خاصية المواصفات ":name"',
        ],
    ],

    'specification_tables' => [
        'title' => 'جداول المواصفات',
        'menu_name' => 'الجداول',

        'create' => [
            'title' => 'إنشاء جدول مواصفات',
        ],

        'edit' => [
            'title' => 'تعديل جدول المواصفات ":name"',
        ],

        'fields' => [
            'groups' => 'اختر المجموعات لعرضها في هذا الجدول',
            'name' => 'اسم المجموعة',
            'assigned_groups' => 'المجموعات المخصصة',
            'sorting' => 'الترتيب',
        ],
    ],

    'product' => [
        'specification_table' => [
            'options' => 'الخيارات',
            'title' => 'جدول المواصفات',
            'select_none' => 'بلا',
            'description' => 'اختر جدول المواصفات لعرضه في هذا المنتج',
            'group' => 'المجموعة',
            'attribute' => 'الخاصية',
            'value' => 'قيمة الخاصية',
            'hide' => 'إخفاء',
            'sorting' => 'الترتيب',
            'enter_value' => 'أدخل القيمة',
            'enter_translation' => 'أدخل الترجمة',
            'not_set' => 'غير محدد',
        ],
    ],

    'enums' => [
        'field_types' => [
            'text' => 'نص',
            'textarea' => 'منطقة نص',
            'select' => 'اختيار',
            'checkbox' => 'مربع اختيار',
            'radio' => 'زر اختيار',
        ],
    ],
];