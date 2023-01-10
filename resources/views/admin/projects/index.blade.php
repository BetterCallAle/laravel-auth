@extends('layouts.admin')

@section('title', 'Tutti i progetti')

@section('content')
    <div class="container mt-5">
        <h2 class="text-center">Tutti i progetti</h2>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Titolo</th>
                    <th scope="col">Data di creazione</th>
                    <th scope="col">Azioni</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($projects as $project)
                    <tr>
                        <th scope="row">{{ $project->title }}</th>
                        <td>{{ $project->created_at }}</td>
                        <td>
                            <a href="{{ route('admin.projects.show', $project->slug) }}" class="btn btn-success">
                                <i class="fa-solid fa-eye"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
          </table>
    </div>
@endsection