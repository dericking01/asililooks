<?php

namespace Botble\Ecommerce\Listeners;

use Botble\Base\Events\RenderingAdminWidgetEvent;
use Botble\Ecommerce\Widgets\AverageOrderValueCard;
use Botble\Ecommerce\Widgets\ConversionRateCard;
use Botble\Ecommerce\Widgets\CustomerChart;
use Botble\Ecommerce\Widgets\CustomerRetentionChart;
use Botble\Ecommerce\Widgets\NewCustomerCard;
use Botble\Ecommerce\Widgets\NewOrderCard;
use Botble\Ecommerce\Widgets\NewProductCard;
use Botble\Ecommerce\Widgets\OrderChart;
use Botble\Ecommerce\Widgets\OrderStatusDistributionChart;
use Botble\Ecommerce\Widgets\PaymentMethodDistributionChart;
use Botble\Ecommerce\Widgets\ProductCategoryDistributionChart;
use Botble\Ecommerce\Widgets\ProductReviewsSummaryCard;
use Botble\Ecommerce\Widgets\RecentOrdersTable;
use Botble\Ecommerce\Widgets\ReportGeneralHtml;
use Botble\Ecommerce\Widgets\RevenueCard;
use Botble\Ecommerce\Widgets\ShippingMethodUsageChart;
use Botble\Ecommerce\Widgets\TaxCollectionSummaryCard;
use Botble\Ecommerce\Widgets\TopSellingProductsTable;
use Botble\Ecommerce\Widgets\TrendingProductsTable;

class RegisterEcommerceWidget
{
    public function handle(RenderingAdminWidgetEvent $event): void
    {
        $event->widget
            ->register([
                RevenueCard::class,
                AverageOrderValueCard::class,
                NewProductCard::class,
                NewCustomerCard::class,
                NewOrderCard::class,
                ConversionRateCard::class,
                TaxCollectionSummaryCard::class,
                ProductReviewsSummaryCard::class,
                CustomerChart::class,
                OrderChart::class,
                CustomerRetentionChart::class,
                ProductCategoryDistributionChart::class,
                OrderStatusDistributionChart::class,
                PaymentMethodDistributionChart::class,
                ShippingMethodUsageChart::class,
                ReportGeneralHtml::class,
                RecentOrdersTable::class,
                TopSellingProductsTable::class,
                TrendingProductsTable::class,
            ], 'ecommerce');
    }
}
