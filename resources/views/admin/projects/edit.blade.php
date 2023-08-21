@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card mt-5">
                    <div class="card-header">
                        <h3>Modifica il tuo progetto</h3>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('admin.projects.update', $project->id)}}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="titolo" class="form-label">Inserisci il titolo</label>
                                <input type="text" class="form-control" value="{{ old('titolo') }}" id="titolo" name="titolo" placeholder="Inserisci il titolo del progetto">
                            </div>
                            <div class="mb-3">
                                <label for="descrizione" class="form-label">Inserisci descrizione</label>
                                <textarea class="form-control" id="descrizione" name="descrizione" rows="3" placeholder="Inserisci la descrizione del progetto">{{ old('descrizione') }}</textarea>
                            </div>
                            <div class="mb-3">
                                <label for="inizio_progetto" class="form-label">Inserisci la data di inizio</label>
                                <input type="text" class="form-control" id="inizio_progetto" name="inizio_progetto">
                            </div>
                            <div class="mb-3">
                                <label for="consegna_progetto" class="form-label">Inserisci la data di consegna</label>
                                <input type="text" class="form-control" id="consegna_progetto" name="consegna_progetto">
                            </div>

                            <div class="submit mb-3">
                                <button type="submit" class="btn btn-success">Modifica il tuo progetto</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
