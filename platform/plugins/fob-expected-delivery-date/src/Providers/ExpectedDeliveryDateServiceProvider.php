<?php

namespace FriendsOfBotble\ExpectedDeliveryDate\Providers;

use Botble\Base\Facades\PanelSectionManager;
use Botble\Base\PanelSections\PanelSectionItem;
use Botble\Base\Traits\LoadAndPublishDataTrait;
use Botble\Setting\PanelSections\SettingOthersPanelSection;
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

        PanelSectionManager::default()->beforeRendering(function (): void {
            PanelSectionManager::registerItem(
                SettingOthersPanelSection::class,
                fn () => PanelSectionItem::make('expected-delivery-date')
                    ->setTitle(trans('plugins/fob-expected-delivery-date::expected-delivery-date.settings.title'))
                    ->withIcon('ti ti-truck-delivery')
                    ->withDescription(trans('plugins/fob-expected-delivery-date::expected-delivery-date.settings.description'))
                    ->withPriority(180)
                    ->withRoute('expected-delivery-date.settings')
            );
        });

        $this->app->booted(function () {
            $this->app->register(HookServiceProvider::class);
        });
    }
}
