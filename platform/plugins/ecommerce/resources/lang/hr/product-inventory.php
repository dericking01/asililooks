<?php

return [
    'name' => 'Inventar proizvoda',
    'storehouse_management' => 'Upravljanje skladištem',

    'import' => [
        'name' => 'Ažuriraj inventar proizvoda',
        'description' => 'Ažurirajte inventar proizvoda masovno učitavanjem CSV/Excel datoteke.',
        'done_message' => 'Uspješno ažurirano :count proizvod(a).',
        'rules' => [
            'id' => 'Polje ID je obavezno i mora postojati u tablici proizvoda.',
            'name' => 'Polje naziva je obavezno i mora biti niz znakova.',
            'sku' => 'Polje SKU mora biti niz znakova.',
            'with_storehouse_management' => 'Polje upravljanja skladištem mora biti "Da" ili "Ne".',
            'quantity' => 'Polje količine je obavezno kada je upravljanje skladištem "Da".',
            'stock_status' => 'Polje statusa zaliha je obavezno kada je upravljanje skladištem "Ne" i mora biti jedna od sljedećih vrijednosti: :statuses.',
        ],
    ],

    'export' => [
        'description' => 'Izvezi inventar proizvoda u CSV/Excel datoteku.',
    ],
];
