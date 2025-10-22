<?php

return [
    'name' => 'Toote varude haldus',
    'storehouse_management' => 'Laovarude haldus',

    'import' => [
        'name' => 'Värskenda toote varusid',
        'description' => 'Värskendage tootevarusid massina CSV/Excel faili üleslaadimisega.',
        'done_message' => 'Edukalt uuendatud :count toodet.',
        'rules' => [
            'id' => 'ID väli on kohustuslik ja peab olemas olema toodete tabelis.',
            'name' => 'Nime väli on kohustuslik ja peab olema tekst.',
            'sku' => 'SKU väli peab olema tekst.',
            'with_storehouse_management' => 'Laohalduse väli peab olema "Jah" või "Ei".',
            'quantity' => 'Koguse väli on kohustuslik, kui laohaldus on "Jah".',
            'stock_status' => 'Laostaatuse väli on kohustuslik, kui laohaldus on "Ei" ja peab olema üks järgmistest väärtustest: :statuses.',
        ],
    ],

    'export' => [
        'description' => 'Ekspordi tootevarud CSV/Excel faili.',
    ],
];
