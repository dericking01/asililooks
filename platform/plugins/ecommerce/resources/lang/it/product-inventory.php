<?php

return [
    'name' => 'Inventario Prodotti',
    'storehouse_management' => 'Gestione Magazzino',

    'import' => [
        'name' => 'Aggiorna Inventario Prodotti',
        'description' => 'Aggiorna l\'inventario dei prodotti in blocco caricando un file CSV/Excel.',
        'done_message' => 'Aggiornati :count prodotto/i con successo.',
        'rules' => [
            'id' => 'Il campo ID è obbligatorio e deve esistere nella tabella prodotti.',
            'name' => 'Il campo nome è obbligatorio e deve essere una stringa.',
            'sku' => 'Il campo SKU deve essere una stringa.',
            'with_storehouse_management' => 'Il campo gestione magazzino deve essere "Sì" o "No".',
            'quantity' => 'Il campo quantità è obbligatorio quando la gestione magazzino è "Sì".',
            'stock_status' => 'Il campo stato scorte è obbligatorio quando la gestione magazzino è "No" e deve essere uno dei seguenti valori: :statuses.',
        ],
    ],

    'export' => [
        'description' => 'Esporta inventario prodotti in un file CSV/Excel.',
    ],
];