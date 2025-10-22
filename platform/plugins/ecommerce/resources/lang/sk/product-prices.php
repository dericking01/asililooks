<?php

return [
    'name' => 'Ceny produktov',
    'warning_prices' => 'Tieto ceny predstavujú pôvodné náklady produktu a nemusia odrážať konečné ceny, ktoré sa môžu líšiť v dôsledku faktorov ako bleskové zľavy, akcie a ďalšie.',

    'import' => [
        'name' => 'Aktualizovať ceny produktov',
        'description' => 'Hromadná aktualizácia cien produktov nahraním súboru CSV/Excel.',
        'done_message' => 'Úspešne aktualizovaných :count produkt(ov).',
        'rules' => [
            'id' => 'Pole ID je povinné a musí existovať v tabuľke produktov.',
            'name' => 'Pole názov je povinné a musí byť reťazec.',
            'sku' => 'Pole SKU musí byť reťazec.',
            'cost_per_item' => 'Pole náklady na položku musí byť číselná hodnota.',
            'price' => 'Pole cena je povinné a musí byť číselná hodnota.',
            'sale_price' => 'Pole akčná cena musí byť číselná hodnota.',
        ],
    ],

    'export' => [
        'description' => 'Exportovať ceny produktov do súboru CSV/Excel.',
    ],
];
