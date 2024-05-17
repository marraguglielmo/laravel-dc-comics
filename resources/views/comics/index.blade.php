@extends('layout.main')

@section('content')


<div class="container">
    <h1>Lista fumetti</h1>
    <div class="row">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Titolo</th>
                <th scope="col">Tipo</th>
                <th scope="col">Azioni</th>
              </tr>
            </thead>
            <tbody>

                @forelse ($comics as $comic)
                    <tr>
                        <th>{{$comic->id}}</th>
                        <td>{{$comic->title}}</td>
                        <td>{{$comic->type}}</td>
                        <td>
                            <a href="{{route('comics.show', $comic)}}" class="btn btn-success"><i class="fa-solid fa-eye"></i></a>
                            <a href="{{route('comics.edit', $comic)}}" class="btn btn-warning"><i class="fa-solid fa-pencil"></i></a>
                            <button class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></button>
                        </td>
                    </tr>
                @empty
                    <h2>Nessun fumetto trovato</h2>
                @endforelse

          </table>
    </div>
</div>

@endsection
