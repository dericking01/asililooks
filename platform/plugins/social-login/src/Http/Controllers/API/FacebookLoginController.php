<?php

namespace Botble\SocialLogin\Http\Controllers\API;

use Botble\Base\Http\Controllers\BaseController;
use Botble\SocialLogin\Facades\SocialService;
use Botble\SocialLogin\Services\SocialLoginService;
use Carbon\Carbon;
use Exception;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;

class FacebookLoginController extends BaseController
{
    public function __construct(protected SocialLoginService $socialLoginService)
    {
    }

    public function login(Request $request)
    {
        try {
            logger()->info('Facebook login API called', [
                'ip' => $request->ip(),
                'user_agent' => $request->userAgent(),
                'has_access_token' => $request->has('accessToken'),
                'guard' => $request->input('guard', 'web'),
            ]);

            $request->validate([
                'accessToken' => 'required|string',
                'guard' => 'string|nullable',
            ]);

            $accessToken = $request->input('accessToken');
            $guard = $request->input('guard', 'web');

            logger()->info('Facebook login validation passed', [
                'guard' => $guard,
                'token_length' => strlen($accessToken),
                'token_prefix' => substr($accessToken, 0, 20) . '...',
            ]);

            $appId = SocialService::setting('facebook_app_id');
            $appSecret = SocialService::setting('facebook_app_secret');

            logger()->info('Facebook OAuth settings retrieved', [
                'has_app_id' => ! empty($appId),
                'has_app_secret' => ! empty($appSecret),
                'app_id_length' => $appId ? strlen($appId) : 0,
            ]);

            if (! $appId || ! $appSecret) {
                logger()->error('Facebook OAuth configuration missing', [
                    'app_id_empty' => empty($appId),
                    'app_secret_empty' => empty($appSecret),
                ]);

                return $this->httpResponse()
                    ->setError()
                    ->setMessage(__('Facebook authentication is not properly configured'))
                    ->toApiResponse();
            }

            $facebookUserData = $this->verifyFacebookToken($accessToken, $appId, $appSecret);

            if (! $facebookUserData) {
                logger()->error('Facebook token verification failed: ' . $accessToken);

                return $this->httpResponse()
                    ->setError()
                    ->setMessage(__('Invalid Facebook token'))
                    ->toApiResponse();
            }

            logger()->info('Facebook token verified successfully', [
                'user_data_keys' => array_keys($facebookUserData),
                'has_email' => isset($facebookUserData['email']),
                'has_id' => isset($facebookUserData['id']),
                'has_name' => isset($facebookUserData['name']),
                'has_picture' => isset($facebookUserData['picture']),
            ]);

            $email = $facebookUserData['email'] ?? null;
            $facebookId = $facebookUserData['id'] ?? null;

            if (! $email || ! $facebookId) {
                logger()->error('Missing required Facebook user data', [
                    'email_present' => ! empty($email),
                    'facebook_id_present' => ! empty($facebookId),
                    'available_fields' => array_keys($facebookUserData),
                ]);

                return $this->httpResponse()
                    ->setError()
                    ->setMessage(__('Cannot login, no email or Facebook ID provided!'))
                    ->toApiResponse();
            }

            $providerData = SocialService::supportedModules()[$guard] ?? null;

            logger()->info('Provider data lookup', [
                'guard' => $guard,
                'provider_found' => ! empty($providerData),
                'available_guards' => array_keys(SocialService::supportedModules()),
            ]);

            if (! $providerData) {
                logger()->error('Invalid guard configuration', [
                    'requested_guard' => $guard,
                    'available_guards' => array_keys(SocialService::supportedModules()),
                ]);

                return $this->httpResponse()
                    ->setError()
                    ->setMessage(__('Invalid guard configuration'))
                    ->toApiResponse();
            }

            $model = new $providerData['model']();

            logger()->info('Looking up existing user accounts', [
                'email' => $email,
                'facebook_id' => $facebookId,
                'model_class' => $model::class,
            ]);

            $account = $this->socialLoginService->findUserByEmail($email, $model::class);
            $socialLoginUser = $this->socialLoginService->findUserByProvider('facebook', $facebookId);

            logger()->info('User lookup results', [
                'account_found_by_email' => ! empty($account),
                'social_login_found' => ! empty($socialLoginUser),
                'account_id' => $account?->getKey(),
                'social_user_id' => $socialLoginUser?->user?->getKey(),
            ]);

            if ($socialLoginUser && ! $account) {
                $account = $socialLoginUser->user;
                logger()->info('Using account from social login user', [
                    'account_id' => $account?->getKey(),
                ]);
            }

            if (! $account) {
                logger()->info('Creating new user account', [
                    'email' => $email,
                    'name_from_facebook' => $facebookUserData['name'] ?? null,
                ]);

                $data = [
                    'name' => $facebookUserData['name'] ?? $email,
                    'email' => $email,
                    'password' => Hash::make(Str::random(36)),
                ];

                $data = apply_filters('social_login_before_saving_account', $data, (object) $facebookUserData, $providerData);

                logger()->info('Account data prepared', [
                    'data_keys' => array_keys($data),
                    'name' => $data['name'],
                    'email' => $data['email'],
                ]);

                $account = $model;
                $account->fill($data);
                $account->confirmed_at = Carbon::now();
                $account->save();

                logger()->info('New account created', [
                    'account_id' => $account->getKey(),
                    'email' => $account->email,
                    'name' => $account->name,
                ]);

                event(new Registered($account));
            } else {
                logger()->info('Using existing account', [
                    'account_id' => $account->getKey(),
                    'email' => $account->email,
                ]);
            }

            $socialLoginData = $this->socialLoginService->createSocialLoginData([
                'provider' => 'facebook',
                'id' => $facebookId,
                'token' => $accessToken,
                'refresh_token' => null,
                'expires_in' => null,
                'name' => $facebookUserData['name'] ?? $account->name,
                'email' => $email,
                'avatar' => $facebookUserData['picture']['data']['url'] ?? null,
            ]);

            logger()->info('Social login data created', [
                'provider' => 'facebook',
                'facebook_id' => $facebookId,
                'has_avatar' => ! empty($facebookUserData['picture']['data']['url']),
                'social_name' => $socialLoginData['provider_data']['name'] ?? 'unknown',
            ]);

            $hasSocialLogin = $this->socialLoginService->hasSocialLogin($account, 'facebook');

            if ($hasSocialLogin) {
                logger()->info('Updating existing social login');
                $this->socialLoginService->updateSocialLogin($account, 'facebook', $socialLoginData);
            } else {
                logger()->info('Adding new social login');
                $this->socialLoginService->addSocialLogin($account, $socialLoginData);
            }

            logger()->info('Creating authentication token for user', [
                'account_id' => $account->getKey(),
            ]);

            $token = $account->createToken('facebook-login')->plainTextToken;

            logger()->info('Facebook login successful', [
                'account_id' => $account->getKey(),
                'email' => $account->email,
                'token_created' => ! empty($token),
            ]);

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
            logger()->error('Facebook login validation error', [
                'errors' => $e->errors(),
                'message' => $e->getMessage(),
            ]);

            return $this->httpResponse()
                ->setError()
                ->setMessage($e->getMessage())
                ->withInput()
                ->toApiResponse();
        } catch (Exception $e) {
            logger()->error('Facebook login error: ' . $e->getMessage(), [
                'exception_class' => get_class($e),
                'file' => $e->getFile(),
                'line' => $e->getLine(),
                'trace' => $e->getTraceAsString(),
            ]);

            return $this->httpResponse()
                ->setError()
                ->setMessage(__('Facebook token invalid'))
                ->toApiResponse();
        }
    }

