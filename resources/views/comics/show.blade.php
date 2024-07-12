@extends('layouts.app')

@section('main')

    <div class="container">
        <div class="row text-center py-5">

            <div class="col-8 m-auto">
                <div class="card">
                    <img src="{{ $comic->thumb}}" class="card-img-top" alt="{{$comic->title}}">
                    <div class="card-body">
                    <h5 class="card-title">{{$comic->title}}</h5>
                    <p class="card-text">{{$comic->type}}</p>
                    <p class="card-text">{{$comic->description}}</p>
                    <a href="{{route('comics.index')}}" class="btn btn-dark">Indietro</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection