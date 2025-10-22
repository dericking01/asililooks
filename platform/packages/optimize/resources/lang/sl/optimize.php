<?php

return [
    'settings' => [
        'title' => 'Optimizacija',
        'description' => 'Zmanjšaj HTML izhod, inline CSS, odstrani komentarje...',
        'enable' => 'Omogoči optimizacijo hitrosti strani?',
    ],
    'collapse_white_space' => 'Stisni prazno mesto',
    'collapse_white_space_description' => 'Ta filter zmanjša bajte, prenesene v HTML datoteki, z odstranitvijo nepotrebnih praznih mest.',
    'elide_attributes' => 'Izpusti atribute',
    'elide_attributes_description' => 'Ta filter zmanjša velikost prenosa HTML datotek z odstranitvijo atributov iz oznak, ko je navedena vrednost enaka privzeti vrednosti za ta atribut. To lahko prihrani zmerno število bajtov in lahko naredi dokument bolj stisljiv s kanonizacijo prizadetih oznak.',
    'inline_css' => 'Inline CSS',
    'inline_css_description' => 'Ta filter preoblikuje inline "style" atribut oznak v razrede s premikanjem CSS v glavo.',
    'insert_dns_prefetch' => 'Vstavi DNS prefetch',
    'insert_dns_prefetch_description' => 'Ta filter vstavi oznake v HEAD, da omogoči brskalniku izvajanje DNS prefetchinga.',
    'remove_comments' => 'Odstrani komentarje',
    'remove_comments_description' => 'Ta filter odstrani HTML, JS in CSS komentarje. Filter zmanjša velikost prenosa HTML datotek z odstranitvijo komentarjev. Odvisno od HTML datoteke lahko ta filter znatno zmanjša število bajtov, prenesenih v omrežju.',
    'remove_quotes' => 'Odstrani narekovaje',
    'remove_quotes_description' => 'Ta filter odstrani nepotrebne narekovaje iz HTML atributov. Čeprav so potrebni z različnimi HTML specifikacijami, brskalniki dovoljujejo njihovo izpustitev, ko je vrednost atributa sestavljena iz določene podmnožice znakov (alfanumerični in nekateri ločila).',
    'defer_javascript' => 'Odloži javascript',
    'defer_javascript_description' => 'Odloži izvajanje javascripta v HTML. Če je potrebno preklicati odložitev v kakšnem skriptu, uporabite data-pagespeed-no-defer kot atribut skripta za preklic odložitve.',
];
