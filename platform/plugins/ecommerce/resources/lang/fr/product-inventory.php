<?php

return [
    'name' => 'Inventaire des produits',
    'storehouse_management' => 'Gestion d\'entrepôt',

    'import' => [
        'name' => 'Mettre à jour l\'inventaire des produits',
        'description' => 'Mettre à jour l\'inventaire des produits en masse en téléchargeant un fichier CSV/Excel.',
        'done_message' => ':count produit(s) mis à jour avec succès.',
        'rules' => [
            'id' => 'Le champ ID est obligatoire et doit exister dans la table des produits.',
            'name' => 'Le champ nom est obligatoire et doit être une chaîne de caractères.',
            'sku' => 'Le champ SKU doit être une chaîne de caractères.',
            'with_storehouse_management' => 'Le champ gestion d\'entrepôt doit être "Oui" ou "Non".',
            'quantity' => 'Le champ quantité est obligatoire quand la gestion d\'entrepôt est "Oui".',
            'stock_status' => 'Le champ statut du stock est obligatoire quand la gestion d\'entrepôt est "Non" et doit être l\'une des valeurs suivantes : :statuses.',
        ],
    ],

    'export' => [
        'description' => 'Exporter l\'inventaire des produits vers un fichier CSV/Excel.',
    ],
];