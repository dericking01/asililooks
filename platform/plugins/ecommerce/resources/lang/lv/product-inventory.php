<?php

return [
    'name' => 'Produktu inventārs',
    'storehouse_management' => 'Noliktavas pārvaldība',

    'import' => [
        'name' => 'Atjaunināt produktu inventāru',
        'description' => 'Lielapjoma produktu inventāra atjaunināšana, augšupielādējot CSV/Excel failu.',
        'done_message' => 'Veiksmīgi atjaunināti :count produkts(i).',
        'rules' => [
            'id' => 'ID lauks ir obligāts un tam jāeksistē produktu tabulā.',
            'name' => 'Nosaukuma lauks ir obligāts un tam jābūt virknei.',
            'sku' => 'SKU laukam jābūt virknei.',
            'with_storehouse_management' => 'Ar noliktavas pārvaldības laukam jābūt "Jā" vai "Nē".',
            'quantity' => 'Daudzuma lauks ir obligāts, kad ar noliktavas pārvaldību ir "Jā".',
            'stock_status' => 'Krājumu statusa lauks ir obligāts, kad ar noliktavas pārvaldību ir "Nē", un tam jābūt vienai no šīm vērtībām: :statuses.',
        ],
    ],

    'export' => [
        'description' => 'Eksportēt produktu inventāru uz CSV/Excel failu.',
    ],
];
