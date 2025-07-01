<?php

namespace Botble\StripeConnect\Listeners;

use Botble\AffiliatePro\Enums\PayoutPaymentMethodsEnum;
use Botble\AffiliatePro\Enums\WithdrawalStatusEnum;
use Botble\AffiliatePro\Events\WithdrawalRequestedEvent;
use Botble\Base\Facades\BaseHelper;
use Botble\StripeConnect\StripeConnect;
use Exception;

class AffiliateStripeConnectListener
{
    public function handle(WithdrawalRequestedEvent $event): void
    {
        $customer = $event->customer;
        $withdrawal = $event->withdrawal;

        if (
            ! is_plugin_active('affiliate-pro') ||
            ! $customer->stripe_account_id ||
            ! $customer->stripe_account_active ||
            $withdrawal->payment_channel !== PayoutPaymentMethodsEnum::STRIPE
        ) {
            return;
        }

        try {
            $stripeConnect = new StripeConnect();

            $transfer = $stripeConnect->transfer(
                $customer->stripe_account_id,
                $withdrawal->amount * 100,
                mb_strtolower($withdrawal->currency)
            );

            $withdrawal->status = WithdrawalStatusEnum::APPROVED;
            $withdrawal->transaction_id = $transfer->id;
            $withdrawal->save();
        } catch (Exception $e) {
            BaseHelper::logError($e);

            $withdrawal->update([
                'status' => WithdrawalStatusEnum::REJECTED,
            ]);

            // Return the amount to the affiliate's balance
            $affiliate = $withdrawal->affiliate;
            if ($affiliate) {
                $affiliate->balance += $withdrawal->amount;
                $affiliate->save();
            }
        }
    }
}
