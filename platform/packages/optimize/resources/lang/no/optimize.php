<?php

return [
    'settings' => [
        'title' => 'Optimaliser',
        'description' => 'Minifiser HTML-utgang, inline CSS, fjern kommentarer...',
        'enable' => 'Aktiver optimalisering av sidehastighet?',
    ],
    'collapse_white_space' => 'Kollaps mellomrom',
    'collapse_white_space_description' => 'Dette filteret reduserer bytes overført i en HTML-fil ved å fjerne unødvendige mellomrom.',
    'elide_attributes' => 'Utelat attributter',
    'elide_attributes_description' => 'Dette filteret reduserer overføringsstørrelsen til HTML-filer ved å fjerne attributter fra tagger når den angitte verdien er lik standardverdien for den attributten. Dette kan spare et beskjedent antall bytes og kan gjøre dokumentet mer kompressionsdyktig ved å kanonisere de berørte taggene.',
    'inline_css' => 'Inline CSS',
    'inline_css_description' => 'Dette filteret transformerer inline "style" attributten til tagger til klasser ved å flytte CSS til headeren.',
    'insert_dns_prefetch' => 'Sett inn DNS prefetch',
    'insert_dns_prefetch_description' => 'Dette filteret injiserer tagger i HEAD for å aktivere nettleseren til å utføre DNS prefetching.',
    'remove_comments' => 'Fjern kommentarer',
    'remove_comments_description' => 'Dette filteret eliminerer HTML-, JS- og CSS-kommentarer. Filteret reduserer overføringsstørrelsen til HTML-filer ved å fjerne kommentarene. Avhengig av HTML-filen kan dette filteret betydelig redusere antall bytes overført på nettverket.',
    'remove_quotes' => 'Fjern anførselstegn',
    'remove_quotes_description' => 'Dette filteret eliminerer unødvendige anførselstegn fra HTML-attributter. Selv om de er påkrevd av de forskjellige HTML-spesifikasjonene, tillater nettlesere deres utelatelse når verdien av en attributt er sammensatt av et bestemt undersett av tegn (alfanumeriske og noen tegnsettingstegn).',
    'defer_javascript' => 'Utsett javascript',
    'defer_javascript_description' => 'Utsetter kjøringen av javascript i HTML. Hvis det er nødvendig å kansellere utsettelsen i noe skript, bruk data-pagespeed-no-defer som skript-attributt for å kansellere utsettelsen.',
];
