<div class="swatches-container">
    <div class="header">
        <div class="swatch-item">
            {{ trans('plugins/ecommerce::currency.code') }}
        </div>
        <div class="swatch-item">
            {{ trans('plugins/ecommerce::currency.symbol') }}
        </div>
        <div class="swatch-item swatch-exchange-rate">
            {{ trans('plugins/ecommerce::currency.exchange_rate') }}
        </div>
        <div class="swatch-is-default">
            {{ trans('plugins/ecommerce::currency.is_default') }}
        </div>
        <div class="swatch-advanced">
            {{ trans('plugins/ecommerce::currency.advanced') }}
        </div>
        <div class="remove-item">{{ trans('plugins/ecommerce::currency.remove') }}</div>
    </div>

    <ul class="swatches-list"></ul>

    <div class="d-flex justify-content-between w-100 align-items-center">
        <x-core::form.helper-text>
            {{ trans('plugins/ecommerce::currency.instruction') }}
        </x-core::form.helper-text>

        <a class="js-add-new-attribute" href="javascript:void(0)">
            {{ trans('plugins/ecommerce::currency.new_currency') }}
        </a>
    </div>
</div>
