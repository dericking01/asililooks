<?php

return [
    'name' => 'Mga Presyo ng Produkto',
    'warning_prices' => 'Ang mga presyong ito ay kumakatawan sa orihinal na mga gastos ng produkto at maaaring hindi sumasalamin sa mga huling presyo, na maaaring mag-iba dahil sa mga kadahilanan tulad ng flash sale, promosyon, at marami pang iba.',

    'import' => [
        'name' => 'I-update ang Mga Presyo ng Produkto',
        'description' => 'I-update ang mga presyo ng produkto nang maramihan sa pamamagitan ng pag-upload ng CSV/Excel file.',
        'done_message' => 'Matagumpay na na-update ang :count (mga) produkto.',
        'rules' => [
            'id' => 'Ang field ng ID ay obligado at dapat na umiiral sa talahanayan ng mga produkto.',
            'name' => 'Ang field ng pangalan ay obligado at dapat na string.',
            'sku' => 'Ang field ng SKU ay dapat na string.',
            'cost_per_item' => 'Ang field ng cost per item ay dapat na numeric value.',
            'price' => 'Ang field ng presyo ay kailangan at dapat na numeric value.',
            'sale_price' => 'Ang field ng sale price ay dapat na numeric value.',
        ],
    ],

    'export' => [
        'description' => 'Mag-export ng mga presyo ng produkto sa CSV/Excel file.',
    ],
];
