<?php

namespace Botble\Ecommerce\Http\Requests\API;

use Botble\Support\Http\Requests\Request;

class ApplyCouponRequest extends Request
{
    public function rules(): array
    {
        return [
            'coupon_code' => 'required|string|min:3|max:20',
            'cart_id' => 'required|string',
        ];
    }
}
