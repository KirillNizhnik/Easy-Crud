<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Database\Eloquent\Factories\Factory;
use Random\RandomException;

/**
 * @extends Factory<Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     * @throws RandomException
     */
    public function definition(): array
    {

        return [
            'title' => $this->faker->sentence(),
            'content' => $this->faker->paragraphs(3, true),
            'likes' => random_int(1, 2000),
            'category_id' => Category::get()->random()->id,
            'image' => fake()->imageUrl(640, 480, 'posts', true)
        ];
    }

    public function configure(): PostFactory|Factory
    {
        return $this->afterCreating(function (Post $post) {
            $tags = Tag::inRandomOrder()->limit(rand(1, 5))->pluck('id');
            $post->tags()->attach($tags);
        });
    }
}
