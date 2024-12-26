<?php

namespace App\Services\Facades;

use Illuminate\Support\Facades\Facade;

class TestServiceFacade extends Facade
{
    public static function getFacadeAccessor(): string
    {
        return 'test';
    }
}
