<?php

return [
    'name' => 'Edistynyt kieli',
    'description' => 'Edistyneet kieliominaisuudet monikieliselle sisällölle',
    'import' => [
        'rules' => [
            'id' => 'Tunnus vaaditaan ja sen on oltava kelvollinen tunnus.',
            'name' => 'Nimi vaaditaan ja sen on oltava merkkijono, jonka enimmäispituus on 255 merkkiä.',
            'description' => 'Kuvauksen on oltava merkkijono, jonka enimmäispituus on 400 merkkiä, jos se on annettu.',
            'content' => 'Sisällön on oltava merkkijono, jonka enimmäispituus on 300 000 merkkiä, jos se on annettu.',
            'location' => 'Sijainnin on oltava merkkijono, jonka enimmäispituus on 255 merkkiä, jos se on annettu.',
            'floor_plans' => 'Pohjapiirrosten on oltava kelvollinen merkkijono, jos ne on annettu.',
            'faq_schema_config' => 'UKK-skeeman määrityksen on oltava kelvollinen merkkijono, jos se on annettu.',
            'faq_ids' => 'UKK-tunnusten on oltava kelvollinen taulukko, jos ne on annettu.',
        ],
    ],
    'export' => [
        'total' => 'Yhteensä',
    ],
    'import_model_translations' => ':model käännökset',
    'export_model_translations' => ':model käännökset',
    'import_description' => 'Tuo käännökset kohteelle :name CSV/Excel-tiedostosta.',
    'export_description' => 'Vie käännökset kohteelle :name CSV/Excel-tiedostoon.',
];
