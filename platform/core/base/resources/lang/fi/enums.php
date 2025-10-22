<?php

return [
    'statuses' => [
        'draft' => 'Luonnos',
        'pending' => 'Odottaa',
        'published' => 'Julkaistu',
    ],
    'system_updater_steps' => [
        'download' => 'Lataa päivitystiedostot',
        'update_files' => 'Päivitä järjestelmätiedostot',
        'update_database' => 'Päivitä tietokannat',
        'publish_core_assets' => 'Julkaise ydinresurssit',
        'publish_packages_assets' => 'Julkaise pakettien resurssit',
        'clean_up' => 'Siivoa järjestelmän päivitystiedostot',
        'done' => 'Järjestelmä päivitetty onnistuneesti',

        'messages' => [
            'download' => 'Ladataan päivitystiedostoja...',
            'update_files' => 'Päivitetään järjestelmätiedostoja...',
            'update_database' => 'Päivitetään tietokantoja...',
            'publish_core_assets' => 'Julkaistaan ydinresursseja...',
            'publish_packages_assets' => 'Julkaistaan pakettien resursseja...',
            'clean_up' => 'Siivotaan järjestelmän päivitystiedostoja...',
            'done' => 'Valmis! Selaimesi päivitetään 30 sekunnin kuluttua.',
        ],

        'failed_messages' => [
            'download' => 'Päivitystiedostojen lataus epäonnistui',
            'update_files' => 'Järjestelmätiedostojen päivitys epäonnistui',
            'update_database' => 'Tietokantojen päivitys epäonnistui',
            'publish_core_assets' => 'Ydinresurssien julkaisu epäonnistui',
            'publish_packages_assets' => 'Pakettien resurssien julkaisu epäonnistui',
            'clean_up' => 'Järjestelmän päivitystiedostojen siivous epäonnistui',
        ],

        'success_messages' => [
            'download' => 'Päivitystiedostot ladattu onnistuneesti.',
            'update_files' => 'Järjestelmätiedostot päivitetty onnistuneesti.',
            'update_database' => 'Tietokannat päivitetty onnistuneesti.',
            'publish_core_assets' => 'Ydinresurssit julkaistu onnistuneesti.',
            'publish_packages_assets' => 'Pakettien resurssit julkaistu onnistuneesti.',
            'clean_up' => 'Järjestelmän päivitystiedostot siivottu onnistuneesti.',
        ],
    ],
];
