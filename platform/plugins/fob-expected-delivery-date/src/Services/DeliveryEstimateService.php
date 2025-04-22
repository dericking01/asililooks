<?php

namespace FriendsOfBotble\ExpectedDeliveryDate\Services;

use Botble\Ecommerce\Models\Product;
use Carbon\Carbon;
use FriendsOfBotble\ExpectedDeliveryDate\Models\DeliveryEstimate;

class DeliveryEstimateService
{
    public function calculateDeliveryDate(Product $product): array
    {
        $estimate = DeliveryEstimate::where('product_id', $product->id)
            ->where('is_active', true)
            ->first();

        if (! $estimate) {
            return $this->getDefaultEstimate();
        }

        $minDate = Carbon::now()->addDays($estimate->min_days);
        $maxDate = Carbon::now()->addDays($estimate->max_days);

        return [
            'min_date' => $minDate->format('Y-m-d'),
            'max_date' => $maxDate->format('Y-m-d'),
            'formatted' => sprintf(
                '%s: %s - %s',
                trans('plugins/fob-expected-delivery-date::expected-delivery-date.estimated_delivery'),
                $minDate->format('M d'),
                $maxDate->format('M d')
            ),
        ];
    }

    private function getDefaultEstimate(): array
    {
        $minDate = Carbon::now()->addDays(3);
        $maxDate = Carbon::now()->addDays(7);

        return [
            'min_date' => $minDate->format('Y-m-d'),
            'max_date' => $maxDate->format('Y-m-d'),
            'formatted' => sprintf(
                '%s: %s - %s',
                trans('plugins/fob-expected-delivery-date::expected-delivery-date.estimated_delivery'),
                $minDate->format('M d'),
                $maxDate->format('M d')
            ),
        ];
    }
}
