@extends('layouts.master')

@section('title', 'home')

@section('content')
    <div class="text">
        <div id="name">
            <h3>My name is Kamil</h3>
            <h2 class="words-typer"><b>and this is my page<br></b></h2>
        </div>
        <div>
            <h3 class="words-typer next">I'm 23 years old digital solutions developer,<br>
            right now I'm into:</h3>
            <ul class="words-typer next">
                <li><i class="fa-solid fa-computer fa-lg"></i> Programming and a whole computer science stuff</li>
                <li><i class="fa-solid fa-volleyball fa-lg"></i> Sport of any kind</li>
                <li><i class="fa-solid fa-music fa-lg"></i> Music</li>
                <li><i class="fa-solid fa-user-astronaut fa-lg"></i> Astronomy</li>
                <li><i class="fa-solid fa-gamepad fa-lg"></i> Games</li>
            </ul>     
        </div>
        <div id="motto">
            Inspirational quote<br>
            <div id="quote">
                <h2>
                    “Learn as if you will live forever, live like you will die tomorrow.” — Mahatma Gandhi
                </h2>
            </div>
        </div>    
    </div>
    
@stop