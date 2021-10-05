@extends('layouts.frontend')
@section('content')
    <div class="business-hero">
        <div class="container">
            <h2 class="customFadeInUp">
                Z miłości do programowania
            </h2>
            <p class="customFadeInUp">
                Świat IT jest na tyle obszerny, że każdego dnia człowiek się czegoś uczy. Uczmy się razem!
                <br/>
                Mam nadzieje, że na moim blogu znajdziesz coś na tyle wartościowego, co wspomoże Twój rozwój jako
                programisty!
            </p>

            <div class="actions customFadeInUp">
                <a href="{{route('blog.index')}}" class="btn-pill btn-pill-primary btn-pill-lg">Blog</a>
            </div>
        </div>
    </div>

    <div class="blog-cols-header">
        <div class="container">
            <h1>
                Najnowsze posty!
            </h1>
            <p>
                Sprawdź co w trawie piszczy!
            </p>
        </div>
    </div>

    <div class="blog-cols-wrapper">
        <div class="container">
            @forelse($posts as $post)
                <a href="{{route('blog.post', $post)}}" class="post">
                    <div class="post-wrapper">
                        @if($post->getFirstMedia('post_cover_image'))
                            <div class="post-bg" style="background-image:
                                url({{$post->getFirstMediaUrl('post_cover_image') }})">
                        @else
                            <div class="post-bg" style="background-image:
                                url(https://via.placeholder.com/200x200);">
                        @endif
                            </div>

                            <div class="post-intro">
                                <div class="post-title">
                                    {{$post->title}}
                                </div>
                                <div class="post-min-read">
                                    Opublikowane w kategorii: {{$post->category->name}}
                                    | {{ \Carbon\Carbon::make($post->published_at)->diffForHumans() }}
                                </div>
                                <p class="post-description">
                                    {{ \Illuminate\Support\Str::limit($post->description, 90) }}
                                </p>
                            </div>
                    </div>
                </a>
            @empty
                <p>Nie ma nic do pokazania</p>
            @endforelse
        </div>
    </div>
@endsection
