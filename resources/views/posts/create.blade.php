@extends('layouts.app')

@section('title', 'Create Post')

@section('content')
    <div class="container py-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="display-6">Create New Post</h1>
            <a href="{{ route('posts.index') }}" class="btn btn-secondary">Back to Posts</a>
        </div>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="card shadow-sm">
            <div class="card-body">
                <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Post Title</label>
                        <input type="text" class="form-control" id="title" name="title" required value="{{ old('title') }}">
                    </div>

                    <div class="mb-3">
                        <label for="content" class="form-label">Content</label>
                        <textarea class="form-control" id="content" name="content" rows="5" required>{{ old('content') }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label for="category" class="form-label">Select Category</label>
                        <select id="category" class="form-select" aria-label="Select Category" name="category_id">
                            @foreach($categories as $category)
                                <option value="{{$category->id}}">
                                    {{$category->title}}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="tags" class="form-label">Select Tags</label>
                        <select id="tags" multiple class="form-select" aria-label="Select Tags" name="tags[]">
                            @foreach($tags as $tag)
                                <option
                                    value="{{$tag->id}}">
                                    {{$tag->title}}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="image" class="form-label">Upload Image</label>
                        <input type="file" class="form-control" id="image" name="image" accept="image/*">
                    </div>

                    <button type="submit" class="btn btn-success">Create Post</button>
                </form>
            </div>
        </div>
    </div>
@endsection
