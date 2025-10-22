<?php

namespace Botble\Ecommerce\Listeners;

use Botble\Ecommerce\Enums\StockStatusEnum;
use Botble\Ecommerce\Events\ProductQuantityUpdatedEvent;
use Botble\Ecommerce\Models\Product;

class UpdateProductStockStatus
{
    public function handle(ProductQuantityUpdatedEvent $event): void
    {
        $product = $event->product;

        if ($product->is_variation) {
            $this->updateParentProduct($product);
        }

        if (! $product->is_variation && $product->variations()->exists()) {
            $this->updateParentProductFromVariations($product);
        }
    }

    protected function updateParentProduct(Product $variationProduct): void
    {
        $parentProduct = $variationProduct->original_product;

        if (! $parentProduct || ! $parentProduct->id || $parentProduct->is_variation) {
            return;
        }

        $this->updateParentProductFromVariations($parentProduct);
    }

    protected function updateParentProductFromVariations(Product $parentProduct): void
    {
        $variations = $parentProduct->variations()->with('product')->get();

        if ($variations->isEmpty()) {
            return;
        }

        $totalQuantity = 0;
        $variationsWithStorehouse = 0;
        $variationsWithoutStorehouse = 0;
        $hasAnyInStock = false;
        $hasBackorder = false;
        $stockStatus = StockStatusEnum::OUT_OF_STOCK;
        $allowCheckoutWhenOutOfStock = false;

        foreach ($variations as $variation) {
            $variationProduct = $variation->product;

            if (! $variationProduct || ! $variationProduct->is_variation) {
                continue;
            }

            if ($variationProduct->with_storehouse_management) {
                $variationsWithStorehouse++;
                $totalQuantity += $variationProduct->quantity ?: 0;
            } else {
                $variationsWithoutStorehouse++;
            }

            if ($variationProduct->allow_checkout_when_out_of_stock) {
                $allowCheckoutWhenOutOfStock = true;
            }

            if ($variationProduct->stock_status == StockStatusEnum::ON_BACKORDER) {
                $hasBackorder = true;
            } elseif (! $variationProduct->isOutOfStock()) {
                $hasAnyInStock = true;
            }
        }

        if ($hasBackorder) {
            $stockStatus = StockStatusEnum::ON_BACKORDER;
        } elseif ($hasAnyInStock || $allowCheckoutWhenOutOfStock) {
            $stockStatus = StockStatusEnum::IN_STOCK;
        }

        $withStorehouseManagement = $variationsWithStorehouse > $variationsWithoutStorehouse;

        $hasChanges = $parentProduct->quantity != $totalQuantity ||
                     $parentProduct->with_storehouse_management != $withStorehouseManagement ||
                     $parentProduct->stock_status != $stockStatus ||
                     $parentProduct->allow_checkout_when_out_of_stock != $allowCheckoutWhenOutOfStock;

        if ($hasChanges) {
            $parentProduct->quantity = $totalQuantity;
            $parentProduct->with_storehouse_management = $withStorehouseManagement;
            $parentProduct->stock_status = $stockStatus;
            $parentProduct->allow_checkout_when_out_of_stock = $allowCheckoutWhenOutOfStock;

            $parentProduct->saveQuietly();
        }
    }
}
