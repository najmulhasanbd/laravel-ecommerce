<?php

use App\Models\Compare;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;

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


if (! function_exists('compareCount')) {
    function compareCount()
    {
        if (Auth::check()) {
            return Compare::where('user_id', Auth::id())->count();
        }
        return 0;
    }
}
