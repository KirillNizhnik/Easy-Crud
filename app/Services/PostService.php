<?php

namespace App\Services;

use App\Models\Post;
use Illuminate\Support\Facades\Storage;

class PostService
{
    function store($request, $validated): void
    {
        $tags = $validated['tags'] ?? [];
        unset($validated['tags']);

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('uploads', 'public');
            $validated['image'] = $path;
        }


        $post = Post::create($validated);
        if (!empty($tags)) {
            $post->tags()->sync($tags);
        }
    }

    function update($request, $post, $validated): void
    {

        $tags = $validated['tags'] ?? [];
        unset($validated['tags']);

        if ($request->hasFile('image')) {
            if ($post->image) {
                Storage::disk('public')->delete($post->image);
            }
            $validated['image'] = $request->file('image')->store('uploads', 'public');
        }
        $post->update($validated);

        $post->tags()->sync($tags);

    }

}
