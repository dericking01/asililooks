<?php

return [
    'name' => 'Speciális nyelv',
    'description' => 'Speciális nyelvi funkciók többnyelvű tartalomhoz',
    'import' => [
        'rules' => [
            'id' => 'Az azonosító kötelező és érvényes azonosítónak kell lennie.',
            'name' => 'A név kötelező és legfeljebb 255 karakter hosszúságú karakterláncnak kell lennie.',
            'description' => 'A leírásnak legfeljebb 400 karakter hosszúságú karakterláncnak kell lennie, ha meg van adva.',
            'content' => 'A tartalomnak legfeljebb 300 000 karakter hosszúságú karakterláncnak kell lennie, ha meg van adva.',
            'location' => 'A helyszínnek legfeljebb 255 karakter hosszúságú karakterláncnak kell lennie, ha meg van adva.',
            'floor_plans' => 'Az alaprajzoknak érvényes karakterláncnak kell lenniük, ha meg vannak adva.',
            'faq_schema_config' => 'A GYIK séma konfigurációjának érvényes karakterláncnak kell lennie, ha meg van adva.',
            'faq_ids' => 'A GYIK azonosítóknak érvényes tömbnek kell lenniük, ha meg vannak adva.',
        ],
    ],
    'export' => [
        'total' => 'Összesen',
    ],
    'import_model_translations' => ':model fordítások',
    'export_model_translations' => ':model fordítások',
    'import_description' => 'Fordítások importálása a(z) :name számára CSV/Excel fájlból.',
    'export_description' => 'Fordítások exportálása a(z) :name számára CSV/Excel fájlba.',
];
