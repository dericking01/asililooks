<?php

return [
    'name' => 'Produktu cenas',
    'warning_prices' => 'Šīs cenas atspoguļo produkta sākotnējās izmaksas un var neatbilst galīgajām cenām, kas varētu atšķirties tādu faktoru dēļ kā zibens izpārdošanas, akcijas un citi.',

    'import' => [
        'name' => 'Atjaunināt produktu cenas',
        'description' => 'Lielapjoma produktu cenu atjaunināšana, augšupielādējot CSV/Excel failu.',
        'done_message' => 'Veiksmīgi atjaunināti :count produkts(i).',
        'rules' => [
            'id' => 'ID lauks ir obligāts un tam jāeksistē produktu tabulā.',
            'name' => 'Nosaukuma lauks ir obligāts un tam jābūt virknei.',
            'sku' => 'SKU laukam jābūt virknei.',
            'cost_per_item' => 'Izmaksu par vienību laukam jābūt skaitliskai vērtībai.',
            'price' => 'Cenas lauks ir obligāts un tam jābūt skaitliskai vērtībai.',
            'sale_price' => 'Izpārdošanas cenas laukam jābūt skaitliskai vērtībai.',
        ],
    ],

    'export' => [
        'description' => 'Eksportēt produktu cenas uz CSV/Excel failu.',
    ],
];
