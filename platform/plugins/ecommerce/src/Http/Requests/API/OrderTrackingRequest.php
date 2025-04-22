<?php

namespace Botble\Ecommerce\Http\Requests\API;

use Botble\Base\Facades\BaseHelper;
use Botble\Base\Rules\EmailRule;
use Botble\Ecommerce\Facades\EcommerceHelper;
use Botble\Support\Http\Requests\Request;

class OrderTrackingRequest extends Request
{
    public function rules(): array
    {
        $rules = [
            'order_id' => ['required', 'string', 'min:1'],
            'email' => ['nullable', new EmailRule()],
        ];

        if (EcommerceHelper::isLoginUsingPhone()) {
            $rules['phone'] = ['nullable', ...BaseHelper::getPhoneValidationRule(true)];
        }

        // Either email or phone must be provided
        if (EcommerceHelper::isLoginUsingPhone()) {
            $rules['phone'][] = 'required_without:email';
            $rules['email'][] = 'required_without:phone';
        } else {
            $rules['email'][] = 'required';
        }

        return $rules;
    }

    public function messages(): array
    {
        return [
            'order_id.required' => __('Order ID is required'),
            'email.required' => __('Email is required'),
            'phone.required' => __('Phone is required'),
            'email.required_without' => __('Either email or phone is required'),
            'phone.required_without' => __('Either email or phone is required'),
        ];
    }
}
