@extends('layout.app')

@section('content')
    @include('partials.jumbotron')

    <div class="comic-thumb-section">
        <div class="container">
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


@endsection
