<?php

namespace App\Observers;

use App\Models\Blog\Post;
use Illuminate\Support\Str;

class PostObserver
{
    /**
     * @param Post $post
     */
    public function saving(Post $post)
    {
        $post->slug = Str::slug($post->title);
        $post->author_id = auth()->id();
    }
    /**
     * Handle the Post "created" event.
     *
     * @param  Post  $post
     * @return void
     */
    public function created(Post $post)
    {
        //
    }

    /**
     * Handle the Post "updated" event.
     *
     * @param  Post  $post
     * @return void
     */
    public function updated(Post $post)
    {
        //
    }

    /**
     * Handle the Post "deleted" event.
     *
     * @param  Post  $post
     * @return void
     */
    public function deleted(Post $post)
    {
        //
    }

    /**
     * Handle the Post "restored" event.
     *
     * @param  Post  $post
     * @return void
     */
    public function restored(Post $post)
    {
        //
    }

    /**
     * Handle the Post "force deleted" event.
     *
     * @param  Post  $post
     * @return void
     */
    public function forceDeleted(Post $post)
    {
        //
    }
}
