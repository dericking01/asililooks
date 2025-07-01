<?php

namespace Botble\Ecommerce\Http\Controllers\API;

use Botble\Base\Http\Controllers\BaseController;
use Botble\Base\Http\Responses\BaseHttpResponse;
use Botble\Ecommerce\Facades\EcommerceHelper;
use Botble\Ecommerce\Http\Resources\API\FlashSaleProductResource;
use Botble\Ecommerce\Models\FlashSale;
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
                'keys' => ['required', 'array'],
                'keys.*' => ['string'],
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
            ->with([
                'products' => function ($query): void {
                    $query
                        ->with(EcommerceHelper::withProductEagerLoadingRelations())
                        ->wherePublished();

                    if (EcommerceHelper::isReviewEnabled()) {
                        $reviewParams = EcommerceHelper::withReviewsParams();

                        $query
                            ->withCount($reviewParams['withCount'])
                            ->withAvg($reviewParams['withAvg'][0], $reviewParams['withAvg'][1]);
                    }
                },
            ]);

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
            'products' => FlashSaleProductResource::collection($flashSale->products),
        ];
    }
}
