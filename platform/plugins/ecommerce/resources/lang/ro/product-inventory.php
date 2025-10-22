<?php

return [
    'name' => 'Inventar Produse',
    'storehouse_management' => 'Gestionare Depozit',

    'import' => [
        'name' => 'Actualizare Inventar Produse',
        'description' => 'Actualizați inventarul produselor în bloc încărcând un fișier CSV/Excel.',
        'done_message' => ':count produs(e) actualizat(e) cu succes.',
        'rules' => [
            'id' => 'Câmpul ID este obligatoriu și trebuie să existe în tabelul produselor.',
            'name' => 'Câmpul nume este obligatoriu și trebuie să fie un șir de caractere.',
            'sku' => 'Câmpul SKU trebuie să fie un șir de caractere.',
            'with_storehouse_management' => 'Câmpul cu gestionare depozit trebuie să fie "Da" sau "Nu".',
            'quantity' => 'Câmpul cantitate este obligatoriu când gestionarea depozitului este "Da".',
            'stock_status' => 'Câmpul status stoc este obligatoriu când gestionarea depozitului este "Nu" și trebuie să fie una dintre următoarele valori: :statuses.',
        ],
    ],

    'export' => [
        'description' => 'Exportați inventarul produselor într-un fișier CSV/Excel.',
    ],
];
