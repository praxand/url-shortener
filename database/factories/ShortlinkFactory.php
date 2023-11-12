<?php

namespace Database\Factories;

use App\Models\Shortlink;
use Illuminate\Database\Eloquent\Factories\Factory;

class ShortlinkFactory extends Factory
{
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence,
            'original_link' => $this->faker->url,
            'short_link' => Shortlink::generateShortLink(),
        ];
    }
}
