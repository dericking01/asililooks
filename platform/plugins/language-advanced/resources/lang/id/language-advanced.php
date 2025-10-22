<?php

return [
    'name' => 'Bahasa Lanjutan',
    'description' => 'Fitur bahasa lanjutan untuk konten multibahasa',
    'import' => [
        'rules' => [
            'id' => 'ID wajib diisi dan harus berupa ID yang valid.',
            'name' => 'Nama wajib diisi dan harus berupa string dengan panjang maksimum 255 karakter.',
            'description' => 'Deskripsi harus berupa string dengan panjang maksimum 400 karakter jika disediakan.',
            'content' => 'Konten harus berupa string dengan panjang maksimum 300.000 karakter jika disediakan.',
            'location' => 'Lokasi harus berupa string dengan panjang maksimum 255 karakter jika disediakan.',
            'floor_plans' => 'Denah lantai harus berupa string yang valid jika disediakan.',
            'faq_schema_config' => 'Konfigurasi skema FAQ harus berupa string yang valid jika disediakan.',
            'faq_ids' => 'ID FAQ harus berupa array yang valid jika disediakan.',
        ],
    ],
    'export' => [
        'total' => 'Total',
    ],
    'import_model_translations' => 'Terjemahan :model',
    'export_model_translations' => 'Terjemahan :model',
    'import_description' => 'Impor terjemahan untuk :name dari file CSV/Excel.',
    'export_description' => 'Ekspor terjemahan untuk :name ke file CSV/Excel.',
];
