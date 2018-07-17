<?php

namespace App\Http\Controllers;

use App\Repositories\BlogRepository;
use Illuminate\Support\Facades\Cache;
use Illuminate\Http\Request;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    private $blogRep;

    public function __construct(BlogRepository $blogRepository)
    {
        $this->blogRep = $blogRepository;
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = $this->blogRep->getAll();
        return view('home', ['blogs'=> $blogs]);
    }

    public function showProfile($id){

        $user = User::find($id);
//        $user = Cache::get('user:'.$id);

        return view('profile', compact('user'));

    }
}
