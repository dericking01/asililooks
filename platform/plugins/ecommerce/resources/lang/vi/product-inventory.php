<?php

return [
    'name' => 'Tồn kho sản phẩm',
    'storehouse_management' => 'Quản lý kho',

    'import' => [
        'name' => 'Cập nhật tồn kho sản phẩm',
        'description' => 'Cập nhật tồn kho sản phẩm hàng loạt bằng cách tải lên file CSV/Excel.',
        'done_message' => 'Đã cập nhật thành công :count sản phẩm.',
        'rules' => [
            'id' => 'Trường ID là bắt buộc và phải tồn tại trong bảng sản phẩm.',
            'name' => 'Trường tên là bắt buộc và phải là chuỗi ký tự.',
            'sku' => 'Trường SKU phải là chuỗi ký tự.',
            'with_storehouse_management' => 'Trường quản lý kho phải là "Có" hoặc "Không".',
            'quantity' => 'Trường số lượng là bắt buộc khi quản lý kho là "Có".',
            'stock_status' => 'Trường trạng thái tồn kho là bắt buộc khi quản lý kho là "Không" và phải là một trong các giá trị sau: :statuses.',
        ],
    ],

    'export' => [
        'description' => 'Xuất tồn kho sản phẩm ra file CSV/Excel.',
    ],
];