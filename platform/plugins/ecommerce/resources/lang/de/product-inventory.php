<?php

return [
    'name' => 'Produktinventar',
    'storehouse_management' => 'Lagerverwaltung',

    'import' => [
        'name' => 'Produktinventar aktualisieren',
        'description' => 'Produktinventar in Masse durch Hochladen einer CSV/Excel-Datei aktualisieren.',
        'done_message' => ':count Produkt(e) erfolgreich aktualisiert.',
        'rules' => [
            'id' => 'Das ID-Feld ist obligatorisch und muss in der Produkttabelle existieren.',
            'name' => 'Das Namensfeld ist obligatorisch und muss ein String sein.',
            'sku' => 'Das SKU-Feld muss ein String sein.',
            'with_storehouse_management' => 'Das Feld "Mit Lagerverwaltung" muss "Ja" oder "Nein" sein.',
            'quantity' => 'Das Mengenfeld ist obligatorisch, wenn "Mit Lagerverwaltung" "Ja" ist.',
            'stock_status' => 'Das Lagerstatus-Feld ist obligatorisch, wenn "Mit Lagerverwaltung" "Nein" ist und muss einer der folgenden Werte sein: :statuses.',
        ],
    ],

    'export' => [
        'description' => 'Produktinventar in eine CSV/Excel-Datei exportieren.',
    ],
];