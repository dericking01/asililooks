<?php

return [
    'name' => 'Product Prijzen',
    'warning_prices' => 'Deze prijzen vertegenwoordigen de oorspronkelijke kosten van het product en reflecteren mogelijk niet de eindprijzen, die kunnen variëren door factoren zoals flash sales, promoties, en meer.',

    'import' => [
        'name' => 'Product Prijzen Bijwerken',
        'description' => 'Product prijzen in bulk bijwerken door een CSV/Excel bestand te uploaden.',
        'done_message' => ':count product(en) succesvol bijgewerkt.',
        'rules' => [
            'id' => 'Het ID veld is verplicht en moet bestaan in de producten tabel.',
            'name' => 'Het naam veld is verplicht en moet een string zijn.',
            'sku' => 'Het SKU veld moet een string zijn.',
            'cost_per_item' => 'Het kostprijs per item veld moet een numerieke waarde zijn.',
            'price' => 'Het prijs veld is verplicht en moet een numerieke waarde zijn.',
            'sale_price' => 'Het aanbiedingsprijs veld moet een numerieke waarde zijn.',
        ],
    ],

    'export' => [
        'description' => 'Product prijzen exporteren naar een CSV/Excel bestand.',
    ],
];