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
    <link rel="stylesheet" type="text/css" href="{{asset('public/vendor/frontend/scss/bootstrap/bootstrap.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('public/vendor/dist/theme.min.css')}}"/>

    <!-- javascript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"
            integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
            crossorigin="anonymous"></script>
    <script src="{{asset('public/vendor/frontend/dist/theme.min.js')}}"></script>
</head>
<body>

    <footer class="footer-big-menu" id="footer">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="cta text-center">
                        <h1 class="cta-title">
                            Getting started is easy. Create your account now.
                        </h1>
                        <a class="btn-shadow btn-shadow-info mr-md-1" href="#">
                            30 day free trial
                        </a>
                        <a class="btn-outline ml-md-1" href="#">
                            Explore features
                        </a>
                    </div>
                </div>
            </div>
            <div class="row menu">
                <div class="col-md-3 col-lg-2">
                    <h3 class="menu-title">Products</h3>
                    <a class="menu-link" href="#">Spacial Enterprise</a>
                    <a class="menu-link" href="#">Spacial Healthcare</a>
                    <a class="menu-link" href="#">Spacial Security</a>
                </div>
                <div class="col-md-3 col-lg-2">
                    <h3 class="menu-title">Features</h3>
                    <a class="menu-link" href="#">Employees</a>
                    <a class="menu-link" href="#">Integrations</a>
                    <a class="menu-link" href="#">Subscriptions</a>
                    <a class="menu-link" href="#">Online payments</a>
                    <a class="menu-link" href="#">Antifraud system</a>
                    <a class="menu-link" href="#">Pricing</a>
                </div>
                <div class="col-md-3 col-lg-2">
                    <h3 class="menu-title">Resources</h3>
                    <a class="menu-link" href="#">Support center</a>
                    <a class="menu-link" href="#">Documentation</a>
                    <a class="menu-link" href="#">API reference</a>
                    <a class="menu-link" href="#">Customer stories</a>
                </div>
                <div class="col-md-3 col-lg-2">
                    <h3 class="menu-title">About</h3>
                    <a class="menu-link" href="#">What we believe</a>
                    <a class="menu-link" href="#">Careers</a>
                    <a class="menu-link" href="#">Partners</a>
                    <a class="menu-link" href="#">Press kit</a>
                    <a class="menu-link" href="#">Media</a>
                </div>
                <div class="col-md-3 col-lg-2">
                    <h3 class="menu-title">Get in touch</h3>
                    <a class="menu-link" href="#">support@spacial.com</a>
                    <a class="menu-link" href="#">(123) 455-1123</a>
                    <a class="menu-link" href="#">9am - 6pm CST</a>
                </div>
                <div class="col-md-3 col-lg-2 text-center">
                    <a class="social-link" href="#">
                        <i class="ion-social-twitter"></i>
                    </a>
                    <a class="social-link" href="#">
                        <i class="ion-social-facebook"></i>
                    </a>
                    <a class="social-link" href="#">
                        <i class="ion-social-instagram"></i>
                    </a>
                </div>
            </div>
        </div>
        <span class="bottom">© 2019 Spacial Inc. All rights reserved. <a href="#">Terms of use</a></span>
    </footer>

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
