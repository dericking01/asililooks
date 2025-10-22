<?php

return [
    'name' => 'Termékárak',
    'warning_prices' => 'Ezek az árak a termék eredeti költségeit képviselik, és nem feltétlenül tükrözik a végső árakat, amelyek változhatnak olyan tényezők miatt, mint a villámakciók, promóciók és egyebek.',

    'import' => [
        'name' => 'Termékárak frissítése',
        'description' => 'Termékárak tömeges frissítése CSV/Excel fájl feltöltésével.',
        'done_message' => ':count termék sikeresen frissítve.',
        'rules' => [
            'id' => 'Az ID mező kötelező és léteznie kell a termékek táblában.',
            'name' => 'A név mező kötelező és szövegnek kell lennie.',
            'sku' => 'Az SKU mezőnek szövegnek kell lennie.',
            'cost_per_item' => 'Az egységenkénti költség mezőnek numerikusnak kell lennie.',
            'price' => 'Az ár mező kötelező és numerikusnak kell lennie.',
            'sale_price' => 'Az akciós ár mezőnek numerikusnak kell lennie.',
        ],
    ],

    'export' => [
        'description' => 'Termékárak exportálása CSV/Excel fájlba.',
    ],
];
