<?php

return [
    'name' => 'Inventář produktů',
    'storehouse_management' => 'Správa skladu',

    'import' => [
        'name' => 'Aktualizovat inventář produktů',
        'description' => 'Hromadně aktualizovat inventář produktů nahráním CSV/Excel souboru.',
        'done_message' => 'Úspěšně aktualizováno :count produktů.',
        'rules' => [
            'id' => 'Pole ID je povinné a musí existovat v tabulce produktů.',
            'name' => 'Pole název je povinné a musí být řetězec.',
            'sku' => 'Pole SKU musí být řetězec.',
            'with_storehouse_management' => 'Pole se správou skladu musí být "Ano" nebo "Ne".',
            'quantity' => 'Pole množství je povinné, když je správa skladu "Ano".',
            'stock_status' => 'Pole stav skladu je povinné, když je správa skladu "Ne" a musí být jedna z následujících hodnot: :statuses.',
        ],
    ],

    'export' => [
        'description' => 'Exportovat inventář produktů do CSV/Excel souboru.',
    ],
];