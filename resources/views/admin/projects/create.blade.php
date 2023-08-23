@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card mt-5">
                    <div class="card-header">
                        <h3>Crea il tuo progetto</h3>
                    </div>

                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form action="{{ route('admin.projects.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="titolo" class="form-label">Inserisci il titolo</label>
                                <input type="text" class="form-control" id="titolo" name="titolo" placeholder="Inserisci il titolo del progetto" value="{{ old('titolo')}}">
                            </div>
                            <div class="mb-3">
                                <label for="descrizione" class="form-label">Inserisci descrizione</label>
                                <textarea class="form-control" id="descrizione" name="descrizione" rows="3" placeholder="Inserisci la descrizione del progetto">{{ old('descrizione')}}</textarea>
                            </div>
                            <div class="mb-3">
                                <label for="img" class="form-label">Inserisci immagine</label>
                                <input type="file" class="form-control" id="img" name="img">
                            </div>
                            <div class="mb-3">
                                <label for="inizio_progetto" class="form-label">Data di inizio</label>
                                <input type="text" class="form-control" id="inizio_progetto" name="inizio_progetto" placeholder="Inserisci la data di inizio" value="{{ old('inizio_progetto')}}">
                            </div>
                            <div class="mb-3">
                                <label for="consegna_progetto" class="form-label">Data di consegna</label>
                                <input type="text" class="form-control" id="consegna_progetto" name="consegna_progetto" placeholder="Inserisci la data di consegna" value="{{ old('consegna_progetto')}}">
                            </div>

                            <div class="submit mb-3">
                                <button type="submit" class="btn btn-success">Crea il tuo progetto</button>
                                <a href="{{ route('admin.projects.index')}}" class="btn btn-primary">Torna ai progetti</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
