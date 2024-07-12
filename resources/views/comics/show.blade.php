@extends('layouts.app')

@section('main')

    <div class="container">
        <div class="row text-center py-5">

            <div class="col-8 m-auto">
                <div class="card">
                    <img src="{{ $comic->thumb}}" class="card-img-top" alt="{{$comic->title}}">
                    <div class="card-body">
                    <h4 class="card-title">{{$comic->title}}</h4>
                    <p class="card-text">Type: {{$comic->type}}</p>
                    <p class="card-text">Series: {{$comic->series}}</p>
                    <p class="card-text">Sale date: {{$comic->sale_date}}</p>
                    <p class="card-text">Price: {{$comic->price}} $</p>
                    <p class="card-text">{{$comic->description}}</p>
                    <a href="{{route('comics.index')}}" class="btn btn-dark">Torna alla lista fumetti</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection