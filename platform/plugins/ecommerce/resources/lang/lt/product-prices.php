<?php

return [
    'name' => 'Produktų kainos',
    'warning_prices' => 'Šios kainos atspindi originalias produkto savikaina ir gali neatspindėti galutinių kainų, kurios gali skirtis dėl tokių veiksnių kaip žaibo išpardavimai, akcijos ir kt.',

    'import' => [
        'name' => 'Atnaujinti produktų kainas',
        'description' => 'Atnaujinkite produktų kainas masiškai įkeldami CSV/Excel failą.',
        'done_message' => 'Sėkmingai atnaujinta :count produktų.',
        'rules' => [
            'id' => 'ID laukas yra privalomas ir turi egzistuoti produktų lentelėje.',
            'name' => 'Pavadinimo laukas yra privalomas ir turi būti tekstas.',
            'sku' => 'SKU laukas turi būti tekstas.',
            'cost_per_item' => 'Savikaina už vienetą laukas turi būti skaitinė reikšmė.',
            'price' => 'Kainos laukas yra privalomas ir turi būti skaitinė reikšmė.',
            'sale_price' => 'Išpardavimo kainos laukas turi būti skaitinė reikšmė.',
        ],
    ],

    'export' => [
        'description' => 'Eksportuoti produktų kainas į CSV/Excel failą.',
    ],
];
