<?php

return [
    'name' => 'Produktpreise',
    'warning_prices' => 'Diese Preise stellen die ursprünglichen Kosten des Produkts dar und spiegeln möglicherweise nicht die endgültigen Preise wider, die aufgrund von Faktoren wie Flash Sales, Aktionen und mehr variieren können.',

    'import' => [
        'name' => 'Produktpreise aktualisieren',
        'description' => 'Produktpreise in Masse durch Hochladen einer CSV/Excel-Datei aktualisieren.',
        'done_message' => ':count Produkt(e) erfolgreich aktualisiert.',
        'rules' => [
            'id' => 'Das ID-Feld ist obligatorisch und muss in der Produkttabelle existieren.',
            'name' => 'Das Namensfeld ist obligatorisch und muss ein String sein.',
            'sku' => 'Das SKU-Feld muss ein String sein.',
            'cost_per_item' => 'Das Feld "Kosten pro Artikel" muss ein numerischer Wert sein.',
            'price' => 'Das Preisfeld ist erforderlich und muss ein numerischer Wert sein.',
            'sale_price' => 'Das Verkaufspreisfeld muss ein numerischer Wert sein.',
        ],
    ],

    'export' => [
        'description' => 'Produktpreise in eine CSV/Excel-Datei exportieren.',
    ],
];