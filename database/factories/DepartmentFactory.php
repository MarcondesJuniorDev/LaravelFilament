<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Department>
 */
class DepartmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->company,
            'responsible_id' => User::factory(),
            'author_id' => User::factory(),
            'order' => $this->faker->numberBetween(1, 99),
            'slug' => $this->faker->slug,
            'summary' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
            'image' => $this->faker->imageUrl(),
            'is_active' => $this->faker->boolean,
            'background_color' => $this->faker->hexColor,
        ];
    }
}
