<?php

namespace Botble\Ecommerce\Http\Requests\API;

use Botble\Support\Http\Requests\Request;

class VerifyAccountDeletionRequest extends Request
{
    public function rules(): array
    {
        return [
            'verification_code' => ['required', 'string', 'size:6'],
        ];
    }
}
