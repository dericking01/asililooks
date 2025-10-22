<?php

return [
    'name' => '高度な言語',
    'description' => '多言語コンテンツのための高度な言語機能',
    'import' => [
        'rules' => [
            'id' => 'IDは必須で、有効なIDである必要があります。',
            'name' => '名前は必須で、最大255文字の文字列である必要があります。',
            'description' => '説明は、指定された場合、最大400文字の文字列である必要があります。',
            'content' => 'コンテンツは、指定された場合、最大300,000文字の文字列である必要があります。',
            'location' => '場所は、指定された場合、最大255文字の文字列である必要があります。',
            'floor_plans' => '平面図は、指定された場合、有効な文字列である必要があります。',
            'faq_schema_config' => 'FAQスキーマ構成は、指定された場合、有効な文字列である必要があります。',
            'faq_ids' => 'FAQ IDは、指定された場合、有効な配列である必要があります。',
        ],
    ],
    'export' => [
        'total' => '合計',
    ],
    'import_model_translations' => ':model 翻訳',
    'export_model_translations' => ':model 翻訳',
    'import_description' => 'CSV/Excelファイルから:nameの翻訳をインポートします。',
    'export_description' => ':nameの翻訳をCSV/Excelファイルにエクスポートします。',
];
