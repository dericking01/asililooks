<?php

return [
    'name' => 'Precios de Productos',
    'warning_prices' => 'Estos precios representan los costos originales del producto y pueden no reflejar los precios finales, que podrían variar debido a factores como ofertas flash, promociones y más.',

    'import' => [
        'name' => 'Actualizar Precios de Productos',
        'description' => 'Actualizar precios de productos en lote subiendo un archivo CSV/Excel.',
        'done_message' => 'Se actualizaron :count producto(s) exitosamente.',
        'rules' => [
            'id' => 'El campo ID es obligatorio y debe existir en la tabla de productos.',
            'name' => 'El campo nombre es obligatorio y debe ser una cadena de texto.',
            'sku' => 'El campo SKU debe ser una cadena de texto.',
            'cost_per_item' => 'El campo costo por artículo debe ser un valor numérico.',
            'price' => 'El campo precio es requerido y debe ser un valor numérico.',
            'sale_price' => 'El campo precio de oferta debe ser un valor numérico.',
        ],
    ],

    'export' => [
        'description' => 'Exportar precios de productos a un archivo CSV/Excel.',
    ],
];