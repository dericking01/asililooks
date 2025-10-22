<?php

return [
    'name' => 'Zaloga izdelkov',
    'storehouse_management' => 'Upravljanje skladišča',

    'import' => [
        'name' => 'Posodobi zalogo izdelkov',
        'description' => 'Posodobi zalogo izdelkov množično z nalaganjem CSV/Excel datoteke.',
        'done_message' => 'Uspešno posodobljenih :count izdelkov.',
        'rules' => [
            'id' => 'Polje ID je obvezno in mora obstajati v tabeli izdelkov.',
            'name' => 'Polje ime je obvezno in mora biti niz.',
            'sku' => 'Polje SKU mora biti niz.',
            'with_storehouse_management' => 'Polje z upravljanjem skladišča mora biti "Da" ali "Ne".',
            'quantity' => 'Polje količina je obvezno, ko je z upravljanjem skladišča "Da".',
            'stock_status' => 'Polje status zaloge je obvezno, ko je z upravljanjem skladišča "Ne" in mora biti ena od naslednjih vrednosti: :statuses.',
        ],
    ],

    'export' => [
        'description' => 'Izvozi zalogo izdelkov v CSV/Excel datoteko.',
    ],
];
