<?php

return [
    'name' => 'Pokročilý jazyk',
    'description' => 'Pokročilé jazykové funkcie pre viacjazyčný obsah',
    'import' => [
        'rules' => [
            'id' => 'ID je povinné a musí byť platné ID.',
            'name' => 'Názov je povinný a musí byť reťazec s maximálnou dĺžkou 255 znakov.',
            'description' => 'Popis musí byť reťazec s maximálnou dĺžkou 400 znakov, ak je poskytnutý.',
            'content' => 'Obsah musí byť reťazec s maximálnou dĺžkou 300 000 znakov, ak je poskytnutý.',
            'location' => 'Umiestnenie musí byť reťazec s maximálnou dĺžkou 255 znakov, ak je poskytnuté.',
            'floor_plans' => 'Pôdorysy musia byť platný reťazec, ak sú poskytnuté.',
            'faq_schema_config' => 'Konfigurácia FAQ schémy musí byť platný reťazec, ak je poskytnutá.',
            'faq_ids' => 'FAQ ID musia byť platné pole, ak sú poskytnuté.',
        ],
    ],
    'export' => [
        'total' => 'Celkom',
    ],
    'import_model_translations' => 'Preklady :model',
    'export_model_translations' => 'Preklady :model',
    'import_description' => 'Importovať preklady pre :name zo súboru CSV/Excel.',
    'export_description' => 'Exportovať preklady pre :name do súboru CSV/Excel.',
];
