<?php

return [
    'name' => 'Harga Produk',
    'warning_prices' => 'Harga ini mewakili kos asal produk dan mungkin tidak menggambarkan harga akhir, yang boleh berbeza disebabkan faktor seperti jualan kilat, promosi, dan banyak lagi.',

    'import' => [
        'name' => 'Kemaskini Harga Produk',
        'description' => 'Kemaskini harga produk secara pukal dengan memuat naik fail CSV/Excel.',
        'done_message' => 'Berjaya mengemaskini :count produk.',
        'rules' => [
            'id' => 'Medan ID adalah wajib dan mesti wujud dalam jadual produk.',
            'name' => 'Medan nama adalah wajib dan mesti berupa rentetan.',
            'sku' => 'Medan SKU mesti berupa rentetan.',
            'cost_per_item' => 'Medan kos per item mesti berupa nilai numerik.',
            'price' => 'Medan harga adalah wajib dan mesti berupa nilai numerik.',
            'sale_price' => 'Medan harga jualan mesti berupa nilai numerik.',
        ],
    ],

    'export' => [
        'description' => 'Eksport harga produk ke fail CSV/Excel.',
    ],
];
