<?php

namespace Botble\Ecommerce\Http\Controllers\Settings;

use Botble\Base\Supports\Breadcrumb;
use Botble\Ecommerce\Facades\EcommerceHelper;
use Botble\Setting\Http\Controllers\SettingController as BaseSettingController;

abstract class SettingController extends BaseSettingController
{
    protected function breadcrumb(): Breadcrumb
    {
        return parent::breadcrumb()
            ->add(trans('plugins/ecommerce::setting.ecommerce'));
    }

    protected function saveSettings(array $data, string $prefix = ''): void
    {
        parent::saveSettings($data, EcommerceHelper::getSettingPrefix());
    }
}
