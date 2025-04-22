<?php

namespace Botble\Setting\Http\Controllers;

use Botble\Base\Http\Responses\BaseHttpResponse;
use Botble\Setting\Forms\CacheSettingForm;
use Botble\Setting\Http\Requests\CacheSettingRequest;
use Botble\Theme\Facades\SiteMapManager;

class CacheSettingController extends SettingController
{
    public function edit()
    {
        $this->pageTitle(trans('core/setting::setting.cache.title'));

        return CacheSettingForm::create()->renderForm();
    }

    public function update(CacheSettingRequest $request): BaseHttpResponse
    {
        $oldEnableCacheSiteMap = setting('enable_cache_site_map');
        $oldCacheTimeSiteMap = setting('cache_time_site_map');

        $response = $this->performUpdate($request->validated());

        // Clear sitemap cache if sitemap cache settings have changed
        if ($request->has('enable_cache_site_map') ||
            ($request->has('cache_time_site_map') && $oldCacheTimeSiteMap != $request->input('cache_time_site_map'))) {
            SiteMapManager::clearCache();
        }

        return $response;
    }
}
