<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #0b2e13" role="navigation">
    <div class="container no-override">
        <a class="navbar-brand" href="{{route('home')}}">
            <img src="{{asset('images/logo_white.png')}}" class="d-none d-lg-inline mr-2 w-25" />
        </a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbar-collapse">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbar-collapse">
            <ul class="navbar-nav">
                <li class="nav-item {{ (request()->routeIs('home')) ? 'active' : '' }}">
                    <a href="{{route('home')}}" class="nav-link {{ (request()->is('')) ? 'active' : '' }}">
                        Strona domowa
                    </a>
                </li>
                <li class="nav-item {{ (request()->routeIs('blog.*')) ? 'active' : '' }}">
                    <a href="{{route('blog.index')}}" class="nav-link {{ (request()->is('blog')) ? 'active' : '' }}">
                        Blog
                    </a>
                </li>
                <li class="nav-item {{ (request()->routeIs('page.aboutme')) ? 'active' : '' }}">
                    <a href="{{route('page.aboutme')}}" class="nav-link">
                        O mnie
                    </a>
                </li>
                <li class="nav-item {{ (request()->routeIs('page.contact')) ? 'active' : '' }}">
                    <a href="{{route('page.contact')}}" class="nav-link">
                        Kontakt
                    </a>
                </li>
            </ul>

            <div class="social-box">
                <ul class="navbar-nav text-center">
                    <li class="nav-item">
                        <a class="social-link" href="https://www.facebook.com/devpasja" target="_blank">
                            <i class="ion-social-facebook"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="social-link" href="https://github.com/smigiela" target="_blank">
                            <i class="ion-social-github"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="social-link" href="https://instagram.com/smigiela_daniel" target="_blank">
                            <i class="ion-social-instagram"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
