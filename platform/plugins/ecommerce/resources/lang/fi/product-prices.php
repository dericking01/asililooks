<?php

return [
    'name' => 'Tuotteiden hinnat',
    'warning_prices' => 'Nämä hinnat edustavat tuotteen alkuperäisiä hintoja, eivätkä ne välttämättä heijasta lopullisia hintoja, jotka voivat vaihdella salamyynnin, kampanjoiden ja muiden tekijöiden vuoksi.',

    'import' => [
        'name' => 'Päivitä tuotteiden hinnat',
        'description' => 'Päivitä tuotteiden hinnat massana lataamalla CSV/Excel-tiedosto.',
        'done_message' => 'Päivitetty :count tuote(tta) onnistuneesti.',
        'rules' => [
            'id' => 'ID-kenttä on pakollinen ja sen on oltava olemassa tuotteiden taulukossa.',
            'name' => 'Nimi-kenttä on pakollinen ja sen on oltava merkkijono.',
            'sku' => 'SKU-kentän on oltava merkkijono.',
            'cost_per_item' => 'Kustannus per tuote -kentän on oltava numeerinen arvo.',
            'price' => 'Hinta-kenttä on pakollinen ja sen on oltava numeerinen arvo.',
            'sale_price' => 'Alennushinta-kentän on oltava numeerinen arvo.',
        ],
    ],

    'export' => [
        'description' => 'Vie tuotteiden hinnat CSV/Excel-tiedostoon.',
    ],
];
