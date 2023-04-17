@extends('layouts.master')
@vite('resources/css/home.css')
@section('title', 'Contact')

@section('content')
<div class="container mt-5">
@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif      
    <form action="{{ route('send.email') }}" method="POST">
            @csrf
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" name="name" id="name">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" name="email" id="email">
            </div>
            <div class="form-group">
                <label>Subject</label>
                <input type="text" class="form-control" name="subject" id="subject">
            </div>
            <div class="form-group">
                <label>Message</label>
                <textarea class="form-control" name="message" id="message" rows="4"></textarea>
            </div>
            <input type="submit" value="Send Message" class="btn btn-dark btn-block">
        </form>
    </div>
@stop