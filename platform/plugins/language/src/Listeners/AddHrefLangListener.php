<?php

namespace Botble\Language\Listeners;

use Botble\Base\Facades\BaseHelper;
use Botble\Language\Facades\Language;
use Botble\Language\Models\LanguageMeta;
use Botble\LanguageAdvanced\Supports\LanguageAdvancedManager;
use Botble\Page\Models\Page;
use Botble\Slug\Models\Slug;
use Botble\Theme\Events\RenderingSingleEvent;
use Exception;

class AddHrefLangListener
{
    public function handle(RenderingSingleEvent $event): void
    {
        try {
            if (! defined('THEME_FRONT_HEADER')) {
                return;
            }

            add_filter(THEME_FRONT_HEADER, function ($header) use ($event) {
                $referenceType = $event->slug->reference_type;
                $referenceId = $event->slug->reference_id;

                if (! $referenceType && ! $referenceId) {
                    $referenceType = Page::class;
                }

                $isSupported = in_array($referenceType, Language::supportedModels());

                if (is_plugin_active('language-advanced') && class_exists(LanguageAdvancedManager::class)) {
                    $isSupported = $isSupported || LanguageAdvancedManager::isSupported($referenceType);
                }

                if (! $isSupported) {
                    return $header;
                }

                $hreflangUrls = $this->generateHreflangUrls($referenceType, $referenceId);

                Language::setSwitcherURLs($hreflangUrls);

                return $header . view('plugins/language::partials.hreflang', compact('hreflangUrls'))->render();
            }, 55);
        } catch (Exception $exception) {
            BaseHelper::logError($exception);
        }
    }

    protected function generateHreflangUrls(?string $referenceType, ?int $referenceId): array
    {
        $hreflangUrls = [];
        $currentAppLocale = app()->getLocale();

        foreach (Language::getSupportedLocales() as $localeCode => $properties) {
            $hreflangCode = Language::formatLocaleForHrefLang($properties['lang_code']);
            $url = Language::getLocalizedURL($localeCode, url()->current(), [], false);

            $translatedUrl = $this->getTranslatedUrl($referenceType, $referenceId, $properties['lang_code'], $localeCode);

            if ($translatedUrl) {
                $url = $translatedUrl;
            }

            $url = rtrim($url, '/');

            if (str_contains($hreflangCode, '-')) {
                $languageOnly = explode('-', $hreflangCode)[0];

                if ($localeCode === $currentAppLocale) {
                    $hreflangUrls[$languageOnly] = $url;
                    $hreflangUrls[$hreflangCode] = $url;
                } else {
                    $hreflangUrls[$hreflangCode] = $url;
                    if (! isset($hreflangUrls[$languageOnly])) {
                        $hreflangUrls[$languageOnly] = $url;
                    }
                }
            } else {
                $hreflangUrls[$hreflangCode] = $url;
            }
        }

        return $hreflangUrls;
    }

    protected function getTranslatedUrl(?string $referenceType, ?int $referenceId, string $langCode, string $localeCode): ?string
    {
        if (! $referenceType || ! $referenceId) {
            return null;
        }

        $currentLocaleCode = Language::getCurrentLocaleCode();
        $defaultLocale = Language::getDefaultLocale();

        if ($langCode === $currentLocaleCode) {
            return null;
        }

        if ($this->isLanguageAdvancedSupported($referenceType)) {
            return $this->getAdvancedTranslatedUrl($referenceType, $referenceId, $langCode, $localeCode, $defaultLocale);
        }

        return $this->getStandardTranslatedUrl($referenceType, $referenceId, $langCode, $localeCode, $defaultLocale);
    }

    protected function getAdvancedTranslatedUrl(string $referenceType, int $referenceId, string $langCode, string $localeCode, string $defaultLocale): ?string
    {
        $slug = Slug::query()
            ->where('reference_id', $referenceId)
            ->where('reference_type', $referenceType)
            ->select(['id', 'key', 'prefix', 'reference_id'])
            ->with('translations')
            ->first();

        if (! $slug) {
            return null;
        }

        foreach ($slug->translations as $translation) {
            if ($translation->lang_code === $langCode) {
                $locale = Language::getLocaleByLocaleCode($translation->lang_code);

                if ($locale == $defaultLocale && Language::hideDefaultLocaleInURL()) {
                    $locale = null;
                }

                return url($locale . ($slug->prefix ? '/' . $slug->prefix : '') . '/' . $translation->key);
            }
        }

        return null;
    }

    protected function getStandardTranslatedUrl(string $referenceType, int $referenceId, string $langCode, string $localeCode, string $defaultLocale): ?string
    {
        $languageMeta = LanguageMeta::query()
            ->where('language_meta.lang_meta_code', $langCode)
            ->join('language_meta as meta', 'meta.lang_meta_origin', 'language_meta.lang_meta_origin')
            ->where([
                'meta.reference_type' => $referenceType,
                'meta.reference_id' => $referenceId,
            ])
            ->first();

        if (! $languageMeta) {
            return null;
        }

        $slug = Slug::query()
            ->where('reference_id', $languageMeta->reference_id)
            ->where('reference_type', $referenceType)
            ->select(['key', 'prefix'])
            ->first();

        if (! $slug) {
            return null;
        }

        $locale = Language::getLocaleByLocaleCode($langCode);

        if ($locale == $defaultLocale && Language::hideDefaultLocaleInURL()) {
            $locale = null;
        }

        return url($locale . ($slug->prefix ? '/' . $slug->prefix : '') . '/' . $slug->key);
    }

    protected function isLanguageAdvancedSupported(string $referenceType): bool
    {
        if (! is_plugin_active('language-advanced') || ! class_exists(LanguageAdvancedManager::class)) {
            return false;
        }

        return LanguageAdvancedManager::isSupported($referenceType);
    }
}
