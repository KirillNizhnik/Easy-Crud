@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="min-vh-100 jumbotron text-center">
        <h1 class="display-4">Welcome!</h1>
        <p class="lead">This is the homepage of your Laravel application.</p>
        <a class="btn btn-primary btn-lg" href="{{ url('/about') }}" role="button">Learn More</a>
    </div>
@endsection
