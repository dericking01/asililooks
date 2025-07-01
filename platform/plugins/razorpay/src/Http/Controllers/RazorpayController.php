<?php

namespace Botble\Razorpay\Http\Controllers;

use Botble\Base\Facades\BaseHelper;
use Botble\Base\Http\Controllers\BaseController;
use Botble\Base\Http\Responses\BaseHttpResponse;
use Botble\Ecommerce\Models\Order;
use Botble\Payment\Enums\PaymentStatusEnum;
use Botble\Payment\Models\Payment;
use Botble\Payment\Supports\PaymentHelper;
use Exception;
use Illuminate\Http\Request;
use Razorpay\Api\Api;
use Razorpay\Api\Errors\BadRequestError;
use Razorpay\Api\Errors\SignatureVerificationError;

class RazorpayController extends BaseController
{
    public function callback(
        string $token,
        Request $request,
        BaseHttpResponse $response
    ): BaseHttpResponse {
        // Log the callback request for debugging
        PaymentHelper::log(
            RAZORPAY_PAYMENT_METHOD_NAME,
            ['callback_request' => $request->all()],
            ['token' => $token, 'headers' => $request->headers->all()]
        );

        if ($request->input('error.description')) {
            $message = $request->input('error.code') . ': ' . $request->input('error.description');

            // Log payment error
            PaymentHelper::log(
                RAZORPAY_PAYMENT_METHOD_NAME,
                ['error' => $request->input('error')],
                ['token' => $token, 'message' => $message]
            );

            return $this
                ->httpResponse()
                ->setNextUrl(PaymentHelper::getCancelURL($token) . '&error_message=' . $message)
                ->withInput()
                ->setMessage($message);
        }

        $chargeId = $request->input('razorpay_payment_id');

        if (! $chargeId) {
            // Log missing payment ID
            PaymentHelper::log(
                RAZORPAY_PAYMENT_METHOD_NAME,
                ['error' => 'Missing payment ID'],
                ['token' => $token]
            );

            return $response
                ->setNextUrl(PaymentHelper::getCancelURL($token))
                ->withInput()
                ->setMessage(__('Payment failed!'));
        }

        $orderId = $request->input('razorpay_order_id');
        $signature = $request->input('razorpay_signature');

        try {
            if ($orderId && $signature) {
                // Log signature verification attempt
                PaymentHelper::log(
                    RAZORPAY_PAYMENT_METHOD_NAME,
                    [
                        'verification_attempt' => [
                            'payment_id' => $chargeId,
                            'order_id' => $orderId,
                        ],
                    ],
                    ['token' => $token]
                );

                $status = PaymentStatusEnum::PENDING;

                $apiKey = get_payment_setting('key', RAZORPAY_PAYMENT_METHOD_NAME);
                $apiSecret = get_payment_setting('secret', RAZORPAY_PAYMENT_METHOD_NAME);

                $api = new Api($apiKey, $apiSecret);

                // @phpstan-ignore-next-line
                $api->utility->verifyPaymentSignature([
                    'razorpay_signature' => $signature,
                    'razorpay_payment_id' => $chargeId,
                    'razorpay_order_id' => $orderId,
                ]);

                // Log successful signature verification
                PaymentHelper::log(
                    RAZORPAY_PAYMENT_METHOD_NAME,
                    ['signature_verification' => 'success'],
                    ['payment_id' => $chargeId, 'order_id' => $orderId]
                );

                do_action('payment_before_making_api_request', RAZORPAY_PAYMENT_METHOD_NAME, ['order_id' => $orderId]);

                // @phpstan-ignore-next-line
                $order = $api->order->fetch($orderId);

                $order = $order->toArray();

                do_action('payment_after_api_response', RAZORPAY_PAYMENT_METHOD_NAME, ['order_id' => $orderId], $order);

                // Log order details
                PaymentHelper::log(
                    RAZORPAY_PAYMENT_METHOD_NAME,
                    ['order_details' => ['order_id' => $orderId]],
                    ['order_data' => $order]
                );

                $amount = $order['amount_paid'] / 100;

                $status = $order['status'] === 'paid' ? PaymentStatusEnum::COMPLETED : $status;

                $orderId = $request->input('order_id');

                if (! $orderId && class_exists(Order::class)) {
                    $orderId = Order::query()->where('token', $order['receipt'])->pluck('id')->all();

                    // Log order lookup
                    PaymentHelper::log(
                        RAZORPAY_PAYMENT_METHOD_NAME,
                        ['order_lookup' => ['receipt' => $order['receipt']]],
                        ['found_order_ids' => $orderId]
                    );
                }

                // Log payment processing
                PaymentHelper::log(
                    RAZORPAY_PAYMENT_METHOD_NAME,
                    [
                        'processing_payment' => [
                            'amount' => $amount,
                            'currency' => $order['currency'],
                            'status' => $status,
                        ],
                    ],
                    [
                        'charge_id' => $chargeId,
                        'order_id' => $orderId,
                    ]
                );

                do_action(PAYMENT_ACTION_PAYMENT_PROCESSED, [
                    'amount' => $amount,
                    'currency' => $order['currency'],
                    'charge_id' => $chargeId,
                    'payment_channel' => RAZORPAY_PAYMENT_METHOD_NAME,
                    'status' => $status,
                    'order_id' => $orderId,
                    'customer_id' => $request->input('customer_id'),
                    'customer_type' => $request->input('customer_type'),
                ]);
            } else {
                // Log missing order ID or signature
                PaymentHelper::log(
                    RAZORPAY_PAYMENT_METHOD_NAME,
                    ['error' => 'Missing order ID or signature'],
                    [
                        'token' => $token,
                        'has_order_id' => (bool) $orderId,
                        'has_signature' => (bool) $signature,
                    ]
                );
            }
        } catch (SignatureVerificationError $exception) {
            // Log signature verification error
            PaymentHelper::log(
                RAZORPAY_PAYMENT_METHOD_NAME,
                ['error' => 'Signature verification failed'],
                [
                    'exception' => $exception->getMessage(),
                    'payment_id' => $chargeId,
                    'order_id' => $orderId,
                ]
            );

            BaseHelper::logError($exception);

            return $response
                ->setNextUrl(PaymentHelper::getCancelURL($token) . '&error_message=' . $exception->getMessage())
                ->withInput()
                ->setMessage($exception->getMessage());
        }

        // Log successful checkout
        PaymentHelper::log(
            RAZORPAY_PAYMENT_METHOD_NAME,
            ['success' => 'Payment processed successfully'],
            [
                'charge_id' => $chargeId,
                'token' => $token,
            ]
        );

        return $response
            ->setNextUrl(PaymentHelper::getRedirectURL($token) . '?charge_id=' . $chargeId)
            ->setMessage(__('Checkout successfully!'));
    }

