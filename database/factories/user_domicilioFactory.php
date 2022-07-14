<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\user-domicilio>
 */
class user_domicilioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'domicilio' => $this->faker->address(),
            'numero_exterior' => $this->faker->randomDigit(),
            'colonia' => $this->faker->streetName(),
            'cp' => $this->faker->postcode(),
            'ciudad' => $this->faker->city(),
        ];
    }
}
