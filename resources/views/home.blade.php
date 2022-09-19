@extends('layouts.main')
@section('title', 'home')


@section('main-content')
    <section class="card-section">
        <div class="container-card">
            <!-- BUTTON CURRENT SERIES -->
            <div class="button-series">
                <button>Current series</button>
            </div>

            <!-- LOgica Card -->
            <div class="cards-box">
                <!-- COMPONENTE CARD + LOGICA CREAZIONE CARD -->
                @foreach ($comics as $comic)
                    <div class="cards">
                        <a href="{{ route('products.comic', ['id' => $loop->index]) }}"> <img src="{{ $comic['thumb'] }}"
                                alt=""></a>
                        <h3>{{ $comic['title'] }}</h3>
                        <h6>{{ $comic['series'] }}</h6>
                        <p>{{ $comic['price'] }}</p>

                    </div>
                @endforeach
            </div>
            <!-- BUTTON LOAD -->
            <div class="button-load">
                <button>load more</button>
            </div>
        </div>
    </section>
@endsection

@section('shop')
    <section class="shop">
        <div class="container">
            <ul>
                <li>
                    <a href="">
                        <img src="{{ asset('images/buy-comics-digital-comics.png') }}" alt="logo">
                    </a>
                    <span class="text-white">DIGITAL COMICS</span>
                </li>
                <li>
                    <a href="">
                        <img src="{{ asset('images/buy-comics-merchandise.png') }}" alt="">
                    </a>
                    <span class="text-white">DC MERCHANDISE</span>
                </li>
                <li>
                    <a href="">
                        <img src="{{ asset('images/buy-comics-shop-locator.png') }}" alt="">
                    </a>
                    <span class="text-white">SUBSCRIPTION</span>
                </li>
                <li>
                    <a href="">
                        <img src="{{ asset('images/buy-comics-subscriptions.png') }}" alt="">
                    </a>
                    <span class="text-white">COMIC SHOP</span>
                <li>
                <li>
                    <a href="">
                        <img src="{{ asset('images/buy-dc-power-visa.svg') }}" alt="">
                    </a>
                    <span class="text-white">DC POWER VISA</span>
                </li>

            </ul>

    </section>
@endsection
