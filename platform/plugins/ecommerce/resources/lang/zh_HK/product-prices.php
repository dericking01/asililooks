<?php

return [
    'name' => '產品價格',
    'warning_prices' => '這些價格代表產品的原始成本,可能不反映最終價格,最終價格可能會因限時搶購、促銷等因素而有所不同。',

    'import' => [
        'name' => '更新產品價格',
        'description' => '透過上傳 CSV/Excel 文件批次更新產品價格。',
        'done_message' => '成功更新 :count 個產品。',
        'rules' => [
            'id' => 'ID 欄位為必填項,且必須存在於產品表中。',
            'name' => '名稱欄位為必填項,且必須是字串。',
            'sku' => 'SKU 欄位必須是字串。',
            'cost_per_item' => '每件成本欄位必須是數值。',
            'price' => '價格欄位為必填項,且必須是數值。',
            'sale_price' => '特價欄位必須是數值。',
        ],
    ],

    'export' => [
        'description' => '將產品價格匯出到 CSV/Excel 文件。',
    ],
];
