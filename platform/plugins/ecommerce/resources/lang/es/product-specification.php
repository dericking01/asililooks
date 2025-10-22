<?php

return [
    'product_specification' => 'Especificación del Producto',
    'specification_groups' => [
        'title' => 'Grupos de Especificaciones',
        'menu_name' => 'Grupos',

        'create' => [
            'title' => 'Crear Grupo de Especificaciones',
        ],

        'edit' => [
            'title' => 'Editar Grupo de Especificaciones ":name"',
        ],
    ],

    'specification_attributes' => [
        'title' => 'Atributos de Especificaciones',
        'menu_name' => 'Atributos',

        'group' => 'Grupo Asociado',
        'group_placeholder' => 'Elegir cualquier Grupo',
        'name_placeholder' => 'Introducir nombre del atributo',
        'type' => 'Tipo de Campo',
        'type_placeholder' => 'Seleccionar tipo de campo',
        'default_value' => 'Valor Predeterminado',
        'default_value_placeholder' => 'Introducir valor predeterminado (opcional)',
        'options' => [
            'heading' => 'Opciones',

            'add' => [
                'label' => 'Agregar nueva opción',
            ],
        ],

        'create' => [
            'title' => 'Crear Atributo de Especificación',
        ],

        'edit' => [
            'title' => 'Editar Atributo de Especificación ":name"',
        ],
    ],

    'specification_tables' => [
        'title' => 'Tablas de Especificaciones',
        'menu_name' => 'Tablas',

        'create' => [
            'title' => 'Crear Tabla de Especificaciones',
        ],

        'edit' => [
            'title' => 'Editar Tabla de Especificaciones ":name"',
        ],

        'fields' => [
            'groups' => 'Seleccionar los grupos a mostrar en esta tabla',
            'name' => 'Nombre del grupo',
            'assigned_groups' => 'Grupos Asignados',
            'sorting' => 'Ordenamiento',
        ],
    ],

    'product' => [
        'specification_table' => [
            'options' => 'Opciones',
            'title' => 'Tabla de Especificaciones',
            'select_none' => 'Ninguno',
            'description' => 'Seleccionar la tabla de especificaciones a mostrar en este producto',
            'group' => 'Grupo',
            'attribute' => 'Atributo',
            'value' => 'Valor del atributo',
            'hide' => 'Ocultar',
            'sorting' => 'Ordenamiento',
            'enter_value' => 'Introducir valor',
            'enter_translation' => 'Introducir traducción',
            'not_set' => 'No establecido',
        ],
    ],

    'enums' => [
        'field_types' => [
            'text' => 'Texto',
            'textarea' => 'Área de texto',
            'select' => 'Seleccionar',
            'checkbox' => 'Casilla de verificación',
            'radio' => 'Botón de opción',
        ],
    ],
];