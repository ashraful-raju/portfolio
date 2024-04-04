<?php

use App\Models\Setting;

if (!function_exists('settings')) {
    function settings($name, $default = null)
    {
        if (is_array($name)) {
            Setting::addItems($name);
        }

        return Setting::getItem($name, $default);
    }
}
