<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Blog\Post;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        $posts = Post::where('published_at', '<=', now())->take(3)->get();
        $posts->load('category');

        return view('frontend.home', compact('posts'));
    }

    public function aboutMe()
    {
        return view('frontend.pages.aboutMe');
    }

    public function contact()
    {
        return view('frontend.pages.contact');
    }
}
