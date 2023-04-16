@extends('layouts.master')
@vite('resources/css/cv.css')
@section('title', 'CV')

@section('content')
<div class="jobs">
    <center><h2>Jobs</h2></center>
    <ul class="words-typer">
        @foreach($jobs as $job)
        <li>{{ $job->description }}<br>
        {{ $job->started }} - {{ $job->ended }}</li>
        @endforeach
    </ul>
</div>
<div class="education">
    <center><h2>Education</h2></center>
    <ul>
        @foreach($educations as $education)
        <li>{{ $education->description }}<br>
        {{ $education->started }} - {{ $education->ended }}</li>
        @endforeach
    </ul>
</div>
<div class="skills">
    <center><h2>Skills</h2></center>
    <ul>
        @foreach($skills as $skill)
        <li>{{ $skill->description }}</li>
        @endforeach
    </ul>
</div>

@stop