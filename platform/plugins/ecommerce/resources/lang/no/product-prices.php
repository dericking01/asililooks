<?php

return [
    'name' => 'Produktpriser',
    'warning_prices' => 'Disse prisene representerer de opprinnelige kostnadene for produktet og gjenspeiler kanskje ikke sluttprisen, som kan variere på grunn av faktorer som flash-salg, kampanjer og mer.',

    'import' => [
        'name' => 'Oppdater produktpriser',
        'description' => 'Oppdater produktpriser i bulk ved å laste opp en CSV/Excel-fil.',
        'done_message' => 'Oppdaterte :count produkt(er) vellykket.',
        'rules' => [
            'id' => 'ID-feltet er obligatorisk og må eksistere i produkttabellen.',
            'name' => 'Navnefeltet er obligatorisk og må være en streng.',
            'sku' => 'SKU-feltet må være en streng.',
            'cost_per_item' => 'Kostnad per vare-feltet må være en numerisk verdi.',
            'price' => 'Prisfeltet er påkrevd og må være en numerisk verdi.',
            'sale_price' => 'Salgsprisfeltet må være en numerisk verdi.',
        ],
    ],

    'export' => [
        'description' => 'Eksporter produktpriser til en CSV/Excel-fil.',
    ],
];
