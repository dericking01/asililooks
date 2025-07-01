<?php

namespace FriendsOfBotble\ExpectedDeliveryDate\Services;

use Botble\Base\Facades\BaseHelper;
use Botble\Ecommerce\Models\Product;
use Carbon\Carbon;
use FriendsOfBotble\ExpectedDeliveryDate\Models\DeliveryEstimate;

class DeliveryEstimateService
{
    public function supportedDateFormats(): array
    {
        $formats = [
            'M d',
            'F d',
            'F j',
            'd M',
            'd F',
            'j F',
            'M d, Y',
            'F d, Y',
            'F j, Y',
            'd M, Y',
            'd F, Y',
            'j F, Y',
            'Y-m-d',
            'Y-M-d',
            'd-m-Y',
            'd-M-Y',
            'm/d/Y',
            'M/d/Y',
            'd/m/Y',
            'd/M/Y',
            'd.m.Y',
        ];

        return apply_filters('expected_delivery_date_formats', $formats);
    }
    public function calculateDeliveryDate(Product $product): array
    {
        $estimate = DeliveryEstimate::query()
            ->where('product_id', $product->getKey())
            ->where('is_active', true)
            ->first();

        if (! $estimate) {
            return $this->getDefaultEstimate();
        }

        $minDays = (int) $estimate->min_days ?: 4;
        $maxDays = (int) $estimate->max_days ?: 7;

        $minDate = Carbon::now()->addDays($minDays);
        $maxDate = Carbon::now()->addDays($maxDays);

        $dateFormat = setting('expected_delivery_date_format', 'M d');

        return [
            'min_date' => $minDate->format('Y-m-d'),
            'max_date' => $maxDate->format('Y-m-d'),
            'label' => trans('plugins/fob-expected-delivery-date::expected-delivery-date.estimated_delivery'),
            'value' => sprintf(
                '%s - %s',
                BaseHelper::formatDate($minDate, $dateFormat),
                BaseHelper::formatDate($maxDate, $dateFormat)
            ),
            'formatted' => sprintf(
                '%s: %s - %s',
                trans('plugins/fob-expected-delivery-date::expected-delivery-date.estimated_delivery'),
                BaseHelper::formatDate($minDate, $dateFormat),
                BaseHelper::formatDate($maxDate, $dateFormat)
            ),
        ];
    }

    protected function getDefaultEstimate(): array
    {
        $defaultMinDays = (int) setting('expected_delivery_date_default_min_days', 3);
        $defaultMaxDays = (int) setting('expected_delivery_date_default_max_days', 7);

        $minDate = Carbon::now()->addDays($defaultMinDays);
        $maxDate = Carbon::now()->addDays($defaultMaxDays);

        $dateFormat = setting('expected_delivery_date_format', 'M d');

        return [
            'min_date' => $minDate->format('Y-m-d'),
            'max_date' => $maxDate->format('Y-m-d'),
            'label' => trans('plugins/fob-expected-delivery-date::expected-delivery-date.estimated_delivery'),
            'value' => sprintf(
                '%s - %s',
                BaseHelper::formatDate($minDate, $dateFormat),
                BaseHelper::formatDate($maxDate, $dateFormat)
            ),
            'formatted' => sprintf(
                '%s: %s - %s',
                trans('plugins/fob-expected-delivery-date::expected-delivery-date.estimated_delivery'),
                BaseHelper::formatDate($minDate, $dateFormat),
                BaseHelper::formatDate($maxDate, $dateFormat)
            ),
        ];
    }
}
