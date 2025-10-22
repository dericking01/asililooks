<?php

return [
    'name' => 'Estoque de Produtos',
    'storehouse_management' => 'Gerenciamento de Estoque',

    'import' => [
        'name' => 'Atualizar Estoque de Produtos',
        'description' => 'Atualize o estoque de produtos em lote enviando um arquivo CSV/Excel.',
        'done_message' => ':count produto(s) atualizado(s) com sucesso.',
        'rules' => [
            'id' => 'O campo ID é obrigatório e deve existir na tabela de produtos.',
            'name' => 'O campo nome é obrigatório e deve ser uma string.',
            'sku' => 'O campo SKU deve ser uma string.',
            'with_storehouse_management' => 'O campo gerenciamento de estoque deve ser "Sim" ou "Não".',
            'quantity' => 'O campo quantidade é obrigatório quando o gerenciamento de estoque é "Sim".',
            'stock_status' => 'O campo status do estoque é obrigatório quando o gerenciamento de estoque é "Não" e deve ser um dos seguintes valores: :statuses.',
        ],
    ],

    'export' => [
        'description' => 'Exportar estoque de produtos para um arquivo CSV/Excel.',
    ],
];