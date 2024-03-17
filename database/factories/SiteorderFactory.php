<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Siteorder>
 */
class SiteorderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => 2,
            'name' => $this->faker->name,
            'site' => $this->faker->url,
            'description' => $this->faker->sentence
            
        ];
    }
}
