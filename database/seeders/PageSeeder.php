<?php

namespace Database\Seeders;

use Botble\Base\Facades\Html;
use Botble\Base\Supports\BaseSeeder;
use Botble\Page\Database\Traits\HasPageSeeder;

class PageSeeder extends BaseSeeder
{
    use HasPageSeeder;

    public function run(): void
    {
        $faker = $this->fake();

        $pages = [
            [
                'name' => 'Home',
                'content' =>
                    Html::tag(
                        'div',
                        '[simple-slider key="home-slider" is_autoplay="yes" autoplay_speed="5000" ads="VC2C8Q1UGCBG" background="general/slider-bg.jpg"][/simple-slider]'
                    ) .
                    Html::tag(
                        'div',
                        '[featured-product-categories title="Browse by Category"][/featured-product-categories]'
                    ) .
                    Html::tag('div', '[featured-brands title="Featured Brands"][/featured-brands]') .
                    Html::tag('div', '[flash-sale title="Top Saver Today" flash_sale_id="1"][/flash-sale]') .
                    Html::tag(
                        'div',
                        '[product-category-products title="Just Landing" category_id="23"][/product-category-products]'
                    ) .
                    Html::tag(
                        'div',
                        '[theme-ads key_1="IZ6WU8KUALYD" key_2="ILSFJVYFGCPZ" key_3="ZDOZUZZIU7FT"][/theme-ads]'
                    ) .
                    Html::tag('div', '[featured-products title="Featured products"][/featured-products]') .
                    Html::tag('div', '[product-collections title="Essential Products"][/product-collections]') .
                    Html::tag('div', '[product-category-products category_id="18"][/product-category-products]') .
                    Html::tag(
                        'div',
                        '[featured-posts title="Asili Looks" background="general/blog-bg.jpg"
                        app_enabled="1"
                        app_title="Shop faster with AsiliLooks Store App"
                        app_description="Available on both iOS & Android"
                        app_bg="general/asiliog.jpg"
                        app_android_img="general/app-android.png"
                        app_android_link="#"
                        app_ios_img="general/app-ios.png"
                        app_ios_link="#"][/featured-posts]'
                    )
                ,
                'template' => 'homepage',
            ],
            [
                'name' => 'About us',
                'content' => Html::tag('div',
                    '<div style="max-width: 900px; margin: 0 auto; padding: 30px; background: #fffdf7; border-radius: 10px; box-shadow: 0 4px 20px rgba(0,0,0,0.05); font-family: Arial, sans-serif; color: #333; animation: fadeInUp 1.2s ease-in-out;">' .
            
                    '<h3 style="color: rgb(255, 186, 0); font-size: 32px; margin-bottom: 20px;">Welcome to Asili Looks</h3>' .
                    '<p style="font-size: 16px; line-height: 1.8; margin-bottom: 20px;">
                        Asili Looks is more than just a beauty shop — it is a celebration of natural elegance and African excellence. We specialize in high-quality skincare products and women’s beauty services such as braiding, makeup, and hair care, all delivered with love and authenticity.
                    </p>' .
            
                    '<h4 style="color: rgb(255, 186, 0); font-size: 22px; margin-top: 30px;">Our Mission</h4>' .
                    '<p style="font-size: 16px; line-height: 1.8;">To redefine beauty by empowering every woman to embrace her natural glow with confidence and pride.</p>' .
            
                    '<h4 style="color: rgb(255, 186, 0); font-size: 22px; margin-top: 30px;">What We Offer</h4>' .
                    '<p style="font-size: 16px; line-height: 1.8;">We offer a wide range of carefully curated beauty products, including organic skincare essentials, premium hair extensions, and salon-grade tools — all available through our e-shop and physical outlets.</p>' .
            
                    '<h4 style="color: rgb(255, 186, 0); font-size: 22px; margin-top: 30px;">Our Services</h4>' .
                    '<p style="font-size: 16px; line-height: 1.8;">At our salons, we provide professional braiding, makeup, facials, and personalized beauty consultations tailored to every skin type and style.</p>' .
            
                    '<h4 style="color: rgb(255, 186, 0); font-size: 22px; margin-top: 30px;">Why Choose Us?</h4>' .
                    '<ul style="font-size: 16px; line-height: 1.8; padding-left: 20px; margin-bottom: 20px;">
                        <li>Locally rooted, globally inspired</li>
                        <li>Authentic products sourced with care</li>
                        <li>Fast, reliable delivery across Tanzania and internationally</li>
                        <li>Friendly and professional customer service</li>
                    </ul>' .
            
                    '<p style="font-size: 16px; line-height: 1.8; font-style: italic;">
                        At Asili Looks, beauty is not just a look — it’s a lifestyle. Thank you for trusting us to walk with you on your beauty journey.
                    </p>' .
                    '</div>' .
            
                    // ✨ Add basic animation keyframes
                    '<style>
                        @keyframes fadeInUp {
                            0% {opacity: 0; transform: translateY(20px);}
                            100% {opacity: 1; transform: translateY(0);}
                        }
                    </style>'
                ),
            ],
            [
                'name' => 'Terms Of Use',
            ],
            [
                'name' => 'Terms & Conditions',
            ],
            [
                'name' => 'Refund Policy',
            ],
            [
                'name' => 'Blog',
                'content' => Html::tag('p', '---'),
                'template' => 'full-width',
            ],
            [
                'name' => 'FAQs',
                'content' => Html::tag('div', '[faq title="Frequently Asked Questions"][/faq]'),
            ],
            [
                'name' => 'Contact',
                'content' => Html::tag('div', '[google-map]Mwenge Tower, Mlimani City, DSM[/google-map]') .
                    Html::tag(
                        'div',
                        '[contact-info-boxes title="Contact Info" subtitle="Location" ' .
                        'name_1="Store" ' .
                        'address_1="Mwenge Tower, Mlimani City, DSM" ' .
                        'phone_1="(+255) 747-341-614" ' .
                        'email_1="sales@asililooks.co.tz" ' .
                        'name_2="Beauty Saloon" ' .
                        'address_2="Kigamboni, Ungindoni, DSM" ' .
                        'phone_2="(+255) 655-857-913" ' .
                        'name_3="Beauty Saloon" ' .
                        'address_3="Mbezi mwisho , DSM" ' .
                        'phone_3="(+255) 0718-320-355" ' .
                        'show_contact_form="1" ' .
                        '][/contact-info-boxes]'
                    ),
            ],
            [
                'name' => 'Cookie Policy',
                'content' => Html::tag('h3', 'EU Cookie Consent') .
                    Html::tag(
                        'p',
                        'To use this Website we are using Cookies and collecting some Data. To be compliant with the EU GDPR we give you to choose if you allow us to use certain Cookies and to collect some Data.'
                    ) .
                    Html::tag('h4', 'Essential Data') .
                    Html::tag(
                        'p',
                        'The Essential Data is needed to run the Site you are visiting technically. You can not deactivate them.'
                    ) .
                    Html::tag(
                        'p',
                        '- Session Cookie: PHP uses a Cookie to identify user sessions. Without this Cookie the Website is not working.'
                    ) .
                    Html::tag(
                        'p',
                        '- XSRF-Token Cookie: Laravel automatically generates a CSRF "token" for each active user session managed by the application. This token is used to verify that the authenticated user is the one actually making the requests to the application.'
                    ),
            ],
            // [
            //     'name' => 'Affiliate',
            // ],
            // [
            //     'name' => 'Career',
            // ],
//             [
//                 'name' => 'Coming soon',
//                 'content' => Html::tag(
//                     'div',
//                     sprintf('[coming-soon time="%s" title="We’re coming soon." subtitle="Currently we’re working on our brand new website and will be
//              launching soon." social_title="Connect us on social networks" image="general/coming-soon.jpg"][/coming-soon]', $this->now()->addYear()->toDateTimeString())
//                 ),
//                 'template' => 'coming-soon',
//             ],
        ];

        $this->createPages($pages);
    }
}
