<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;

class Allan extends Facade
{

    public static function getFacadeAccessor()
    {
        return 'name';
    }
}