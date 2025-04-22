<?php

namespace Botble\PopupChat\Providers;

use Botble\Theme\Events\RenderingThemeOptionSettings;
use Illuminate\Support\ServiceProvider;

class HookServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->app['events']->listen(RenderingThemeOptionSettings::class, function (): void {
            add_action(RENDERING_THEME_OPTIONS_PAGE, [$this, 'addThemeOptions'], 55);
        });
    }

    public function addThemeOptions(): void
    {
        theme_option()
            ->setSection([
                'title' => __('Chat Button'),
                'id' => 'opt-text-subsection-chat-buttons',
                'subsection' => true,
                'icon' => 'fa fa-comments',
                'fields' => [
                    [
                        'id' => 'chat_btn_facebook',
                        'type' => 'text',
                        'label' => __('Link chat Facebook'),
                        'attributes' => [
                            'name' => 'chat_btn_facebook',
                            'value' => null,
                            'options' => [
                                'class' => 'form-control',
                            ],
                        ],
                    ],
                    [
                        'id' => 'chat_btn_zalo',
                        'type' => 'text',
                        'label' => __('Link Zalo'),
                        'attributes' => [
                            'name' => 'chat_btn_zalo',
                            'value' => null,
                            'options' => [
                                'class' => 'form-control',
                            ],
                        ],
                    ],
                    [
                        'id' => 'chat_btn_tiktok',
                        'type' => 'text',
                        'label' => __('Link Tiktok'),
                        'attributes' => [
                            'name' => 'chat_btn_tiktok',
                            'value' => null,
                            'options' => [
                                'class' => 'form-control',
                            ],
                        ],
                    ],
                    [
                        'id' => 'chat_btn_instagram',
                        'type' => 'text',
                        'label' => __('Link Inta'),
                        'attributes' => [
                            'name' => 'chat_btn_instagram',
                            'value' => null,
                            'options' => [
                                'class' => 'form-control',
                            ],
                        ],
                    ],
                ],
            ]);
    }
}
