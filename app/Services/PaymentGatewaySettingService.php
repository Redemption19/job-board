<?php

namespace App\Services;

use App\Models\PaymentSetting;
use Cache;
use Illuminate\Support\Facades\Schema;

class PaymentGatewaySettingService {

    function getSettings() {
        if (!Schema::hasTable('payment_settings')) {
            return []; // Return an empty array or default settings if table does not exist
        }

        return Cache::rememberForever('gatewaySettings', function() {
            return PaymentSetting::pluck('value', 'key')->toArray(); // ['key' => 'value']
        });
    }

    function setGlobalSettings() {
        $settings = $this->getSettings();
        config()->set('gatewaySettings', $settings);
    }

    function clearCachedSettings() : void {
        Cache::forget('gatewaySettings');
    }
}
