<?php

return [
    'name' => '제품 재고',
    'storehouse_management' => '창고 관리',

    'import' => [
        'name' => '제품 재고 업데이트',
        'description' => 'CSV/Excel 파일을 업로드하여 제품 재고를 일괄 업데이트합니다.',
        'done_message' => ':count개 제품이 성공적으로 업데이트되었습니다.',
        'rules' => [
            'id' => 'ID 필드는 필수이며 제품 테이블에 존재해야 합니다.',
            'name' => '이름 필드는 필수이며 문자열이어야 합니다.',
            'sku' => 'SKU 필드는 문자열이어야 합니다.',
            'with_storehouse_management' => '창고 관리 필드는 "예" 또는 "아니오"여야 합니다.',
            'quantity' => '창고 관리가 "예"일 때 수량 필드는 필수입니다.',
            'stock_status' => '창고 관리가 "아니오"일 때 재고 상태 필드는 필수이며 다음 값 중 하나여야 합니다: :statuses.',
        ],
    ],

    'export' => [
        'description' => '제품 재고를 CSV/Excel 파일로 내보냅니다.',
    ],
];