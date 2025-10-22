<?php

namespace Botble\Ecommerce\Forms\Settings;

use Botble\Base\Forms\FieldOptions\RadioFieldOption;
use Botble\Base\Forms\FieldOptions\SelectFieldOption;
use Botble\Base\Forms\FieldOptions\TextFieldOption;
use Botble\Base\Forms\Fields\EmailField;
use Botble\Base\Forms\Fields\GoogleFontsField;
use Botble\Base\Forms\Fields\HtmlField;
use Botble\Base\Forms\Fields\MediaImageField;
use Botble\Base\Forms\Fields\OnOffCheckboxField;
use Botble\Base\Forms\Fields\RadioField;
use Botble\Base\Forms\Fields\SelectField;
use Botble\Base\Forms\Fields\TextField;
use Botble\Base\Forms\FormAbstract;
use Botble\Ecommerce\Facades\EcommerceHelper;
use Botble\Ecommerce\Facades\InvoiceHelper;
use Botble\Ecommerce\Http\Requests\Settings\InvoiceSettingRequest;
use Botble\Setting\Forms\SettingForm;
use Botble\Theme\Facades\Theme;

class InvoiceSettingForm extends SettingForm
{
    public function setup(): void
    {
        parent::setup();

        $this
            ->setSectionTitle(trans('plugins/ecommerce::setting.invoice.company_settings'))
            ->setSectionDescription(trans('plugins/ecommerce::setting.invoice.company_settings_description'))
            ->setValidatorClass(InvoiceSettingRequest::class)
            ->columns(6)
            ->add(
                'company_name_for_invoicing',
                TextField::class,
                TextFieldOption::make()
                    ->label(trans('plugins/ecommerce::setting.invoice.form.company_name'))
                    ->placeholder(trans('plugins/ecommerce::setting.invoice.form.company_name_placeholder'))
                    ->helperText(trans('plugins/ecommerce::setting.invoice.form.company_name_helper'))
                    ->value(get_ecommerce_setting('company_name_for_invoicing', get_ecommerce_setting('store_name')))
                    ->colspan(6)
            )
            ->add(
                'company_address_for_invoicing',
                TextField::class,
                TextFieldOption::make()
                    ->label(trans('plugins/ecommerce::setting.invoice.form.company_address'))
                    ->placeholder(trans('plugins/ecommerce::setting.invoice.form.company_address_placeholder'))
                    ->helperText(trans('plugins/ecommerce::setting.invoice.form.company_address_helper'))
                    ->value(get_ecommerce_setting('company_address_for_invoicing', implode( // @phpstan-ignore-line
                        ', ',
                        array_filter([
                            get_ecommerce_setting('store_address'),
                            InvoiceHelper::getCompanyCity(),
                            InvoiceHelper::getCompanyState(),
                            InvoiceHelper::getCompanyCountry(),
                        ]),
                    )))
                    ->colspan(6)
            )
            ->add(
                'company_country_for_invoicing',
                SelectField::class,
                SelectFieldOption::make()
                    ->label(trans('plugins/ecommerce::ecommerce.country'))
                    ->choices(EcommerceHelper::getAvailableCountries())
                    ->selected(InvoiceHelper::getCompanyCountry())
                    ->searchable()
                    ->colspan(2),
            )
            ->add(
                'company_state_for_invoicing',
                TextField::class,
                TextFieldOption::make()
                    ->label(trans('plugins/ecommerce::ecommerce.state'))
                    ->placeholder('New York')
                    ->value(InvoiceHelper::getCompanyState())
                    ->colspan(2)
            )
            ->add(
                'company_city_for_invoicing',
                TextField::class,
                TextFieldOption::make()
                    ->label(trans('plugins/ecommerce::ecommerce.city'))
                    ->placeholder('New York City')
                    ->value(InvoiceHelper::getCompanyCity())
                    ->colspan(2)
            )
            ->when(EcommerceHelper::isZipCodeEnabled(), function (FormAbstract $form): void {
                $form->add('company_zipcode_for_invoicing', TextField::class, [
                    'label' => trans('plugins/ecommerce::setting.invoice.form.company_zipcode'),
                    'placeholder' => trans('plugins/ecommerce::setting.invoice.form.company_zipcode_placeholder'),
                    'helper_text' => trans('plugins/ecommerce::setting.invoice.form.company_zipcode_helper'),
                    'value' => InvoiceHelper::getCompanyZipCode(),
                    'colspan' => 3,
                ]);
            })
            ->add('company_email_for_invoicing', EmailField::class, [
                'label' => trans('plugins/ecommerce::setting.invoice.form.company_email'),
                'placeholder' => trans('plugins/ecommerce::setting.invoice.form.company_email_placeholder'),
                'helper_text' => trans('plugins/ecommerce::setting.invoice.form.company_email_helper'),
                'value' => get_ecommerce_setting('company_email_for_invoicing') ?: get_ecommerce_setting('store_email'),
                'colspan' => 3,
            ])
            ->add('company_phone_for_invoicing', TextField::class, [
                'label' => trans('plugins/ecommerce::setting.invoice.form.company_phone'),
                'placeholder' => trans('plugins/ecommerce::setting.invoice.form.company_phone_placeholder'),
                'helper_text' => trans('plugins/ecommerce::setting.invoice.form.company_phone_helper'),
                'value' => get_ecommerce_setting('company_phone_for_invoicing') ?: get_ecommerce_setting('store_phone'),
                'colspan' => 3,
            ])
            ->add('company_tax_id_for_invoicing', TextField::class, [
                'label' => trans('plugins/ecommerce::setting.invoice.form.company_tax_id'),
                'placeholder' => trans('plugins/ecommerce::setting.invoice.form.company_tax_id_placeholder'),
                'helper_text' => trans('plugins/ecommerce::setting.invoice.form.company_tax_id_helper'),
                'value' => get_ecommerce_setting('company_tax_id_for_invoicing') ?: get_ecommerce_setting('store_vat_number'),
                'colspan' => 6,
            ])
            ->add('company_logo_for_invoicing', MediaImageField::class, [
                'label' => trans('plugins/ecommerce::setting.invoice.form.company_logo'),
                'helper_text' => trans('plugins/ecommerce::setting.invoice.form.company_logo_helper'),
                'value' => get_ecommerce_setting('company_logo_for_invoicing') ?: (theme_option('logo_in_invoices') ?: Theme::getLogo()),
                'allow_thumb' => false,
                'colspan' => 6,
            ])
            ->add('using_custom_font_for_invoice', OnOffCheckboxField::class, [
                'label' => trans('plugins/ecommerce::setting.invoice.form.using_custom_font_for_invoice'),
                'helper_text' => trans('plugins/ecommerce::setting.invoice.form.using_custom_font_for_invoice_helper'),
                'value' => get_ecommerce_setting('using_custom_font_for_invoice', false),
                'attr' => [
                    'data-bb-toggle' => 'collapse',
                    'data-bb-target' => '.custom-font-settings',
                ],
                'colspan' => 6,
            ])
            ->add('open_fieldset_custom_font_settings', HtmlField::class, [
                'html' => sprintf(
                    '<fieldset class="form-fieldset custom-font-settings w-100" style="display: %s;" data-bb-value="1">',
                    get_ecommerce_setting('using_custom_font_for_invoice', false) ? 'block' : 'none'
                ),
            ])
            ->add('invoice_font_family', GoogleFontsField::class, [
                'label' => trans('plugins/ecommerce::setting.invoice.form.invoice_font_family'),
                'helper_text' => trans('plugins/ecommerce::setting.invoice.form.invoice_font_family_helper'),
                'selected' => get_ecommerce_setting('invoice_font_family'),
                'colspan' => 6,
            ])
            ->add('close_fieldset_custom_font_settings', HtmlField::class, [
                'html' => '</fieldset>',
            ])
            ->add(
                'invoice_language_support',
                RadioField::class,
                RadioFieldOption::make()
                    ->label(trans('plugins/ecommerce::setting.invoice.form.add_language_support'))
                    ->helperText(trans('plugins/ecommerce::setting.invoice.form.add_language_support_helper'))
                    ->choices([
                        'default' => trans('plugins/ecommerce::setting.invoice.form.only_latin_languages'),
                        'arabic' => trans('plugins/ecommerce::setting.invoice.form.languages.arabic'),
                        'bangladesh' => trans('plugins/ecommerce::setting.invoice.form.languages.bangladesh'),
                        'chinese' => trans('plugins/ecommerce::setting.invoice.form.languages.chinese'),
                    ])
                    ->defaultValue('default')
                    ->when(InvoiceHelper::getLanguageSupport(), function (RadioFieldOption $option, string $language): void {
                        $option->selected($language);
                    })
                    ->colspan(6)
            )
            ->add(
                'invoice_processing_library',
                RadioField::class,
                RadioFieldOption::make()
                    ->label(trans('plugins/ecommerce::setting.invoice.form.invoice_processing_library'))
                    ->helperText(trans('plugins/ecommerce::setting.invoice.form.invoice_processing_library_helper'))
                    ->choices([
                        'dompdf' => 'DomPDF',
                        'mpdf' => 'mPDF',
                    ])
                    ->defaultValue('dompdf')
                    ->selected(get_ecommerce_setting('invoice_processing_library', 'dompdf'))
                    ->colspan(6)
            )
            ->add('enable_invoice_stamp', OnOffCheckboxField::class, [
                'label' => trans('plugins/ecommerce::setting.invoice.form.enable_invoice_stamp'),
                'helper_text' => trans('plugins/ecommerce::setting.invoice.form.enable_invoice_stamp_helper'),
                'value' => get_ecommerce_setting('enable_invoice_stamp', true),
                'colspan' => 6,
            ])
            ->add('invoice_code_prefix', TextField::class, [
                'label' => trans('plugins/ecommerce::setting.invoice.form.invoice_code_prefix'),
                'placeholder' => trans('plugins/ecommerce::setting.invoice.form.invoice_code_prefix_placeholder'),
                'helper_text' => trans('plugins/ecommerce::setting.invoice.form.invoice_code_prefix_helper'),
                'value' => get_ecommerce_setting('invoice_code_prefix', 'INV-'),
                'colspan' => 6,
            ])
            ->add('disable_order_invoice_until_order_confirmed', OnOffCheckboxField::class, [
                'label' => trans('plugins/ecommerce::setting.invoice.form.disable_order_invoice_until_order_confirmed'),
                'helper_text' => trans('plugins/ecommerce::setting.invoice.form.disable_order_invoice_until_order_confirmed_helper'),
                'value' => EcommerceHelper::disableOrderInvoiceUntilOrderConfirmed(),
                'colspan' => 6,
            ])
            ->add(
                'invoice_date_format',
                SelectField::class,
                SelectFieldOption::make()
                    ->label(trans('plugins/ecommerce::setting.invoice.form.date_format'))
                    ->helperText(trans('plugins/ecommerce::setting.invoice.form.date_format_helper'))
                    ->choices(array_combine(InvoiceHelper::supportedDateFormats(), InvoiceHelper::supportedDateFormats()))
                    ->selected(get_ecommerce_setting('invoice_date_format', 'F d, Y'))
                    ->searchable()
                    ->colspan(6),
            );
    }
}
