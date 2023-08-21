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
                        <form action="{{ route('admin.projects.store')}}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="titolo" class="form-label">Inserisci il titolo</label>
                                <input type="text" class="form-control" id="titolo" name="titolo" placeholder="Inserisci il titolo del progetto">
                            </div>
                            <div class="mb-3">
                                <label for="descrizione" class="form-label">Inserisci descrizione</label>
                                <textarea class="form-control" id="descrizione" name="descrizione" rows="3" placeholder="Inserisci la descrizione del progetto"></textarea>
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
                                <button type="submit" class="btn btn-success">Crea il tuo progetto</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
