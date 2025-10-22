<?php

return [
    'name' => 'Ngôn ngữ nâng cao',
    'description' => 'Tính năng ngôn ngữ nâng cao cho nội dung đa ngôn ngữ',
    'import' => [
        'rules' => [
            'id' => 'ID là bắt buộc và phải là ID hợp lệ.',
            'name' => 'Tên là bắt buộc và phải là chuỗi có độ dài tối đa 255 ký tự.',
            'description' => 'Mô tả phải là chuỗi có độ dài tối đa 400 ký tự nếu được cung cấp.',
            'content' => 'Nội dung phải là chuỗi có độ dài tối đa 300.000 ký tự nếu được cung cấp.',
            'location' => 'Vị trí phải là chuỗi có độ dài tối đa 255 ký tự nếu được cung cấp.',
            'floor_plans' => 'Sơ đồ mặt bằng phải là chuỗi hợp lệ nếu được cung cấp.',
            'faq_schema_config' => 'Cấu hình schema FAQ phải là chuỗi hợp lệ nếu được cung cấp.',
            'faq_ids' => 'ID FAQ phải là mảng hợp lệ nếu được cung cấp.',
        ],
    ],
    'export' => [
        'total' => 'Tổng',
    ],
    'import_model_translations' => 'Bản dịch :model',
    'export_model_translations' => 'Bản dịch :model',
    'import_description' => 'Nhập bản dịch cho :name từ tệp CSV/Excel.',
    'export_description' => 'Xuất bản dịch cho :name ra tệp CSV/Excel.',
];
