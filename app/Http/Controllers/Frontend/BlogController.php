<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Blog\Category;
use App\Models\Blog\Post;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * @return View
     */
    public function index()
    {
        $posts = Post::with(['category' => function($query){
                        $query->select('id','slug','name');
                    }])
                ->orderBy('published_at')
                ->where('published_at', '>=', now())
                ->paginate(6);

        return view('frontend.blog.index', compact( 'posts'));
    }

    /**
     * @param Category $category
     * @return View
     */
    public function showCategory(Category $category)
    {
        $category->load(['posts' => function ($query) use (&$posts) {
            $posts = $query->orderBy('published_at')
                ->where('published_at', '>=', now())
                ->select('id', 'slug', 'title', 'description', 'published_at', 'category_id', 'author_id')
                ->paginate(6);
        }]);

        return view('frontend.blog.index', compact('category', 'posts'));
    }

    /**
     * @param Post $post
     * @return View
     */
    public function showPost(Post $post)
    {
        return view('frontend.blog.show', compact('post'));
    }
}
