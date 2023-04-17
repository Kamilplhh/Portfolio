@extends('layouts.master')
@vite('resources/css/home.css')
@section('title', 'Contact')

@section('content')
<div class="mail">
@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif      
    <form action="{{ route('send.email') }}" method="POST">
            @csrf
            <div class="form-group">
                <label>Name</label>
                <input type="text" style="width: 13vw;" name="name" id="name" required>

                <label>Email</label>
                <input type="email" style="width: 13vw;" name="email" id="email" required><br>
            
                <label>Subject</label>
                <input type="text" class="form-control" name="subject" id="subject" required>

                <label>Message</label>
                <textarea class="form-control" name="message" id="message" rows="4" required></textarea>
            </div>
            <input type="submit" value="Send Message" class="btn btn-dark btn-block">
        </form>
    </div>
@stop