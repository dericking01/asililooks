<?php

return [
    'product_specification' => 'Especificação do Produto',
    'specification_groups' => [
        'title' => 'Grupos de Especificação',
        'menu_name' => 'Grupos',

        'create' => [
            'title' => 'Criar Grupo de Especificação',
        ],

        'edit' => [
            'title' => 'Editar Grupo de Especificação ":name"',
        ],
    ],

    'specification_attributes' => [
        'title' => 'Atributos de Especificação',
        'menu_name' => 'Atributos',

        'group' => 'Grupo Associado',
        'group_placeholder' => 'Escolha qualquer Grupo',
        'name_placeholder' => 'Digite o nome do atributo',
        'type' => 'Tipo de Campo',
        'type_placeholder' => 'Selecione o tipo de campo',
        'default_value' => 'Valor Padrão',
        'default_value_placeholder' => 'Digite o valor padrão (opcional)',
        'options' => [
            'heading' => 'Opções',

            'add' => [
                'label' => 'Adicionar nova opção',
            ],
        ],

        'create' => [
            'title' => 'Criar Atributo de Especificação',
        ],

        'edit' => [
            'title' => 'Editar Atributo de Especificação ":name"',
        ],
    ],

    'specification_tables' => [
        'title' => 'Tabelas de Especificação',
        'menu_name' => 'Tabelas',

        'create' => [
            'title' => 'Criar Tabela de Especificação',
        ],

        'edit' => [
            'title' => 'Editar Tabela de Especificação ":name"',
        ],

        'fields' => [
            'groups' => 'Selecione os grupos para exibir nesta tabela',
            'name' => 'Nome do grupo',
            'assigned_groups' => 'Grupos Atribuídos',
            'sorting' => 'Ordenação',
        ],
    ],

    'product' => [
        'specification_table' => [
            'options' => 'Opções',
            'title' => 'Tabela de Especificação',
            'select_none' => 'Nenhuma',
            'description' => 'Selecione a tabela de especificação para exibir neste produto',
            'group' => 'Grupo',
            'attribute' => 'Atributo',
            'value' => 'Valor do atributo',
            'hide' => 'Ocultar',
            'sorting' => 'Ordenação',
            'enter_value' => 'Digite o valor',
            'enter_translation' => 'Digite a tradução',
            'not_set' => 'Não definido',
        ],
    ],

    'enums' => [
        'field_types' => [
            'text' => 'Texto',
            'textarea' => 'Área de Texto',
            'select' => 'Seleção',
            'checkbox' => 'Caixa de Seleção',
            'radio' => 'Botão de Opção',
        ],
    ],
];
