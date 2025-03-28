@extends('layouts.app')

@section('title', 'All Posts')

@section('content')
    <div class="container py-5 min-vh-100">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="display-6">All Posts</h1>
            <a href="{{ route('posts.create') }}" class="btn btn-success">+ Create New Post</a>
        </div>
        <form action="{{ route('posts.index') }}" method="GET" class="mb-4">
            <div class="row g-3">
                <div class="col-md-4">
                    <input type="text" name="title" class="form-control" placeholder="Search by Title" value="{{ request('title') }}">
                </div>
                <div class="col-md-4">
                    <input type="text" name="content" class="form-control" placeholder="Search by Content" value="{{ request('content') }}">
                </div>
                <div class="col-md-3">
                    <select name="category_id" class="form-select">
                        <option value="">All Categories</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}" {{ request('category_id') == $category->id ? 'selected' : '' }}>
                                {{ $category->title }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-1">
                    <button type="submit" class="btn btn-primary w-100">Search</button>
                </div>
            </div>
        </form>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if ($posts->count() > 0)
            <table class="table table-striped shadow-sm">
                <thead class="table-dark">
                <tr>
                    <th>Title</th>
                    <th>Content</th>
                    <th>Category</th>
                    <th>Tags</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->content }}</td>
                        <td>
                            @if ($post->category)
                                    {{ $post->category->title }}
                            @else
                                Non Category
                            @endif
                        </td>
                        <td>
                            @forelse ($post->tags as $tag)
                                {{ $tag->title }}{{ !$loop->last ? ', ' : '' }}
                            @empty
                                No Tags
                            @endforelse
                        </td>

                        <td>
                            <a href="{{ route('posts.show', $post->id) }}" class="btn btn-info btn-sm">View</a>
                            <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('posts.destroy', $post->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <div>
                {{ $posts->links() }}
            </div>
        @else
            <div class="alert alert-info text-center">No posts found. <a href="{{ route('posts.create') }}">Create one</a>.</div>
        @endif
    </div>

@endsection



