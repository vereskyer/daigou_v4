<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Shoporder>
 */
class ShoporderFactory extends Factory
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
            'shop_name' => $this->faker->company(),
            'building' => $this->faker->address(),
            'position' => $this->faker->address(),
            'phone' => $this->faker->phoneNumber(),
            'description' => $this->faker->text(),
            'status' => $this->faker->boolean(),
        ];
    }
}
