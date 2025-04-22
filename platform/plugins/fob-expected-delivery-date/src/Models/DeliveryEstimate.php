<?php

namespace FriendsOfBotble\ExpectedDeliveryDate\Models;

use Botble\Base\Models\BaseModel;
use Botble\Ecommerce\Models\Product;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DeliveryEstimate extends BaseModel
{
    protected $table = 'ec_delivery_estimates';

    protected $fillable = [
        'product_id',
        'min_days',
        'max_days',
        'shipping_zones',
        'is_active',
    ];

    protected $casts = [
        'shipping_zones' => 'array',
        'is_active' => 'boolean',
    ];

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
}
