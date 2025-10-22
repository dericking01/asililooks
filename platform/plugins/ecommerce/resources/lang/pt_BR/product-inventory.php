<?php

return [
    'name' => 'Estoque de Produtos',
    'storehouse_management' => 'Gerenciamento de Armazém',

    'import' => [
        'name' => 'Atualizar Estoque de Produtos',
        'description' => 'Atualizar estoque de produtos em massa fazendo upload de um arquivo CSV/Excel.',
        'done_message' => ':count produto(s) atualizado(s) com sucesso.',
        'rules' => [
            'id' => 'O campo ID é obrigatório e deve existir na tabela de produtos.',
            'name' => 'O campo nome é obrigatório e deve ser uma string.',
            'sku' => 'O campo SKU deve ser uma string.',
            'with_storehouse_management' => 'O campo com gerenciamento de armazém deve ser "Sim" ou "Não".',
            'quantity' => 'O campo quantidade é obrigatório quando com gerenciamento de armazém é "Sim".',
            'stock_status' => 'O campo status do estoque é obrigatório quando com gerenciamento de armazém é "Não" e deve ser um dos seguintes valores: :statuses.',
        ],
    ],

    'export' => [
        'description' => 'Exportar estoque de produtos para um arquivo CSV/Excel.',
    ],
];
