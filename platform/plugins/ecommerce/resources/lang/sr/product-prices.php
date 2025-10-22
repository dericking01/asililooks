<?php

return [
    'name' => 'Cene proizvoda',
    'warning_prices' => 'Ove cene predstavljaju originalne troškove proizvoda i možda ne odražavaju konačne cene, koje mogu varirati zbog faktora kao što su brza rasprodaja, promocije i još mnogo toga.',

    'import' => [
        'name' => 'Ažuriraj cene proizvoda',
        'description' => 'Ažurirajte cene proizvoda masovno učitavanjem CSV/Excel fajla.',
        'done_message' => 'Ažurirano :count proizvod(a) uspešno.',
        'rules' => [
            'id' => 'Polje ID je obavezno i mora postojati u tabeli proizvoda.',
            'name' => 'Polje naziv je obavezno i mora biti string.',
            'sku' => 'Polje SKU mora biti string.',
            'cost_per_item' => 'Polje cena po artiklu mora biti numerička vrednost.',
            'price' => 'Polje cena je obavezno i mora biti numerička vrednost.',
            'sale_price' => 'Polje prodajna cena mora biti numerička vrednost.',
        ],
    ],

    'export' => [
        'description' => 'Izvezite cene proizvoda u CSV/Excel fajl.',
    ],
];
