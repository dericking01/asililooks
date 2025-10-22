<?php

namespace Botble\Ecommerce\Http\Controllers\Customers;

use Botble\ACL\Traits\ResetsPasswords;
use Botble\Base\Http\Controllers\BaseController;
use Botble\Ecommerce\Forms\Fronts\Auth\ResetPasswordForm;
use Botble\SeoHelper\Facades\SeoHelper;
use Botble\Theme\Facades\Theme;
use Illuminate\Contracts\Auth\PasswordBroker;
use Illuminate\Contracts\Auth\StatefulGuard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;

class ResetPasswordController extends BaseController
{
    use ResetsPasswords;

    public string $redirectTo = '/';

    public function __construct()
    {
        $this->middleware('customer.guest');
    }

    public function showResetForm(Request $request, $token = null)
    {
        $title = __('Reset Password');
        SeoHelper::setTitle(theme_option('ecommerce_reset_password_seo_title') ?: $title)
            ->setDescription(theme_option('ecommerce_reset_password_seo_description'));

        Theme::breadcrumb()
            ->add($title, route('customer.password.reset'));

        return Theme::scope(
            'ecommerce.customers.passwords.reset',
            [
                'token' => $token,
                'email' => $request->input('email'),
                'form' => ResetPasswordForm::create(),
            ],
            'plugins/ecommerce::themes.customers.passwords.reset'
        )->render();
    }

    public function broker(): PasswordBroker
    {
        return Password::broker('customers');
    }

    protected function guard(): StatefulGuard
    {
        return auth('customer');
    }
}
