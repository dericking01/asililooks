<?php

return [
    'name' => 'Ürün Fiyatları',
    'warning_prices' => 'Bu fiyatlar ürünün orijinal maliyetlerini temsil eder ve flaş satışlar, promosyonlar ve daha fazlası gibi faktörler nedeniyle değişebilecek olan nihai fiyatları yansıtmayabilir.',

    'import' => [
        'name' => 'Ürün Fiyatlarını Güncelle',
        'description' => 'CSV/Excel dosyası yükleyerek ürün fiyatlarını toplu olarak güncelleyin.',
        'done_message' => ':count ürün başarıyla güncellendi.',
        'rules' => [
            'id' => 'ID alanı zorunludur ve ürünler tablosunda mevcut olmalıdır.',
            'name' => 'Ad alanı zorunludur ve metin olmalıdır.',
            'sku' => 'SKU alanı metin olmalıdır.',
            'cost_per_item' => 'Birim maliyet alanı sayısal değer olmalıdır.',
            'price' => 'Fiyat alanı zorunludur ve sayısal değer olmalıdır.',
            'sale_price' => 'İndirimli fiyat alanı sayısal değer olmalıdır.',
        ],
    ],

    'export' => [
        'description' => 'Ürün fiyatlarını CSV/Excel dosyasına aktar.',
    ],
];