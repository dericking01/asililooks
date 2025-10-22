<?php

return [
    'name' => 'Prix des produits',
    'warning_prices' => 'Ces prix représentent les coûts originaux du produit et peuvent ne pas refléter les prix finaux, qui pourraient varier en raison de facteurs tels que les ventes flash, les promotions, et plus encore.',

    'import' => [
        'name' => 'Mettre à jour les prix des produits',
        'description' => 'Mettre à jour les prix des produits en masse en téléchargeant un fichier CSV/Excel.',
        'done_message' => ':count produit(s) mis à jour avec succès.',
        'rules' => [
            'id' => 'Le champ ID est obligatoire et doit exister dans la table des produits.',
            'name' => 'Le champ nom est obligatoire et doit être une chaîne de caractères.',
            'sku' => 'Le champ SKU doit être une chaîne de caractères.',
            'cost_per_item' => 'Le champ coût par article doit être une valeur numérique.',
            'price' => 'Le champ prix est requis et doit être une valeur numérique.',
            'sale_price' => 'Le champ prix de vente doit être une valeur numérique.',
        ],
    ],

    'export' => [
        'description' => 'Exporter les prix des produits vers un fichier CSV/Excel.',
    ],
];