<?php

return [
    'name' => '商品在庫',
    'storehouse_management' => '倉庫管理',

    'import' => [
        'name' => '商品在庫更新',
        'description' => 'CSV/Excelファイルをアップロードして商品在庫を一括更新します。',
        'done_message' => ':count 件の商品を正常に更新しました。',
        'rules' => [
            'id' => 'IDフィールドは必須で、商品テーブルに存在する必要があります。',
            'name' => '名前フィールドは必須で、文字列である必要があります。',
            'sku' => 'SKUフィールドは文字列である必要があります。',
            'with_storehouse_management' => '倉庫管理フィールドは「はい」または「いいえ」である必要があります。',
            'quantity' => '倉庫管理が「はい」の場合、数量フィールドは必須です。',
            'stock_status' => '倉庫管理が「いいえ」の場合、在庫状況フィールドは必須で、次の値のいずれかである必要があります: :statuses',
        ],
    ],

    'export' => [
        'description' => '商品在庫をCSV/Excelファイルにエクスポートします。',
    ],
];