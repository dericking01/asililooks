<?php

namespace FriendsOfBotble\ExpectedDeliveryDate\Http\Controllers\Settings;

use Botble\Base\Http\Responses\BaseHttpResponse;
use Botble\Base\Supports\Breadcrumb;
use Botble\Setting\Http\Controllers\SettingController;
use FriendsOfBotble\ExpectedDeliveryDate\Forms\Settings\ExpectedDeliveryDateSettingForm;
use FriendsOfBotble\ExpectedDeliveryDate\Http\Requests\Settings\ExpectedDeliveryDateSettingRequest;

class ExpectedDeliveryDateSettingController extends SettingController
{
    protected function breadcrumb(): Breadcrumb
    {
        return parent::breadcrumb()
            ->add(trans('plugins/fob-expected-delivery-date::expected-delivery-date.settings.title'), route('expected-delivery-date.settings'));
    }

    public function edit()
    {
        $this->pageTitle(trans('plugins/fob-expected-delivery-date::expected-delivery-date.settings.title'));

        return ExpectedDeliveryDateSettingForm::create()->renderForm();
    }

    public function update(ExpectedDeliveryDateSettingRequest $request): BaseHttpResponse
    {
        return $this->performUpdate($request->validated());
    }
}
