<?php

return [
    'name' => 'Product Voorraad',
    'storehouse_management' => 'Magazijn Beheer',

    'import' => [
        'name' => 'Product Voorraad Bijwerken',
        'description' => 'Product voorraad in bulk bijwerken door een CSV/Excel bestand te uploaden.',
        'done_message' => ':count product(en) succesvol bijgewerkt.',
        'rules' => [
            'id' => 'Het ID veld is verplicht en moet bestaan in de producten tabel.',
            'name' => 'Het naam veld is verplicht en moet een string zijn.',
            'sku' => 'Het SKU veld moet een string zijn.',
            'with_storehouse_management' => 'Het met magazijn beheer veld moet "Ja" of "Nee" zijn.',
            'quantity' => 'Het hoeveelheid veld is verplicht wanneer met magazijn beheer "Ja" is.',
            'stock_status' => 'Het voorraad status veld is verplicht wanneer met magazijn beheer "Nee" is en moet een van de volgende waarden zijn: :statuses.',
        ],
    ],

    'export' => [
        'description' => 'Product voorraad exporteren naar een CSV/Excel bestand.',
    ],
];