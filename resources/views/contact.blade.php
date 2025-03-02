@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')
    <div class="container py-5">
        <div class="text-center">
            <h1 class="display-4">Contact Us</h1>
            <p class="lead">Have questions? We're here to help!</p>
        </div>

        <div class="row mt-5">
            <!-- Contact Form -->
            <div class="col-md-6">
                <div class="card shadow-sm p-4">
                    <h5 class="card-title text-center">Send Us a Message</h5>
{{--                    <form action="{{ route('contact.submit') }}" method="POST">--}}
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Your Name</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Your Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Your Message</label>
                            <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Send Message</button>
                    </form>
                </div>
            </div>

            <!-- Contact Details -->
            <div class="col-md-6">
                <div class="card shadow-sm p-4">
                    <h5 class="card-title text-center">Our Contact Details</h5>
                    <p><strong>Address:</strong> 123 Business St, Tech City, USA</p>
                    <p><strong>Email:</strong> support@example.com</p>
                    <p><strong>Phone:</strong> +1 123 456 7890</p>
                    <p><strong>Working Hours:</strong> Mon - Fri, 9:00 AM - 6:00 PM</p>

                    <div class="text-center">
                        <a href="mailto:support@example.com" class="btn btn-outline-primary">Email Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
