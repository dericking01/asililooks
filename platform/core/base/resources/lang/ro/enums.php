<?php

return [
    'statuses' => [
        'draft' => 'Ciornă',
        'pending' => 'În așteptare',
        'published' => 'Publicat',
    ],
    'system_updater_steps' => [
        'download' => 'Descărcare fișiere actualizare',
        'update_files' => 'Actualizare fișiere sistem',
        'update_database' => 'Actualizare baze de date',
        'publish_core_assets' => 'Publicare resurse principale',
        'publish_packages_assets' => 'Publicare resurse pachete',
        'clean_up' => 'Curățare fișiere actualizare sistem',
        'done' => 'Sistem actualizat cu succes',

        'messages' => [
            'download' => 'Se descarcă fișierele de actualizare...',
            'update_files' => 'Se actualizează fișierele sistem...',
            'update_database' => 'Se actualizează bazele de date...',
            'publish_core_assets' => 'Se publică resursele principale...',
            'publish_packages_assets' => 'Se publică resursele pachetelor...',
            'clean_up' => 'Se curăță fișierele de actualizare a sistemului...',
            'done' => 'Gata! Browserul dvs. va fi reîmprospătat în 30 de secunde.',
        ],

        'failed_messages' => [
            'download' => 'Nu s-au putut descărca fișierele de actualizare',
            'update_files' => 'Nu s-au putut actualiza fișierele sistem',
            'update_database' => 'Nu s-au putut actualiza bazele de date',
            'publish_core_assets' => 'Nu s-au putut publica resursele principale',
            'publish_packages_assets' => 'Nu s-au putut publica resursele pachetelor',
            'clean_up' => 'Nu s-au putut curăța fișierele de actualizare a sistemului',
        ],

        'success_messages' => [
            'download' => 'Fișierele de actualizare au fost descărcate cu succes.',
            'update_files' => 'Fișierele sistem au fost actualizate cu succes.',
            'update_database' => 'Bazele de date au fost actualizate cu succes.',
            'publish_core_assets' => 'Resursele principale au fost publicate cu succes.',
            'publish_packages_assets' => 'Resursele pachetelor au fost publicate cu succes.',
            'clean_up' => 'Fișierele de actualizare a sistemului au fost curățate cu succes.',
        ],
    ],
];
