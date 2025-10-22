<?php

return [
    'name' => '高级语言',
    'description' => '多语言内容的高级语言功能',
    'import' => [
        'rules' => [
            'id' => 'ID 是必需的,必须是有效的 ID。',
            'name' => '名称是必需的,必须是最大长度为 255 个字符的字符串。',
            'description' => '描述必须是最大长度为 400 个字符的字符串(如果提供)。',
            'content' => '内容必须是最大长度为 300,000 个字符的字符串(如果提供)。',
            'location' => '位置必须是最大长度为 255 个字符的字符串(如果提供)。',
            'floor_plans' => '楼层平面图必须是有效的字符串(如果提供)。',
            'faq_schema_config' => 'FAQ 架构配置必须是有效的字符串(如果提供)。',
            'faq_ids' => 'FAQ ID 必须是有效的数组(如果提供)。',
        ],
    ],
    'export' => [
        'total' => '总计',
    ],
    'import_model_translations' => ':model 翻译',
    'export_model_translations' => ':model 翻译',
    'import_description' => '从 CSV/Excel 文件导入 :name 的翻译。',
    'export_description' => '将 :name 的翻译导出到 CSV/Excel 文件。',
];
