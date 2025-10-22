<?php

return [
    'name' => 'Cene izdelkov',
    'warning_prices' => 'Te cene predstavljajo originalne stroške izdelka in morda ne odražajo končnih cen, ki se lahko razlikujejo zaradi dejavnikov, kot so hitre razprodaje, promocije in drugo.',

    'import' => [
        'name' => 'Posodobi cene izdelkov',
        'description' => 'Posodobi cene izdelkov množično z nalaganjem CSV/Excel datoteke.',
        'done_message' => 'Uspešno posodobljenih :count izdelkov.',
        'rules' => [
            'id' => 'Polje ID je obvezno in mora obstajati v tabeli izdelkov.',
            'name' => 'Polje ime je obvezno in mora biti niz.',
            'sku' => 'Polje SKU mora biti niz.',
            'cost_per_item' => 'Polje strošek na artikel mora biti številčna vrednost.',
            'price' => 'Polje cena je obvezno in mora biti številčna vrednost.',
            'sale_price' => 'Polje akcijska cena mora biti številčna vrednost.',
        ],
    ],

    'export' => [
        'description' => 'Izvozi cene izdelkov v CSV/Excel datoteko.',
    ],
];
