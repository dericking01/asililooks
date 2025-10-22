<?php

return [
    'name' => 'Produktpriser',
    'warning_prices' => 'Dessa priser representerar produktens ursprungliga kostnader och kanske inte återspeglar slutpriserna, som kan variera på grund av faktorer som blixtreor, kampanjer och mer.',

    'import' => [
        'name' => 'Uppdatera produktpriser',
        'description' => 'Uppdatera produktpriser i bulk genom att ladda upp en CSV/Excel-fil.',
        'done_message' => 'Uppdaterade :count produkt(er) framgångsrikt.',
        'rules' => [
            'id' => 'ID-fältet är obligatoriskt och måste finnas i produkttabellen.',
            'name' => 'Namnfältet är obligatoriskt och måste vara en sträng.',
            'sku' => 'SKU-fältet måste vara en sträng.',
            'cost_per_item' => 'Kostnad per artikel-fältet måste vara ett numeriskt värde.',
            'price' => 'Prisfältet är obligatoriskt och måste vara ett numeriskt värde.',
            'sale_price' => 'Reapris-fältet måste vara ett numeriskt värde.',
        ],
    ],

    'export' => [
        'description' => 'Exportera produktpriser till en CSV/Excel-fil.',
    ],
];