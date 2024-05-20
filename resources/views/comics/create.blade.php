@extends('layout.main')

@section('content')
    <div class="container text-center">
        <div class="row">
            <h2 class="my-5">Aggiungi un fumetto</h2>

            @if ($errors->any())
                <div class="alert alert-danger text-start">
                    {{-- @dump($errors->all()) --}}
                    <ul>

                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @php
                $title = '';
                $description = '';
                $thumb = '';
                $price = '';
                $series = '';
                $sale_date = '';
                $type = '';
                $artists = '';
                $writers = '';
                $type = '';
                if ($title === 'test') {
                    $title = 'Comic test';
                    $description =
                        '“Beyond Burnside” Chapter One: The Batgirl you know and love is going global with Eisner Award-winning and New York Times best-selling writer Hope Larson (A Wrinkle in Time, Goldie Vance) and all-star artist Rafael Albuquerque (AMERICAN VAMPIRE). In order to up her game, Babs travels to Japan on a quest to train with the most elite modern combat masters of the East. But when a chance meeting with an old friend puts a target on her back, Batgirl may need to use her new skills to solve a deadly mystery.';
                    $thumb =
                        'https://imgs.search.brave.com/jgxYlrx442aozemzjqdmCsd9DkIkRollJp1T8sG8TfE/rs:fit:720:1106:1/g:ce/aHR0cHM6Ly9veXN0/ZXIuaWduaW1ncy5j/b20vd29yZHByZXNz/L3N0Zy5pZ24uY29t/LzIwMTgvMTAvU1RM/MDk3MDk1LTcyMHgx/MTA2LmpwZw';
                    $price = '$12.00';
                    $series = 'Batman';
                    $sale_date = '2018-10-03';
                    $type = 'Comi book';
                    $artists = 'Tony S. Daniel, Dan Abnett';
                    $writers = 'Tom King, Tony S. Daniel, David Marquez';
                }
            @endphp




            <form action="{{ route('comics.store') }}" method="POST" class="text-start">
                @csrf

                <div class="mb-3">
                    <label for="title" class="form-label">Titolo</label>
                    <input type="text" name="title" id="title" placeholder="title" class="form-control"
                        value="{{ old('title') }}">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Descrizione</label>
                    <textarea type="text" name="description" id="description" placeholder="Descrizione" class="form-control">{{ old('description') }}</textarea>
                </div>
                <div class="mb-3">
                    <label for="thumb" class="form-label">Immagine</label>
                    <input type="text" name="thumb" id="thumb" placeholder="Immagine" class="form-control"
                        value="{{ old('thumb') }}">
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Prezzo</label>
                    <input type="text" name="price" id="price" placeholder="Prezzo" class="form-control"
                        value="{{ old('price') }}">
                </div>
                <div class="mb-3">
                    <label for="series" class="form-label">Serie</label>
                    <input type="text" name="series" id="series" placeholder="Prezzo" class="form-control"
                        value="{{ old('series') }}">
                </div>
                <div class="mb-3">
                    <label for="sale_date" class="form-label">Giorno di uscita</label>
                    <input type="date" name="sale_date" id="sale_date" placeholder="Uscita" class="form-control"
                        value="{{ old('sale_date') }}">
                </div>
                <div class="mb-3">
                    <label for="type" class="form-label">Tipo</label>
                    <input type="text" name="type" id="type" placeholder="Tipo" class="form-control"
                        value="{{ old('type') }}">
                </div>
                <div class="mb-3">
                    <label for="artists" class="form-label">Artisti</label>
                    <input type="text" name="artists" id="artists" placeholder="Tipo" class="form-control"
                        value="{{ old('artists') }}">
                </div>
                <div class="mb-3">
                    <label for="writers" class="form-label">Scrittori</label>
                    <input type="text" name="writers" id="writers" placeholder="Tipo" class="form-control"
                        value="{{ old('writers') }}">
                </div>

                <div class="my-2">
                    <button type="submit" class="btn btn-success">Aggiungi</button>
                    <button type="reset" class="btn btn-warning">Reset</button>
                </div>

            </form>

        </div>
    </div>
@endsection
