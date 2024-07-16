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
              @if ($errors->any())
                <div class="mt-3 alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
              @endif
                <form action="{{route('comics.update', $comic->id)}}" method="POST">
                    @csrf
                    @method('PUT')

                      <div class="mb-3">
                        <label for="textInput" class="form-label">Titolo</label>
                        <input name="title" type="text" id="textInput" class="form-control  @error("title") is-invalid border-danger @enderror" value="{{old('title', $comic->title)}}">
                        @error("title")
                          <p class="invalid-feedback">
                            {{ $message}}
                          </p>
                        @enderror
                      </div>

                      <div class="mb-3">
                        <label for="textInput" class="form-label">Descrizione</label>
                        <input name="description" type="text" id="textInput" class="form-control  @error("description") is-invalid border-danger @enderror" value="{{old('description', $comic->description)}}">
                        @error("description")
                          <p class="invalid-feedback">
                            {{ $message}}
                          </p>
                        @enderror
                      </div>

                      <div class="mb-3">
                        <label for="textInput" class="form-label">Immagine copertina</label>
                        <input name="thumb" type="text" id="textInput" class="form-control  @error("thumb") is-invalid border-danger @enderror" value="{{old('thumb', $comic->thumb)}}">
                        @error("thumb")
                          <p class="invalid-feedback">
                            {{ $message}}
                          </p>
                        @enderror
                      </div>

                      <div class="mb-3">
                        <label for="textInput" class="form-label">Prezzo</label>
                        <input name="price" type="number" id="textInput" class="form-control  @error("price") is-invalid border-danger @enderror" value="{{old('price', $comic->price)}}">
                        @error("price")
                          <p class="invalid-feedback">
                            {{ $message}}
                          </p>
                        @enderror
                      </div>

                      <div class="mb-3">
                        <label for="textInput" class="form-label">Serie</label>
                        <input name="series" type="text" id="textInput" class="form-control  @error("series") is-invalid border-danger @enderror" value="{{old('series', $comic->series)}}">
                        @error("series")
                          <p class="invalid-feedback">
                            {{ $message}}
                          </p>
                        @enderror
                      </div>

                      <div class="mb-3">
                        <label for="textInput" class="form-label">Data vendita</label>
                        <input name="sale_date" type="date" id="textInput" class="form-control  @error("sale_date") is-invalid border-danger @enderror" value="{{old('sale_date', $comic->sale_date)}}">
                        @error("sale_date")
                          <p class="invalid-feedback">
                            {{ $message}}
                          </p>
                        @enderror
                      </div>

                      <div class="mb-3">
                        <label for="select" class="form-label ">Tipo</label>
                        <select name="type" id="select" class="form-select @error("type") is-invalid border-danger @enderror">
                          <option>comic book</option>
                          <option>graphic novel</option>
                        </select>
                        @error("type")
                          <p class="invalid-feedback">
                            {{ $message}}
                          </p>
                        @enderror
                      </div>

                      <button type="submit" class="btn btn-dark mt-3">Conferma modifica fumetto</button>
                  </form>
            </div>

        </div>
    </div>
@endsection