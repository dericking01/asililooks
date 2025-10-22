<?php

return [
    'statuses' => [
        'draft' => 'Mustand',
        'pending' => 'Ootel',
        'published' => 'Avaldatud',
    ],
    'system_updater_steps' => [
        'download' => 'Laadi alla uuendusfailid',
        'update_files' => 'Uuenda süsteemifaile',
        'update_database' => 'Uuenda andmebaase',
        'publish_core_assets' => 'Avalda tuumavarad',
        'publish_packages_assets' => 'Avalda pakettide varad',
        'clean_up' => 'Puhasta süsteemi uuendusfailid',
        'done' => 'Süsteem edukalt uuendatud',

        'messages' => [
            'download' => 'Uuendusfailide allalaadimine...',
            'update_files' => 'Süsteemifailide uuendamine...',
            'update_database' => 'Andmebaaside uuendamine...',
            'publish_core_assets' => 'Tuumavarade avaldamine...',
            'publish_packages_assets' => 'Pakettide varade avaldamine...',
            'clean_up' => 'Süsteemi uuendusfailide puhastamine...',
            'done' => 'Valmis! Teie brauser värskendatakse 30 sekundi pärast.',
        ],

        'failed_messages' => [
            'download' => 'Uuendusfailide allalaadimine ebaõnnestus',
            'update_files' => 'Süsteemifailide uuendamine ebaõnnestus',
            'update_database' => 'Andmebaaside uuendamine ebaõnnestus',
            'publish_core_assets' => 'Tuumavarade avaldamine ebaõnnestus',
            'publish_packages_assets' => 'Pakettide varade avaldamine ebaõnnestus',
            'clean_up' => 'Süsteemi uuendusfailide puhastamine ebaõnnestus',
        ],

        'success_messages' => [
            'download' => 'Uuendusfailid edukalt alla laaditud.',
            'update_files' => 'Süsteemifailid edukalt uuendatud.',
            'update_database' => 'Andmebaasid edukalt uuendatud.',
            'publish_core_assets' => 'Tuumavarad edukalt avaldatud.',
            'publish_packages_assets' => 'Pakettide varad edukalt avaldatud.',
            'clean_up' => 'Süsteemi uuendusfailid edukalt puhastatud.',
        ],
    ],
];
