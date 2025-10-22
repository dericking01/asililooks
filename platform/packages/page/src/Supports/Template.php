<?php

namespace Botble\Page\Supports;

use Botble\Base\Facades\BaseHelper;
use Botble\Theme\Facades\Theme;
use Illuminate\Support\Facades\Event;

class Template
{
    protected static array $templates = [];

    public static function registerPageTemplate(array $templates = []): void
    {
        static::$templates = array_merge(static::$templates, $templates);
    }

    protected static function getExistsTemplate(): array
    {
        $themes = [
            Theme::getThemeName(),
        ];

        if (Theme::hasInheritTheme()) {
            $themes[] = Theme::getInheritTheme();
        }

        $files = [];

        foreach ($themes as $theme) {
            $scannedFiles = BaseHelper::scanFolder(theme_path($theme . DIRECTORY_SEPARATOR . 'layouts'));

            foreach ($scannedFiles as $file) {
                $files[] = str_replace('.blade.php', '', $file);
            }
        }

        return $files;
    }

    public static function getPageTemplates(): array
    {
        static::$templates['default'] = trans('packages/page::pages.default_template');

        Event::dispatch('core.page::registering-templates');

        $existingTemplates = self::getExistsTemplate();

        return array_filter(static::$templates, function ($key) use ($existingTemplates) {
            return in_array($key, $existingTemplates);
        }, ARRAY_FILTER_USE_KEY);
    }
}
