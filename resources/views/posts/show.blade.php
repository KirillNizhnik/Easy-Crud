@extends('layouts.app')

@section('title', $post->title)

@section('content')
    <div class="container py-5 min-vh-100">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="display-6">{{ $post->title }}</h1>
            <a href="{{ route('posts.index') }}" class="btn btn-secondary">Back to All Posts</a>
        </div>

        <div class="card shadow-sm">
            <div class="card-body">
                {{-- Display Image if Available --}}
                @if($post->image)
                    <img src="{{ asset('storage/' . $post->image) }}" alt="Post Image" class="img-fluid rounded mb-3" style="max-width: 100%;">
                @endif

                {{-- Post Content --}}
                <p class="lead">{!! nl2br(e($post->content)) !!}</p>

                <div class="d-flex justify-content-between mt-4">
                    {{-- Edit Button --}}
                    <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-warning">Edit Post</a>

                    {{-- Delete Form --}}
                    <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
