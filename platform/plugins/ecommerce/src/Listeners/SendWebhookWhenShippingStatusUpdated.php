<?php

namespace Botble\Ecommerce\Listeners;

use Botble\Base\Facades\BaseHelper;
use Botble\Ecommerce\Events\ShippingStatusChanged;
use Exception;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\URL;

class SendWebhookWhenShippingStatusUpdated
{
    public function handle(ShippingStatusChanged $event): void
    {
        $webhookURL = get_ecommerce_setting('shipping_status_updated_webhook_url');

        if (! $webhookURL || ! URL::isValidUrl($webhookURL) || BaseHelper::hasDemoModeEnabled()) {
            return;
        }

        try {
            $shipment = $event->shipment;
            $order = $shipment->order;

            $data = $order->toWebhookData();

            $data['shipping_status'] = [
                'value' => $shipment->status->getValue(),
                'text' => $shipment->status->label(),
            ];

            $data['previous_shipping_status'] = ! empty($event->previousShipment['status']) ? [
                'value' => $event->previousShipment['status'],
                'text' => $event->previousShipment['status']->label(),
            ] : null;

            $data = apply_filters('ecommerce_shipping_status_updated_webhook_data', $data, $order, $shipment);

            Http::withoutVerifying()
                ->acceptJson()
                ->post($webhookURL, $data);
        } catch (Exception $exception) {
            info($exception->getMessage());
        }
    }
}
