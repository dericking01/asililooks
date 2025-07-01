<?php

namespace Botble\Ecommerce\Http\Controllers\API;

use Botble\Base\Facades\EmailHandler;
use Botble\Base\Http\Controllers\BaseController;
use Botble\Ecommerce\Enums\OrderCancellationReasonEnum;
use Botble\Ecommerce\Enums\OrderHistoryActionEnum;
use Botble\Ecommerce\Facades\EcommerceHelper;
use Botble\Ecommerce\Facades\InvoiceHelper;
use Botble\Ecommerce\Facades\OrderHelper;
use Botble\Ecommerce\Http\Requests\Fronts\CancelOrderRequest;
use Botble\Ecommerce\Http\Requests\Fronts\UploadProofRequest;
use Botble\Ecommerce\Http\Resources\API\OrderDetailResource;
use Botble\Ecommerce\Http\Resources\API\OrderResource;
use Botble\Ecommerce\Models\Order;
use Botble\Ecommerce\Models\OrderHistory;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Storage;

class OrderController extends BaseController
{
    /**
     * Get list of orders by customer
     *
     * @group Orders
     *
     * @queryParam status string Filter orders by status (pending, processing, completed, canceled). Example: completed
     * @queryParam shipping_status string Filter orders by shipping status (not_shipped, delivering, delivered, canceled). Example: delivered
     * @queryParam payment_status string Filter orders by payment status (pending, completed, refunding, refunded, canceled). Example: completed
     * @queryParam per_page int Number of orders per page. Example: 10
     *
     * @return JsonResponse
     *
     * @authenticated
     */
    public function index(Request $request)
    {
        $query = Order::query()
            ->where([
                'user_id' => $request->user()->id,
                'is_finished' => 1,
            ])
            ->withCount(['products'])
            ->with(['billingAddress', 'shipment', 'payment', 'products']);

        // Filter by order status
        if ($request->has('status') && $request->input('status')) {
            $query->where('status', $request->input('status'));
        }

        // Filter by shipping status
        if ($request->has('shipping_status') && $request->input('shipping_status')) {
            $query->whereHas('shipment', function ($q) use ($request): void {
                $q->where('status', $request->input('shipping_status'));
            });
        }

        // Filter by payment status
        if ($request->has('payment_status') && $request->input('payment_status')) {
            $query->whereHas('payment', function ($q) use ($request): void {
                $q->where('status', $request->input('payment_status'));
            });
        }

        $orders = $query->latest()
            ->paginate($request->integer('per_page', 10));

        return $this
            ->httpResponse()
            ->setData(OrderResource::collection($orders))
            ->toApiResponse();
    }

    /**
     * Get order detail
     *
     * @group Orders
     *
     * @param int $id
     * @return JsonResponse
     *
     * @authenticated
     *
     */
    public function show(int $id, Request $request)
    {
        $order = Order::query()
            ->where([
                'user_id' => $request->user()->id,
                'id' => $id,
                'is_finished' => 1,
            ])
            ->with(['products', 'shipment', 'payment', 'billingAddress', 'products'])
            ->first();

        if (! $order) {
            return $this
                ->httpResponse()
                ->setError()
                ->setMessage(__('Order not found'))
                ->toApiResponse();
        }

        return $this
            ->httpResponse()
            ->setData(new OrderDetailResource($order))
            ->toApiResponse();
    }

    /**
     * Cancel an order
     *
     * @group Orders
     *
     * @param int $id
     * @param CancelOrderRequest $request
     * @return JsonResponse
     *
     * @authenticated
     *
     * @bodyParam cancellation_reason string required The reason for cancellation. Example: OTHER
     * @bodyParam cancellation_reason_description string The description of the cancellation reason (required if cancellation_reason is OTHER). Example: I found a better deal elsewhere
     */
    public function cancel(int $id, CancelOrderRequest $request)
    {
        /**
         * @var Order $order
         */
        $order = Order::query()
            ->where([
                'id' => $id,
                'user_id' => $request->user()->id,
            ])
            ->first();

        if (! $order) {
            return $this
                ->httpResponse()
                ->setError()
                ->setMessage(__('Order not found'))
                ->toApiResponse();
        }

        if (! $order->canBeCanceled()) {
            return $this
                ->httpResponse()
                ->setError()
                ->setMessage(__('You cannot cancel this order'))
                ->toApiResponse();
        }

        $reason = $request->input('cancellation_reason');
        $reasonDescription = $request->input('cancellation_reason_description');

        OrderHelper::cancelOrder($order, $reason, $reasonDescription);

        $customerName = $order->address->name ?: $order->user->name;

        $description = match (true) {
            $reason != OrderCancellationReasonEnum::OTHER => __('Order was cancelled by customer :customer with reason :reason', [
                'customer' => $customerName,
                'reason' => OrderCancellationReasonEnum::getLabel($reason),
            ]),
            $reason == OrderCancellationReasonEnum::OTHER => __('Order was cancelled by customer :customer with reason :reason', [
                'customer' => $customerName,
                'reason' => $reasonDescription,
            ]),
            default => __('Order was cancelled by customer :customer', ['customer' => $customerName]),
        };

        OrderHistory::query()->create([
            'action' => OrderHistoryActionEnum::CANCEL_ORDER,
            'description' => $description,
            'order_id' => $order->getKey(),
        ]);

        return $this
            ->httpResponse()
            ->setMessage(__('Order cancelled successfully'))
            ->toApiResponse();
    }

