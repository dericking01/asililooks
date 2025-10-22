<?php

return [
    'name' => 'Cijene proizvoda',
    'warning_prices' => 'Ove cijene predstavljaju originalne troškove proizvoda i možda ne odražavaju konačne cijene, koje mogu varirati zbog faktora kao što su brze rasprodaje, promocije i drugo.',

    'import' => [
        'name' => 'Ažuriraj cijene proizvoda',
        'description' => 'Ažurirajte cijene proizvoda masovno učitavanjem CSV/Excel datoteke.',
        'done_message' => 'Uspješno ažurirano :count proizvod(a).',
        'rules' => [
            'id' => 'Polje ID je obavezno i mora postojati u tablici proizvoda.',
            'name' => 'Polje naziva je obavezno i mora biti niz znakova.',
            'sku' => 'Polje SKU mora biti niz znakova.',
            'cost_per_item' => 'Polje cijene po artiklu mora biti numerička vrijednost.',
            'price' => 'Polje cijene je obavezno i mora biti numerička vrijednost.',
            'sale_price' => 'Polje akcijske cijene mora biti numerička vrijednost.',
        ],
    ],

    'export' => [
        'description' => 'Izvezi cijene proizvoda u CSV/Excel datoteku.',
    ],
];
