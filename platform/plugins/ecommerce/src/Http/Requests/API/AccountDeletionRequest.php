<?php

namespace Botble\Ecommerce\Http\Requests\API;

use Botble\Support\Http\Requests\Request;

class AccountDeletionRequest extends Request
{
    public function rules(): array
    {
        return [
            'reason' => ['nullable', 'string', 'max:255'],
        ];
    }
}
