<?php

namespace Botble\Language\Http\Middleware;

use Botble\Language\Facades\Language;
use Closure;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LocalizationRedirectFilter extends LaravelLocalizationMiddlewareBase
{
    public function handle(Request $request, Closure $next)
    {
        if ($this->shouldIgnore($request)) {
            return $next($request);
        }

        $currentLocale = Language::getCurrentLocale();
        $defaultLocale = Language::getDefaultLocale();
        $params = explode('/', $request->getPathInfo());
        array_shift($params);

        if (count($params) > 0) {
            $localeCode = $params[0];
            $locales = Language::getSupportedLocales();
            $hideDefaultLocale = Language::hideDefaultLocaleInURL();
            $redirection = false;

            if (! empty($locales[$localeCode])) {
                if ($localeCode === $defaultLocale && $hideDefaultLocale) {
                    $redirection = Language::getNonLocalizedURL();
                }
            } elseif ($currentLocale !== $defaultLocale || ! $hideDefaultLocale) {
                if (! Language::getActiveLanguage(['lang_id'])->isEmpty()) {
                    $redirection = Language::getLocalizedURL(Session::get('language'), $request->fullUrl(), [], false);
                }
            }

            if ($redirection) {
                Session::reflash();

                return new RedirectResponse($redirection, 302, ['Vary' => 'Accept-Language']);
            }
        }

        return $next($request);
    }
}
