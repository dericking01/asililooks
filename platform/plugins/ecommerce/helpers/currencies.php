<?php

use Botble\Ecommerce\Facades\Currency as CurrencyFacade;
use Botble\Ecommerce\Models\Currency;
use Botble\Ecommerce\Supports\CurrencySupport;
use Illuminate\Support\Collection;

if (! function_exists('format_price')) {
    function format_price(
        float|null|string $price,
        Currency|null|string $currency = null,
        bool $withoutCurrency = false,
        bool $useSymbol = true
    ): string {
        if ($currency) {
            if (! $currency instanceof Currency) {
                $currency = Currency::query()->find($currency);
            }

            if (! $currency) {
                return human_price_text($price, $currency);
            }

            if ($currency->getKey() != get_application_currency_id() && $currency->exchange_rate > 0) {
                $currentCurrency = get_application_currency();

                if ($currentCurrency->is_default) {
                    $price = $price / $currency->exchange_rate;
                } else {
                    $price = $price / $currency->exchange_rate * $currentCurrency->exchange_rate;
                }

                $currency = $currentCurrency;
            }
        } else {
            $currency = get_application_currency();

            if (! $currency) {
                return human_price_text($price, $currency);
            }

            if (! $currency->is_default && $currency->exchange_rate > 0) {
                $price = $price * $currency->exchange_rate;
            }
        }

        if ($withoutCurrency) {
            return (string) $price;
        }

        if ($useSymbol && $currency->is_prefix_symbol) {
            $space = $currency->space_between_price_and_currency ? ' ' : null;

            return $currency->symbol . $space . human_price_text($price, $currency);
        }

        return human_price_text($price, $currency, ($useSymbol ? $currency->symbol : $currency->title));
    }
}

if (! function_exists('human_price_text')) {
    function human_price_text(float|null|string $price, Currency|null|string $currency, ?string $priceUnit = ''): string
    {
        $numberAfterDot = ($currency instanceof Currency) ? $currency->decimals : 0;

        if ($convertNumberToText = config('plugins.ecommerce.general.display_big_money_in_million_billion')) {
            if ($price >= 1000000 && $price < 1000000000) {
                $price = round($price / 1000000, 2) + 0;
                $priceUnit = __('million') . ' ' . $priceUnit;
                $numberAfterDot = strlen(substr(strrchr((string) $price, '.'), 1));
            } elseif ($price >= 1000000000) {
                $price = round($price / 1000000000, 2) + 0;
                $priceUnit = __('billion') . ' ' . $priceUnit;
                $numberAfterDot = strlen(substr(strrchr((string) $price, '.'), 1));
            }
        }

        if (is_numeric($price)) {
            $price = preg_replace('/[^0-9,.]/s', '', (string) $price);
        }

        $decimalSeparator = get_ecommerce_setting('decimal_separator', '.');

        if ($decimalSeparator == 'space') {
            $decimalSeparator = ' ';
        }

        $thousandSeparator = get_ecommerce_setting('thousands_separator', ',');

        if ($thousandSeparator == 'space') {
            $thousandSeparator = ' ';
        }

        $numberFormatStyle = ($currency instanceof Currency) ? ($currency->number_format_style ?? 'western') : 'western';

        if ($numberFormatStyle === 'indian') {
            $price = format_indian_number((float) $price, (int) $numberAfterDot, $decimalSeparator, $thousandSeparator);
        } else {
            $price = number_format(
                (float) $price,
                (int) $numberAfterDot,
                $decimalSeparator,
                $thousandSeparator
            );
        }

        $space = ($currency instanceof Currency && $currency->space_between_price_and_currency) || $convertNumberToText ? ' ' : null;

        return $price . $space . ($priceUnit ?: '');
    }
}

if (! function_exists('format_indian_number')) {
    function format_indian_number(float $number, int $decimals = 2, string $decimalSeparator = '.', string $thousandSeparator = ','): string
    {
        $parts = explode('.', number_format($number, $decimals, '.', ''));
        $integerPart = $parts[0];
        $decimalPart = $parts[1] ?? '';

        if (strlen($integerPart) <= 3) {
            $formatted = $integerPart;
        } else {
            $lastThree = substr($integerPart, -3);
            $remaining = substr($integerPart, 0, -3);

            $formatted = '';
            while (strlen($remaining) > 0) {
                if (strlen($remaining) <= 2) {
                    $formatted = $remaining . $thousandSeparator . $formatted;
                    $remaining = '';
                } else {
                    $formatted = substr($remaining, -2) . $thousandSeparator . $formatted;
                    $remaining = substr($remaining, 0, -2);
                }
            }

            $formatted = $formatted . $lastThree;
        }

        if ($decimals > 0 && $decimalPart !== '') {
            $formatted = $formatted . $decimalSeparator . $decimalPart;
        }

        return $formatted;
    }
}

if (! function_exists('get_current_exchange_rate')) {
    function get_current_exchange_rate($currency = null): float
    {
        if (! $currency) {
            $currency = get_application_currency();
        } elseif (! $currency instanceof Currency) {
            $currency = Currency::query()->find($currency);
        }

        if (! $currency->is_default && $currency->exchange_rate > 0) {
            return $currency->exchange_rate;
        }

        return 1;
    }
}

if (! function_exists('cms_currency')) {
    function cms_currency(): CurrencySupport
    {
        return CurrencyFacade::getFacadeRoot();
    }
}

if (! function_exists('get_all_currencies')) {
    function get_all_currencies(): Collection
    {
        return cms_currency()->currencies();
    }
}

if (! function_exists('get_application_currency')) {
    function get_application_currency(): ?Currency
    {
        $currency = cms_currency()->getApplicationCurrency();

        if (is_in_admin(true) || ! $currency) {
            $currency = cms_currency()->getDefaultCurrency();
        }

        return $currency;
    }
}

if (! function_exists('get_application_currency_id')) {
    function get_application_currency_id(): int|string|null
    {
        return get_application_currency()->getKey();
    }
}
