<?php

return [
    'settings' => [
        'title' => 'Optimizacija',
        'description' => 'Minificiraj HTML izlaz, inline CSS, ukloni komentare...',
        'enable' => 'Omogući optimizaciju brzine stranice?',
    ],
    'collapse_white_space' => 'Sažmi razmake',
    'collapse_white_space_description' => 'Ovaj filtar smanjuje bajtove prenesene u HTML datoteci uklanjanjem nepotrebnih razmaka.',
    'elide_attributes' => 'Izbriši atribute',
    'elide_attributes_description' => 'Ovaj filtar smanjuje veličinu prijenosa HTML datoteka uklanjanjem atributa iz oznaka kada je navedena vrijednost jednaka zadanoj vrijednosti za taj atribut. Ovo može uštedjeti skroman broj bajtova i može učiniti dokument kompresibilnijim kanonizacijom zahvaćenih oznaka.',
    'inline_css' => 'Inline CSS',
    'inline_css_description' => 'Ovaj filtar pretvara inline "style" atribut oznaka u klase premještanjem CSS-a u zaglavlje.',
    'insert_dns_prefetch' => 'Umetni DNS prefetch',
    'insert_dns_prefetch_description' => 'Ovaj filtar ubacuje oznake u HEAD kako bi omogućio pregledniku izvođenje DNS pretpreuzimanja.',
    'remove_comments' => 'Ukloni komentare',
    'remove_comments_description' => 'Ovaj filtar eliminira HTML, JS i CSS komentare. Filtar smanjuje veličinu prijenosa HTML datoteka uklanjanjem komentara. Ovisno o HTML datoteci, ovaj filtar može značajno smanjiti broj bajtova prenesenih na mreži.',
    'remove_quotes' => 'Ukloni navodnike',
    'remove_quotes_description' => 'Ovaj filtar eliminira nepotrebne navodnike iz HTML atributa. Iako su potrebni različitim HTML specifikacijama, preglednici dopuštaju njihovo izostavljanje kada je vrijednost atributa sastavljena od određenog podskupa znakova (alfanumerički i neki znakovi interpunkcije).',
    'defer_javascript' => 'Odgodi javascript',
    'defer_javascript_description' => 'Odgađa izvršavanje javascripta u HTML-u. Ako je potrebno poništiti odgađanje u nekom skriptu, koristite data-pagespeed-no-defer kao atribut skripte za poništavanje odgađanja.',
];
