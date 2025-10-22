<?php

use Botble\Ecommerce\Facades\EcommerceHelper;
use Botble\Ecommerce\Models\Invoice;
use Botble\Ecommerce\Models\Order;
use Illuminate\Database\Migrations\Migration;

return new class () extends Migration {
    public function up(): void
    {
        $this->fixOrderTaxCalculations();
        $this->fixInvoiceTaxCalculations();
    }

    protected function fixOrderTaxCalculations(): void
    {
        Order::query()
            ->where('tax_amount', '>', 0)
            ->chunkById(100, function ($orders): void {
                foreach ($orders as $order) {
                    $orderProducts = $order->products;

                    $taxGroups = [];
                    foreach ($orderProducts as $product) {
                        $options = $product->options ?? [];
                        $taxRate = null;

                        if (! empty($options['taxRate'])) {
                            $taxRate = $options['taxRate'];
                        } elseif (! empty($options['taxClasses'])) {
                            $taxRate = array_sum(array_values($options['taxClasses']));
                        }

                        if ($taxRate !== null && $taxRate > 0) {
                            if (! isset($taxGroups[$taxRate])) {
                                $taxGroups[$taxRate] = [
                                    'subtotal' => 0,
                                    'products' => [],
                                ];
                            }
                            $taxGroups[$taxRate]['subtotal'] += ($product->price * $product->qty);
                            $taxGroups[$taxRate]['products'][] = $product;
                        }
                    }

                    $totalCorrectTax = 0;

                    foreach ($taxGroups as $taxRate => $group) {
                        $groupTax = EcommerceHelper::roundPrice($group['subtotal'] * $taxRate / 100);
                        $totalCorrectTax += $groupTax;

                        $remainingTax = $groupTax;
                        $productCount = count($group['products']);

                        foreach ($group['products'] as $index => $product) {
                            $productSubtotal = $product->price * $product->qty;

                            if ($index === $productCount - 1) {
                                $productTax = $remainingTax;
                            } else {
                                $productTax = EcommerceHelper::roundPrice($productSubtotal * $taxRate / 100);
                                $remainingTax -= $productTax;
                            }

                            if (abs($product->tax_amount - $productTax) > 0.001) {
                                $product->tax_amount = $productTax;
                                $product->save();
                            }
                        }
                    }

                    if (abs($order->tax_amount - $totalCorrectTax) > 0.001) {
                        $taxDifference = $totalCorrectTax - $order->tax_amount;
                        $order->tax_amount = $totalCorrectTax;
                        $order->amount = EcommerceHelper::roundPrice($order->amount + $taxDifference);
                        $order->save();
                    }
                }
            });
    }

    protected function fixInvoiceTaxCalculations(): void
    {
        Invoice::query()
            ->where('tax_amount', '>', 0)
            ->chunkById(100, function ($invoices): void {
                foreach ($invoices as $invoice) {
                    $invoiceItems = $invoice->items;

                    $taxGroups = [];
                    foreach ($invoiceItems as $item) {
                        $options = $item->options ?? [];
                        $taxRate = null;

                        if (! empty($options['taxRate'])) {
                            $taxRate = $options['taxRate'];
                        } elseif (! empty($options['taxClasses'])) {
                            $taxRate = array_sum(array_values($options['taxClasses']));
                        }

                        if ($taxRate !== null && $taxRate > 0) {
                            if (! isset($taxGroups[$taxRate])) {
                                $taxGroups[$taxRate] = [
                                    'subtotal' => 0,
                                    'items' => [],
                                ];
                            }
                            $taxGroups[$taxRate]['subtotal'] += ($item->price * $item->qty);
                            $taxGroups[$taxRate]['items'][] = $item;
                        }
                    }

                    $totalCorrectTax = 0;

                    foreach ($taxGroups as $taxRate => $group) {
                        $groupTax = EcommerceHelper::roundPrice($group['subtotal'] * $taxRate / 100);
                        $totalCorrectTax += $groupTax;

                        $remainingTax = $groupTax;
                        $itemCount = count($group['items']);

                        foreach ($group['items'] as $index => $item) {
                            $itemSubtotal = $item->price * $item->qty;

                            if ($index === $itemCount - 1) {
                                $itemTax = $remainingTax;
                            } else {
                                $itemTax = EcommerceHelper::roundPrice($itemSubtotal * $taxRate / 100);
                                $remainingTax -= $itemTax;
                            }

                            if (abs($item->tax_amount - $itemTax) > 0.001) {
                                $item->tax_amount = $itemTax;
                                $item->amount = EcommerceHelper::roundPrice($item->price * $item->qty + $itemTax);
                                $item->save();
                            }
                        }
                    }

                    if (abs($invoice->tax_amount - $totalCorrectTax) > 0.001) {
                        $taxDifference = $totalCorrectTax - $invoice->tax_amount;
                        $invoice->tax_amount = $totalCorrectTax;
                        $invoice->amount = EcommerceHelper::roundPrice($invoice->amount + $taxDifference);
                        $invoice->save();
                    }
                }
            });
    }
};
