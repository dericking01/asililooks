<?php

return [
    'product_specification' => '제품 사양',
    'specification_groups' => [
        'title' => '사양 그룹',
        'menu_name' => '그룹',

        'create' => [
            'title' => '사양 그룹 생성',
        ],

        'edit' => [
            'title' => '사양 그룹 ":name" 수정',
        ],
    ],

    'specification_attributes' => [
        'title' => '사양 속성',
        'menu_name' => '속성',

        'group' => '연결된 그룹',
        'group_placeholder' => '그룹 선택',
        'name_placeholder' => '속성명 입력',
        'type' => '필드 유형',
        'type_placeholder' => '필드 유형 선택',
        'default_value' => '기본값',
        'default_value_placeholder' => '기본값 입력 (선택사항)',
        'options' => [
            'heading' => '옵션',

            'add' => [
                'label' => '새 옵션 추가',
            ],
        ],

        'create' => [
            'title' => '사양 속성 생성',
        ],

        'edit' => [
            'title' => '사양 속성 ":name" 수정',
        ],
    ],

    'specification_tables' => [
        'title' => '사양 테이블',
        'menu_name' => '테이블',

        'create' => [
            'title' => '사양 테이블 생성',
        ],

        'edit' => [
            'title' => '사양 테이블 ":name" 수정',
        ],

        'fields' => [
            'groups' => '이 테이블에 표시할 그룹 선택',
            'name' => '그룹명',
            'assigned_groups' => '할당된 그룹',
            'sorting' => '정렬',
        ],
    ],

    'product' => [
        'specification_table' => [
            'options' => '옵션',
            'title' => '사양 테이블',
            'select_none' => '없음',
            'description' => '이 제품에 표시할 사양 테이블 선택',
            'group' => '그룹',
            'attribute' => '속성',
            'value' => '속성 값',
            'hide' => '숨기기',
            'sorting' => '정렬',
            'enter_value' => '값 입력',
            'enter_translation' => '번역 입력',
            'not_set' => '설정되지 않음',
        ],
    ],

    'enums' => [
        'field_types' => [
            'text' => '텍스트',
            'textarea' => '텍스트영역',
            'select' => '선택',
            'checkbox' => '체크박스',
            'radio' => '라디오',
        ],
    ],
];