<?php

return [
    'name' => '고급 언어',
    'description' => '다국어 콘텐츠를 위한 고급 언어 기능',
    'import' => [
        'rules' => [
            'id' => 'ID는 필수이며 유효한 ID여야 합니다.',
            'name' => '이름은 필수이며 최대 255자의 문자열이어야 합니다.',
            'description' => '설명은 제공된 경우 최대 400자의 문자열이어야 합니다.',
            'content' => '내용은 제공된 경우 최대 300,000자의 문자열이어야 합니다.',
            'location' => '위치는 제공된 경우 최대 255자의 문자열이어야 합니다.',
            'floor_plans' => '평면도는 제공된 경우 유효한 문자열이어야 합니다.',
            'faq_schema_config' => 'FAQ 스키마 구성은 제공된 경우 유효한 문자열이어야 합니다.',
            'faq_ids' => 'FAQ ID는 제공된 경우 유효한 배열이어야 합니다.',
        ],
    ],
    'export' => [
        'total' => '전체',
    ],
    'import_model_translations' => ':model 번역',
    'export_model_translations' => ':model 번역',
    'import_description' => 'CSV/Excel 파일에서 :name에 대한 번역을 가져옵니다.',
    'export_description' => ':name에 대한 번역을 CSV/Excel 파일로 내보냅니다.',
];
