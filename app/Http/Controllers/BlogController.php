<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Repositories\BlogRepository;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    private $blogRep;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct(BlogRepository $blogRepository)
    {
        $this->blogRep = $blogRepository;
    }

    public function index()
    {
        $blogs = $this->blogRep->getAll();
        return view('index', ['blogs' => $blogs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blogs.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        $this->validate($request, [
//            'title' => 'required|max:255 ',
//            'body' => 'required',
//        ]);

        Blog::create($request->all());

        return 'Successfully Done';
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Blog $blog
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
//        $blog = Blog::find($id)->first();
        $blog = $this->blogRep->getOnePost($id);

        // show the view and pass the nerd to it
        return View('blogs.show')->with('blog', $blog);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Blog $blog
     * @return \Illuminate\Http\Response
     */
    public function edit($id )
    {
        $blog = Blog::find($id);
        return view('blogs.edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Blog $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $blog = Blog::find($id);
        $blog->update($request->all());
        return redirect()->route('blogs.show', ["id" => $blog->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Blog $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog = $this->blogRep->getOnePost($id);
        //check correct user

        $blog->delete();
        return redirect('/home')->with('success', 'Post Removed ');
    }
}
