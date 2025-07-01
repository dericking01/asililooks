<?php

namespace FriendsOfBotble\ExpectedDeliveryDate;

use Botble\PluginManagement\Abstracts\PluginOperationAbstract;
use Botble\Setting\Facades\Setting;
use Illuminate\Support\Facades\Schema;

class Plugin extends PluginOperationAbstract
{
    public static function remove(): void
    {
        Schema::dropIfExists('ec_delivery_estimates');

        Setting::delete([
            'expected_delivery_date_icon',
            'expected_delivery_date_background_color',
            'expected_delivery_date_label_color',
            'expected_delivery_date_label_font_weight',
            'expected_delivery_date_value_color',
            'expected_delivery_date_value_font_weight',
            'expected_delivery_date_icon_color',
            'expected_delivery_date_border_color',
            'expected_delivery_date_border_radius',
            'expected_delivery_date_default_min_days',
            'expected_delivery_date_default_max_days',
            'expected_delivery_date_format',
        ]);
    }
}
