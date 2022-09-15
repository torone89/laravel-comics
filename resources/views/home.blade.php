@extends('layouts.main')


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
                @foreach ($comics as $comics)
                    <div class="cards">
                        <img src="{{ $comics['thumb'] }}" alt="">
                        <h3>{{ $comics['title'] }}}</h3>
                        <h6>{{ $comics['series'] }}</h6>
                        <p>{{ $comics['price'] }}</p>

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
