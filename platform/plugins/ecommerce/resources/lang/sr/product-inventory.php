<?php

return [
    'name' => 'Inventar proizvoda',
    'storehouse_management' => 'Upravljanje skladištem',

    'import' => [
        'name' => 'Ažuriraj inventar proizvoda',
        'description' => 'Ažurirajte inventar proizvoda masovno učitavanjem CSV/Excel fajla.',
        'done_message' => 'Ažurirano :count proizvod(a) uspešno.',
        'rules' => [
            'id' => 'Polje ID je obavezno i mora postojati u tabeli proizvoda.',
            'name' => 'Polje naziv je obavezno i mora biti string.',
            'sku' => 'Polje SKU mora biti string.',
            'with_storehouse_management' => 'Polje sa upravljanjem skladištem mora biti "Da" ili "Ne".',
            'quantity' => 'Polje količina je obavezno kada je upravljanje skladištem "Da".',
            'stock_status' => 'Polje status zaliha je obavezno kada je upravljanje skladištem "Ne" i mora biti jedna od sledećih vrednosti: :statuses.',
        ],
    ],

    'export' => [
        'description' => 'Izvezite inventar proizvoda u CSV/Excel fajl.',
    ],
];
