<?php

namespace Botble\Ecommerce\Database\Seeders;

use Botble\Base\Supports\BaseSeeder;
use Botble\Ecommerce\Models\Currency;

class CurrencySeeder extends BaseSeeder
{
    public function run(): void
    {
        Currency::query()->truncate();

        $currencies = [
            [
                'title' => 'TZS',
                'symbol' => 'TSh',
                'is_prefix_symbol' => true,
                'order' => 0,
                'decimals' => 0,
                'is_default' => 1,
                'exchange_rate' => 1,
            ],
            [
                'title' => 'USD',
                'symbol' => '$',
                'is_prefix_symbol' => true,
                'order' => 1,
                'decimals' => 2,
                'is_default' => 0,
                'exchange_rate' => 0.00037,
            ],
            [
                'title' => 'EUR',
                'symbol' => '€',
                'is_prefix_symbol' => false,
                'order' => 1,
                'decimals' => 2,
                'is_default' => 0,
                'exchange_rate' => 0.00033,
            ],
        ];

        foreach ($currencies as $currency) {
            Currency::query()->create($currency);
        }
    }
}
