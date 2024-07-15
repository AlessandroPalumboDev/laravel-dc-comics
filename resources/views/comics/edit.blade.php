@extends('layouts.app')


@section('main')

    <div class="container text-light">
        <div class="row justify-content-center text-center py-5">
            <div class="col-3 mb-5">
                <a href="{{route('comics.index')}}" class="btn btn-dark">Torna alla lista fumetti</a>
            </div>
            <div class="col-12 mb-5">
                <h1>
                    Modifica fumetto: {{$comic->title}}
                </h1>
            </div>
            <div class="col-10">
                <form action="{{route('comics.update', $comic->id)}}" method="POST">
                    @csrf
                    @method('PUT')

                      <div class="mb-3">
                        <label for="textInput" class="form-label">Titolo</label>
                        <input name="title" type="text" id="textInput" class="form-control" value="{{old('title', $comic->title)}}">
                      </div>

                      <div class="mb-3">
                        <label for="textInput" class="form-label">Descrizione</label>
                        <input name="description" type="text" id="textInput" class="form-control" value="{{old('description', $comic->description)}}">
                      </div>

                      <div class="mb-3">
                        <label for="textInput" class="form-label">Immagine copertina</label>
                        <input name="thumb" type="text" id="textInput" class="form-control" value="{{old('thumb', $comic->thumb)}}">
                      </div>

                      <div class="mb-3">
                        <label for="textInput" class="form-label">Prezzo</label>
                        <input name="price" type="number" id="textInput" class="form-control" value="{{old('price', $comic->price)}}">
                      </div>

                      <div class="mb-3">
                        <label for="textInput" class="form-label">Serie</label>
                        <input name="series" type="text" id="textInput" class="form-control" value="{{old('series', $comic->series)}}">
                      </div>

                      <div class="mb-3">
                        <label for="textInput" class="form-label">Data vendita</label>
                        <input name="sale_date" type="date" id="textInput" class="form-control" value="{{old('sale_date', $comic->sale_date)}}">
                      </div>

                      <div class="mb-3">
                        <label for="select" class="form-label">Tipo</label>
                        <select name="type" id="select" class="form-select">
                          <option>comic book</option>
                          <option>graphic novel</option>
                        </select>
                      </div>

                      <button type="submit" class="btn btn-dark mt-3">Conferma modifica fumetto</button>
                  </form>
            </div>

        </div>
    </div>
@endsection