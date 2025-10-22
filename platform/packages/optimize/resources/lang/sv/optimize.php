<?php

return [
    'settings' => [
        'title' => 'Optimera',
        'description' => 'Minifiera HTML-utdata, inline CSS, ta bort kommentarer...',
        'enable' => 'Aktivera optimering av sidhastighet?',
    ],
    'collapse_white_space' => 'Kollaps blanktecken',
    'collapse_white_space_description' => 'Detta filter minskar byte som överförs i en HTML-fil genom att ta bort onödiga blanktecken.',
    'elide_attributes' => 'Utelämna attribut',
    'elide_attributes_description' => 'Detta filter minskar överföringsstorleken för HTML-filer genom att ta bort attribut från taggar när det angivna värdet är lika med standardvärdet för det attributet. Detta kan spara ett blygsamt antal byte och kan göra dokumentet mer kompressionsdugligt genom att kanonisera de berörda taggarna.',
    'inline_css' => 'Inline CSS',
    'inline_css_description' => 'Detta filter transformerar inline "style" attributet för taggar till klasser genom att flytta CSS till headern.',
    'insert_dns_prefetch' => 'Infoga DNS prefetch',
    'insert_dns_prefetch_description' => 'Detta filter injicerar taggar i HEAD för att aktivera webbläsaren att utföra DNS prefetching.',
    'remove_comments' => 'Ta bort kommentarer',
    'remove_comments_description' => 'Detta filter eliminerar HTML-, JS- och CSS-kommentarer. Filtret minskar överföringsstorleken för HTML-filer genom att ta bort kommentarerna. Beroende på HTML-filen kan detta filter avsevärt minska antalet byte som överförs på nätverket.',
    'remove_quotes' => 'Ta bort citattecken',
    'remove_quotes_description' => 'Detta filter eliminerar onödiga citattecken från HTML-attribut. Även om de krävs av de olika HTML-specifikationerna, tillåter webbläsare deras utelämnande när värdet av ett attribut är sammansatt av en viss delmängd av tecken (alfanumeriska och vissa skiljetecken).',
    'defer_javascript' => 'Skjut upp javascript',
    'defer_javascript_description' => 'Skjuter upp exekveringen av javascript i HTML. Om det är nödvändigt att avbryta uppskjutningen i något skript, använd data-pagespeed-no-defer som skriptattribut för att avbryta uppskjutningen.',
];
