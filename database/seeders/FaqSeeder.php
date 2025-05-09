<?php

namespace Database\Seeders;

use Botble\Base\Supports\BaseSeeder;
use Botble\Faq\Models\Faq;
use Botble\Faq\Models\FaqCategory;

class FaqSeeder extends BaseSeeder
{
    public function run(): void
    {
        Faq::query()->truncate();
        FaqCategory::query()->truncate();

        $categories = [
            [
                'name' => 'SHIPPING',
            ],
            [
                'name' => 'PAYMENT',
            ],
            [
                'name' => 'ORDER & RETURNS',
            ],
        ];

        foreach ($categories as $index => $value) {
            $value['order'] = $index;
            FaqCategory::query()->create($value);
        }

        $faqItems = [
            [
                'question' => 'What Shipping Methods Are Available?',
                'answer' => 'We deliver via bus, fast delivery services, plane, or train depending on your location.',
                'category_id' => 1,
            ],
            [
                'question' => 'Do You Ship Internationally?',
                'answer' => 'Yes, we ship worldwide.',
                'category_id' => 1,
            ],
            [
                'question' => 'How Long Will It Take To Get My Package?',
                'answer' => 'Your order will arrive in minimal time — a salesperson will contact you with delivery details.',
                'category_id' => 1,
            ],
            [
                'question' => 'What Payment Methods Are Accepted?',
                'answer' => 'We accept Mobile Money, Bank transfers, and Cash on Delivery.',
                'category_id' => 2,
            ],
            [
                'question' => 'Is Buying On-Line Safe?',
                'answer' => 'Yes, we use secure payment gateways and encrypted connections to protect your data.',
                'category_id' => 2,
            ],
            [
                'question' => 'How do I place an Order?',
                'answer' => 'Just add products to your cart, proceed to checkout, and choose your preferred payment method.',
                'category_id' => 3,
            ],
            [
                'question' => 'How Can I Cancel Or Change My Order?',
                'answer' => 'You can easily edit or cancel your order from your dashboard before it is shipped.',
                'category_id' => 3,
            ],
            [
                'question' => 'Do I need an account to place an order?',
                'answer' => 'No, you’ll receive an order number and can track your purchase using our order tracking tool.',
                'category_id' => 3,
            ],
            [
                'question' => 'How Do I Track My Order?',
                'answer' => 'Use the tracking tool on our website and enter your order number for live updates.',
                'category_id' => 3,
            ],
            [
                'question' => 'How Can I Return a Product?',
                'answer' => 'Please contact us directly to arrange a return or exchange.',
                'category_id' => 3,
            ],
        ];

        foreach ($faqItems as $value) {
            Faq::query()->create($value);
        }
    }
}
