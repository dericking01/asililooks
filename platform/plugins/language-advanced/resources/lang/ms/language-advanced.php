<?php

return [
    'name' => 'Bahasa Lanjutan',
    'description' => 'Ciri bahasa lanjutan untuk kandungan berbilang bahasa',
    'import' => [
        'rules' => [
            'id' => 'ID diperlukan dan mesti ID yang sah.',
            'name' => 'Nama diperlukan dan mesti rentetan dengan panjang maksimum 255 aksara.',
            'description' => 'Penerangan mesti rentetan dengan panjang maksimum 400 aksara jika disediakan.',
            'content' => 'Kandungan mesti rentetan dengan panjang maksimum 300,000 aksara jika disediakan.',
            'location' => 'Lokasi mesti rentetan dengan panjang maksimum 255 aksara jika disediakan.',
            'floor_plans' => 'Pelan lantai mesti rentetan yang sah jika disediakan.',
            'faq_schema_config' => 'Konfigurasi skema FAQ mesti rentetan yang sah jika disediakan.',
            'faq_ids' => 'ID FAQ mesti tatasusunan yang sah jika disediakan.',
        ],
    ],
    'export' => [
        'total' => 'Jumlah',
    ],
    'import_model_translations' => 'Terjemahan :model',
    'export_model_translations' => 'Terjemahan :model',
    'import_description' => 'Import terjemahan untuk :name dari fail CSV/Excel.',
    'export_description' => 'Eksport terjemahan untuk :name ke fail CSV/Excel.',
];
