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
            <div class="medium-container">
                {{-- img --}}
                <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">

                {{-- label --}}
                <div id="comic-book" class="label">comic book</div>
                <div id="view-gallery" class="label">view galley</div>
            </div>
        </div>
        {{-- title and description --}}

        <div class="medium-container">


            {{-- current series title --}}
            <h1>{{ $comic['title'] }}</h1>


            <div class="row">
                <div class="col-8 m-0 p-0">
                    <div class="price-and-info">
                        {{-- price --}}
                        <span class="price ">
                            <span>U.S. Price: </span> {{ $comic['price'] }}
                        </span>
                        <span id="available">
                            available
                        </span>
                        <span id="check">
                            Check Availability

                        </span>

                    </div>


                    {{-- description --}}
                    <div class="description mr-1">
                        <p>
                            {{ $comic['description'] }}
                        </p>
                    </div>
                </div>

                {{-- advertisement --}}
                <div class="col-4 pb-5 d-flex flex-column flex-end">
                    <div class="advert">
                        advertisement
                    </div>

                    <img class="img-fluid pl-5" src="{{ asset('../images/adv.jpg') }}" alt="apply now">
                </div>
            </div>
        </div>
        </div>


        <section id="bg-gray">
            <div class="medium-container py-5">

                <div class="row justify-content-between">
                    <div class="col-5">
                        <div class="row border-bottom">
                            <h3 class="mb-3">Talent</h3>
                        </div>
                        <div class="row border-bottom">
                            <div class="col-12  p-0 m-0 ">
                                <nav class="fw-bold text-bottom"> Art by: </nav>
                                @foreach ($comic['artists'] as $artist)
                                    <nav>
                                        <a class="text-bottom-blue" href="#">
                                            {{ $artist }} {{ !$loop->last ? ',' : '' }}
                                        </a>
                                    </nav>
                                @endforeach

                            </div>
                            <div class="col-9">

                            </div>
                        </div>
                        <div class="row border-bottom">
                            <div class="col-12 p-0 m-0">
                                <nav class="fw-bold text-bottom">Written by:</nav>
                                @foreach ($comic['writers'] as $writer)
                                    <a class="text-bottom-blue" href="#">
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
                            <div class="col-5  p-0 m-0">
                                <nav class="text-bottom"> Series:</nav>
                            </div>
                            <div class="col-7 d-flex align-items-center">
                                <nav class="text-bottom-blue text-uppercase ">{{ $comic['series'] }}</nav>
                            </div>
                        </div>
                        <div class="row border-bottom">
                            <div class="col-5  p-0 m-0">
                                <nav class="text-bottom"> U.S. Price:</nav>
                            </div>
                            <div class="col-7">
                                {{ $comic['price'] }}
                            </div>
                        </div>
                        <div class="row border-bottom">
                            <div class="col-5  p-0 m-0">
                                <nav class="text-bottom"> Sale Date:</nav>
                            </div>
                            <div class="col-7">
                                {{ $comic['sale_date'] }}

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container-fluid border-top">
                <div class="container">
                    <section id='shop-comic'>
                        <ul class="row text-secondary fw-bold m-0 p-0">
                            <li class="col-3 p-3 d-flex justify-content-between border  text-uppercase">
                                <span>digital comics</span>

                                {{-- <img src="{{ asset('../images/cta-icons.png') }}" alt=""> --}}

                            </li>
                            <li class="col-3 p-3 d-flex justify-content-between border text-uppercase">
                                <span>shop dc</span>

                                {{-- <img src="{{ asset('../images/cta-icons.png') }}" alt=""> --}}

                            </li>
                            <li class="col-3 p-3 d-flex justify-content-between border  text-uppercase">
                                <span>comic shop locator</span>

                                {{-- <img src="{{ asset('../images/cta-icons.png') }}" alt=""> --}}

                            </li>
                            <li class="col-3 p-3 d-flex justify-content-between border  text-uppercase">
                                <span>subscription</span>

                                {{-- <img src="{{ asset('../images/cta-icons.png') }}" alt=""> --}}

                            </li>
                        </ul>
                    </section>
                </div>
            </div>

        </section>

    </section>
@endsection
