@extends('layouts.master')
@vite('resources/css/Projects.css')
@section('title', 'Projects')

@section('content')

@foreach($projects as $project)
<div id="project-bg">
    <div class="project" id="{{ $project->id }}" style="background-image: url({{ url('images/'.$project->src) }}); background-size:cover; background-size:21vw 26vh;">
        <div class="project-description" id="project-description -{{ $project->id }}">
            {{ $project->description }}<br>
            <a href="{{ $project->url }}" target="_blank">Project</a>
        </div>
    </div>
    {{ $project->name }}
</div>
@endforeach

@stop