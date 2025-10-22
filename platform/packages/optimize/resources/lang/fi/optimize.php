<?php

return [
    'settings' => [
        'title' => 'Optimoi',
        'description' => 'Pienennä HTML-tulostus, inline CSS, poista kommentit...',
        'enable' => 'Ota käyttöön sivun nopeuden optimointi?',
    ],
    'collapse_white_space' => 'Tiivistä välilyönnit',
    'collapse_white_space_description' => 'Tämä suodatin vähentää HTML-tiedostossa siirrettyjä tavuja poistamalla tarpeettomat välilyönnit.',
    'elide_attributes' => 'Poista attribuutit',
    'elide_attributes_description' => 'Tämä suodatin vähentää HTML-tiedostojen siirtokokoa poistamalla attribuutit tageista, kun määritetty arvo on yhtä suuri kuin kyseisen attribuutin oletusarvo. Tämä voi säästää vaatimattoman määrän tavuja ja voi tehdä asiakirjasta paremmin pakattavan kanonisoimalla vaikutetut tagit.',
    'inline_css' => 'Inline CSS',
    'inline_css_description' => 'Tämä suodatin muuntaa tagien inline "style" attribuutin luokiksi siirtämällä CSS:n otsikkoon.',
    'insert_dns_prefetch' => 'Lisää DNS prefetch',
    'insert_dns_prefetch_description' => 'Tämä suodatin lisää tageja HEAD:iin mahdollistaakseen selaimen suorittamaan DNS prefetchingin.',
    'remove_comments' => 'Poista kommentit',
    'remove_comments_description' => 'Tämä suodatin poistaa HTML-, JS- ja CSS-kommentit. Suodatin vähentää HTML-tiedostojen siirtokokoa poistamalla kommentit. HTML-tiedostosta riippuen tämä suodatin voi merkittävästi vähentää verkossa siirrettävien tavujen määrää.',
    'remove_quotes' => 'Poista lainausmerkit',
    'remove_quotes_description' => 'Tämä suodatin poistaa tarpeettomat lainausmerkit HTML-attribuuteista. Vaikka eri HTML-määritykset vaativat niitä, selaimet sallivat niiden poisjättämisen, kun attribuutin arvo koostuu tietystä merkkien osajoukosta (aakkosnumeeriset ja jotkut välimerkit).',
    'defer_javascript' => 'Lykkää javascript',
    'defer_javascript_description' => 'Lykkää javascriptin suorittamista HTML:ssä. Jos on tarpeen perua lykkäys jossain skriptissä, käytä data-pagespeed-no-defer skriptin attribuuttina lykkäyksen perumiseksi.',
];
