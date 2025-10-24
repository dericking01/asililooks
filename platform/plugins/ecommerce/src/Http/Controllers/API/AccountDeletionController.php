<?php

namespace Botble\Ecommerce\Http\Controllers\API;

use Botble\Api\Http\Controllers\BaseApiController;
use Botble\Ecommerce\Enums\DeletionRequestStatusEnum;
use Botble\Ecommerce\Http\Requests\API\AccountDeletionRequest;
use Botble\Ecommerce\Http\Requests\API\VerifyAccountDeletionRequest;
use Botble\Ecommerce\Jobs\CustomerDeleteAccountJob;
use Botble\Ecommerce\Models\Customer;
use Botble\Ecommerce\Models\CustomerDeletionRequest;
use Botble\Ecommerce\Notifications\SendVerificationCodeNotification;
use Carbon\Carbon;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Str;
use Random\RandomException;

class AccountDeletionController extends BaseApiController
{
    /**
     * Request account deletion
     *
     * @group Account Deletion
     *
     * @authenticated
     *
     * @bodyParam reason string The reason for account deletion (optional). Example: No longer need the account
     *
     * @response {
     *  "error": false,
     *  "data": null,
     *  "message": "A 6-digit verification code has been sent to your email. Please verify to complete account deletion."
     * }
     *
     * @return JsonResponse
     * @throws RandomException
     */
    public function store(AccountDeletionRequest $request)
    {
        /**
         * @var Customer $user
         */
        $user = $request->user();

        $verificationCode = str_pad((string) random_int(0, 999999), 6, '0', STR_PAD_LEFT);

        /**
         * @var CustomerDeletionRequest $deletionRequest
         */
        $deletionRequest = CustomerDeletionRequest::query()->updateOrCreate([
            'customer_id' => $user->getKey(),
        ], [
            'customer_name' => $user->name,
            'customer_email' => $user->email,
            'customer_phone' => $user->phone,
            'token' => Str::random(60),
            'verification_code' => $verificationCode,
            'code_expires_at' => Carbon::now()->addMinutes(15),
            'status' => DeletionRequestStatusEnum::WAITING_FOR_CONFIRMATION,
            'reason' => $request->input('reason'),
        ]);

        $user->notify(new SendVerificationCodeNotification($deletionRequest));

        return $this
            ->httpResponse()
            ->setMessage(trans('plugins/ecommerce::account-deletion.verification_code_sent'))
            ->toApiResponse();
    }

    /**
     * Verify and confirm account deletion
     *
     * @group Account Deletion
     *
     * @authenticated
     *
     * @bodyParam verification_code string required The 6-digit verification code sent to email. Example: 123456
     *
     * @response {
     *  "error": false,
     *  "data": null,
     *  "message": "Your account deletion has been confirmed and will be processed shortly."
     * }
     *
     * @return JsonResponse
     */
    public function verify(VerifyAccountDeletionRequest $request)
    {
        /**
         * @var Customer $user
         */
        $user = $request->user();

        /**
         * @var CustomerDeletionRequest $deletionRequest
         */
        $deletionRequest = CustomerDeletionRequest::query()
            ->where('customer_id', $user->getKey())
            ->where('status', DeletionRequestStatusEnum::WAITING_FOR_CONFIRMATION)
            ->firstOrFail();

        if ($deletionRequest->verification_code !== $request->input('verification_code')) {
            return $this
                ->httpResponse()
                ->setError()
                ->setMessage(trans('plugins/ecommerce::account-deletion.invalid_verification_code'))
                ->toApiResponse();
        }

        if ($deletionRequest->code_expires_at && $deletionRequest->code_expires_at->isPast()) {
            return $this
                ->httpResponse()
                ->setError()
                ->setMessage(trans('plugins/ecommerce::account-deletion.verification_code_expired'))
                ->toApiResponse();
        }

        $deletionRequest->update([
            'status' => DeletionRequestStatusEnum::CONFIRMED,
            'confirmed_at' => Carbon::now(),
        ]);

        $user->tokens()->delete();

        CustomerDeleteAccountJob::dispatch($deletionRequest);

        return $this
            ->httpResponse()
            ->setMessage(trans('plugins/ecommerce::account-deletion.deletion_confirmed'))
            ->toApiResponse();
    }
}
