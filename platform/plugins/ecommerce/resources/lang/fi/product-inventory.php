<?php

return [
    'name' => 'Tuotteiden varasto',
    'storehouse_management' => 'Varastonhallinta',

    'import' => [
        'name' => 'Päivitä tuotteiden varasto',
        'description' => 'Päivitä tuotteiden varasto massana lataamalla CSV/Excel-tiedosto.',
        'done_message' => 'Päivitetty :count tuote(tta) onnistuneesti.',
        'rules' => [
            'id' => 'ID-kenttä on pakollinen ja sen on oltava olemassa tuotteiden taulukossa.',
            'name' => 'Nimi-kenttä on pakollinen ja sen on oltava merkkijono.',
            'sku' => 'SKU-kentän on oltava merkkijono.',
            'with_storehouse_management' => 'Varastonhallinnan kentän on oltava "Kyllä" tai "Ei".',
            'quantity' => 'Määrä-kenttä on pakollinen, kun varastonhallinta on "Kyllä".',
            'stock_status' => 'Varastotilakenttä on pakollinen, kun varastonhallinta on "Ei" ja sen on oltava jokin seuraavista arvoista: :statuses.',
        ],
    ],

    'export' => [
        'description' => 'Vie tuotteiden varasto CSV/Excel-tiedostoon.',
    ],
];
