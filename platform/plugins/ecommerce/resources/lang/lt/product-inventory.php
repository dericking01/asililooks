<?php

return [
    'name' => 'Produktų inventorius',
    'storehouse_management' => 'Sandėlio valdymas',

    'import' => [
        'name' => 'Atnaujinti produktų inventorių',
        'description' => 'Atnaujinkite produktų inventorių masiškai įkeldami CSV/Excel failą.',
        'done_message' => 'Sėkmingai atnaujinta :count produktų.',
        'rules' => [
            'id' => 'ID laukas yra privalomas ir turi egzistuoti produktų lentelėje.',
            'name' => 'Pavadinimo laukas yra privalomas ir turi būti tekstas.',
            'sku' => 'SKU laukas turi būti tekstas.',
            'with_storehouse_management' => 'Sandėlio valdymo laukas turi būti "Taip" arba "Ne".',
            'quantity' => 'Kiekio laukas yra privalomas, kai sandėlio valdymas yra "Taip".',
            'stock_status' => 'Atsargų būsenos laukas yra privalomas, kai sandėlio valdymas yra "Ne" ir turi būti viena iš šių reikšmių: :statuses.',
        ],
    ],

    'export' => [
        'description' => 'Eksportuoti produktų inventorių į CSV/Excel failą.',
    ],
];
