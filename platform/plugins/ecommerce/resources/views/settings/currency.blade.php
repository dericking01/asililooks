@extends(BaseHelper::getAdminMasterLayoutTemplate())

@section('content')
    {!! $form->renderForm() !!}
@stop

@push('footer')
    <x-core::custom-template id="currency_template">
        <div id="loading-update-currencies" style="display: none;">
            <div class="currency-loading-backdrop"></div>
            <div class="currency-loading-loader"></div>
        </div>
        <li data-id="__id__" class="clearfix currency-item">
            <div class="currency-row">
                <div class="swatch-item" data-type="title" data-label="{{ trans('plugins/ecommerce::currency.code') }}">
                    <input type="text" class="form-control" value="__title__">
                </div>
                <div class="swatch-item" data-type="symbol" data-label="{{ trans('plugins/ecommerce::currency.symbol') }}">
                    <input type="text" class="form-control" value="__symbol__">
                </div>
                <div class="swatch-item swatch-exchange-rate" data-type="exchange_rate" data-label="{{ trans('plugins/ecommerce::currency.exchange_rate') }}">
                    <input type="number" @disabled(get_ecommerce_setting('use_exchange_rate_from_api')) class="form-control input-exchange-rate" value="__exchangeRate__" step="0.00000001">
                </div>
                <div class="swatch-is-default" data-type="is_default" data-label="{{ trans('plugins/ecommerce::currency.is_default') }}">
                    <input class="form-check-input" type="radio" name="currencies_is_default" value="__position__" __isDefaultChecked__>
                </div>
                <div class="swatch-advanced">
                    <button type="button" class="btn btn-sm btn-secondary toggle-advanced" title="{{ trans('plugins/ecommerce::currency.advanced_settings') }}">
                        <x-core::icon name="ti ti-settings" />
                    </button>
                </div>
                <div class="remove-item" data-label="{{ trans('plugins/ecommerce::currency.remove') }}">
                    <a href="#" class="text-danger text-decoration-none">
                        <x-core::icon name="ti ti-trash" />
                    </a>
                </div>
            </div>
            <div class="currency-advanced-settings" style="display: none;">
                <div class="advanced-settings-content">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group mb-3">
                                <label class="form-label">{{ trans('plugins/ecommerce::currency.number_of_decimals') }}</label>
                                <input type="number" class="form-control" data-type="decimals" value="__decimals__">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group mb-3">
                                <label class="form-label">{{ trans('plugins/ecommerce::currency.number_format_style') }}</label>
                                <select class="form-select" data-type="number_format_style">
                                    <option value="western" __westernFormatChecked__>{{ trans('plugins/ecommerce::currency.western_format') }}</option>
                                    <option value="indian" __indianFormatChecked__>{{ trans('plugins/ecommerce::currency.indian_format') }}</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group mb-3">
                                <label class="form-label">{{ trans('plugins/ecommerce::currency.is_prefix_symbol') }}</label>
                                <select class="form-select" data-type="is_prefix_symbol">
                                    <option value="1" __isPrefixSymbolChecked__>{{ trans('plugins/ecommerce::currency.before_number') }}</option>
                                    <option value="0" __notIsPrefixSymbolChecked__>{{ trans('plugins/ecommerce::currency.after_number') }}</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" data-type="space_between_price_and_currency" value="1" __spaceBetweenPriceAndCurrencyChecked__>
                                    <label class="form-check-label">{{ trans('plugins/ecommerce::currency.space_between_price_and_currency') }}</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </li>
    </x-core::custom-template>
@endpush
