<?php

namespace Botble\ACL\Http\Requests;

use Botble\Base\Facades\AdminHelper;
use Botble\Support\Http\Requests\Request;
use Illuminate\Validation\Rule;

class PreferenceRequest extends Request
{
    public function rules(): array
    {
        return [
            'locale' => ['sometimes', Rule::in(array_keys(AdminHelper::getAdminLocales()))],
            'locale_direction' => ['required', 'string', 'in:ltr,rtl'],
            'theme_mode' => ['required', 'string', 'in:light,dark'],
        ];
    }
}
