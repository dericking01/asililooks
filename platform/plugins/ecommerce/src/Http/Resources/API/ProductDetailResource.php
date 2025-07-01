<?php

namespace Botble\Ecommerce\Http\Resources\API;

use Botble\Ecommerce\Models\Product;

/**
 * @mixin Product
 */
class ProductDetailResource extends AvailableProductResource
{
    public function toArray($request): array
    {
        return [
            ...parent::toArray($request),
            'brand' => $this->brand ? [
                'id' => $this->brand->id,
                'name' => $this->brand->name,
                'slug' => $this->brand->slug,
            ] : null,
            'categories' => $this->categories->map(function ($category) {
                return [
                    'id' => $category->id,
                    'name' => $category->name,
                    'slug' => $category->slug,
                ];
            }),
            'sale_percent' => $this->sale_percent,
        ];
    }
}
