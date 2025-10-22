<?php

namespace Botble\Language\Http\Middleware;

use Botble\Language\Facades\Language;
use Closure;
use Illuminate\Http\Request;

class LocalizationRoutes extends LaravelLocalizationMiddlewareBase
{
    public function handle(Request $request, Closure $next)
    {
        if ($this->shouldIgnore($request)) {
            return $next($request);
        }

        $routeName = Language::getRouteNameFromAPath($request->getUri());

        Language::setRouteName($routeName);

        return $next($request);
    }
}
