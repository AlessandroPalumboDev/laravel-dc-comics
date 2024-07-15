@extends('layouts.app')

@section('main')

    <div class="container mb-5">
        <div class="row my-4 justify-content-center">
            <div class="col text-center text-light">
                <h1 class="mb-3">
                    Lista Fumetti
                </h1>
                <a href="{{route('comics.create')}}" class="btn btn-dark">Aggiungi Fumetto</a>
            </div>
        </div>
        <div class="row align-items-center jsutify-content-cener">

            @foreach ($comics as $comic)
                
                <div class="col-3 mt-4">
                    <div class="card">
                        <img src="{{ $comic->thumb}}" class="card-img-top" alt="{{$comic->title}}">
                        <div class="card-body">
                            <h5 class="card-title">{{$comic->title}}</h5>
                            <p class="card-text">{{$comic->type}}</p>
                            <a href="{{route('comics.show', $comic->id)}}" class="btn btn-dark">Mostra</a>
                            <a href="{{route('comics.edit', $comic->id)}}" class="btn btn-dark">Modifica</a>
                        </div>
                    </div>
                </div>

            @endforeach

        </div>
    </div>
@endsection