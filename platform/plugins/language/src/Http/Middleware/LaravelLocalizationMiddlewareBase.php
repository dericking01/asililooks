<?php

namespace Botble\Language\Http\Middleware;

use Botble\Base\Facades\AdminHelper;
use Illuminate\Http\Request;

class LaravelLocalizationMiddlewareBase
{
    protected array $except = [];

    protected function shouldIgnore(Request $request): bool
    {
        if (AdminHelper::isInAdmin(true)) {
            return true;
        }

        foreach ($this->except as $except) {
            if ($except !== '/') {
                $except = trim($except, '/');
            }

            if ($request->is($except)) {
                return true;
            }
        }

        return false;
    }
}
