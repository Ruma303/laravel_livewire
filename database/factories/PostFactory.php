<?php

namespace Database\Factories;

use App\Services\SlugService;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    public function definition(): array
    {
        $title = $this->faker->sentence(2);
        return [
            "title" => $title,
            "slug" => SlugService::toSlug($title),
            "body" => implode("\n\n", $this->faker->paragraphs(5)),
        ];
    }
}
