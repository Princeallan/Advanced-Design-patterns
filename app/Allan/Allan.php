<?php
/**
 * Created by PhpStorm.
 * User: akirui
 * Date: 17/07/2018
 * Time: 12:00
 */

namespace App\Allan;


class Allan
{
    public function getName($value)
    {
        if ($value < 18)
            throw new Exception('Invalid age specified');
        $this->Age = $value;
    }
}