@extends('layouts.admin')

@section('title', $project->title )

@section('content')
    <div class="container mt-5">
        <h2 class="text-center mb-3">{{ $project->title }}</h2>
        <div class="d-flex justify-content-between">
            <small>Craeto il {{ $project->created_at }}</small>
            <div class="controls">
                <a href="{{ route('admin.projects.edit', $project->slug) }}" class="btn btn-secondary">
                    <i class="fa-solid fa-pencil"></i>
                </a>

                <form action="{{ route('admin.projects.destroy', $project->slug) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                </form>
            </div>
        </div>
        <p class="mt-4">{{ $project->description }}</p>
    </div>
@endsection