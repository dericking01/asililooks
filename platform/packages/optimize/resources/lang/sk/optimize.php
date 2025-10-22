<?php

return [
    'settings' => [
        'title' => 'Optimalizácia',
        'description' => 'Minifikácia HTML výstupu, inline CSS, odstránenie komentárov...',
        'enable' => 'Povoliť optimalizáciu rýchlosti stránky?',
    ],
    'collapse_white_space' => 'Zbaliť biele miesto',
    'collapse_white_space_description' => 'Tento filter znižuje bajty prenesené v HTML súbore odstránením zbytočných bielych miest.',
    'elide_attributes' => 'Vynechať atribúty',
    'elide_attributes_description' => 'Tento filter znižuje veľkosť prenosu HTML súborov odstránením atribútov zo značiek, keď je zadaná hodnota rovná predvolenej hodnote pre tento atribút. Môže to ušetriť skromný počet bajtov a môže urobiť dokument viac kompresovateľným kanonizáciou dotknutých značiek.',
    'inline_css' => 'Inline CSS',
    'inline_css_description' => 'Tento filter transformuje inline "style" atribút značiek do tried presunutím CSS do hlavičky.',
    'insert_dns_prefetch' => 'Vložiť DNS prefetch',
    'insert_dns_prefetch_description' => 'Tento filter vkladá značky do HEAD, aby umožnil prehliadaču vykonávať DNS prefetching.',
    'remove_comments' => 'Odstrániť komentáre',
    'remove_comments_description' => 'Tento filter eliminuje HTML, JS a CSS komentáre. Filter znižuje veľkosť prenosu HTML súborov odstránením komentárov. V závislosti od HTML súboru môže tento filter výrazne znížiť počet bajtov prenesených v sieti.',
    'remove_quotes' => 'Odstrániť úvodzovky',
    'remove_quotes_description' => 'Tento filter eliminuje zbytočné úvodzovky z HTML atribútov. Aj keď sú vyžadované rôznymi HTML špecifikáciami, prehliadače umožňujú ich vynechanie, keď je hodnota atribútu zložená z určitej podmnožiny znakov (alfanumerické a niektoré interpunkčné znaky).',
    'defer_javascript' => 'Odložiť javascript',
    'defer_javascript_description' => 'Odkladá vykonávanie javascriptu v HTML. Ak je potrebné zrušiť odloženie v nejakom skripte, použite data-pagespeed-no-defer ako atribút skriptu na zrušenie odloženia.',
];
