<?php

return [
    'name' => 'Limbă avansată',
    'description' => 'Funcții lingvistice avansate pentru conținut multilingv',
    'import' => [
        'rules' => [
            'id' => 'ID-ul este obligatoriu și trebuie să fie un ID valid.',
            'name' => 'Numele este obligatoriu și trebuie să fie un șir cu o lungime maximă de 255 de caractere.',
            'description' => 'Descrierea trebuie să fie un șir cu o lungime maximă de 400 de caractere dacă este furnizată.',
            'content' => 'Conținutul trebuie să fie un șir cu o lungime maximă de 300.000 de caractere dacă este furnizat.',
            'location' => 'Locația trebuie să fie un șir cu o lungime maximă de 255 de caractere dacă este furnizată.',
            'floor_plans' => 'Planurile etajelor trebuie să fie un șir valid dacă sunt furnizate.',
            'faq_schema_config' => 'Configurația schemei FAQ trebuie să fie un șir valid dacă este furnizată.',
            'faq_ids' => 'ID-urile FAQ trebuie să fie un array valid dacă sunt furnizate.',
        ],
    ],
    'export' => [
        'total' => 'Total',
    ],
    'import_model_translations' => 'Traduceri :model',
    'export_model_translations' => 'Traduceri :model',
    'import_description' => 'Importați traduceri pentru :name dintr-un fișier CSV/Excel.',
    'export_description' => 'Exportați traduceri pentru :name într-un fișier CSV/Excel.',
];
