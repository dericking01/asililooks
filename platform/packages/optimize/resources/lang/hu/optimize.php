<?php

return [
    'settings' => [
        'title' => 'Optimalizálás',
        'description' => 'HTML kimenet kicsinyítése, inline CSS, megjegyzések eltávolítása...',
        'enable' => 'Oldal sebesség optimalizálás engedélyezése?',
    ],
    'collapse_white_space' => 'Szóközök összevonása',
    'collapse_white_space_description' => 'Ez a szűrő csökkenti a HTML fájlban továbbított bájtokat a szükségtelen szóközök eltávolításával.',
    'elide_attributes' => 'Attribútumok elhagyása',
    'elide_attributes_description' => 'Ez a szűrő csökkenti a HTML fájlok átviteli méretét azáltal, hogy eltávolítja az attribútumokat a címkékből, amikor a megadott érték megegyezik az adott attribútum alapértelmezett értékével. Ez szerény számú bájtot takaríthat meg, és tömörebbé teheti a dokumentumot az érintett címkék kanonizálásával.',
    'inline_css' => 'Inline CSS',
    'inline_css_description' => 'Ez a szűrő átalakítja a címkék inline "style" attribútumát osztályokká a CSS fejlécbe való áthelyezésével.',
    'insert_dns_prefetch' => 'DNS prefetch beszúrása',
    'insert_dns_prefetch_description' => 'Ez a szűrő címkéket szúr be a HEAD-be, hogy lehetővé tegye a böngésző számára a DNS előzetes betöltést.',
    'remove_comments' => 'Megjegyzések eltávolítása',
    'remove_comments_description' => 'Ez a szűrő eltávolítja a HTML, JS és CSS megjegyzéseket. A szűrő csökkenti a HTML fájlok átviteli méretét a megjegyzések eltávolításával. A HTML fájltól függően ez a szűrő jelentősen csökkentheti a hálózaton továbbított bájtok számát.',
    'remove_quotes' => 'Idézőjelek eltávolítása',
    'remove_quotes_description' => 'Ez a szűrő eltávolítja a szükségtelen idézőjeleket a HTML attribútumokból. Bár a különböző HTML specifikációk megkövetelik őket, a böngészők megengedik azok elhagyását, ha egy attribútum értéke karakterek bizonyos részhalmazából áll (alfanumerikus és néhány írásjelek).',
    'defer_javascript' => 'Javascript halasztása',
    'defer_javascript_description' => 'Elhalasztja a javascript végrehajtását a HTML-ben. Ha szükséges a halasztás megszüntetése valamelyik szkriptben, használja a data-pagespeed-no-defer szkript attribútumot a halasztás megszüntetéséhez.',
];
