@extends('layouts.admin')

@section('title', $project->title )

@section('content')
    <div class="container mt-5">
        <h2 class="text-center mb-3">{{ $project->title }}</h2>
        <div class="controls d-flex justify-content-between">
            <small>Craeto il {{ $project->created_at }}</small>
            <a href="{{ route('admin.projects.edit', $project->slug) }}" class="btn btn-secondary">
                <i class="fa-solid fa-pencil"></i>
            </a>
        </div>
        <p class="mt-4">{{ $project->description }}</p>
    </div>
@endsection