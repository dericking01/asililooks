<?php

namespace FriendsOfBotble\ExpectedDeliveryDate\Forms\Settings;

use Botble\Base\Forms\FieldOptions\ColorFieldOption;
use Botble\Base\Forms\FieldOptions\CoreIconFieldOption;
use Botble\Base\Forms\FieldOptions\SelectFieldOption;
use Botble\Base\Forms\Fields\ColorField;
use Botble\Base\Forms\Fields\CoreIconField;
use Botble\Base\Forms\Fields\SelectField;
use Botble\Setting\Forms\SettingForm;
use FriendsOfBotble\ExpectedDeliveryDate\Http\Requests\Settings\ExpectedDeliveryDateSettingRequest;
use FriendsOfBotble\ExpectedDeliveryDate\Services\DeliveryEstimateService;

class ExpectedDeliveryDateSettingForm extends SettingForm
{
    public function setup(): void
    {
        parent::setup();

        $this
            ->setSectionTitle(trans('plugins/fob-expected-delivery-date::expected-delivery-date.settings.title'))
            ->setSectionDescription(trans('plugins/fob-expected-delivery-date::expected-delivery-date.settings.description'))
            ->setValidatorClass(ExpectedDeliveryDateSettingRequest::class)
            ->add(
                'expected_delivery_date_icon',
                CoreIconField::class,
                CoreIconFieldOption::make()
                    ->label(trans('plugins/fob-expected-delivery-date::expected-delivery-date.settings.icon'))
                    ->value(setting('expected_delivery_date_icon', 'ti ti-truck-delivery'))
            )
            ->add(
                'expected_delivery_date_background_color',
                ColorField::class,
                ColorFieldOption::make()
                    ->label(trans('plugins/fob-expected-delivery-date::expected-delivery-date.settings.background_color'))
                    ->value(setting('expected_delivery_date_background_color', '#f9f9f9'))
            )
            ->add(
                'expected_delivery_date_label_color',
                ColorField::class,
                ColorFieldOption::make()
                    ->label(trans('plugins/fob-expected-delivery-date::expected-delivery-date.settings.label_color'))
                    ->value(setting('expected_delivery_date_label_color', '#000000'))
            )
            ->add(
                'expected_delivery_date_label_font_weight',
                'select',
                [
                    'label' => trans('plugins/fob-expected-delivery-date::expected-delivery-date.settings.label_font_weight'),
                    'value' => setting('expected_delivery_date_label_font_weight', 'normal'),
                    'choices' => [
                        'normal' => trans('plugins/fob-expected-delivery-date::expected-delivery-date.settings.font_weights.normal'),
                        'bold' => trans('plugins/fob-expected-delivery-date::expected-delivery-date.settings.font_weights.bold'),
                        '500' => trans('plugins/fob-expected-delivery-date::expected-delivery-date.settings.font_weights.medium'),
                        '600' => trans('plugins/fob-expected-delivery-date::expected-delivery-date.settings.font_weights.semibold'),
                    ],
                ]
            )
            ->add(
                'expected_delivery_date_value_color',
                ColorField::class,
                ColorFieldOption::make()
                    ->label(trans('plugins/fob-expected-delivery-date::expected-delivery-date.settings.value_color'))
                    ->value(setting('expected_delivery_date_value_color', '#000000'))
            )
            ->add(
                'expected_delivery_date_value_font_weight',
                'select',
                [
                    'label' => trans('plugins/fob-expected-delivery-date::expected-delivery-date.settings.value_font_weight'),
                    'value' => setting('expected_delivery_date_value_font_weight', 'bold'),
                    'choices' => [
                        'normal' => trans('plugins/fob-expected-delivery-date::expected-delivery-date.settings.font_weights.normal'),
                        'bold' => trans('plugins/fob-expected-delivery-date::expected-delivery-date.settings.font_weights.bold'),
                        '500' => trans('plugins/fob-expected-delivery-date::expected-delivery-date.settings.font_weights.medium'),
                        '600' => trans('plugins/fob-expected-delivery-date::expected-delivery-date.settings.font_weights.semibold'),
                    ],
                ]
            )
            ->add(
                'expected_delivery_date_icon_color',
                ColorField::class,
                ColorFieldOption::make()
                    ->label(trans('plugins/fob-expected-delivery-date::expected-delivery-date.settings.icon_color'))
                    ->value(setting('expected_delivery_date_icon_color', '#4CAF50'))
            )
            ->add(
                'expected_delivery_date_border_color',
                ColorField::class,
                ColorFieldOption::make()
                    ->label(trans('plugins/fob-expected-delivery-date::expected-delivery-date.settings.border_color'))
                    ->value(setting('expected_delivery_date_border_color', '#e0e0e0'))
            )
            ->add(
                'expected_delivery_date_border_radius',
                'number',
                [
                    'label' => trans('plugins/fob-expected-delivery-date::expected-delivery-date.settings.border_radius'),
                    'value' => setting('expected_delivery_date_border_radius', 4),
                    'attr' => [
                        'min' => 0,
                        'max' => 50,
                    ],
                ]
            )
            ->add(
                'expected_delivery_date_default_min_days',
                'number',
                [
                    'label' => trans('plugins/fob-expected-delivery-date::expected-delivery-date.settings.default_min_days'),
                    'value' => setting('expected_delivery_date_default_min_days', 3),
                    'attr' => [
                        'min' => 1,
                    ],
                ]
            )
            ->add(
                'expected_delivery_date_default_max_days',
                'number',
                [
                    'label' => trans('plugins/fob-expected-delivery-date::expected-delivery-date.settings.default_max_days'),
                    'value' => setting('expected_delivery_date_default_max_days', 7),
                    'attr' => [
                        'min' => 1,
                    ],
                ]
            )
            ->add(
                'expected_delivery_date_format',
                SelectField::class,
                SelectFieldOption::make()
                    ->label(trans('plugins/fob-expected-delivery-date::expected-delivery-date.settings.date_format'))
                    ->choices(array_combine(app(DeliveryEstimateService::class)->supportedDateFormats(), app(DeliveryEstimateService::class)->supportedDateFormats()))
                    ->selected(setting('expected_delivery_date_format', 'M d'))
                    ->searchable()
            );
    }
}
