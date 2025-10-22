<?php

return [
    'name' => 'Produktlager',
    'storehouse_management' => 'Lagerstyring',

    'import' => [
        'name' => 'Oppdater produktlager',
        'description' => 'Oppdater produktlager i bulk ved å laste opp en CSV/Excel-fil.',
        'done_message' => 'Oppdaterte :count produkt(er) vellykket.',
        'rules' => [
            'id' => 'ID-feltet er obligatorisk og må eksistere i produkttabellen.',
            'name' => 'Navnefeltet er obligatorisk og må være en streng.',
            'sku' => 'SKU-feltet må være en streng.',
            'with_storehouse_management' => 'Lagerstyringsfeltet må være "Ja" eller "Nei".',
            'quantity' => 'Antallsfeltet er obligatorisk når lagerstyring er "Ja".',
            'stock_status' => 'Lagerstatusfeltet er obligatorisk når lagerstyring er "Nei" og må være en av følgende verdier: :statuses.',
        ],
    ],

    'export' => [
        'description' => 'Eksporter produktlager til en CSV/Excel-fil.',
    ],
];
