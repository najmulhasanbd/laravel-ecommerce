<?php

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

if (!function_exists('get_settings')) {
    function get_settings()
    {
        return Cache::remember('settings', 60 * 60, function () {
            return DB::table('settings')->first();
        });
    }
}
