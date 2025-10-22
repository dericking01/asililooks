<?php

return [
    'product_specification' => '產品規格',
    'specification_groups' => [
        'title' => '規格群組',
        'menu_name' => '群組',

        'create' => [
            'title' => '建立規格群組',
        ],

        'edit' => [
            'title' => '編輯規格群組「:name」',
        ],
    ],

    'specification_attributes' => [
        'title' => '規格屬性',
        'menu_name' => '屬性',

        'group' => '關聯群組',
        'group_placeholder' => '選擇任何群組',
        'name_placeholder' => '輸入屬性名稱',
        'type' => '欄位類型',
        'type_placeholder' => '選擇欄位類型',
        'default_value' => '預設值',
        'default_value_placeholder' => '輸入預設值(選填)',
        'options' => [
            'heading' => '選項',

            'add' => [
                'label' => '新增選項',
            ],
        ],

        'create' => [
            'title' => '建立規格屬性',
        ],

        'edit' => [
            'title' => '編輯規格屬性「:name」',
        ],
    ],

    'specification_tables' => [
        'title' => '規格表',
        'menu_name' => '表格',

        'create' => [
            'title' => '建立規格表',
        ],

        'edit' => [
            'title' => '編輯規格表「:name」',
        ],

        'fields' => [
            'groups' => '選擇要在此表中顯示的群組',
            'name' => '群組名稱',
            'assigned_groups' => '已指派群組',
            'sorting' => '排序',
        ],
    ],

    'product' => [
        'specification_table' => [
            'options' => '選項',
            'title' => '規格表',
            'select_none' => '無',
            'description' => '選擇要在此產品中顯示的規格表',
            'group' => '群組',
            'attribute' => '屬性',
            'value' => '屬性值',
            'hide' => '隱藏',
            'sorting' => '排序',
            'enter_value' => '輸入值',
            'enter_translation' => '輸入翻譯',
            'not_set' => '未設定',
        ],
    ],

    'enums' => [
        'field_types' => [
            'text' => '文字',
            'textarea' => '文字區域',
            'select' => '選擇',
            'checkbox' => '核取方塊',
            'radio' => '單選按鈕',
        ],
    ],
];
