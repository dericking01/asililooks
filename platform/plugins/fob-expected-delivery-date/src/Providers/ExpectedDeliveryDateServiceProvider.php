<?php

namespace FriendsOfBotble\ExpectedDeliveryDate\Providers;

use Botble\Base\Traits\LoadAndPublishDataTrait;
use Illuminate\Support\ServiceProvider;

class ExpectedDeliveryDateServiceProvider extends ServiceProvider
{
    use LoadAndPublishDataTrait;

    public function boot(): void
    {
        $this->setNamespace('plugins/fob-expected-delivery-date')
            ->loadAndPublishConfigurations(['permissions'])
            ->loadMigrations()
            ->loadAndPublishTranslations()
            ->loadAndPublishViews()
            ->loadRoutes();

        $this->app->booted(function () {
            $this->app->register(HookServiceProvider::class);
        });
    }
}
