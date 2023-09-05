<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Appointment>
 */
class AppointmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'full_name' => fake()->name(),
            'gender' => fake()->randomElement(['Male', "Female"]),
            'weight' => 20,
            'assigned_doctor' => fake()->name(),
            'admit_date' => now(),
            'disease' => fake()->randomElement(['Typhoid', "Dengue", "Covid-19"]),

        ];
    }
}
