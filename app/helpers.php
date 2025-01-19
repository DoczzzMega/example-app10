<?php

use Illuminate\Support\Facades\Route;

if(! function_exists('test')) {
    function test()
    {
        return app('test');
    }
}

if(! function_exists('active_link')){
    function active_link(string $name, string $class = 'active'): string
    {
        return Route::is($name) ? $class : '';
    }
}

if(! function_exists('alert')){
    function alert(string $message, string $type = 'success'): void
    {
        session(['alert' => __($message), 'message_type' => $type]);
    }
}
