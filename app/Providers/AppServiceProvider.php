<?php

namespace App\Providers;

use App\Models\Blog\Category;
use App\Models\Blog\Post;
use App\Observers\PostObserver;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Paginator::useBootstrap();

        View::composer('frontend.blog.*', function($view){
           $view->with('categories', Category::all());
        });

        Post::observe(PostObserver::class);
    }
}
