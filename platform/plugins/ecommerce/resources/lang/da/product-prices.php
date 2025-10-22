<?php

return [
    'name' => 'Produktpriser',
    'warning_prices' => 'Disse priser repræsenterer de oprindelige omkostninger for produktet og afspejler muligvis ikke de endelige priser, som kan variere på grund af faktorer som flash sales, kampagner og mere.',

    'import' => [
        'name' => 'Opdater produktpriser',
        'description' => 'Opdater produktpriser i massevis ved at uploade en CSV/Excel-fil.',
        'done_message' => 'Opdaterede :count produkt(er) succesfuldt.',
        'rules' => [
            'id' => 'ID-feltet er obligatorisk og skal eksistere i produkttabellen.',
            'name' => 'Navnefeltet er obligatorisk og skal være en streng.',
            'sku' => 'SKU-feltet skal være en streng.',
            'cost_per_item' => 'Omkostning per vare-feltet skal være en numerisk værdi.',
            'price' => 'Pris-feltet er påkrævet og skal være en numerisk værdi.',
            'sale_price' => 'Salgspris-feltet skal være en numerisk værdi.',
        ],
    ],

    'export' => [
        'description' => 'Eksporter produktpriser til en CSV/Excel-fil.',
    ],
];
