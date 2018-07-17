<?php

namespace App\Facades;

class Allan extends \Illuminate\Support\Facades\Facade
{

    public static function getFacadeAccessor()
    {
        return 'name';
    }
}