<?php

namespace Botble\Ecommerce\Http\Controllers\API;

use Botble\Ecommerce\Facades\Cart;
use Botble\Ecommerce\Facades\OrderHelper;
use Botble\Ecommerce\Http\Controllers\BaseController;
use Botble\Ecommerce\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends BaseController
{
    /**
     * Process Checkout
     *
     * Process the checkout for a specific cart ID. This endpoint restores the cart, generates an order token,
     * and redirects the user to the checkout page.
     *
     * @urlParam id string required The ID of the cart to process. Example: 12345
     * @authenticated
     *
     * @response 302 {}
     * @response 401 {
     *     "message": "Unauthenticated."
     * }
     * @response 404 {
     *     "message": "Cart not found."
     * }
     *
     * @param string $id
     * @param Request $request
     * @return mixed
     */
    public function process(string $id, Request $request)
    {
        Cart::instance('cart')->restore($id);

        $token = OrderHelper::getOrderSessionToken();

        $user = $request->user();

        if ($user instanceof Customer) {
            Auth::guard('customer')->login($user);
        }

        Cart::instance('cart')->store($id);

        return redirect()->to(route('public.checkout.information', $token));
    }
}
