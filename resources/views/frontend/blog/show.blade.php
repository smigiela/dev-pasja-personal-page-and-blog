@extends('frontend.blog.blog-layout')
@section('posts')
    <div class="blog-post">
        <h3 class="blog-post-title">{{$post->title}}</h3>
        <div class="col-sm-12" style="padding: 0; !important;">
            <img src=
                 @if($post->getFirstMedia('post_cover_image'))
                     "{{$post->getFirstMediaUrl('post_cover_image') }}"
            @else
                "https://via.placeholder.com/200x120"
            @endif
            style="width: 100%;">
        </div>
        <div class="blog-post-header">
            <div class="blog-post-author">
                <img src="{{ $post->author->profile_photo_url }}">
                by <span>{{ $post->author->name }}</span>
            </div>
            <div class="blog-post-date">
                <span>{{ \Carbon\Carbon::make($post->published_at)->format('d-m-Y H:m') }}</span>
            </div>
            <div class="blog-post-share">
                <div class="fb-share-button" data-href="{{url()->current()}}"
                     data-layout="button" data-size="large">
                    <a target="_blank"
                       href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Flocalhost%3A8000%2Fblog%2F60&amp;src=sdkpreparse"
                       class="fb-xfbml-parse-ignore">Udostępnij
                    </a>
                </div>
            </div>
        </div>

        <div class="blog-post-content">
            <p class="font-weight-bold">{{$post->description}}</p>
            <div>{!! $post->body !!}</div>
{{--            <div class="blog-post-gallery">--}}
{{--                <div class="row">--}}
                    {{--                    <div class="col-sm-6">--}}
                    {{--                        <img src="{{$post->getFirstMediaUrl('post_cover_image')}}" class="zoomerang"--}}
                    {{--                             style="width: 100%;" data-trigger="zoomerang">--}}
                    {{--                    </div>--}}
                    {{--                    <div class="col-sm-6">--}}
                    {{--                        <img src="images/unsplash/photo-1466854076813-4aa9ac0fc347.jpg" class="zoomerang"--}}
                    {{--                             style="width: 100%;" data-trigger="zoomerang">--}}
                    {{--                        <img src="images/unsplash/photo-1467659226669-a1360d97be2d.jpg" class="zoomerang"--}}
                    {{--                             style="width: 100%; margin-top:45px;" data-trigger="zoomerang">--}}
                    {{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
            @if($post->video_url)
                <div class="blog-post-video">
                    <iframe src="{{$post->video_url}}" height="440" frameborder="0"
                            webkitallowfullscreen
                            mozallowfullscreen allowfullscreen></iframe>
                </div>
            @endif
        </div>
    </div>
@endsection
