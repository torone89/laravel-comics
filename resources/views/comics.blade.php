@extends('layouts.main')


@section('comics')
    @foreach ($comics as $comics)
        <div class="cards-box">

            <div class="cards">
                <h4>{{ $comics['title'] }}</h4>
                {{-- <img src="{{ $comics['thumb'] }}" alt=""> --}}
                <h6>{{ $comics['series'] }}</h6>
                <p>{{ $comics['price'] }}</p>
            </div>
            <p>{{ $comics['description'] }}</p>


        </div>
    @endforeach
@endsection
