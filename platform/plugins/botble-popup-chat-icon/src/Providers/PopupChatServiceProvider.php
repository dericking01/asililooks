<?php

namespace Botble\PopupChat\Providers;

use Botble\Base\Supports\ServiceProvider;
use Botble\Base\Traits\LoadAndPublishDataTrait;
use Botble\Theme\Facades\Theme;

class PopupChatServiceProvider extends ServiceProvider
{
    use LoadAndPublishDataTrait;

    public function boot(): void
    {
        $this
            ->setNamespace('plugins/popup-chat')
            ->loadHelpers()
            ->loadAndPublishViews();

        $this->app->register(HookServiceProvider::class);

        Theme::asset()
            ->usePath(false)
            ->add(
                'popup-chat-css',
                asset('vendor/core/plugins/popup-chat/css/popup-chat.min.css')
            );

        add_filter(THEME_FRONT_FOOTER, function (string|null $data): string {
            return $data . view('plugins/popup-chat::show');
        });
    }
}
