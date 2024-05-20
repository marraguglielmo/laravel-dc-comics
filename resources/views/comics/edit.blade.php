@extends('layout.main')

@section('content')
    <div class="container text-center">
        <div class="row">
            <h2 class="my-5">Modifica fumetto</h2>


            <form action="{{ route('comics.update', $comic) }}" method="POST" class="text-start">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="title" class="form-label">Titolo</label>
                    <input type="text" name="title" id="title" placeholder="title"
                        class="form-control @error('title') is-invalid @enderror" value="{{ old('title', $comic->title) }}">
                    @error('title')
                        <small class="text-danger fw-semibold">
                            {{ $message }}
                        </small>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Descrizione</label>
                    <textarea type="text" name="description" id="description" placeholder="Descrizione" class="form-control">{{ $comic->description }}</textarea>
                </div>
                <div class="mb-3">
                    <label for="thumb" class="form-label">Immagine</label>
                    <input type="text" name="thumb" id="thumb" placeholder="Immagine"
                        class="form-control @error('thumb') is-invalid @enderror" value="{{ $comic->thumb }}">
                    @error('thumb')
                        <small class="text-danger fw-semibold">
                            {{ $message }}
                        </small>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Prezzo</label>
                    <input type="text" name="price" id="price" placeholder="Prezzo"
                        class="form-control @error('price') is-invalid @enderror" value="{{ $comic->price }}">
                    @error('price')
                        <small class="text-danger fw-semibold">
                            {{ $message }}
                        </small>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="series" class="form-label">Serie</label>
                    <input type="text" name="series" id="series" placeholder="Prezzo"
                        class="form-control @error('series') is-invalid @enderror" value="{{ $comic->series }}">
                    @error('series')
                        <small class="text-danger fw-semibold">
                            {{ $message }}
                        </small>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="sale_date" class="form-label">Giorno di uscita</label>
                    <input type="text" name="sale_date" id="sale_date" placeholder="Uscita"
                        class="form-control @error('sale_date') is-invalid @enderror" value="{{ $comic->sale_date }}">
                    @error('sale_date')
                        <small class="text-danger fw-semibold">
                            {{ $message }}
                        </small>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="type" class="form-label">Tipo</label>
                    <input type="text" name="type" id="type" placeholder="Tipo"
                        class="form-control @error('type') is-invalid @enderror" value="{{ $comic->type }}">
                    @error('type')
                        <small class="text-danger fw-semibold">
                            {{ $message }}
                        </small>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="artists" class="form-label">Artisti</label>
                    <input type="text" name="artists" id="artists" placeholder="Tipo"
                        class="form-control @error('artists') is-invalid @enderror" value="{{ $comic->artists }}">
                    @error('artists')
                        <small class="text-danger fw-semibold">
                            {{ $message }}
                        </small>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="writers" class="form-label">Scrittori</label>
                    <input type="text" name="writers" id="writers" placeholder="Tipo"
                        class="form-control @error('writers') is-invalid @enderror" value="{{ $comic->writers }}">
                    @error('writers')
                        <small class="text-danger fw-semibold">
                            {{ $message }}
                        </small>
                    @enderror
                </div>

                <div class="my-2">
                    <button type="submit" class="btn btn-success">Modifica</button>
                    <button type="reset" class="btn btn-warning">Reset</button>
                </div>

            </form>

        </div>
    </div>
@endsection
