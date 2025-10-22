<?php

return [
    'name' => 'Prețuri Produse',
    'warning_prices' => 'Aceste prețuri reprezintă costurile originale ale produsului și s-ar putea să nu reflecte prețurile finale, care ar putea varia datorită factorilor precum vânzările flash, promoțiile și altele.',

    'import' => [
        'name' => 'Actualizare Prețuri Produse',
        'description' => 'Actualizați prețurile produselor în bloc încărcând un fișier CSV/Excel.',
        'done_message' => ':count produs(e) actualizat(e) cu succes.',
        'rules' => [
            'id' => 'Câmpul ID este obligatoriu și trebuie să existe în tabelul produselor.',
            'name' => 'Câmpul nume este obligatoriu și trebuie să fie un șir de caractere.',
            'sku' => 'Câmpul SKU trebuie să fie un șir de caractere.',
            'cost_per_item' => 'Câmpul cost pe articol trebuie să fie o valoare numerică.',
            'price' => 'Câmpul preț este obligatoriu și trebuie să fie o valoare numerică.',
            'sale_price' => 'Câmpul preț redus trebuie să fie o valoare numerică.',
        ],
    ],

    'export' => [
        'description' => 'Exportați prețurile produselor într-un fișier CSV/Excel.',
    ],
];
