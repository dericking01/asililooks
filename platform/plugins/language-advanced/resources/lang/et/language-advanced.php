<?php

return [
    'name' => 'Täiustatud keel',
    'description' => 'Täiustatud keelefunktsioonid mitmekeelse sisu jaoks',
    'import' => [
        'rules' => [
            'id' => 'ID on kohustuslik ja peab olema kehtiv ID.',
            'name' => 'Nimi on kohustuslik ja peab olema string maksimaalse pikkusega 255 tähemärki.',
            'description' => 'Kirjeldus peab olema string maksimaalse pikkusega 400 tähemärki, kui see on esitatud.',
            'content' => 'Sisu peab olema string maksimaalse pikkusega 300 000 tähemärki, kui see on esitatud.',
            'location' => 'Asukoht peab olema string maksimaalse pikkusega 255 tähemärki, kui see on esitatud.',
            'floor_plans' => 'Korruste plaanid peavad olema kehtiv string, kui need on esitatud.',
            'faq_schema_config' => 'KKK skeemi konfiguratsioon peab olema kehtiv string, kui see on esitatud.',
            'faq_ids' => 'KKK ID-d peavad olema kehtiv massiiv, kui need on esitatud.',
        ],
    ],
    'export' => [
        'total' => 'Kokku',
    ],
    'import_model_translations' => ':model tõlked',
    'export_model_translations' => ':model tõlked',
    'import_description' => 'Impordi tõlked :name jaoks CSV/Excel failist.',
    'export_description' => 'Ekspordi tõlked :name jaoks CSV/Excel faili.',
];
