@extends('layouts.frontend')
@section('content')
    <div class="agency-about-hero">
        <section class="container">
            <div class="row">
                <div class="hero-text">
                    <p class="customFadeInUp">
                        Nazywam się Daniel Śmigiela, cały czas się uczę pisać kod, chcę aby z każdym dniem kod mój stawał się
                        coraz lepszy. <br />
                        Obecnie piszę w PHP z nastawieniem na framework Laravel. Liznąłem troszkę Python'a i nie wykluczone,
                        że jeszcze do tego języka powrócę ;)
                    </p>
                </div>
            </div>
        </section>
    </div>

    <div class="agency-about-intro">
        <div class="container">
            <p>
                Zapraszam na  <a href="{{route('blog.index')}}" class="btn-pill btn-pill-primary btn-pill-lg">blog!</a>
            </p>
        </div>
    </div>

@endsection
