<?php

namespace Botble\Ecommerce\Http\Controllers\API;

use Botble\Base\Http\Controllers\BaseController;
use Botble\Base\Http\Responses\BaseHttpResponse;
use Botble\Ecommerce\Models\FlashSale;
use Botble\Media\Facades\RvMedia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FlashSaleController extends BaseController
{
    /**
     * Get flash sales
     *
     * @group Flash Sale
     *
     * @queryParam keys array Array of flash sale keys to filter by. Example: ["winter-sale", "summer-sale"]
     * @bodyParam keys array Array of flash sale keys to filter by. Example: ["winter-sale", "summer-sale"]
     *
     * @return BaseHttpResponse
     */
    public function index(Request $request, BaseHttpResponse $response)
    {
        if ($request->has('keys')) {
            $validator = Validator::make($request->all(), [
                'keys' => 'required|array',
                'keys.*' => 'string',
            ]);

            if ($validator->fails()) {
                return $response
                    ->setError()
                    ->setCode(422)
                    ->setMessage($validator->errors()->first())
                    ->toApiResponse();
            }
        }

        // Build the base query
        $query = FlashSale::query()
            ->wherePublished()
            ->notExpired()
            ->with(['products' => function ($query) {
                $query->wherePublished();
            }]);

        // Filter by keys if provided (either from GET or POST)
        $keys = $request->input('keys');
        if ($keys && is_array($keys)) {
            $query->whereIn('id', $keys);
        }

        // Get the flash sales and format them
        $flashSales = $query->get()->map(function ($flashSale) {
            return $this->formatFlashSale($flashSale);
        });

        return $response
            ->setData($flashSales)
            ->toApiResponse();
    }

    /**
     * Format flash sale data for API response
     */
    protected function formatFlashSale(FlashSale $flashSale): array
    {
        return [
            'id' => $flashSale->id,
            'name' => $flashSale->name,
            'end_date' => $flashSale->end_date->format('Y-m-d H:i:s'),
            'expired' => $flashSale->expired,
            'products' => $flashSale->products->map(function ($product) use ($flashSale) {
                $pivot = $product->pivot;

                return [
                    'id' => $product->id,
                    'name' => $product->name,
                    'price' => $pivot->price,
                    'original_price' => $product->price,
                    'quantity' => $pivot->quantity,
                    'sold' => $pivot->sold,
                    'sale_count_left' => $pivot->quantity - $pivot->sold,
                    'sale_percent' => $pivot->quantity > 0 ? ($pivot->sold / $pivot->quantity) * 100 : 0,
                    'thumbnail' => RvMedia::getImageUrl($product->image, 'thumb', false, RvMedia::getDefaultImage()),
                    'url' => $product->url,
                ];
            }),
        ];
    }
}
