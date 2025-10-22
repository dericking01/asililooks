<?php

return [
    'name' => 'Harga Produk',
    'warning_prices' => 'Harga-harga ini merepresentasikan biaya asli produk dan mungkin tidak mencerminkan harga akhir, yang bisa bervariasi karena faktor-faktor seperti flash sale, promosi, dan lainnya.',

    'import' => [
        'name' => 'Perbarui Harga Produk',
        'description' => 'Perbarui harga produk secara massal dengan mengunggah file CSV/Excel.',
        'done_message' => 'Berhasil memperbarui :count produk.',
        'rules' => [
            'id' => 'Field ID wajib diisi dan harus ada dalam tabel produk.',
            'name' => 'Field nama wajib diisi dan harus berupa string.',
            'sku' => 'Field SKU harus berupa string.',
            'cost_per_item' => 'Field biaya per item harus berupa nilai numerik.',
            'price' => 'Field harga wajib diisi dan harus berupa nilai numerik.',
            'sale_price' => 'Field harga jual harus berupa nilai numerik.',
        ],
    ],

    'export' => [
        'description' => 'Ekspor harga produk ke file CSV/Excel.',
    ],
];