@extends('layouts.admin')

@section('title', 'Aggiugni un nuovo progetto')

@section('content')
    <div class="container">
        <h2>Aggiungi un nuovo progetto</h2>

        <form action="{{ route('admin.projects.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="title" class="form-label">Inserisci il titolo del progetto</label>
                <input type="text" class="form-control" id="title" name="title">   
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Inserisci la descrizione</label>
                <textarea class="form-control" id="description" name="description"></textarea>
            </div>

            <button type="submit" class="btn btn-success">Aggiungi</button>
            <button type="reset" class="btn btn-danger">Resetta</button>
        </form>
    </div>
@endsection