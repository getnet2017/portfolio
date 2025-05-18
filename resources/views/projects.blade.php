@extends('layouts.app')
@section('title', 'My Projects')

@section('content')
<h2 class="text-3xl font-bold mb-4">Projects</h2>

@foreach($projects as $project)
<div class="project-card border p-4 mb-4 rounded shadow">
    <h3 class="text-xl font-semibold">{{ $project->title }}</h3>
    <p>{{ $project->description }}</p>
    @if($project->link)
    <a href="{{ $project->link }}" target="_blank" class="text-blue-500 hover:underline">View Project</a>
    @endif
</div>
@endforeach
@endsection