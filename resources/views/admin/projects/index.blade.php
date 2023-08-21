@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card mt-4">
                    <div class="card-header">
                        <div class="card-title d-flex justify-content-between">
                            <h3>My Projects</h3>
                            <a href="{{ route('admin.projects.create')}}" class="btn btn-primary">Crea il tuo progetto</a>
                        </div>
                    </div>

                    <div class="card-body p-0">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Titolo</th>
                                    <th>Descrizione progetto</th>
                                    <th>Data inizio</th>
                                    <th>Strumenti</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($projects as $project)
                                    <tr>
                                        <td>{{ $project->titolo}}</td>
                                        <td>{{ $project->descrizione}}</td>
                                        <td>{{ $project->inizio_progetto}}</td>
                                        <td>
                                            <a href="{{ route('admin.projects.show', $project->id) }}" class="btn btn-warning"><i class="fa-solid fa-eye"></i></a>
                                            <a href="{{ route('admin.projects.edit', $project->id) }}" class="btn btn-success"><i class="fa-solid fa-pen-to-square"></i></a>
                                            <a href="#" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection