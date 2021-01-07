@extends('layout.app')

@section('content')
    @include('partials.jumbotron')

    <section id="series">
        <div class="container">
            <div class="title-section">
                <h2 class="text-uppercase">current series</h2>
            </div>
            <div class="card-wrapper">
                @foreach ($comics as $key => $comic)
                    <div class="card">
                        <div class="card-image">
                            <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title']}}">
                        </div>
                        <div class="card-name">
                            <p class="text-uppercase"> {{ $comic['series'] }} </p>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="load-more">
                <button type="button" name="button" class="text-uppercase">load more</button>
            </div>
        </div>

    </section>

    <section id="buy-sections">
        <div class="container">
            <div class="buy-menu">
                <div class="digital-comics">
                    <img src="{{ asset('images/buy-comics-digital-comics.png')}}" alt="smartphone e logo DC">
                    <p class="text-uppercase">digital comics</p>
                </div>
                <div class="digital-comics">
                    <img src="{{ asset('images/buy-comics-merchandise.png')}}" alt="smartphone e logo DC">
                    <p class="text-uppercase">dc merchandise</p>
                </div>
                <div class="digital-comics">
                    <img src="{{ asset('images/buy-comics-subscriptions.png')}}" alt="smartphone e logo DC">
                    <p class="text-uppercase">subscription</p>
                </div>
                <div class="digital-comics">
                    <img src="{{ asset('images/buy-comics-shop-locator.png')}}" alt="smartphone e logo DC">
                    <p class="text-uppercase">comic shop locator</p>
                </div>
                <div class="digital-comics">
                    <img src="{{ asset('images/buy-dc-power-visa.svg')}}" alt="smartphone e logo DC">
                    <p class="text-uppercase">dc power visa</p>
                </div>
            </div>
        </div>
    </section>
@endsection
