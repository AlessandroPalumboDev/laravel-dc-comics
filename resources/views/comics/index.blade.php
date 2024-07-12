@extends('layouts.app')

@section('main')

    <div class="container">
        <div class="row my-4 justify-content-center">
            <div class="col-3">
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
                        </div>
                    </div>
                </div>

            @endforeach

        </div>
    </div>
@endsection