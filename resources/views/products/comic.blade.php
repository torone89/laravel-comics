@extends('layouts.main')
@section('cnds')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
@endsection
@section('title', $comic['title'])



@section('comics')
    <section id="comic-page">

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
        {{-- title and description --}}

        <div class="small-container">

            <div class="row">

                {{-- info, price and description --}}
                <div class="col-8">
                    {{-- current series title --}}
                    <h1>{{ $comic['title'] }}</h1>

                    {{-- price --}}
                    <span class="price-and-info">
                        <span class="price">
                            <span>U.S. Price: </span> {{ $comic['price'] }}
                        </span>

                        <span id="available">
                            available
                        </span>
                        <span id="check">
                            Check Availability

                        </span>
                    </span>

                    {{-- description --}}
                    <div class="description py-2">
                        <p>
                            {{ $comic['description'] }}
                        </p>
                    </div>
                </div>

                {{-- advertisement --}}
                <div class="col-4">
                    <div class="advert">
                        advertisement
                    </div>

                    <img src="{{ asset('../images/adv.jpg') }}" alt="apply now">
                </div>

            </div>
        </div>


        <section id="bg-gray">
            <div class="small-container py-5">

                <div class="row justify-content-between">
                    <div class="col-5">
                        <div class="row border-bottom">
                            <h3 class="mb-3">Talent</h3>
                        </div>
                        <div class="row border-bottom">
                            <div class="col-12  ">
                                <nav class="fw-bold text-bottom"> Art by:</nav>

                                @foreach ($comic['artists'] as $artist)
                                    <a href="#">
                                        {{ $artist }} {{ !$loop->last ? ',' : '' }}
                                    </a>
                                @endforeach
                            </div>
                            <div class="col-9">

                            </div>
                        </div>
                        <div class="row border-bottom">
                            <div class="col-12">
                                <nav class="fw-bold text-bottom">Written by:</nav>
                                @foreach ($comic['writers'] as $writer)
                                    <a href="#">
                                        {{ $writer }} {{ !$loop->last ? ',' : '' }}
                                    </a>
                                @endforeach
                            </div>
                            <div class="col-9">

                            </div>
                        </div>
                    </div>
                    <div class="col-5">
                        <div class="row border-bottom">
                            <h3 class="mb-3">Specs</h3>
                        </div>
                        <div class="row border-bottom">
                            <div class="col-5">
                                <nav class="text-bottom"> Series:</nav>
                            </div>
                            <div class="col-7">
                                {{ $comic['series'] }}
                            </div>
                        </div>
                        <div class="row border-bottom">
                            <div class="col-5">
                                <nav class="text-bottom"> U.S. Price:</nav>
                            </div>
                            <div class="col-7">
                                {{ $comic['price'] }}
                            </div>
                        </div>
                        <div class="row border-bottom">
                            <div class="col-5">
                                <nav class="text-bottom"> Sale Date:</nav>
                            </div>
                            <div class="col-7">
                                {{ $comic['sale_date'] }}

                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </section>

    </section>
@endsection
