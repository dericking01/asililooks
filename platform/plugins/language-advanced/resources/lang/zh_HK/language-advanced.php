<?php

return [
    'name' => '進階語言',
    'description' => '多語言內容的進階語言功能',
    'import' => [
        'rules' => [
            'id' => 'ID 為必填項,必須為有效的 ID。',
            'name' => '名稱為必填項,必須為最大長度 255 個字元的字串。',
            'description' => '描述必須為最大長度 400 個字元的字串(如提供)。',
            'content' => '內容必須為最大長度 300,000 個字元的字串(如提供)。',
            'location' => '位置必須為最大長度 255 個字元的字串(如提供)。',
            'floor_plans' => '樓層平面圖必須為有效的字串(如提供)。',
            'faq_schema_config' => 'FAQ 架構配置必須為有效的字串(如提供)。',
            'faq_ids' => 'FAQ ID 必須為有效的陣列(如提供)。',
        ],
    ],
    'export' => [
        'total' => '總計',
    ],
    'import_model_translations' => ':model 翻譯',
    'export_model_translations' => ':model 翻譯',
    'import_description' => '從 CSV/Excel 檔案匯入 :name 的翻譯。',
    'export_description' => '將 :name 的翻譯匯出至 CSV/Excel 檔案。',
];
