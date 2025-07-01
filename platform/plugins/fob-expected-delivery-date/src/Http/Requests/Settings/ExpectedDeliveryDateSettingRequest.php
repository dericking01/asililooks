<?php

namespace FriendsOfBotble\ExpectedDeliveryDate\Http\Requests\Settings;

use Botble\Support\Http\Requests\Request;
use FriendsOfBotble\ExpectedDeliveryDate\Services\DeliveryEstimateService;
use Illuminate\Validation\Rule;

class ExpectedDeliveryDateSettingRequest extends Request
{
    public function rules(): array
    {
        return [
            'expected_delivery_date_icon' => 'nullable|string|max:120',
            'expected_delivery_date_background_color' => 'nullable|string|max:20',
            'expected_delivery_date_label_color' => 'nullable|string|max:20',
            'expected_delivery_date_label_font_weight' => 'nullable|string|in:normal,bold,500,600',
            'expected_delivery_date_value_color' => 'nullable|string|max:20',
            'expected_delivery_date_value_font_weight' => 'nullable|string|in:normal,bold,500,600',
            'expected_delivery_date_icon_color' => 'nullable|string|max:20',
            'expected_delivery_date_border_color' => 'nullable|string|max:20',
            'expected_delivery_date_border_radius' => 'nullable|integer|min:0|max:50',
            'expected_delivery_date_default_min_days' => 'nullable|integer|min:1',
            'expected_delivery_date_default_max_days' => 'nullable|integer|min:1',
            'expected_delivery_date_format' => ['nullable', 'string', Rule::in(app(DeliveryEstimateService::class)->supportedDateFormats())],
        ];
    }
}
