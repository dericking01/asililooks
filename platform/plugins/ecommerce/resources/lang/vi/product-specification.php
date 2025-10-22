<?php

return [
    'product_specification' => 'Thông số kỹ thuật sản phẩm',
    'specification_groups' => [
        'title' => 'Nhóm thông số kỹ thuật',
        'menu_name' => 'Nhóm',

        'create' => [
            'title' => 'Tạo nhóm thông số kỹ thuật',
        ],

        'edit' => [
            'title' => 'Chỉnh sửa nhóm thông số kỹ thuật ":name"',
        ],
    ],

    'specification_attributes' => [
        'title' => 'Thuộc tính thông số kỹ thuật',
        'menu_name' => 'Thuộc tính',

        'group' => 'Nhóm liên quan',
        'group_placeholder' => 'Chọn nhóm',
        'name_placeholder' => 'Nhập tên thuộc tính',
        'type' => 'Loại trường',
        'type_placeholder' => 'Chọn loại trường',
        'default_value' => 'Giá trị mặc định',
        'default_value_placeholder' => 'Nhập giá trị mặc định (tùy chọn)',
        'options' => [
            'heading' => 'Tùy chọn',

            'add' => [
                'label' => 'Thêm tùy chọn mới',
            ],
        ],

        'create' => [
            'title' => 'Tạo thuộc tính thông số kỹ thuật',
        ],

        'edit' => [
            'title' => 'Chỉnh sửa thuộc tính thông số kỹ thuật ":name"',
        ],
    ],

    'specification_tables' => [
        'title' => 'Bảng thông số kỹ thuật',
        'menu_name' => 'Bảng',

        'create' => [
            'title' => 'Tạo bảng thông số kỹ thuật',
        ],

        'edit' => [
            'title' => 'Chỉnh sửa bảng thông số kỹ thuật ":name"',
        ],

        'fields' => [
            'groups' => 'Chọn các nhóm để hiển thị trong bảng này',
            'name' => 'Tên nhóm',
            'assigned_groups' => 'Nhóm được gán',
            'sorting' => 'Sắp xếp',
        ],
    ],

    'product' => [
        'specification_table' => [
            'options' => 'Tùy chọn',
            'title' => 'Bảng thông số kỹ thuật',
            'select_none' => 'Không có',
            'description' => 'Chọn bảng thông số kỹ thuật để hiển thị trong sản phẩm này',
            'group' => 'Nhóm',
            'attribute' => 'Thuộc tính',
            'value' => 'Giá trị thuộc tính',
            'hide' => 'Ẩn',
            'sorting' => 'Sắp xếp',
            'enter_value' => 'Nhập giá trị',
            'enter_translation' => 'Nhập bản dịch',
            'not_set' => 'Chưa thiết lập',
        ],
    ],

    'enums' => [
        'field_types' => [
            'text' => 'Văn bản',
            'textarea' => 'Vùng văn bản',
            'select' => 'Chọn',
            'checkbox' => 'Hộp kiểm',
            'radio' => 'Nút radio',
        ],
    ],
];