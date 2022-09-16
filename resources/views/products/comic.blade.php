@extends('layouts.main')

@section('title', $comic['title'])

@section('comics')
    <section class="comic-page">

        {{-- BARRA SFONDO BLU --}}
        <div class="blue-bg"></div>


        {{-- thumb --}}
        <div class="thumb">
            <div class="small-container">
                {{-- img --}}
                <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">

                {{-- label --}}
                <div id="comic-book" class="label">comic book</div>
                <div id="view-gallery" class="label">view galley</div>
            </div>
        </div>


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
    </section>
@endsection
