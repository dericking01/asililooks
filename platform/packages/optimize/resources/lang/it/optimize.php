<?php

return [
    'settings' => [
        'title' => 'Ottimizza',
        'description' => 'Minimizza output HTML, inline CSS, rimuovi commenti...',
        'enable' => 'Abilita ottimizzazione velocità pagina?',
    ],
    'collapse_white_space' => 'Comprimi spazi bianchi',
    'collapse_white_space_description' => 'Questo filtro riduce i byte trasmessi in un file HTML rimuovendo gli spazi bianchi non necessari.',
    'elide_attributes' => 'Elimina attributi',
    'elide_attributes_description' => 'Questo filtro riduce la dimensione di trasferimento dei file HTML rimuovendo gli attributi dai tag quando il valore specificato è uguale al valore predefinito per quell\'attributo. Questo può risparmiare un modesto numero di byte e può rendere il documento più comprimibile canonizzando i tag interessati.',
    'inline_css' => 'CSS inline',
    'inline_css_description' => 'Questo filtro trasforma l\'attributo "style" inline dei tag in classi spostando il CSS nell\'intestazione.',
    'insert_dns_prefetch' => 'Inserisci DNS prefetch',
    'insert_dns_prefetch_description' => 'Questo filtro inietta tag nell\'HEAD per consentire al browser di eseguire il prefetching DNS.',
    'remove_comments' => 'Rimuovi commenti',
    'remove_comments_description' => 'Questo filtro elimina i commenti HTML, JS e CSS. Il filtro riduce la dimensione di trasferimento dei file HTML rimuovendo i commenti. A seconda del file HTML, questo filtro può ridurre significativamente il numero di byte trasmessi sulla rete.',
    'remove_quotes' => 'Rimuovi virgolette',
    'remove_quotes_description' => 'Questo filtro elimina le virgolette non necessarie dagli attributi HTML. Sebbene richieste dalle varie specifiche HTML, i browser ne permettono l\'omissione quando il valore di un attributo è composto da un determinato sottoinsieme di caratteri (alfanumerici e alcuni caratteri di punteggiatura).',
    'defer_javascript' => 'Differisci javascript',
    'defer_javascript_description' => 'Differisce l\'esecuzione di javascript nell\'HTML. Se è necessario annullare il differimento in qualche script, utilizzare data-pagespeed-no-defer come attributo dello script per annullare il differimento.',
];
