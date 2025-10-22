<?php

return [
    'name' => '产品价格',
    'warning_prices' => '这些价格代表产品的原始成本，可能不反映最终价格，最终价格可能因闪购、促销等因素而有所不同。',

    'import' => [
        'name' => '更新产品价格',
        'description' => '通过上传CSV/Excel文件批量更新产品价格。',
        'done_message' => '成功更新:count个产品。',
        'rules' => [
            'id' => 'ID字段是必需的，必须在产品表中存在。',
            'name' => '名称字段是必需的，必须是字符串。',
            'sku' => 'SKU字段必须是字符串。',
            'cost_per_item' => '每件成本字段必须是数值。',
            'price' => '价格字段是必需的，必须是数值。',
            'sale_price' => '促销价字段必须是数值。',
        ],
    ],

    'export' => [
        'description' => '将产品价格导出到CSV/Excel文件。',
    ],
];