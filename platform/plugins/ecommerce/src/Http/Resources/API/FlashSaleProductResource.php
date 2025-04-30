<?php

namespace Botble\Ecommerce\Http\Resources\API;

use Botble\Ecommerce\Models\Product;

/**
 * @mixin Product
 */
class FlashSaleProductResource extends AvailableProductResource
{
    public function toArray($request): array
    {
        $pivot = $this->pivot;

        return [
            ...parent::toArray($request),
            'price' => $pivot->price,
            'price_formatted' => format_price($pivot->price),
            'quantity' => $pivot->quantity,
            'sold' => $pivot->sold,
            'sale_count_left' => $pivot->quantity - $pivot->sold,
            'sale_percent' => $pivot->quantity > 0 ? ($pivot->sold / $pivot->quantity) * 100 : 0,
        ];
    }
}
