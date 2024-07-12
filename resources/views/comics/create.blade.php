@extends('layouts.app')


@section('main')

    <div class="container">
        <div class="row justify-content-center text-center py-5">
            <div class="col-3 mb-5">
                <a href="{{route('comics.index')}}" class="btn btn-dark">Torna alla lista fumetti</a>
            </div>
            <div class="col-12 mb-5">
                <h1>
                    Inserisci dati nuovo fumetto
                </h1>
            </div>
            <div class="col-10">
                <form action="{{route('comics.store')}}" method="POST">
                    @csrf
                      <div class="mb-3">
                        <label for="textInput" class="form-label">Titolo</label>
                        <input name="title" type="text" id="textInput" class="form-control" placeholder="Titolo">
                      </div>
                      <div class="mb-3">
                        <label for="textInput" class="form-label">Prezzo</label>
                        <input name="price" type="number" id="textInput" class="form-control" placeholder="Prezzo">
                      </div>
                      <div class="mb-3">
                        <label for="textInput" class="form-label">Data vendita</label>
                        <input name="sale_date" type="text" id="textInput" class="form-control" placeholder="Data vendita">
                      </div>
                      <div class="mb-3">
                        <label for="select" class="form-label">Tipo</label>
                        <select name="type" id="select" class="form-select">
                          <option>comic book</option>
                          <option>graphic novel</option>
                        </select>
                      </div>
                      <button type="submit" class="btn btn-dark mt-3">Aggiungi questo fumetto</button>
                  </form>
            </div>

        </div>
    </div>
@endsection