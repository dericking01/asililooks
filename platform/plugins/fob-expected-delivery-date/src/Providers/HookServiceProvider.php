<?php

namespace FriendsOfBotble\ExpectedDeliveryDate\Providers;

use Botble\Base\Facades\MetaBox;
use Botble\Ecommerce\Models\Product;
use FriendsOfBotble\ExpectedDeliveryDate\Models\DeliveryEstimate;
use FriendsOfBotble\ExpectedDeliveryDate\Services\DeliveryEstimateService;
use Illuminate\Support\ServiceProvider;

class HookServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        add_filter(ECOMMERCE_PRODUCT_DETAIL_EXTRA_HTML, function ($html, $product) {
            if ($product instanceof Product) {
                $estimateService = app(DeliveryEstimateService::class);
                $estimate = $estimateService->calculateDeliveryDate($product);

                return $html . view('plugins/fob-expected-delivery-date::estimate', compact('estimate'));
            }

            return $html;
        }, 150, 2);

        add_action(BASE_ACTION_META_BOXES, function ($context, $object) {
            if (get_class($object) === Product::class && $context === 'advanced') {
                MetaBox::addMetaBox(
                    'delivery_estimate_box',
                    trans('plugins/fob-expected-delivery-date::expected-delivery-date.name'),
                    function () use ($object) {
                        $estimate = DeliveryEstimate::query()->where('product_id', $object->getKey())->first();

                        return view('plugins/fob-expected-delivery-date::delivery-estimate-fields', compact('estimate'));
                    },
                    get_class($object),
                    $context
                );
            }
        }, 30, 2);

        add_action(BASE_ACTION_AFTER_CREATE_CONTENT, function ($type, $request, $object) {
            if (get_class($object) === Product::class) {
                $this->saveDeliveryEstimate($object, $request);
            }
        }, 30, 3);

        add_action(BASE_ACTION_AFTER_UPDATE_CONTENT, function ($type, $request, $object) {
            if (get_class($object) === Product::class) {
                $this->saveDeliveryEstimate($object, $request);
            }
        }, 30, 3);
    }

    protected function saveDeliveryEstimate($product, $request): void
    {
        DeliveryEstimate::query()->updateOrCreate(
            ['product_id' => $product->id],
            [
                'min_days' => $request->input('min_days', (int) setting('expected_delivery_date_default_min_days', 3)),
                'max_days' => $request->input('max_days', (int) setting('expected_delivery_date_default_max_days', 7)),
                'is_active' => $request->input('delivery_estimate_active', true),
            ]
        );
    }
}
