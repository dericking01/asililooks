<?php

return [
    'name' => 'Pokročilé jazyky',
    'description' => 'Pokročilé jazykové funkce pro vícejazyčný obsah',
    'import' => [
        'rules' => [
            'id' => 'ID je povinné a musí být platné ID.',
            'name' => 'Název je povinný a musí být řetězec s maximální délkou 255 znaků.',
            'description' => 'Popis musí být řetězec s maximální délkou 400 znaků, pokud je poskytnut.',
            'content' => 'Obsah musí být řetězec s maximální délkou 300 000 znaků, pokud je poskytnut.',
            'location' => 'Umístění musí být řetězec s maximální délkou 255 znaků, pokud je poskytnuto.',
            'floor_plans' => 'Půdorysy musí být platný řetězec, pokud jsou poskytnuty.',
            'faq_schema_config' => 'Konfigurace FAQ schématu musí být platný řetězec, pokud je poskytnuta.',
            'faq_ids' => 'FAQ ID musí být platné pole, pokud jsou poskytnuta.',
        ],
    ],
    'export' => [
        'total' => 'Celkem',
    ],
    'import_model_translations' => 'Překlady :model',
    'export_model_translations' => 'Překlady :model',
    'import_description' => 'Importovat překlady pro :name ze souboru CSV/Excel.',
    'export_description' => 'Exportovat překlady pro :name do souboru CSV/Excel.',
];
