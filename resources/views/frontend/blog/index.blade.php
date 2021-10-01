@extends('frontend.blog.blog-layout')
@section('posts')

@foreach($posts as $post)
    <div class="post">
        <a href="blog-post.html" class="pic">
            <div style="background-image:url(https://images.unsplash.com/photo-1633114078244-353b1ce7b096?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1471&q=80);"></div>
        </a>

        <div class="title">
            <a href="{{route('blog.post', $post)}}">{{ $post->title }}</a>
        </div>
        <div class="author">
            <img src="images/uifaces/11.jpg" class="avatar" alt="author" />
            {{ $post->author->name }}, {{ \Carbon\Carbon::make($post->published_at)->format('d-m-Y H:m') }}
            | Opublikowano w kategorii: <div class="badge badge-info">{{ $post->category->name }}</div>
        </div>
        <p class="intro">
            {{ $post->description }}...
        </p>
        <a href="{{route('blog.post', $post)}}" class="continue-reading">Continue reading this post</a>
    </div>
@endforeach
<div class="pages">
    {{ $posts->links() }}
</div>
{{--<div class="post">
    <div class="video">
        <div class="iframe-wrapper">
            <iframe src="https://player.vimeo.com/video/24456787" width="750" height="420" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
        </div>
    </div>

    <div class="title">
        <a href="blog-post.html">Discover what is beyond our Solar System</a>
    </div>
    <div class="author">
        <img src="images/uifaces/13.jpg" class="avatar" alt="author" />
        Erica Wilson, October 11, 2015
    </div>
    <p class="intro">
        By Ed Hawkins, University of Reading. Climate change is often seen as a recent phenomenon, but its roots are actually far older — the stuff that is currently happening is beyond my understanding.
        <br />
        Some people say design is about solving problems. Obviously designers solve problems but so do dentists. Design is about cultural invention.
    </p>
    <a href="blog-post.html" class="continue-reading">Continue reading this post</a>
</div>

<div class="post">
    <a href="blog-post.html" class="pic">
        <div style="background-image:url('images/unsplash/photo-1454942901704-3c44c11b2ad1.jpg');"></div>
    </a>

    <div class="title">
        <a href="blog-post.html">How to get really good at programming</a>
    </div>
    <div class="author">
        <img src="images/uifaces/10.jpg" class="avatar" alt="author" />
        Amanda Johnson, September 23, 2015
    </div>
    <p class="intro">
        By Ed Hawkins, University of Reading. Climate change is often seen as a recent phenomenon, but its roots are actually far older — the stuff that is currently happening is beyond my understanding.
    </p>
    <a href="blog-post.html" class="continue-reading">Continue reading this post</a>
</div>

<div class="post">
    <a href="blog-post.html" class="pic">
        <div style="background-image:url('images/unsplash/photo-1470753937643-efeb931202a9.jpg');"></div>
    </a>

    <div class="title">
        <a href="blog-post.html">Get healthy riding a bicycle everyday</a>
    </div>
    <div class="author">
        <img src="images/uifaces/14.jpg" class="avatar" alt="author" />
        Benjamin Andrews, August 16, 2015
    </div>
    <p class="intro">
        By Ed Hawkins, University of Reading. Climate change is often seen as a recent phenomenon, but its roots are actually far older — the stuff that is currently happening is beyond my understanding.
        <br />
        Some people say design is about solving problems. Obviously designers solve problems but so do dentists. Design is about cultural invention.
    </p>
    <a href="blog-post.html" class="continue-reading">Continue reading this post</a>
</div>

<div class="post">
    <a href="blog-post.html" class="pic">
        <div style="background-image:url('images/unsplash/photo-1442965416224-f6a7eca980fa.jpg');"></div>
    </a>

    <div class="title">
        <a href="blog-post.html">Top 10 blog posts for digital marketing</a>
    </div>
    <div class="author">
        <img src="images/uifaces/15.jpg" class="avatar" alt="author" />
        Drew Williams, August 16, 2015
    </div>
    <p class="intro">
        By Ed Hawkins, University of Reading. Climate change is often seen as a recent phenomenon, but its roots are actually far older — the stuff that is currently happening is beyond my understanding.
        <br />
        Some people say design is about solving problems. Obviously designers solve problems but so do dentists. Design is about cultural invention.
    </p>
    <a href="blog-post.html" class="continue-reading">Continue reading this post</a>
</div>--}}

@endsection
