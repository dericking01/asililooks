<?php

namespace Botble\SocialLogin\Http\Controllers\API;

use Botble\Base\Http\Controllers\BaseController;
use Botble\SocialLogin\Facades\SocialService;
use Botble\SocialLogin\Services\AppleJwtService;
use Botble\SocialLogin\Services\SocialLoginService;
use Carbon\Carbon;
use Exception;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;

class AppleLoginController extends BaseController
{
    public function __construct(
        protected SocialLoginService $socialLoginService,
        protected AppleJwtService $appleJwtService
    ) {
    }

    public function login(Request $request): JsonResponse
    {
        try {
            $request->validate([
                'identityToken' => 'required|string',
                'guard' => 'string|nullable',
            ]);

            $identityToken = $request->input('identityToken');
            $guard = $request->input('guard', 'web');

            $appleUserData = $this->appleJwtService->verifyToken($identityToken);

            if (! $appleUserData) {
                return $this->httpResponse()
                    ->setError()
                    ->setMessage(__('Invalid Apple token'))
                    ->toApiResponse();
            }

            $email = $appleUserData['email'] ?? null;
            $appleId = $appleUserData['sub'] ?? null;

            if (! $email || ! $appleId) {
                return $this->httpResponse()
                    ->setError()
                    ->setMessage(__('Cannot login, no email or Apple ID provided!'))
                    ->toApiResponse();
            }

            $providerData = SocialService::supportedModules()[$guard] ?? null;

            if (! $providerData) {
                return $this->httpResponse()
                    ->setError()
                    ->setMessage(__('Invalid guard configuration'))
                    ->toApiResponse();
            }

            $model = new $providerData['model']();

            $account = $this->socialLoginService->findUserByEmail($email, $model::class);

            $socialLoginUser = $this->socialLoginService->findUserByProvider('apple', $appleId);

            if ($socialLoginUser && ! $account) {
                $account = $socialLoginUser->user;
            }

            if (! $account) {
                $data = [
                    'name' => $appleUserData['name'] ?? $email,
                    'email' => $email,
                    'password' => Hash::make(Str::random(36)),
                ];

                $data = apply_filters('social_login_before_saving_account', $data, (object) $appleUserData, $providerData);

                $account = $model;
                $account->fill($data);
                $account->confirmed_at = Carbon::now();
                $account->save();

                event(new Registered($account));
            }

            $socialLoginData = $this->socialLoginService->createSocialLoginData([
                'provider' => 'apple',
                'id' => $appleId,
                'token' => $identityToken,
                'refresh_token' => null,
                'expires_in' => null,
                'name' => $appleUserData['name'] ?? $account->name,
                'email' => $email,
                'avatar' => null,
            ]);

            if ($this->socialLoginService->hasSocialLogin($account, 'apple')) {
                $this->socialLoginService->updateSocialLogin($account, 'apple', $socialLoginData);
            } else {
                $this->socialLoginService->addSocialLogin($account, $socialLoginData);
            }

            $token = $account->createToken('apple-login')->plainTextToken;

            return $this->httpResponse()
                ->setData([
                    'token' => $token,
                    'user' => [
                        'id' => $account->getKey(),
                        'name' => $account->name,
                        'email' => $account->email,
                    ],
                ])
                ->setMessage(__('Login successful'))
                ->toApiResponse();

        } catch (ValidationException $e) {
            return $this->httpResponse()
                ->setError()
                ->setMessage($e->getMessage())
                ->withInput()
                ->toApiResponse();
        } catch (Exception $e) {
            logger()->error('Apple login error: ' . $e->getMessage(), [
                'trace' => $e->getTraceAsString(),
            ]);

            return $this->httpResponse()
                ->setError()
                ->setMessage(__('Apple token invalid'))
                ->toApiResponse();
        }
    }
}
