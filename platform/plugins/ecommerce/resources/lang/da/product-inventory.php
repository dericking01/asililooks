<?php

return [
    'name' => 'Produktlager',
    'storehouse_management' => 'Lagerstyring',

    'import' => [
        'name' => 'Opdater produktlager',
        'description' => 'Opdater produktlager i massevis ved at uploade en CSV/Excel-fil.',
        'done_message' => 'Opdaterede :count produkt(er) succesfuldt.',
        'rules' => [
            'id' => 'ID-feltet er obligatorisk og skal eksistere i produkttabellen.',
            'name' => 'Navnefeltet er obligatorisk og skal være en streng.',
            'sku' => 'SKU-feltet skal være en streng.',
            'with_storehouse_management' => 'Med lagerstyring-feltet skal være "Ja" eller "Nej".',
            'quantity' => 'Antal-feltet er obligatorisk når med lagerstyring er "Ja".',
            'stock_status' => 'Lagerstatus-feltet er obligatorisk når med lagerstyring er "Nej" og skal være en af følgende værdier: :statuses.',
        ],
    ],

    'export' => [
        'description' => 'Eksporter produktlager til en CSV/Excel-fil.',
    ],
];
