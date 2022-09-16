@extends('layouts.main')


@section('comics')
    <div class="comics-details">
        <div class="cards-box">

            <div class="cards">
                <h4>{{ $comic['title'] }}</h4>
                <img src="{{ $comic['thumb'] }}" alt="">
                <h6>{{ $comic['series'] }}</h6>
                <p>{{ $comic['price'] }}</p>
            </div>
            <p>{{ $comic['description'] }}</p>


        </div>

    </div>
@endsection
