<?php

return [
    'name' => 'Imbentaryo ng Produkto',
    'storehouse_management' => 'Pamamahala ng Bodega',

    'import' => [
        'name' => 'I-update ang Imbentaryo ng Produkto',
        'description' => 'I-update ang imbentaryo ng produkto nang maramihan sa pamamagitan ng pag-upload ng CSV/Excel file.',
        'done_message' => 'Matagumpay na na-update ang :count (mga) produkto.',
        'rules' => [
            'id' => 'Ang field ng ID ay obligado at dapat na umiiral sa talahanayan ng mga produkto.',
            'name' => 'Ang field ng pangalan ay obligado at dapat na string.',
            'sku' => 'Ang field ng SKU ay dapat na string.',
            'with_storehouse_management' => 'Ang field ng with storehouse management ay dapat na "Yes" o "No".',
            'quantity' => 'Ang field ng dami ay obligado kapag ang with storehouse management ay "Yes".',
            'stock_status' => 'Ang field ng stock status ay obligado kapag ang with storehouse management ay "No" at dapat na isa sa mga sumusunod na value: :statuses.',
        ],
    ],

    'export' => [
        'description' => 'Mag-export ng imbentaryo ng produkto sa CSV/Excel file.',
    ],
];
