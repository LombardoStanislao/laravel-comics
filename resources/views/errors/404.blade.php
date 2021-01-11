@extends('layout.app')

@section('content')
    @include('partials.jumbotron')
    <section>
        <div class="container">
            <div class="error-page">

                <h1>Ops! Questa pagina non è stata trovata</h1>
                <a href="{{ route('homepage') }}" class="button error">Torna in Homepage</a>

            </div>

        </div>
    </section>
@endsection
