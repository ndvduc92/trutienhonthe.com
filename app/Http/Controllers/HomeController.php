<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Char;

class HomeController extends Controller
{
    public function home()
    {
        $chars = Char::orderBy("level", "DESC")->limit(10)->get();
        $posts = Post::latest()->limit(5)->get();
        return view('home', compact("posts", "chars"));
    }

    public function news()
    {
        $posts = Post::latest()->paginate(10);
        if (request()->q) {
            $posts = Post::where("title", "LIKE", "%".request()->q."%")->latest()->paginate(10);
        }
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
