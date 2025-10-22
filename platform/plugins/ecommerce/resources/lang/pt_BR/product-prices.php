<?php

return [
    'name' => 'Preços de Produtos',
    'warning_prices' => 'Estes preços representam os custos originais do produto e podem não refletir os preços finais, que podem variar devido a fatores como ofertas relâmpago, promoções e mais.',

    'import' => [
        'name' => 'Atualizar Preços de Produtos',
        'description' => 'Atualizar preços de produtos em massa fazendo upload de um arquivo CSV/Excel.',
        'done_message' => ':count produto(s) atualizado(s) com sucesso.',
        'rules' => [
            'id' => 'O campo ID é obrigatório e deve existir na tabela de produtos.',
            'name' => 'O campo nome é obrigatório e deve ser uma string.',
            'sku' => 'O campo SKU deve ser uma string.',
            'cost_per_item' => 'O campo custo por item deve ser um valor numérico.',
            'price' => 'O campo preço é obrigatório e deve ser um valor numérico.',
            'sale_price' => 'O campo preço promocional deve ser um valor numérico.',
        ],
    ],

    'export' => [
        'description' => 'Exportar preços de produtos para um arquivo CSV/Excel.',
    ],
];
