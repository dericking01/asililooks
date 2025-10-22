<?php

return [
    'name' => 'Produktlager',
    'storehouse_management' => 'Lagerhantering',

    'import' => [
        'name' => 'Uppdatera produktlager',
        'description' => 'Uppdatera produktlager i bulk genom att ladda upp en CSV/Excel-fil.',
        'done_message' => 'Uppdaterade :count produkt(er) framgångsrikt.',
        'rules' => [
            'id' => 'ID-fältet är obligatoriskt och måste finnas i produkttabellen.',
            'name' => 'Namnfältet är obligatoriskt och måste vara en sträng.',
            'sku' => 'SKU-fältet måste vara en sträng.',
            'with_storehouse_management' => 'Med lagerhantering-fältet måste vara "Ja" eller "Nej".',
            'quantity' => 'Kvantitetsfältet är obligatoriskt när lagerhantering är "Ja".',
            'stock_status' => 'Lagerstatus-fältet är obligatoriskt när lagerhantering är "Nej" och måste vara ett av följande värden: :statuses.',
        ],
    ],

    'export' => [
        'description' => 'Exportera produktlager till en CSV/Excel-fil.',
    ],
];