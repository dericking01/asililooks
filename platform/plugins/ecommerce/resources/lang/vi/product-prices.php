<?php

return [
    'name' => 'Giá sản phẩm',
    'warning_prices' => 'Những giá này đại diện cho chi phí gốc của sản phẩm và có thể không phản ánh giá cuối cùng, có thể thay đổi do các yếu tố như flash sale, khuyến mãi và nhiều hơn nữa.',

    'import' => [
        'name' => 'Cập nhật giá sản phẩm',
        'description' => 'Cập nhật giá sản phẩm hàng loạt bằng cách tải lên file CSV/Excel.',
        'done_message' => 'Đã cập nhật thành công :count sản phẩm.',
        'rules' => [
            'id' => 'Trường ID là bắt buộc và phải tồn tại trong bảng sản phẩm.',
            'name' => 'Trường tên là bắt buộc và phải là chuỗi ký tự.',
            'sku' => 'Trường SKU phải là chuỗi ký tự.',
            'cost_per_item' => 'Trường chi phí mỗi sản phẩm phải là giá trị số.',
            'price' => 'Trường giá là bắt buộc và phải là giá trị số.',
            'sale_price' => 'Trường giá khuyến mãi phải là giá trị số.',
        ],
    ],

    'export' => [
        'description' => 'Xuất giá sản phẩm ra file CSV/Excel.',
    ],
];