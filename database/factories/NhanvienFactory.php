<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Nhanvien>
 */
class NhanvienFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'ten' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'tel'=>fake()->phoneNumber()
        ];
    }
}
