<?php

return [
    'product_specification' => '商品仕様',
    'specification_groups' => [
        'title' => '仕様グループ',
        'menu_name' => 'グループ',

        'create' => [
            'title' => '仕様グループを作成',
        ],

        'edit' => [
            'title' => '仕様グループを編集 ":name"',
        ],
    ],

    'specification_attributes' => [
        'title' => '仕様属性',
        'menu_name' => '属性',

        'group' => '関連グループ',
        'group_placeholder' => 'グループを選択',
        'name_placeholder' => '属性名を入力',
        'type' => 'フィールドタイプ',
        'type_placeholder' => 'フィールドタイプを選択',
        'default_value' => 'デフォルト値',
        'default_value_placeholder' => 'デフォルト値を入力（任意）',
        'options' => [
            'heading' => 'オプション',

            'add' => [
                'label' => '新しいオプションを追加',
            ],
        ],

        'create' => [
            'title' => '仕様属性を作成',
        ],

        'edit' => [
            'title' => '仕様属性を編集 ":name"',
        ],
    ],

    'specification_tables' => [
        'title' => '仕様テーブル',
        'menu_name' => 'テーブル',

        'create' => [
            'title' => '仕様テーブルを作成',
        ],

        'edit' => [
            'title' => '仕様テーブルを編集 ":name"',
        ],

        'fields' => [
            'groups' => 'このテーブルに表示するグループを選択',
            'name' => 'グループ名',
            'assigned_groups' => '割り当てられたグループ',
            'sorting' => 'ソート',
        ],
    ],

    'product' => [
        'specification_table' => [
            'options' => 'オプション',
            'title' => '仕様テーブル',
            'select_none' => 'なし',
            'description' => 'この商品に表示する仕様テーブルを選択',
            'group' => 'グループ',
            'attribute' => '属性',
            'value' => '属性値',
            'hide' => '非表示',
            'sorting' => 'ソート',
            'enter_value' => '値を入力',
            'enter_translation' => '翻訳を入力',
            'not_set' => '未設定',
        ],
    ],

    'enums' => [
        'field_types' => [
            'text' => 'テキスト',
            'textarea' => 'テキストエリア',
            'select' => 'セレクト',
            'checkbox' => 'チェックボックス',
            'radio' => 'ラジオ',
        ],
    ],
];