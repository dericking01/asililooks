<?php

return [
    'name' => 'Ceny produktů',
    'warning_prices' => 'Tyto ceny představují původní náklady na produkt a nemusí odrážet konečné ceny, které se mohou lišit v důsledku faktorů jako jsou výprodeje, akce a další.',

    'import' => [
        'name' => 'Aktualizovat ceny produktů',
        'description' => 'Hromadně aktualizovat ceny produktů nahráním CSV/Excel souboru.',
        'done_message' => 'Úspěšně aktualizováno :count produktů.',
        'rules' => [
            'id' => 'Pole ID je povinné a musí existovat v tabulce produktů.',
            'name' => 'Pole název je povinné a musí být řetězec.',
            'sku' => 'Pole SKU musí být řetězec.',
            'cost_per_item' => 'Pole náklady na položku musí být číselná hodnota.',
            'price' => 'Pole cena je povinné a musí být číselná hodnota.',
            'sale_price' => 'Pole prodejní cena musí být číselná hodnota.',
        ],
    ],

    'export' => [
        'description' => 'Exportovat ceny produktů do CSV/Excel souboru.',
    ],
];