@extends('layouts.app')

@section('content')
    <img class="jumbo" src="{{ Vite::asset('resources/img/jumbotron.jpg') }}" alt="">

    <div class="card-container">
        <div class="container  py-4">
            <h2 class="title">Current Series</h2>
            <div class="row row-cols-6 g-3 mt-3">
                @foreach ($db as $single_db)
                    <div class="col">
                        <div class="card">
                            <img class="img_book" src="{{ $single_db['thumb'] }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{ $single_db['series'] }}</h5>
                                <p class="card-text">Prezzo: {{ $single_db['price'] }}</p>
                                <p class="card-text">Tipologia: {{ $single_db['type'] }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="bottone">
                    <a href="/"><button>BACK</button></a>
                </div>
            </div>
        </div>
    </div>
@endsection
