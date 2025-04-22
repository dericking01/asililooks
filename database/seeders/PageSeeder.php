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
