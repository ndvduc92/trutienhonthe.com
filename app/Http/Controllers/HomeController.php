<?php

namespace App\Http\Controllers;

use App\Models\Post;

class HomeController extends Controller
{
    public function home()
    {
        $posts = Post::latest()->limit(5)->get();
        return view('home', compact("posts"));
    }

    public function news()
    {
        $posts = Post::latest()->limit(5)->get();
        return view('news', compact("posts"));
    }

    public function new($slug)
    {
        $post = Post::where("slug", $slug)->first();
        return view('new', compact("post"));
    }

    public function download()
    {
        return view('download');
    }

    public function library()
    {
        return view('library');
    }

    public function event()
    {
        return view('event');
    }
}
