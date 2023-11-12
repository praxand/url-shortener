<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class QuickResponseCodeFactory extends Factory
{
    public function definition(): array
    {
        $url = $this->faker->url;

        return [
            'title' => $this->faker->sentence,
            'original_link' => $url,
            'base64' => base64_encode(QrCode::format('png')->generate($url)),
        ];
    }
}
