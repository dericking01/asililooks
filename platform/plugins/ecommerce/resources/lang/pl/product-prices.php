<?php

return [
    'name' => 'Ceny produktów',
    'warning_prices' => 'Te ceny reprezentują pierwotne koszty produktu i mogą nie odzwierciedlać cen końcowych, które mogą się różnić ze względu na czynniki takie jak wyprzedaże błyskawiczne, promocje i inne.',

    'import' => [
        'name' => 'Aktualizuj ceny produktów',
        'description' => 'Aktualizuj ceny produktów masowo poprzez przesłanie pliku CSV/Excel.',
        'done_message' => 'Zaktualizowano :count produkt(ów) pomyślnie.',
        'rules' => [
            'id' => 'Pole ID jest obowiązkowe i musi istnieć w tabeli produktów.',
            'name' => 'Pole nazwy jest obowiązkowe i musi być ciągiem znaków.',
            'sku' => 'Pole SKU musi być ciągiem znaków.',
            'cost_per_item' => 'Pole koszt za sztukę musi być wartością numeryczną.',
            'price' => 'Pole ceny jest wymagane i musi być wartością numeryczną.',
            'sale_price' => 'Pole ceny promocyjnej musi być wartością numeryczną.',
        ],
    ],

    'export' => [
        'description' => 'Eksportuj ceny produktów do pliku CSV/Excel.',
    ],
];