<?php

namespace Botble\Ecommerce\Database\Seeders;

use Botble\Base\Supports\BaseSeeder;
use Botble\Ecommerce\Enums\ShippingRuleTypeEnum;
use Botble\Ecommerce\Models\Shipping;
use Botble\Ecommerce\Models\ShippingRule;
use Botble\Ecommerce\Models\ShippingRuleItem;

class ShippingSeeder extends BaseSeeder
{
    public function run(): void
    {
        Shipping::query()->truncate();
        ShippingRule::query()->truncate();
        ShippingRuleItem::query()->truncate();

        $shipping = Shipping::query()->create(['title' => 'All']);

        ShippingRule::query()->create([
            'name' => 'Free delivery',
            'shipping_id' => $shipping->getKey(),
            'type' => ShippingRuleTypeEnum::BASED_ON_PRICE,
            'from' => 1000,
            'to' => null,
            'price' => 0,
        ]);

        // ShippingRule::query()->create([
        //     'name' => 'Flat Rate',
        //     'shipping_id' => $shipping->getKey(),
        //     'type' => ShippingRuleTypeEnum::BASED_ON_PRICE,
        //     'from' => 0,
        //     'to' => null,
        //     'price' => 20,
        // ]);

        ShippingRule::query()->create([
            'name' => 'Local Pickup',
            'shipping_id' => $shipping->getKey(),
            'type' => ShippingRuleTypeEnum::BASED_ON_PRICE,
            'from' => 0,
            'to' => null,
            'price' => 0,
        ]);
    }
}
