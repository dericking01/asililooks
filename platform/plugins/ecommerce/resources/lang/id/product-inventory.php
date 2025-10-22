<?php

return [
    'name' => 'Inventaris Produk',
    'storehouse_management' => 'Manajemen Gudang',

    'import' => [
        'name' => 'Perbarui Inventaris Produk',
        'description' => 'Perbarui inventaris produk secara massal dengan mengunggah file CSV/Excel.',
        'done_message' => 'Berhasil memperbarui :count produk.',
        'rules' => [
            'id' => 'Field ID wajib diisi dan harus ada dalam tabel produk.',
            'name' => 'Field nama wajib diisi dan harus berupa string.',
            'sku' => 'Field SKU harus berupa string.',
            'with_storehouse_management' => 'Field dengan manajemen gudang harus "Ya" atau "Tidak".',
            'quantity' => 'Field kuantitas wajib diisi ketika dengan manajemen gudang adalah "Ya".',
            'stock_status' => 'Field status stok wajib diisi ketika dengan manajemen gudang adalah "Tidak" dan harus salah satu dari nilai berikut: :statuses.',
        ],
    ],

    'export' => [
        'description' => 'Ekspor inventaris produk ke file CSV/Excel.',
    ],
];