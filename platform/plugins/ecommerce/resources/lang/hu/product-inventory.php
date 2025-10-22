<?php

return [
    'name' => 'Termékkészlet',
    'storehouse_management' => 'Raktárkezelés',

    'import' => [
        'name' => 'Termékkészlet frissítése',
        'description' => 'Termékkészlet tömeges frissítése CSV/Excel fájl feltöltésével.',
        'done_message' => ':count termék sikeresen frissítve.',
        'rules' => [
            'id' => 'Az ID mező kötelező és léteznie kell a termékek táblában.',
            'name' => 'A név mező kötelező és szövegnek kell lennie.',
            'sku' => 'Az SKU mezőnek szövegnek kell lennie.',
            'with_storehouse_management' => 'A raktárkezelés mezőnek "Igen" vagy "Nem" értékűnek kell lennie.',
            'quantity' => 'A mennyiség mező kötelező, amikor a raktárkezelés "Igen".',
            'stock_status' => 'A készletállapot mező kötelező, amikor a raktárkezelés "Nem" és a következő értékek egyikének kell lennie: :statuses.',
        ],
    ],

    'export' => [
        'description' => 'Termékkészlet exportálása CSV/Excel fájlba.',
    ],
];
