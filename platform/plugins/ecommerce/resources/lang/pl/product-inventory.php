<?php

return [
    'name' => 'Inwentarz produktów',
    'storehouse_management' => 'Zarządzanie magazynem',

    'import' => [
        'name' => 'Aktualizuj inwentarz produktów',
        'description' => 'Aktualizuj inwentarz produktów masowo poprzez przesłanie pliku CSV/Excel.',
        'done_message' => 'Zaktualizowano :count produkt(ów) pomyślnie.',
        'rules' => [
            'id' => 'Pole ID jest obowiązkowe i musi istnieć w tabeli produktów.',
            'name' => 'Pole nazwy jest obowiązkowe i musi być ciągiem znaków.',
            'sku' => 'Pole SKU musi być ciągiem znaków.',
            'with_storehouse_management' => 'Pole z zarządzaniem magazynem musi być "Tak" lub "Nie".',
            'quantity' => 'Pole ilości jest obowiązkowe gdy zarządzanie magazynem to "Tak".',
            'stock_status' => 'Pole statusu zapasów jest obowiązkowe gdy zarządzanie magazynem to "Nie" i musi być jedną z następujących wartości: :statuses.',
        ],
    ],

    'export' => [
        'description' => 'Eksportuj inwentarz produktów do pliku CSV/Excel.',
    ],
];