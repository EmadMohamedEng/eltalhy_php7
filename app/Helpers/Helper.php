<?php
namespace App\Helpers;

use App\Setting;

class Helper
{
    public static function get_setting_by_key($key)
    {
        $setting = Setting::where('key', $key)->first()->value;
        return $setting ?? null;
    }
}
