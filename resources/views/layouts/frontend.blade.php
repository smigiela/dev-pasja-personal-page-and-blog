<!doctype html>
<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="google-site-verification" content="uyME_q944OYOWyMCOobsUWto3ZerUUyrv4Zc_nvX8gI"/>

    <!-- Open Graph meta tags -->
    @if(Request::is('blog/kategoria/*'))
        <meta property="fb:app_id" content="549736456255485">
        <meta property="twitter:card" content="summary">
        <meta property="twitter:site" content="@SmigielaDaniel">
        <meta property="og:type" content="article">
        <meta property="og:title" content="{{$category->name ?? ''}}">
        <meta property="og:description" content="{{$category->description ?? ''}}">
        <meta property="og:image" content="{{asset('public/dev-pasja-icon_512.png')}}">
        <meta property="og:url" content="{{route('blog.category', $category->slug)}}">
    @elseif(Request::is('blog/*'))
        <meta property="fb:app_id" content="549736456255485">
        <meta property="twitter:card" content="summary">
        <meta property="twitter:site" content="@SmigielaDaniel">
        <meta property="og:type" content="article">
        <meta property="og:title" content="{{$post->title ?? ''}}">
        <meta property="og:description" content="{{$post->description ?? ''}}">
        @if($post->getFirstMedia('post_cover_image'))
            <meta property="og:image" content="{{$post->getFirstMediaUrl('post_cover_image')}}">
        @else
            <meta property="og:image" content="https://via.placeholder.com/200x120)">
        @endif
        <meta property="og:image" content="{{$post->getFirstMediaUrl('post_cover_image')}}">
        <meta property="og:url" content="{{route('blog.post', $post->slug)}}">

    @else
        <meta property="fb:app_id" content="549736456255485">
        <meta property="twitter:card" content="summary">
        <meta property="twitter:site" content="@SmigielaDaniel">
        <meta property="og:type" content="article">
        <meta property="og:title" content="{{ config('app.name', 'Dev Pasja') }} - Blog dla programistów">
        <meta property="og:description" content="Z miłosci do programowania - blog z poradami ze świata IT.">
        <meta property="og:image" content="{{asset('public/dev-pasja-icon_512.png')}}">
        <meta property="og:url" content="https://dev-pasja.pl">
    @endif

    <!-- Place favicon.ico and apple-touch-icon(s) in the root directory -->
    <link rel="shortcut icon" href="{{asset('public/dev-pasja-icon_512.png')}}">

    <!-- stylesheets -->
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/frontend/scss/bootstrap/bootstrap.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/frontend/dist/theme.min.css')}}"/>

    <!-- javascript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"
            integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
            crossorigin="anonymous"></script>
    <script src="{{asset('vendor/frontend/dist/theme.min.js')}}"></script>
    @yield('scripts')

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-F0YLEYEB3C"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());

        gtag('config', 'G-F0YLEYEB3C');
    </script>

    {{--Google AdSense api--}}
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-3636102536446258"
            crossorigin="anonymous">
    </script>
</head>
<body>

@include('frontend.partials.nav')

@yield('content')

@include('frontend.partials.footer')

<script type="text/javascript">
    $(function () {
        var trigger = new ScrollTrigger({
            toggle: {
                visible: 'customFadeInUp'
            },
            offset: {
                y: 150
            },
            once: true
        });
    });
</script>
{{--Facebook api--}}
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/pl_PL/sdk.js#xfbml=1&version=v12.0"
        nonce="FYouOzDW">
</script>
<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
<script>
    // (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
    // function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
    // e=o.createElement(i);r=o.getElementsByTagName(i)[0];
    // e.src='//www.google-analytics.com/analytics.js';
    // r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
    // ga('create','UA-XXXXX-X','auto');ga('send','pageview');
</script>


</body>

</html>
