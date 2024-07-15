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
                    <div class="card bg-dark text-light">
                        <img src="{{ $comic->thumb}}" class="card-img-top" alt="{{$comic->title}}">
                        <div class="card-body">
                            <h5 class="card-title">{{$comic->title}}</h5>
                            <p class="card-text">{{$comic->type}}</p>

                            <a href="{{route('comics.show', $comic->id)}}" class="btn btn-outline-light">Mostra</a>
                            <a href="{{route('comics.edit', $comic->id)}}" class="btn btn-outline-light">Modifica</a>

                            <button type="button" class="btn btn-outline-danger"data-bs-toggle="modal" data-bs-target="#exampleModal{{$comic->id}}">Elimina</button>

                            <div class="modal fade" id="exampleModal{{$comic->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog ">
                                  <div class="modal-content bg-dark">
                                    <div class="modal-header">
                                      <h1 class="modal-title fs-5 text-uppercase text-danger" id="exampleModalLabel">Attenzione!</h1>
                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                      <p>
                                        Se premi su elimina il fumetto verrà eliminato definitivamente
                                      </p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-outline-light" data-bs-dismiss="modal">Close</button>

                                        <form action="{{route('comics.destroy', $comic->id)}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-outline-danger">Elimina</button>
                                        </form>

                                    </div>
                                  </div>
                                </div>
                              </div>

                            {{-- <form action="{{route('comics.destroy', $comic->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-outline-danger mt-3">Elimina</button>
                            </form> --}}
                        </div>
                    </div>
                </div>

            @endforeach

        </div>
    </div>
@endsection