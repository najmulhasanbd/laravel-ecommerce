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

if (!function_exists('get_categories')) {
    function get_categories()
    {
        return Cache::remember('categories', 60 * 60, function () {
            return DB::table('categories')->where('status', 1)->limit(6)->get();
        });
    }
}
