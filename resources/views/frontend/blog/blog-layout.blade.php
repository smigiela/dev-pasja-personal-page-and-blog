@extends('layouts.frontend')
@section('content')

@include('frontend.blog.partials.blog-nav')

    <div class="blog-sidebar-posts">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    @yield('posts')
                </div>
                <div class="col-lg-3 sidebar">
                    @include('frontend.blog.partials.blog-sidebar')
                </div>
            </div>
        </div>
    </div>

@endsection
