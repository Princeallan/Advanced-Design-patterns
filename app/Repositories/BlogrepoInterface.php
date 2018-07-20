<?php
/**
 * Created by PhpStorm.
 * User: akirui
 * Date: 19/07/2018
 * Time: 09:33
 */

namespace App\Repositories;


class BlogrepoInterface
{

    public function getAll()
    {
       //...
    }
    public function create($request)
    {
       //...
    }

    public function update(Request $request, $id)
    {
        //...
    }

    public function getOnePost($id)
    {
        //...
    }
}