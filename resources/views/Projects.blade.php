@extends('layouts.master')
@vite('resources/css/Projects.css')
@section('title', 'Projects')

@section('content')

@foreach($projects as $project)
<div id="project-bg">
    <div id="project">
        <img src="{{ $project->src }}">
        <div id="project-description">
            {{ $project->description }}<br>
            {{ $project->url }}
        </div>
    </div>
    {{ $project->name }}
</div>
@endforeach

@stop