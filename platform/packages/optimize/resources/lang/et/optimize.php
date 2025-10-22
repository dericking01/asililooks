<?php

return [
    'settings' => [
        'title' => 'Optimeeri',
        'description' => 'Minifitseeri HTML väljund, inline CSS, eemalda kommentaarid...',
        'enable' => 'Luba lehe kiiruse optimeerimine?',
    ],
    'collapse_white_space' => 'Ahenda tühemärke',
    'collapse_white_space_description' => 'See filter vähendab HTML-failis edastatud baite, eemaldades mittevajalikud tühemärgid.',
    'elide_attributes' => 'Jäta atribuudid välja',
    'elide_attributes_description' => 'See filter vähendab HTML-failide ülekandesuurust, eemaldades silditelt atribuudid, kui määratud väärtus on võrdne selle atribuudi vaikeväärtusega. See võib säästa mõõduka arvu baite ja võib muuta dokumendi paremini pakitavaks, standardiseerides mõjutatud sildid.',
    'inline_css' => 'Inline CSS',
    'inline_css_description' => 'See filter muudab siltide inline "style" atribuudi klassideks, liigutades CSS-i päisesse.',
    'insert_dns_prefetch' => 'Sisesta DNS prefetch',
    'insert_dns_prefetch_description' => 'See filter süstib silte HEAD-i, et võimaldada brauseril teostada DNS eellaadimist.',
    'remove_comments' => 'Eemalda kommentaarid',
    'remove_comments_description' => 'See filter eemaldab HTML, JS ja CSS kommentaarid. Filter vähendab HTML-failide ülekandesuurust, eemaldades kommentaarid. Olenevalt HTML-failist, võib see filter oluliselt vähendada võrgus edastatud baitide arvu.',
    'remove_quotes' => 'Eemalda jutumärgid',
    'remove_quotes_description' => 'See filter eemaldab HTML-atribuutidest mittevajalikud jutumärgid. Kuigi erinevad HTML spetsifikatsioonid neid nõuavad, võimaldavad brauserid nende väljajätmist, kui atribuudi väärtus koosneb teatud alamhulgast märkidest (tähtnumbrilised ja mõned kirjavahemärgid).',
    'defer_javascript' => 'Lükka javascript edasi',
    'defer_javascript_description' => 'Lükkab javascripti käivitamise HTML-is edasi. Kui on vaja mõne skripti edasilükkamist tühistada, kasutage skripti atribuudina data-pagespeed-no-defer, et edasilükkamine tühistada.',
];
