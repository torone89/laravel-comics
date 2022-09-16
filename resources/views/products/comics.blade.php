@extends('layouts.main')

@section('title', 'Comics')

@section('comics')
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
