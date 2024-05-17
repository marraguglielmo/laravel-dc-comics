@extends('layout.main')

@section('content')


<div class="container text-center">
    <div class="row">
        <h2 class="my-5">Modifica fumetto</h2>


        <form action="{{route('comics.update', $comic)}}" method="POST" class="text-start">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" name="title" id="title" placeholder="title" class="form-control" value="{{$comic->title}}">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label>
                <textarea type="text" name="description" id="description" placeholder="Descrizione" class="form-control">{{$comic->description}}</textarea>
            </div>
            <div class="mb-3">
                <label for="thumb" class="form-label">Immagine</label>
                <input type="text" name="thumb" id="thumb" placeholder="Immagine" class="form-control" value="{{$comic->thumb}}">
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Prezzo</label>
                <input type="text" name="price" id="price" placeholder="Prezzo" class="form-control" value="{{$comic->price}}">
            </div>
            <div class="mb-3">
                <label for="series" class="form-label">Serie</label>
                <input type="text" name="series" id="series" placeholder="Prezzo" class="form-control" value="{{$comic->series}}">
            </div>
            <div class="mb-3">
                <label for="sale_date" class="form-label">Giorno di uscita</label>
                <input type="text" name="sale_date" id="sale_date" placeholder="Uscita" class="form-control" value="{{$comic->sale_date}}">
            </div>
            <div class="mb-3">
                <label for="type" class="form-label">Tipo</label>
                <input type="text" name="type" id="type" placeholder="Tipo" class="form-control" value="{{$comic->type}}">
            </div>
            <div class="mb-3">
                <label for="artists" class="form-label">Artisti</label>
                <input type="text" name="artists" id="artists" placeholder="Tipo" class="form-control" value="{{$comic->artists}}">
            </div>
            <div class="mb-3">
                <label for="writers" class="form-label">Scrittori</label>
                <input type="text" name="writers" id="writers" placeholder="Tipo" class="form-control" value="{{$comic->writers}}">
            </div>

            <div class="my-2">
                <button type="submit" class="btn btn-success">Modifica</button>
                <button type="reset" class="btn btn-warning">Reset</button>
            </div>

        </form>

    </div>
</div>

@endsection
