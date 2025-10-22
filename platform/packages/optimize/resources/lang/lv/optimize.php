<?php

return [
    'settings' => [
        'title' => 'Optimizēt',
        'description' => 'Samazināt HTML izvadi, iekļautais CSS, noņemt komentārus...',
        'enable' => 'Iespējot lapas ātruma optimizāciju?',
    ],
    'collapse_white_space' => 'Sakļaut atstarpes',
    'collapse_white_space_description' => 'Šis filtrs samazina baitus, kas tiek pārsūtīti HTML failā, noņemot nevajadzīgās atstarpes.',
    'elide_attributes' => 'Izlaist atribūtus',
    'elide_attributes_description' => 'Šis filtrs samazina HTML failu pārsūtīšanas izmēru, noņemot atribūtus no tagiem, kad norādītā vērtība ir vienāda ar noklusējuma vērtību šim atribūtam. Tas var ietaupīt nelielu baitu skaitu un var padarīt dokumentu vairāk saspiežamu, kanonizējot skartās birkas.',
    'inline_css' => 'Iekļautais CSS',
    'inline_css_description' => 'Šis filtrs pārveido tagu iekļauto "style" atribūtu klasēs, pārvietojot CSS uz galveni.',
    'insert_dns_prefetch' => 'Ievietot DNS prefetch',
    'insert_dns_prefetch_description' => 'Šis filtrs ievieto tagus HEAD, lai ļautu pārlūkprogrammai veikt DNS iepriekšējo ielādi.',
    'remove_comments' => 'Noņemt komentārus',
    'remove_comments_description' => 'Šis filtrs noņem HTML, JS un CSS komentārus. Filtrs samazina HTML failu pārsūtīšanas izmēru, noņemot komentārus. Atkarībā no HTML faila, šis filtrs var ievērojami samazināt tīklā pārsūtīto baitu skaitu.',
    'remove_quotes' => 'Noņemt pēdiņas',
    'remove_quotes_description' => 'Šis filtrs noņem nevajadzīgās pēdiņas no HTML atribūtiem. Lai gan tās ir nepieciešamas dažādās HTML specifikācijās, pārlūkprogrammas ļauj tās izlaist, ja atribūta vērtība sastāv no noteiktas rakstzīmju apakškopas (burtu-ciparu un daži pieturzīmes).',
    'defer_javascript' => 'Atlikt javascript',
    'defer_javascript_description' => 'Atliek javascript izpildi HTML. Ja ir nepieciešams atcelt atlikšanu kādā skriptā, izmantojiet data-pagespeed-no-defer kā skripta atribūtu, lai atceltu atlikšanu.',
];
