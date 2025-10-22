<?php

return [
    'name' => 'Geavanceerde taal',
    'description' => 'Geavanceerde taalfuncties voor meertalige inhoud',
    'import' => [
        'rules' => [
            'id' => 'ID is verplicht en moet een geldig ID zijn.',
            'name' => 'Naam is verplicht en moet een tekenreeks zijn met een maximale lengte van 255 tekens.',
            'description' => 'Beschrijving moet een tekenreeks zijn met een maximale lengte van 400 tekens indien opgegeven.',
            'content' => 'Inhoud moet een tekenreeks zijn met een maximale lengte van 300.000 tekens indien opgegeven.',
            'location' => 'Locatie moet een tekenreeks zijn met een maximale lengte van 255 tekens indien opgegeven.',
            'floor_plans' => 'Plattegronden moeten een geldige tekenreeks zijn indien opgegeven.',
            'faq_schema_config' => 'FAQ-schemaconfiguratie moet een geldige tekenreeks zijn indien opgegeven.',
            'faq_ids' => 'FAQ-ID\'s moeten een geldige array zijn indien opgegeven.',
        ],
    ],
    'export' => [
        'total' => 'Totaal',
    ],
    'import_model_translations' => ':model vertalingen',
    'export_model_translations' => ':model vertalingen',
    'import_description' => 'Importeer vertalingen voor :name uit een CSV/Excel-bestand.',
    'export_description' => 'Exporteer vertalingen voor :name naar een CSV/Excel-bestand.',
];
