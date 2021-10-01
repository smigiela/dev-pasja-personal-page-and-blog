@extends('layouts.frontend')
@section('content')
    <div class="blog-post">
        <div class="container">
            <h3 class="blog-post-title">{{$post->title}}</h3>
            <div class="blog-post-header">
                <div class="blog-post-author">
                    <img src="images/uifaces/9.jpg">
                    by <span>Daniel Śmigiela</span>
                </div>
                <div class="blog-post-date">
                    <span>{{ \Carbon\Carbon::make($post->published_at)->format('d-m-Y H:m') }}</span>
                </div>
                <div class="blog-post-share">
                    Share this post:
                    <a href="#">
                        <i class="ion-social-twitter"></i>
                    </a>
                    <a href="#">
                        <i class="ion-social-facebook"></i>
                    </a>
                    <a href="#">
                        <i class="ion-social-buffer"></i>
                    </a>
                </div>
            </div>

            <div class="blog-post-content">
                <p class="font-weight-bold">{{$post->description}}</p>
                <div>{!! $post->body !!}</div>
                <div class="blog-post-gallery">
                    <div class="row">
                        <div class="col-sm-6">
                            <img src="images/unsplash/photo-1470274038469-958113db2384.jpg" class="zoomerang" style="width: 100%;" data-trigger="zoomerang">
                        </div>
                        <div class="col-sm-6">
                            <img src="images/unsplash/photo-1466854076813-4aa9ac0fc347.jpg" class="zoomerang" style="width: 100%;" data-trigger="zoomerang">
                            <img src="images/unsplash/photo-1467659226669-a1360d97be2d.jpg" class="zoomerang" style="width: 100%; margin-top:45px;" data-trigger="zoomerang">
                        </div>
                    </div>
                </div>
                <div class="blog-post-video">
                    <iframe src="https://player.vimeo.com/video/24456787" height="440" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
@endsection
