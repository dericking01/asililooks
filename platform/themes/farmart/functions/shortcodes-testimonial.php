<?php

use Botble\Base\Forms\FieldOptions\SelectFieldOption;
use Botble\Base\Forms\FieldOptions\TextFieldOption;
use Botble\Base\Forms\Fields\SelectField;
use Botble\Base\Forms\Fields\TextField;
use Botble\Shortcode\Compilers\Shortcode as ShortcodeCompiler;
use Botble\Shortcode\Facades\Shortcode;
use Botble\Shortcode\Forms\ShortcodeForm;
use Botble\Shortcode\ShortcodeField;
use Botble\Testimonial\Models\Testimonial;
use Botble\Theme\Facades\Theme;
use Illuminate\Support\Arr;

app()->booted(function (): void {
    if (! is_plugin_active('testimonial')) {
        return;
    }

    Shortcode::register(
        'testimonials',
        __('Testimonials'),
        __('Testimonials'),
        function (ShortcodeCompiler $shortcode) {
            $testimonialIds = Shortcode::fields()->getIds('testimonial_ids', $shortcode);

            if (empty($testimonialIds)) {
                return null;
            }

            $testimonials = Testimonial::query()
                ->wherePublished()
                ->whereIn('id', $testimonialIds)
                ->get();

            if ($testimonials->isEmpty()) {
                return null;
            }

            return Theme::partial('shortcodes.testimonials.index', compact('shortcode', 'testimonials'));
        }
    );

    Shortcode::setAdminConfig('testimonials', function (array $attributes) {
        $testimonials = Testimonial::query()
            ->wherePublished()
            ->select(['id', 'name', 'company'])
            ->get()
            ->mapWithKeys(
                fn (Testimonial $item) => [
                    $item->getKey() => trim(
                        sprintf('%s - %s', $item->name, $item->company),
                        ' - '
                    ),
                ]
            )
            ->all();

        return ShortcodeForm::createFromArray($attributes)
            ->withLazyLoading()
            ->add(
                'title',
                TextField::class,
                TextFieldOption::make()
                    ->label(__('Title'))
            )
            ->add(
                'subtitle',
                TextField::class,
                TextFieldOption::make()
                    ->label(__('Subtitle'))
            )
            ->add(
                'testimonial_ids',
                SelectField::class,
                SelectFieldOption::make()
                    ->label(__('Testimonials'))
                    ->choices($testimonials)
                    ->multiple()
                    ->searchable()
                    ->selected(ShortcodeField::parseIds(Arr::get($attributes, 'testimonial_ids')))
            )

            ->add('is_autoplay', 'customSelect', [
                'label' => __('Is autoplay?'),
                'choices' => [
                    'yes' => trans('core/base::base.yes'),
                    'no' => trans('core/base::base.no'),
                ],
                'selected' => Arr::get($attributes, 'is_autoplay', 'yes'),
            ])
            ->add('is_infinite', 'customSelect', [
                'label' => __('Loop?'),
                'choices' => [
                    'yes' => trans('core/base::base.yes'),
                    'no' => trans('core/base::base.no'),
                ],
                'selected' => Arr::get($attributes, 'is_infinite', 'yes'),
            ])
            ->add('autoplay_speed', 'customSelect', [
                'label' => __('Autoplay speed (if autoplay enabled)'),
                'choices' => theme_get_autoplay_speed_options(),
                'selected' => Arr::get($attributes, 'autoplay_speed', 3000),
            ])
            ->add('slides_to_show', 'customSelect', [
                'label' => __('Slides to show'),
                'choices' => [4 => 4, 5 => 5, 6 => 6, 7 => 7, 8 => 8, 9 => 9, 10 => 10],
                'selected' => Arr::get($attributes, 'slides_to_show', 4),
            ]);
    });
});
