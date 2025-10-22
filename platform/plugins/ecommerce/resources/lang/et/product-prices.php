<?php

return [
    'name' => 'Toote hinnad',
    'warning_prices' => 'Need hinnad esindavad toote algseid kulusid ja ei pruugi kajastada lõplikke hindu, mis võivad erineda tegurite nagu välkmüük, kampaaniad ja muu tõttu.',

    'import' => [
        'name' => 'Värskenda toote hindu',
        'description' => 'Värskendage tootehindade massina CSV/Excel faili üleslaadimisega.',
        'done_message' => 'Edukalt uuendatud :count toodet.',
        'rules' => [
            'id' => 'ID väli on kohustuslik ja peab olemas olema toodete tabelis.',
            'name' => 'Nime väli on kohustuslik ja peab olema tekst.',
            'sku' => 'SKU väli peab olema tekst.',
            'cost_per_item' => 'Toote hinna väli peab olema numbriline väärtus.',
            'price' => 'Hinna väli on nõutav ja peab olema numbriline väärtus.',
            'sale_price' => 'Soodushinna väli peab olema numbriline väärtus.',
        ],
    ],

    'export' => [
        'description' => 'Ekspordi tootehinnad CSV/Excel faili.',
    ],
];
