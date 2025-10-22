<?php

return [
    'name' => 'Gelişmiş Dil',
    'description' => 'Çok dilli içerik için gelişmiş dil özellikleri',
    'import' => [
        'rules' => [
            'id' => 'ID zorunludur ve geçerli bir ID olmalıdır.',
            'name' => 'Ad zorunludur ve maksimum 255 karakter uzunluğunda bir dize olmalıdır.',
            'description' => 'Açıklama sağlanmışsa maksimum 400 karakter uzunluğunda bir dize olmalıdır.',
            'content' => 'İçerik sağlanmışsa maksimum 300.000 karakter uzunluğunda bir dize olmalıdır.',
            'location' => 'Konum sağlanmışsa maksimum 255 karakter uzunluğunda bir dize olmalıdır.',
            'floor_plans' => 'Kat planları sağlanmışsa geçerli bir dize olmalıdır.',
            'faq_schema_config' => 'SSS şema yapılandırması sağlanmışsa geçerli bir dize olmalıdır.',
            'faq_ids' => 'SSS ID\'leri sağlanmışsa geçerli bir dizi olmalıdır.',
        ],
    ],
    'export' => [
        'total' => 'Toplam',
    ],
    'import_model_translations' => ':model Çevirileri',
    'export_model_translations' => ':model Çevirileri',
    'import_description' => ':name için çevirileri bir CSV/Excel dosyasından içe aktarın.',
    'export_description' => ':name için çevirileri bir CSV/Excel dosyasına dışa aktarın.',
];
