<?php

return [
    'name' => '產品庫存',
    'storehouse_management' => '倉庫管理',

    'import' => [
        'name' => '更新產品庫存',
        'description' => '透過上傳 CSV/Excel 文件批次更新產品庫存。',
        'done_message' => '成功更新 :count 個產品。',
        'rules' => [
            'id' => 'ID 欄位為必填項,且必須存在於產品表中。',
            'name' => '名稱欄位為必填項,且必須是字串。',
            'sku' => 'SKU 欄位必須是字串。',
            'with_storehouse_management' => '倉庫管理欄位必須是「是」或「否」。',
            'quantity' => '當倉庫管理為「是」時,數量欄位為必填項。',
            'stock_status' => '當倉庫管理為「否」時,庫存狀態欄位為必填項,且必須是以下值之一::statuses。',
        ],
    ],

    'export' => [
        'description' => '將產品庫存匯出到 CSV/Excel 文件。',
    ],
];
