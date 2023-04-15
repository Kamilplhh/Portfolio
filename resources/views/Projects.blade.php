@extends('layouts.master')
@vite('resources/css/Projects.css')
@section('title', 'Projects')

@section('content')

@foreach($projects as $project)
<div id="project-bg">
    <div id="project" style="background-image: url( {{ $project->src }} ); background-size:cover;">
        <div id="project-description">
            {{ $project->description }}<br>
            <a href="{{ $project->url }}">Github</a>
        </div>
    </div>
    {{ $project->name }}
</div>
@endforeach

@stop