    /**
     * Print an order invoice
     *
     * @group Orders
     *
     * @param int $id
     * @param Request $request
     * @return JsonResponse
     *
     * @authenticated
     *
     * @queryParam type string Type of response (print or download). Example: download
     */
    public function getInvoice(int $id, Request $request)
    {
        /**
         * @var Order $order
         */
        $order = Order::query()
            ->where([
                'id' => $id,
                'user_id' => $request->user()->id,
            ])
            ->first();

        if (! $order) {
            return $this
                ->httpResponse()
                ->setError()
                ->setMessage(__('Order not found'))
                ->toApiResponse();
        }

        abort_unless($order->isInvoiceAvailable(), 404);

        if ($request->input('type') == 'print') {
            $url = InvoiceHelper::getInvoiceUrl($order->invoice);

            return $this
                ->httpResponse()
                ->setData(['url' => $url])
                ->toApiResponse();
        }

        $url = InvoiceHelper::getInvoiceDownloadUrl($order->invoice);

        return $this
            ->httpResponse()
            ->setData(['url' => $url])
            ->toApiResponse();
    }

    /**
     * Upload payment proof for an order
     *
     * @group Orders
     *
     * @param int $id
     * @param UploadProofRequest $request
     * @return JsonResponse
     *
     * @authenticated
     *
     * @bodyParam file file required The payment proof file (jpeg, jpg, png, pdf, max 2MB).
     */
    public function uploadProof(int $id, UploadProofRequest $request)
    {
        if (! EcommerceHelper::isPaymentProofEnabled()) {
            return $this
                ->httpResponse()
                ->setError()
                ->setMessage(__('Payment proof upload is currently disabled.'))
                ->toApiResponse();
        }

        $order = Order::query()
            ->where('user_id', $request->user()->id)
            ->where('id', $id)
            ->first();

        if (! $order) {
            return $this
                ->httpResponse()
                ->setError()
                ->setMessage(__('Order not found'))
                ->toApiResponse();
        }

        $storage = Storage::disk('local');

        if ($order->proof_file) {
            $storage->delete($order->proof_file);
        }

        if (! $storage->exists('proofs')) {
            $storage->makeDirectory('proofs');
        }

        $file = $request->file('file');

        $proofFilePath = $storage->putFileAs('proofs', $file, sprintf('%s-%s', $order->getKey(), $file->getClientOriginalName()));

        $order->update([
            'proof_file' => $proofFilePath,
        ]);

        $emailVariables = [
            'customer_name' => $request->user()->name,
            'customer_email' => $request->user()->email,
            'order_id' => get_order_code($order->getKey()),
            'order_link' => route('orders.edit', $order),
        ];

        if (is_plugin_active('payment') && $order->payment->id) {
            $emailVariables['payment_link'] = route('payment.show', $order->payment->id);
        }

        EmailHandler::setModule(ECOMMERCE_MODULE_SCREEN_NAME)
            ->setVariableValues($emailVariables)
            ->sendUsingTemplate('payment-proof-upload-notification', get_admin_email()->all(), [
                'attachments' => [
                    [
                        'file' => $storage->path($proofFilePath),
                        'name' => basename($proofFilePath),
                    ],
                ],
            ]);

        return $this
            ->httpResponse()
            ->setMessage(__('Uploaded proof successfully'))
            ->toApiResponse();
    }

    /**
     * Download payment proof for an order
     *
     * @group Orders
     *
     * @param int $id
     * @param Request $request
     * @return JsonResponse
     *
     * @authenticated
     */
    public function downloadProof(int $id, Request $request)
    {
        $order = Order::query()
            ->where('user_id', $request->user()->id)
            ->where('id', $id)
            ->first();

        if (! $order) {
            return $this
                ->httpResponse()
                ->setError()
                ->setMessage(__('Order not found'))
                ->toApiResponse();
        }

        abort_unless($order->proof_file, 404);

        $storage = Storage::disk('local');

        abort_unless($storage->exists($order->proof_file), 404);

        // For API, we'll return a download URL instead of directly downloading the file
        $downloadUrl = route('api.ecommerce.orders.download-proof-file', [
            'token' => hash('sha256', $order->proof_file),
            'filename' => basename($order->proof_file),
        ]);

        return $this
            ->httpResponse()
            ->setData(['download_url' => $downloadUrl])
            ->toApiResponse();
    }

    /**
     * Download a proof file using a token
     *
     * @param string $token
     * @param string $filename
     * @return mixed
     */
    public function downloadProofFile(string $token, string $filename)
    {
        $storage = Storage::disk('local');
        $filePath = 'proofs/' . $filename;

        abort_if(! $storage->exists($filePath) || hash('sha256', $filePath) !== $token, 404);

        return response()->download($storage->path($filePath));
    }

    /**
     * Confirm delivery of an order
     *
     * @group Orders
     *
     * @param int $id
     * @param Request $request
     * @return JsonResponse
     *
     * @authenticated
     */
    public function confirmDelivery(int $id, Request $request)
    {
        /** @var Order $order */
        $order = Order::query()
            ->where('user_id', $request->user()->id)
            ->where('id', $id)
            ->first();

        if (! $order) {
            return $this
                ->httpResponse()
                ->setError()
                ->setMessage(__('Order not found'))
                ->toApiResponse();
        }

        if (! $order->shipment->can_confirm_delivery) {
            return $this
                ->httpResponse()
                ->setError()
                ->setMessage(__('You cannot confirm delivery for this order'))
                ->toApiResponse();
        }

        $order->shipment()->update([
            'customer_delivered_confirmed_at' => Carbon::now(),
        ]);

        OrderHistory::query()->create([
            'action' => OrderHistoryActionEnum::CONFIRM_DELIVERY,
            'description' => __('Order was confirmed delivery by customer :customer', ['customer' => $order->address->name ?: $order->user->name]),
            'order_id' => $order->getKey(),
        ]);

        return $this
            ->httpResponse()
            ->setMessage(__('Delivery confirmed successfully'))
            ->toApiResponse();
    }
}
