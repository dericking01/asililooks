<?php

return [
    [
        'name' => 'Expected Delivery Date',
        'flag' => 'delivery-estimates.index',
    ],
    [
        'name' => 'Create',
        'flag' => 'delivery-estimates.create',
        'parent_flag' => 'delivery-estimates.index',
    ],
    [
        'name' => 'Edit',
        'flag' => 'delivery-estimates.edit',
        'parent_flag' => 'delivery-estimates.index',
    ],
    [
        'name' => 'Delete',
        'flag' => 'delivery-estimates.destroy',
        'parent_flag' => 'delivery-estimates.index',
    ],
]; 