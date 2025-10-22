<?php

return [
    'name' => 'Inventori Produk',
    'storehouse_management' => 'Pengurusan Gudang',

    'import' => [
        'name' => 'Kemaskini Inventori Produk',
        'description' => 'Kemaskini inventori produk secara pukal dengan memuat naik fail CSV/Excel.',
        'done_message' => 'Berjaya mengemaskini :count produk.',
        'rules' => [
            'id' => 'Medan ID adalah wajib dan mesti wujud dalam jadual produk.',
            'name' => 'Medan nama adalah wajib dan mesti berupa rentetan.',
            'sku' => 'Medan SKU mesti berupa rentetan.',
            'with_storehouse_management' => 'Medan dengan pengurusan gudang mesti "Ya" atau "Tidak".',
            'quantity' => 'Medan kuantiti adalah wajib apabila dengan pengurusan gudang adalah "Ya".',
            'stock_status' => 'Medan status stok adalah wajib apabila dengan pengurusan gudang adalah "Tidak" dan mesti salah satu daripada nilai berikut: :statuses.',
        ],
    ],

    'export' => [
        'description' => 'Eksport inventori produk ke fail CSV/Excel.',
    ],
];
