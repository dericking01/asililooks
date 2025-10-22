<?php

return [
    'settings' => [
        'title' => 'Optimizare',
        'description' => 'Minificare ieșire HTML, inline CSS, eliminare comentarii...',
        'enable' => 'Activează optimizarea vitezei paginii?',
    ],
    'collapse_white_space' => 'Comprimă spațiile albe',
    'collapse_white_space_description' => 'Acest filtru reduce octeții transmiși într-un fișier HTML prin eliminarea spațiilor albe inutile.',
    'elide_attributes' => 'Elimină atributele',
    'elide_attributes_description' => 'Acest filtru reduce dimensiunea transferului fișierelor HTML prin eliminarea atributelor din etichete atunci când valoarea specificată este egală cu valoarea implicită pentru acel atribut. Acest lucru poate economisi un număr modest de octeți și poate face documentul mai compresibil prin canonizarea etichetelor afectate.',
    'inline_css' => 'CSS inline',
    'inline_css_description' => 'Acest filtru transformă atributul inline "style" al etichetelor în clase prin mutarea CSS în antet.',
    'insert_dns_prefetch' => 'Inserează DNS prefetch',
    'insert_dns_prefetch_description' => 'Acest filtru injectează etichete în HEAD pentru a permite browserului să efectueze DNS prefetching.',
    'remove_comments' => 'Elimină comentariile',
    'remove_comments_description' => 'Acest filtru elimină comentariile HTML, JS și CSS. Filtrul reduce dimensiunea transferului fișierelor HTML prin eliminarea comentariilor. În funcție de fișierul HTML, acest filtru poate reduce semnificativ numărul de octeți transmiși în rețea.',
    'remove_quotes' => 'Elimină ghilimelele',
    'remove_quotes_description' => 'Acest filtru elimină ghilimelele inutile din atributele HTML. Deși sunt necesare prin diferitele specificații HTML, browserele permit omiterea lor atunci când valoarea unui atribut este compusă dintr-un anumit subset de caractere (alfanumerice și unele caractere de punctuație).',
    'defer_javascript' => 'Amână javascript',
    'defer_javascript_description' => 'Amână execuția javascript în HTML. Dacă este necesar să anulați amânarea în anumite scripturi, utilizați data-pagespeed-no-defer ca atribut de script pentru a anula amânarea.',
];
