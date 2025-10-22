<?php

namespace Botble\Ecommerce\Models;

use Botble\Base\Models\BaseModel;

class Currency extends BaseModel
{
    protected $table = 'ec_currencies';

    protected $fillable = [
        'title',
        'symbol',
        'is_prefix_symbol',
        'order',
        'decimals',
        'number_format_style',
        'space_between_price_and_currency',
        'is_default',
        'exchange_rate',
    ];

    protected $casts = [
        'is_prefix_symbol' => 'boolean',
        'space_between_price_and_currency' => 'boolean',
        'is_default' => 'boolean',
        'exchange_rate' => 'double',
    ];
}
