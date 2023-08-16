<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    protected static $order = 1;
    protected $categoriesId;

    public function __construct($count = 1)
    {
        parent::__construct($count);
        $this->categoriesId = Category::pluck('id')->toArray();
    }

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $content = fake()->text(1000);

        return [
            'title' => fake()->text(30),
            'content' => $content,
            'image' => 'https://loremflickr.com/500/500',
            'slug' => Str::limit(Str::slug($content), 20, ''),
            'category_id' => fake()->randomElement($this->categoriesId),
            'order' => static::$order++,
            'is_active' => true,
        ];
    }
}
