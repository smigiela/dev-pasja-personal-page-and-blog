<?php

namespace Database\Factories\Blog;

use App\Models\Blog\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->word,
            'slug' => $this->faker->slug,
            'description' => $this->faker->text(190),
            'body' => $this->faker->realText,
            'keywords' => $this->faker->word,
            'published_at' => $this->faker->dateTime,
            'author_id' => 1,
            'category_id' => rand(2,3)
        ];
    }
}
