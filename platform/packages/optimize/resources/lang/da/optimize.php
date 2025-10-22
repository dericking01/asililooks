<?php

return [
    'settings' => [
        'title' => 'Optimer',
        'description' => 'Minificer HTML-output, inline CSS, fjern kommentarer...',
        'enable' => 'Aktiver optimering af sidehastighed?',
    ],
    'collapse_white_space' => 'Kollaps mellemrum',
    'collapse_white_space_description' => 'Dette filter reducerer bytes transmitteret i en HTML-fil ved at fjerne unødvendige mellemrum.',
    'elide_attributes' => 'Udelad attributter',
    'elide_attributes_description' => 'Dette filter reducerer overførselsstørrelsen af HTML-filer ved at fjerne attributter fra tags, når den angivne værdi er lig med standardværdien for den pågældende attribut. Dette kan spare et beskedent antal bytes og kan gøre dokumentet mere kompressionsdueligt ved at kanonisere de berørte tags.',
    'inline_css' => 'Inline CSS',
    'inline_css_description' => 'Dette filter transformerer inline "style" attributten af tags til klasser ved at flytte CSS til headeren.',
    'insert_dns_prefetch' => 'Indsæt DNS prefetch',
    'insert_dns_prefetch_description' => 'Dette filter injicerer tags i HEAD for at aktivere browseren til at udføre DNS prefetching.',
    'remove_comments' => 'Fjern kommentarer',
    'remove_comments_description' => 'Dette filter eliminerer HTML-, JS- og CSS-kommentarer. Filteret reducerer overførselsstørrelsen af HTML-filer ved at fjerne kommentarerne. Afhængigt af HTML-filen kan dette filter betydeligt reducere antallet af bytes transmitteret på netværket.',
    'remove_quotes' => 'Fjern citationstegn',
    'remove_quotes_description' => 'Dette filter eliminerer unødvendige citationstegn fra HTML-attributter. Selvom de er påkrævet af de forskellige HTML-specifikationer, tillader browsere deres udeladelse, når værdien af en attribut er sammensat af et bestemt undersæt af tegn (alfanumeriske og nogle tegnsætningstegn).',
    'defer_javascript' => 'Udskyd javascript',
    'defer_javascript_description' => 'Udskyder udførelsen af javascript i HTML. Hvis det er nødvendigt at annullere udskydelse i et script, skal du bruge data-pagespeed-no-defer som script attribut for at annullere udskydelse.',
];