    protected function verifyFacebookToken(string $accessToken, string $appId, string $appSecret): ?array
    {
        try {
            logger()->info('Starting Facebook token verification', [
                'app_id' => $appId,
                'token_length' => strlen($accessToken),
                'token_starts_with' => substr($accessToken, 0, 20) . '...',
            ]);

            // First, try to get user info directly - this works for both access tokens and authentication tokens
            $userData = $this->getUserInfoFromFacebook($accessToken);

            if ($userData) {
                logger()->info('Facebook user info retrieved successfully via direct method', [
                    'user_id' => $userData['id'] ?? 'missing',
                    'user_email' => $userData['email'] ?? 'missing',
                ]);

                // For authentication tokens (JWT), we can't validate via debug_token, so we trust the user info
                if ($this->isAuthenticationToken($accessToken)) {
                    logger()->info('Detected Facebook authentication token (JWT), skipping debug_token validation');

                    return $userData;
                }

                // For access tokens, validate via debug_token
                if ($this->validateAccessToken($accessToken, $appId, $appSecret, $userData['id'])) {
                    return $userData;
                }
            }

            logger()->error('Facebook token verification failed for all methods');

            return null;

        } catch (Exception $e) {
            logger()->error('Facebook token verification failed: ' . $e->getMessage(), [
                'exception_class' => get_class($e),
                'file' => $e->getFile(),
                'line' => $e->getLine(),
                'trace' => $e->getTraceAsString(),
            ]);

            return null;
        }
    }

