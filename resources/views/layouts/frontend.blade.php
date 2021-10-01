<!doctype html>
<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

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
