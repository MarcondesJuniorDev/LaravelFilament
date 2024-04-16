<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Details>
 */
class DetailsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => function () {
                return User::factory()->create()->id;
            },
            'status' => $this->faker->boolean,
            'featured_homepage' => $this->faker->boolean,
            'about' => $this->faker->text,
            'website' => $this->faker->url,
            'lattes' => $this->faker->url,
            'linkedin' => $this->faker->url,
            'github' => $this->faker->url,
            'facebook' => $this->faker->url,
            'twitter' => $this->faker->url,
            'instagram' => $this->faker->url,
        ];
    }
}
