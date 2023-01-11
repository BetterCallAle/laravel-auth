@extends('layouts.admin')

@section('title', 'Aggiugni un nuovo progetto')

@section('content')
    <div class="container">
        <h2 class="mt-4 mb-4 text-center">Aggiorna {{ $project->title }}</h2>

        @if ($errors->any())
            <div class="alert alert-danger mb-3 py-4">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>
                            {{ $error }}
                        </li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('admin.projects.update', $project->slug) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="title" class="form-label">Inserisci il titolo del progetto</label>
                <input type="text" class="form-control
                       @error('title')
                        is-invalid
                       @enderror
                       " 
                       id="title" name="title" value="{{ old('name', $project->title) }}"
                >

                @error('title')    
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Inserisci la descrizione</label>
                <textarea class="form-control @error('description') is-invalid @enderror"  id="description"  name="description" >{{ old('description', $project->description) }} </textarea>

                @error('description')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <button type="submit" class="btn btn-success">Aggiungi</button>
            <button type="reset" class="btn btn-danger">Resetta</button>
        </form>
    </div>
@endsection