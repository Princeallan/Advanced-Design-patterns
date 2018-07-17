<?php

namespace App\Repositories;

use App\Blog;

class BlogRepository
{

    public function getAll()
    {
        $blog = Blog::orderBy('created_at', 'desc')->paginate(4)->all();
        return $blog;
    }
    public function create($request)
    {
        $blog = new Blog();
        $blog->title = $request['title'];
        $blog->body = $request['body'];
        $blog->user_id= auth()->id();
        $blog->save();

        return $blog;
    }

    public function update(Request $request, $id){
//        $blog = Blog::find($id);
//        $blog->update($request->all());
    }

    public function getOnePost($id){
        // get one post
        return Blog::find($id);
    }

    public function remove($id){

//        $blog = $this->getOnePost($id);
//
//        //check correct user
//
//        $blog->delete();
    }

}