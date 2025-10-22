<?php

return [
    'name' => 'Inventario de Productos',
    'storehouse_management' => 'Gestión de Almacén',

    'import' => [
        'name' => 'Actualizar Inventario de Productos',
        'description' => 'Actualizar inventario de productos en lote subiendo un archivo CSV/Excel.',
        'done_message' => 'Se actualizaron :count producto(s) exitosamente.',
        'rules' => [
            'id' => 'El campo ID es obligatorio y debe existir en la tabla de productos.',
            'name' => 'El campo nombre es obligatorio y debe ser una cadena de texto.',
            'sku' => 'El campo SKU debe ser una cadena de texto.',
            'with_storehouse_management' => 'El campo con gestión de almacén debe ser "Sí" o "No".',
            'quantity' => 'El campo cantidad es obligatorio cuando la gestión de almacén es "Sí".',
            'stock_status' => 'El campo estado de stock es obligatorio cuando la gestión de almacén es "No" y debe ser uno de los siguientes valores: :statuses.',
        ],
    ],

    'export' => [
        'description' => 'Exportar inventario de productos a un archivo CSV/Excel.',
    ],
];