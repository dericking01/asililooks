<?php

return [
    'name' => 'Prezzi Prodotti',
    'warning_prices' => 'Questi prezzi rappresentano i costi originali del prodotto e potrebbero non riflettere i prezzi finali, che potrebbero variare a causa di fattori come vendite flash, promozioni e altro.',

    'import' => [
        'name' => 'Aggiorna Prezzi Prodotti',
        'description' => 'Aggiorna i prezzi dei prodotti in blocco caricando un file CSV/Excel.',
        'done_message' => 'Aggiornati :count prodotto/i con successo.',
        'rules' => [
            'id' => 'Il campo ID è obbligatorio e deve esistere nella tabella prodotti.',
            'name' => 'Il campo nome è obbligatorio e deve essere una stringa.',
            'sku' => 'Il campo SKU deve essere una stringa.',
            'cost_per_item' => 'Il campo costo per articolo deve essere un valore numerico.',
            'price' => 'Il campo prezzo è obbligatorio e deve essere un valore numerico.',
            'sale_price' => 'Il campo prezzo di vendita deve essere un valore numerico.',
        ],
    ],

    'export' => [
        'description' => 'Esporta prezzi prodotti in un file CSV/Excel.',
    ],
];