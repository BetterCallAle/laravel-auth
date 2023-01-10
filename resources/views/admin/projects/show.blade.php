@extends('layouts.admin')

@section('title', $project->title )

@section('content')
    <div class="container mt-5">
        <h2 class="text-center mb-3">{{ $project->title }}</h2>
        <small>Craeto il {{ $project->created_at }}</small>
        <p class="mt-4">{{ $project->description }}</p>
    </div>
@endsection