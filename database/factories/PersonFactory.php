<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Person>
 */
class PersonFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'social_name' => $this->faker->name(),
            'cpf' => $this->faker->unique()->cpf(false),
            'father_name' => $this->faker->name('male'),
            'mother_name' => $this->faker->name('female'),
            'phone' => $this->faker->cellphoneNumber(),
            'email' => $this->faker->unique()->safeEmail,
        ];
    }
}
