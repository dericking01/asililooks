<?php

return [
    'settings' => [
        'title' => 'Optimizuoti',
        'description' => 'Sumažinti HTML išvestį, įterptas CSS, pašalinti komentarus...',
        'enable' => 'Įjungti puslapio greičio optimizavimą?',
    ],
    'collapse_white_space' => 'Sutraukti tarpus',
    'collapse_white_space_description' => 'Šis filtras sumažina baitų, perduotų HTML faile, kiekį pašalindamas nereikalingus tarpus.',
    'elide_attributes' => 'Praleisti atributus',
    'elide_attributes_description' => 'Šis filtras sumažina HTML failų perdavimo dydį pašalindamas atributus iš žymų, kai nurodyta reikšmė lygi numatytajai to atributo reikšmei. Tai gali sutaupyti nedidelį baitų kiekį ir gali padaryti dokumentą labiau suspaudžiamą kanonizuojant paveiktas žymas.',
    'inline_css' => 'Įterptas CSS',
    'inline_css_description' => 'Šis filtras transformuoja žymų įterptą "style" atributą į klases perkeliant CSS į antraštę.',
    'insert_dns_prefetch' => 'Įterpti DNS prefetch',
    'insert_dns_prefetch_description' => 'Šis filtras įterpia žymas į HEAD, kad naršyklė galėtų atlikti DNS išankstinį užkrovimą.',
    'remove_comments' => 'Pašalinti komentarus',
    'remove_comments_description' => 'Šis filtras pašalina HTML, JS ir CSS komentarus. Filtras sumažina HTML failų perdavimo dydį pašalindamas komentarus. Priklausomai nuo HTML failo, šis filtras gali žymiai sumažinti tinkle perduotų baitų skaičių.',
    'remove_quotes' => 'Pašalinti kabutes',
    'remove_quotes_description' => 'Šis filtras pašalina nereikalingas kabutes iš HTML atributų. Nors įvairios HTML specifikacijos to reikalauja, naršyklės leidžia jų praleidimą, kai atributo reikšmė sudaryta iš tam tikro simbolių poaibio (raidiniai-skaitmeniniai ir kai kurie skyrybos ženklai).',
    'defer_javascript' => 'Atidėti javascript',
    'defer_javascript_description' => 'Atideda javascript vykdymą HTML. Jei reikia atšaukti atidėjimą kokiame nors scenarijuje, naudokite data-pagespeed-no-defer kaip scenarijaus atributą atidėjimui atšaukti.',
];
