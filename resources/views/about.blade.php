@extends('layouts.app')

@section('title', 'About Us')

@section('content')
    <div class="min-vh-100 d-flex align-items-center justify-content-center flex-column text-center">
        <h1 class="display-4">About Us</h1>
        <p class="lead">Discover more about our mission, values, and what we do.</p>

        <div class="row mt-4">
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Our Mission</h5>
                        <p class="card-text">We aim to provide top-quality services and innovative solutions.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Our Vision</h5>
                        <p class="card-text">Building a future where technology empowers businesses and individuals.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Why Choose Us?</h5>
                        <p class="card-text">Expertise, innovation, and a commitment to excellence in every project.</p>
                    </div>
                </div>
            </div>
        </div>

        <a class="btn btn-primary mt-4" href="{{ route('contact') }}">Get in Touch</a>
    </div>
@endsection
