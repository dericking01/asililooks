<?php

namespace Database\Seeders;

use Botble\Base\Supports\BaseSeeder;
use Botble\Widget\Database\Traits\HasWidgetSeeder;
use Botble\Widget\Models\Widget as WidgetModel;

class WidgetSeeder extends BaseSeeder
{
    use HasWidgetSeeder;

    public function run(): void
    {
        WidgetModel::query()->truncate();

        $data = [
            [
                'widget_id' => 'SiteInfoWidget',
                'sidebar_id' => 'footer_sidebar',
                'position' => 0,
                'data' => [
                    'id' => 'SiteInfoWidget',
                    'name' => 'Asili-Looks – Your Online Beauty Store',
                    'about' => 'We are a Tanzanian online beauty store that offers a wide range of beauty products, including skincare, haircare, and cosmetics. Our mission is to provide high-quality products at affordable prices, making beauty accessible to everyone.',
                    'logo' => 'general/asiliog.png',
                    'phone' => '0747-341-614',
                    'address' => "Mwenge Tower, \nKigamboni, \nMbezi Mwisho \n ~~~ Dar es Salaam, Tanzania",
                    'address_link' => 'https://goo.gl/maps/2v1xk4Y5Z3Q2',
                    'instagram' => 'https://www.instagram.com/asililooks',
                    'email' => 'sales@asililooks.co.tz',
                    'working_time' => 'Mon - Sat: 07AM - 09PM',
                ],
            ],
            [
                'widget_id' => 'CustomMenuWidget',
                'sidebar_id' => 'footer_sidebar',
                'position' => 1,
                'data' => [
                    'id' => 'CustomMenuWidget',
                    'name' => 'Useful Links',
                    'menu_id' => 'useful-links',
                ],
            ],
            [
                'widget_id' => 'CustomMenuWidget',
                'sidebar_id' => 'footer_sidebar',
                'position' => 2,
                'data' => [
                    'id' => 'CustomMenuWidget',
                    'name' => 'Help Center',
                    'menu_id' => 'help-center',
                ],
            ],
            [
                'widget_id' => 'CustomMenuWidget',
                'sidebar_id' => 'footer_sidebar',
                'position' => 3,
                'data' => [
                    'id' => 'CustomMenuWidget',
                    'name' => 'Business',
                    'menu_id' => 'business',
                ],
            ],
            [
                'widget_id' => 'NewsletterWidget',
                'sidebar_id' => 'footer_sidebar',
                'position' => 4,
                'data' => [
                    'id' => 'NewsletterWidget',
                    'title' => 'Newsletter',
                    'subtitle' => 'Register now to get updates on promotions and coupon. Don’t worry! We not spam',
                ],
            ],
            [
                'widget_id' => 'BlogSearchWidget',
                'sidebar_id' => 'primary_sidebar',
                'position' => 1,
                'data' => [
                    'id' => 'BlogSearchWidget',
                    'name' => 'Search',
                ],
            ],
            [
                'widget_id' => 'BlogCategoriesWidget',
                'sidebar_id' => 'primary_sidebar',
                'position' => 2,
                'data' => [
                    'id' => 'BlogCategoriesWidget',
                    'name' => 'Categories',
                ],
            ],
            [
                'widget_id' => 'RecentPostsWidget',
                'sidebar_id' => 'primary_sidebar',
                'position' => 3,
                'data' => [
                    'id' => 'RecentPostsWidget',
                    'name' => 'Recent Posts',
                ],
            ],
            [
                'widget_id' => 'BlogTagsWidget',
                'sidebar_id' => 'primary_sidebar',
                'position' => 4,
                'data' => [
                    'id' => 'BlogTagsWidget',
                    'name' => 'Popular Tags',
                ],
            ],
            [
                'widget_id' => 'SiteFeaturesWidget',
                'sidebar_id' => 'pre_footer_sidebar',
                'position' => 1,
                'data' => [
                    'id' => 'SiteFeaturesWidget',
                    'title' => 'Site Features',
                    'data' => [
                        1 => [
                            'icon' => 'general/icon-rocket.png',
                            'title' => 'Free Shipping',
                            'subtitle' => 'For all orders over 2M',
                        ],
                        2 => [
                            'icon' => 'general/icon-reload.png',
                            'title' => '1 & 1 Returns',
                            'subtitle' => 'Cancellation after 1 day',
                        ],
                        3 => [
                            'icon' => 'general/icon-protect.png',
                            'title' => '100% Secure Payment',
                            'subtitle' => 'Guarantee secure payments',
                        ],
                        4 => [
                            'icon' => 'general/icon-support.png',
                            'title' => '24/7 Dedicated Support',
                            'subtitle' => 'Anywhere & anytime',
                        ],
                        5 => [
                            'icon' => 'general/icon-tag.png',
                            'title' => 'Daily Offers',
                            'subtitle' => 'Discount up to 70% OFF',
                        ],
                    ],
                ],
            ],
            [
                'widget_id' => 'AdsWidget',
                'sidebar_id' => 'products_list_sidebar',
                'position' => 1,
                'data' => [
                    'id' => 'AdsWidget',
                    'title' => 'Ads',
                    'ads_key' => 'ZDOZUZZIU7FZ',
                    'background' => 'general/background.jpg',
                    'size' => 'full-width',
                ],
            ],
            [
                'widget_id' => 'SiteFeaturesWidget',
                'sidebar_id' => 'product_detail_sidebar',
                'position' => 1,
                'data' => [
                    'id' => 'SiteFeaturesWidget',
                    'title' => 'Site Features',
                    'data' => [
                        1 => [
                            'icon' => 'general/icon-rocket.png',
                            'title' => 'Free Shipping',
                            'subtitle' => 'For all orders over $200',
                        ],
                        2 => [
                            'icon' => 'general/icon-reload.png',
                            'title' => '1 & 1 Returns',
                            'subtitle' => 'Cancellation after 1 day',
                        ],
                        3 => [
                            'icon' => 'general/icon-protect.png',
                            'title' => 'Secure Payment',
                            'subtitle' => 'Guarantee secure payments',
                        ],
                    ],
                ],
            ],
            [
                'widget_id' => 'SiteInfoWidget',
                'sidebar_id' => 'product_detail_sidebar',
                'position' => 2,
                'data' => [
                    'id' => 'SiteInfoWidget',
                    'name' => 'Store information',
                    'phone' => '0747-341-614',
                    'working_time' => 'Mon - Sat: 07AM - 09PM',
                ],
            ],
            // [
            //     'widget_id' => 'BecomeVendorWidget',
            //     'sidebar_id' => 'product_detail_sidebar',
            //     'position' => 3,
            //     'data' => [
            //         'id' => 'BecomeVendorWidget',
            //         'name' => 'Become a Vendor?',
            //     ],
            // ],
            // [
            //     'widget_id' => 'ProductCategoriesWidget',
            //     'sidebar_id' => 'bottom_footer_sidebar',
            //     'position' => 1,
            //     'data' => [
            //         'id' => 'ProductCategoriesWidget',
            //         'name' => 'Consumer Electric',
            //         'categories' => [18, 2, 3, 4, 5, 6, 7],
            //     ],
            // ],
            // [
            //     'widget_id' => 'ProductCategoriesWidget',
            //     'sidebar_id' => 'bottom_footer_sidebar',
            //     'position' => 2,
            //     'data' => [
            //         'id' => 'ProductCategoriesWidget',
            //         'name' => 'Clothing & Apparel',
            //         'categories' => [8, 9, 10, 11, 12],
            //     ],
            // ],
            // [
            //     'widget_id' => 'ProductCategoriesWidget',
            //     'sidebar_id' => 'bottom_footer_sidebar',
            //     'position' => 3,
            //     'data' => [
            //         'id' => 'ProductCategoriesWidget',
            //         'name' => 'Home, Garden & Kitchen',
            //         'categories' => [13, 14, 15, 16, 17],
            //     ],
            // ],
            // [
            //     'widget_id' => 'ProductCategoriesWidget',
            //     'sidebar_id' => 'bottom_footer_sidebar',
            //     'position' => 4,
            //     'data' => [
            //         'id' => 'ProductCategoriesWidget',
            //         'name' => 'Health & Beauty',
            //         'categories' => [20, 21, 22, 23, 24],
            //     ],
            // ],
            // [
            //     'widget_id' => 'ProductCategoriesWidget',
            //     'sidebar_id' => 'bottom_footer_sidebar',
            //     'position' => 5,
            //     'data' => [
            //         'id' => 'ProductCategoriesWidget',
            //         'name' => 'Computer & Technologies',
            //         'categories' => [25, 26, 27, 28, 29, 19],
            //     ],
            // ],
        ];

        $this->createWidgets($data);
    }
}
