<?php

return [
    'name' => 'Sklad produktov',
    'storehouse_management' => 'Správa skladu',

    'import' => [
        'name' => 'Aktualizovať sklad produktov',
        'description' => 'Hromadná aktualizácia skladu produktov nahraním súboru CSV/Excel.',
        'done_message' => 'Úspešne aktualizovaných :count produkt(ov).',
        'rules' => [
            'id' => 'Pole ID je povinné a musí existovať v tabuľke produktov.',
            'name' => 'Pole názov je povinné a musí byť reťazec.',
            'sku' => 'Pole SKU musí byť reťazec.',
            'with_storehouse_management' => 'Pole so správou skladu musí byť "Áno" alebo "Nie".',
            'quantity' => 'Pole množstvo je povinné, keď je so správou skladu "Áno".',
            'stock_status' => 'Pole stav skladu je povinné, keď je so správou skladu "Nie" a musí byť jedna z nasledujúcich hodnôt: :statuses.',
        ],
    ],

    'export' => [
        'description' => 'Exportovať sklad produktov do súboru CSV/Excel.',
    ],
];