    public function webhook(Request $request)
    {
        $webhookSecret = get_payment_setting('webhook_secret', RAZORPAY_PAYMENT_METHOD_NAME);
        $signature = $request->header('X-Razorpay-Signature');
        $content = $request->getContent();

        // Log the webhook request for debugging
        PaymentHelper::log(
            RAZORPAY_PAYMENT_METHOD_NAME,
            ['webhook_request' => $request->all()],
            ['headers' => $request->headers->all()]
        );

        // Signature verification (if webhook secret is configured)
        if ($webhookSecret && $signature && $content) {
            try {
                // Verify webhook signature
                $expectedSignature = hash_hmac('sha256', $content, $webhookSecret);
                if (hash_equals($expectedSignature, $signature)) {
                    // Log successful signature verification
                    PaymentHelper::log(
                        RAZORPAY_PAYMENT_METHOD_NAME,
                        ['webhook_signature_verification' => 'success'],
                        ['signature' => substr($signature, 0, 10) . '...'] // Only log part of the signature for security
                    );
                } else {
                    BaseHelper::logError(new Exception('Invalid webhook signature'));

                    return response('Invalid signature', 400);
                }
            } catch (Exception $exception) {
                BaseHelper::logError($exception);

                return response('Error verifying webhook signature: ' . $exception->getMessage(), 400);
            }
        } else {
            // For backward compatibility, proceed without signature verification
            // but log a warning about missing webhook secret
            if (! $webhookSecret) {
                PaymentHelper::log(
                    RAZORPAY_PAYMENT_METHOD_NAME,
                    ['webhook_warning' => 'No webhook secret configured'],
                    ['recommendation' => 'Configure webhook secret for secure webhook verification']
                );
            }

            // If we have a signature but no secret, log this unusual situation
            if ($signature && ! $webhookSecret) {
                PaymentHelper::log(
                    RAZORPAY_PAYMENT_METHOD_NAME,
                    ['webhook_warning' => 'Signature provided but no webhook secret configured'],
                    ['signature_prefix' => substr($signature, 0, 10) . '...']
                );
            }
        }

        // Process the webhook event
        try {
            $event = $request->input('event');
            $eventId = $request->header('X-Razorpay-Event-Id');

            // Check for duplicate webhook events (idempotency)
            if ($eventId) {
                // Log the event ID for tracking
                PaymentHelper::log(
                    RAZORPAY_PAYMENT_METHOD_NAME,
                    ['webhook_event_id' => $eventId],
                    ['event' => $event]
                );

                // Here you could check if this event ID has been processed before
                // For example, by checking a database table of processed webhook events
                // If implemented, this would prevent duplicate processing
            }

            $api = new Api(
                get_payment_setting('key', RAZORPAY_PAYMENT_METHOD_NAME),
                get_payment_setting('secret', RAZORPAY_PAYMENT_METHOD_NAME)
            );

            // Handle different event types
            switch ($event) {
                case 'payment.authorized':
                case 'payment.captured':
                case 'payment.failed':
                case 'payment.pending':
                case 'order.paid':
                    try {
                        // Log the specific event type
                        PaymentHelper::log(
                            RAZORPAY_PAYMENT_METHOD_NAME,
                            ['event_type' => $event],
                            ['payload' => $request->input('payload')]
                        );

                        $paymentEntity = $request->input('payload.payment.entity');
                        if (! $paymentEntity) {
                            return response('No payment entity found', 400);
                        }

                        $chargeId = $paymentEntity['id'];
                        $orderId = $paymentEntity['order_id'];

                        if (! $orderId) {
                            return response('No order ID found', 400);
                        }

                        do_action('payment_before_making_api_request', RAZORPAY_PAYMENT_METHOD_NAME, ['order_id' => $orderId]);

                        // @phpstan-ignore-next-line
                        $order = $api->order->fetch($orderId);
                        $orderData = $order->toArray();

                        do_action('payment_after_api_response', RAZORPAY_PAYMENT_METHOD_NAME, ['order_id' => $orderId], $orderData);

                        $status = PaymentStatusEnum::PENDING;

                        // Log payment status from Razorpay
                        PaymentHelper::log(
                            RAZORPAY_PAYMENT_METHOD_NAME,
                            ['payment_status_check' => [
                                'payment_status' => $paymentEntity['status'] ?? 'unknown',
                                'order_status' => $orderData['status'] ?? 'unknown',
                            ]],
                            ['charge_id' => $chargeId]
                        );

                        // Check payment status with more detailed conditions
                        if ($paymentEntity['status'] === 'captured' || $orderData['status'] === 'paid') {
                            $status = PaymentStatusEnum::COMPLETED;
                        } elseif ($paymentEntity['status'] === 'failed') {
                            $status = PaymentStatusEnum::FAILED;
                        } elseif ($paymentEntity['status'] === 'refunded') {
                            $status = PaymentStatusEnum::REFUNDED;
                        }

                        $payment = Payment::query()
                            ->where('charge_id', $chargeId)
                            ->first();

                        if ($payment) {
                            $payment->status = $status;
                            $payment->save();

                            $orderId = $payment->order_id;
                        } elseif (class_exists(Order::class)) {
                            $orderId = Order::query()->where('token', $orderData['receipt'])->pluck('id')->all();
                        }

                        if ($orderId) {
                            $amount = isset($orderData['amount_paid']) ? $orderData['amount_paid'] / 100 : ($paymentEntity['amount'] / 100);
                            $currency = $orderData['currency'] ?? $paymentEntity['currency'];

                            do_action(PAYMENT_ACTION_PAYMENT_PROCESSED, [
                                'amount' => $amount,
                                'currency' => $currency,
                                'charge_id' => $chargeId,
                                'order_id' => $orderId,
                                'status' => $status,
                                'payment_channel' => RAZORPAY_PAYMENT_METHOD_NAME,
                            ]);

                            return response('Webhook processed successfully');
                        }
                    } catch (BadRequestError $exception) {
                        BaseHelper::logError($exception);

                        return response('Error processing payment: ' . $exception->getMessage(), 400);
                    }

                    // If we reach here, it means the payment was processed but no order was found
                    return response('Payment processed but no matching order found', 400);

                case 'refund.created':
                    // Handle refund events if needed
                    return response('Refund event received');

                default:
                    // Log unhandled events
                    PaymentHelper::log(
                        RAZORPAY_PAYMENT_METHOD_NAME,
                        ['unhandled_event' => $event],
                        ['payload' => $request->all()]
                    );

                    return response('Event type not handled: ' . $event);
            }
        } catch (Exception $exception) {
            BaseHelper::logError($exception);

            return response('Error processing webhook: ' . $exception->getMessage(), 500);
        }
    }
}
