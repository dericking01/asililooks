<?php

return [
    'settings' => [
        'title' => 'Optimalizace',
        'description' => 'Minifikace HTML výstupu, inline CSS, odstranění komentářů...',
        'enable' => 'Povolit optimalizaci rychlosti stránky?',
    ],
    'collapse_white_space' => 'Sbalit prázdné místo',
    'collapse_white_space_description' => 'Tento filtr snižuje počet bajtů přenesených v HTML souboru odstraněním zbytečných prázdných znaků.',
    'elide_attributes' => 'Vynechat atributy',
    'elide_attributes_description' => 'Tento filtr snižuje velikost přenosu HTML souborů odstraněním atributů ze značek, když je zadaná hodnota rovna výchozí hodnotě pro tento atribut. To může ušetřit skromný počet bajtů a může učinit dokument více kompresovatelným kanonizací dotčených značek.',
    'inline_css' => 'Inline CSS',
    'inline_css_description' => 'Tento filtr transformuje inline "style" atribut značek do tříd přesunutím CSS do hlavičky.',
    'insert_dns_prefetch' => 'Vložit DNS prefetch',
    'insert_dns_prefetch_description' => 'Tento filtr vkládá značky do HEAD, aby umožnil prohlížeči provádět DNS prefetching.',
    'remove_comments' => 'Odstranit komentáře',
    'remove_comments_description' => 'Tento filtr eliminuje HTML, JS a CSS komentáře. Filtr snižuje velikost přenosu HTML souborů odstraněním komentářů. V závislosti na HTML souboru může tento filtr výrazně snížit počet bajtů přenášených v síti.',
    'remove_quotes' => 'Odstranit uvozovky',
    'remove_quotes_description' => 'Tento filtr eliminuje zbytečné uvozovky z HTML atributů. Přestože jsou vyžadovány různými HTML specifikacemi, prohlížeče umožňují jejich vynechání, když je hodnota atributu složena z určité podmnožiny znaků (alfanumerické a některé interpunkční znaky).',
    'defer_javascript' => 'Odložit javascript',
    'defer_javascript_description' => 'Odkládá provádění javascriptu v HTML. Pokud je nutné zrušit odložení u některého skriptu, použijte data-pagespeed-no-defer jako atribut skriptu pro zrušení odložení.',
];