    protected function isAuthenticationToken(string $token): bool
    {
        // Authentication tokens are JWTs with 3 parts separated by dots
        $parts = explode('.', $token);
        if (count($parts) !== 3) {
            return false;
        }

        try {
            // Try to decode the header to see if it's a JWT
            $header = json_decode(base64_decode(strtr($parts[0], '-_', '+/')), true);

            return isset($header['alg']) && isset($header['typ']) && $header['typ'] === 'JWT';
        } catch (Exception $e) {
            return false;
        }
    }

    protected function getUserInfoFromFacebook(string $accessToken): ?array
    {
        try {
            $userInfoUrl = 'https://graph.facebook.com/me';

            logger()->info('Making Facebook user info request', [
                'url' => $userInfoUrl,
                'fields' => 'id,name,email,picture',
            ]);

            $userResponse = Http::timeout(10)->get($userInfoUrl, [
                'fields' => 'id,name,email,picture',
                'access_token' => $accessToken,
            ]);

            if (! $userResponse->successful()) {
                logger()->error('Facebook user info request failed', [
                    'status' => $userResponse->status(),
                    'response' => $userResponse->body(),
                ]);

                return null;
            }

            logger()->info('Facebook user info request successful');

            $userData = $userResponse->json();

            logger()->info('Facebook user data received', [
                'user_data_keys' => array_keys($userData),
                'has_id' => isset($userData['id']),
                'has_email' => isset($userData['email']),
                'has_name' => isset($userData['name']),
                'has_picture' => isset($userData['picture']),
                'user_id' => $userData['id'] ?? 'missing',
                'user_email' => $userData['email'] ?? 'missing',
            ]);

            if (! isset($userData['id'])) {
                logger()->error('Facebook user data missing ID', [
                    'user_data' => $userData,
                ]);

                return null;
            }

            return $userData;

        } catch (Exception $e) {
            logger()->error('Facebook user info request failed: ' . $e->getMessage(), [
                'exception_class' => get_class($e),
                'file' => $e->getFile(),
                'line' => $e->getLine(),
            ]);

            return null;
        }
    }

    protected function validateAccessToken(string $accessToken, string $appId, string $appSecret, string $expectedUserId): bool
    {
        try {
            $debugTokenUrl = 'https://graph.facebook.com/debug_token';

            logger()->info('Making Facebook debug token request', [
                'url' => $debugTokenUrl,
            ]);

            $debugResponse = Http::timeout(10)->get($debugTokenUrl, [
                'input_token' => $accessToken,
                'access_token' => $appId . '|' . $appSecret,
            ]);

            if (! $debugResponse->successful()) {
                logger()->error('Facebook debug token request failed', [
                    'status' => $debugResponse->status(),
                    'response' => $debugResponse->body(),
                ]);

                return false;
            }

            logger()->info('Facebook debug token request successful');

            $debugData = $debugResponse->json();
            $tokenData = $debugData['data'] ?? null;

            logger()->info('Facebook debug token response received', [
                'has_data' => ! empty($tokenData),
                'debug_data_keys' => array_keys($debugData),
            ]);

            if (! $tokenData) {
                logger()->error('Facebook debug token response missing data', [
                    'response' => $debugData,
                ]);

                return false;
            }

            logger()->info('Facebook token data validation', [
                'token_data_keys' => array_keys($tokenData),
                'is_valid' => $tokenData['is_valid'] ?? false,
                'app_id' => $tokenData['app_id'] ?? 'missing',
                'user_id' => $tokenData['user_id'] ?? 'missing',
                'expected_user_id' => $expectedUserId,
            ]);

            if (! ($tokenData['is_valid'] ?? false)) {
                logger()->error('Facebook token is not valid', [
                    'token_data' => $tokenData,
                ]);

                return false;
            }

            logger()->info('Facebook token validity check passed');

            if (($tokenData['app_id'] ?? '') !== $appId) {
                logger()->error('Facebook token app ID mismatch', [
                    'expected' => $appId,
                    'actual' => $tokenData['app_id'] ?? 'missing',
                ]);

                return false;
            }

            logger()->info('Facebook token app ID validation passed');

            if (($tokenData['user_id'] ?? '') !== $expectedUserId) {
                logger()->error('Facebook token user ID mismatch', [
                    'expected' => $expectedUserId,
                    'actual' => $tokenData['user_id'] ?? 'missing',
                ]);

                return false;
            }

            logger()->info('Facebook token user ID validation passed');

            return true;

        } catch (Exception $e) {
            logger()->error('Facebook access token validation failed: ' . $e->getMessage(), [
                'exception_class' => get_class($e),
                'file' => $e->getFile(),
                'line' => $e->getLine(),
            ]);

            return false;
        }
    }
}
