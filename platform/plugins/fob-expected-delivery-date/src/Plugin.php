<?php

namespace FriendsOfBotble\ExpectedDeliveryDate;

use Botble\PluginManagement\Abstracts\PluginOperationAbstract;
use Illuminate\Support\Facades\Schema;

class Plugin extends PluginOperationAbstract
{
    public static function remove(): void
    {
        Schema::dropIfExists('ec_delivery_estimates');
    }
}
