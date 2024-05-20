@extends('layout.main')

@section('content')
    <div class="container text-center">
        <div class="row">

            <div class="card mw-100 border border-0 my-3 p-0" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="{{ $comic->thumb }}" class="img-fluid rounded-start mw-100 " alt="{{ $comic->title }}">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body text-start">
                            <h3 class="card-title fw-semibold ">
                                {{ $comic->title }} <a href="{{ route('comics.edit', $comic) }}"
                                    class="btn btn-warning ms-1"><i class="fa-solid fa-pencil"></i></a>
                                @include('partials.deleteform')
                            </h3>
                            <p class="card-text">{{ $comic->description }}</p>
                            <div class="card-text text-body-secondary">
                                <span class="d-block">Artisti: {{ $comic->artists }}</span>
                                <span class="d-block">Scrittori: {{ $comic->writers }}</span>
                                <span class="d-block">{{ $comic->sale_date }}</span>
                            </div>
                            <div class="mt-3">
                                <h5 class="price fw-semibold">{{ $comic->price }}</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
