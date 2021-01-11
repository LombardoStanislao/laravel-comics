@extends('layout.app')

@section('content')
    @include('partials.jumbotron')

    <div class="comic-thumb-section">
        <div class="small-container">
            <div class="comic-thumb-wrapper">
                <a href="#" class="comic-thumb">
                    <div class="comic-thumb-info">
                        <img src="{{$single_comic['thumb']}}" alt="{{$single_comic['title']}}">
                        <span class="text-uppercase">{{$single_comic['type']}}</span>
                        <span class="text-uppercase">view gallery</span>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <section id="comic-info-section">
        <div class="small-container">
            <div class="comic-info-wrapper">
                <h2 class="text-uppercase">{{$single_comic['title']}}</h2>

                <div class="comic-check">
                    <div class="price-section">
                        <div class="price">
                            <span>U.S. Price:</span>
                            <span>{{$single_comic['price']}}</span>
                        </div>
                        <span class="text-uppercase">available</span>
                    </div>
                    <a href="#" class="check-availability">
                        <span>Check availability </span>
                    </a>
                </div>

                <div class="comic-plot">
                    <p>{{$single_comic['description']}}</p>
                </div>
            </div>


            <div class="ads">
                <h4 class="text-uppercase">advertisement</h4>
                <a href="#">
                    <img src="{{ asset('images/adv.jpg')}}" alt="advertisement">
                </a>

            </div>
        </div>

    </section>

    <section id="comic-cast">
        <div class="small-container">
            <div class="talent">
                <h3>Talent</h3>
                <div class="art-by">
                    <div class="talent-tag">
                        <span>Art by:</span>
                    </div>
                    <div class="artist-list">
                        @foreach ($single_comic['artists'] as $key => $artist)
                            <a href="#">{{$artist}}</a>,
                        @endforeach
                    </div>

                </div>
                <div class="art-by">
                    <div class="talent-tag">
                        <span>Written by:</span>
                    </div>
                    <div class="artist-list">
                        @foreach ($single_comic['writers'] as $key => $writer)
                            <a href="#">{{$writer}}</a>,
                        @endforeach
                    </div>

                </div>
            </div>
            <div class="specs">
                <h3>Specs</h3>
                <div class="art-by">
                    <div class="specs-tag">
                        <span>Series:</span>
                    </div>
                    <div class="specs-list">
                            <a href="#" class="text-uppercase">{{$single_comic['series']}}</a>
                    </div>

                </div>
                <div class="art-by">
                    <div class="specs-tag">
                        <span>U.S. Price:</span>
                    </div>
                    <div class="specs-list">
                        <span>{{$single_comic['price']}}</span>
                    </div>

                </div>
                <div class="art-by">
                    <div class="specs-tag">
                        <span>On Sale Date:</span>
                    </div>
                    <div class="specs-list">
                        <span>{{$single_comic['sale_date']}}</span>
                    </div>

                </div>

            </div>
        </div>

    </section>

    <section id="comic-shop">
        <div class="small-container">
            <div class="button-wrapper">
                <div class="button-box">
                    <a href="#">
                        <h6 class="button-box-text text-uppercase">
                            digital comics
                        </h6>
                    </a>
                    <a href="#">
                        <span class="button-box-icon">

                        </span>
                    </a>
                </div>
                <div class="button-box">
                    <a href="#">
                        <h6 class="button-box-text text-uppercase">
                            shop dc
                        </h6>
                    </a>
                    <a href="#">
                        <span class="button-box-icon">

                        </span>
                    </a>
                </div>
                <div class="button-box">
                    <a href="#">
                        <h6 class="button-box-text text-uppercase">
                            comic shop locator
                        </h6>
                    </a>
                    <a href="#">
                        <span class="button-box-icon">

                        </span>
                    </a>
                </div>
                <div class="button-box">
                    <a href="#">
                        <h6 class="button-box-text text-uppercase">
                            subscriptions
                        </h6>
                    </a>
                    <a href="#">
                        <span class="button-box-icon">

                        </span>
                    </a>
                </div>
            </div>
        </div>
    </section>

@endsection
