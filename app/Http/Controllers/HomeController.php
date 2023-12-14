<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Section;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $sections = Section::all();
        $posts = Post::all();
        return view('land', compact('posts','sections'));
    }

}
