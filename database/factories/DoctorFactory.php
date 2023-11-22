<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Doctor>
 */
class DoctorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $faker = \Faker\Factory::create('es_ES');
        return [
            'name' => $faker->firstName,
            'middleName' => $faker->lastName,
            'lastName' => $faker->lastName,
            'speciality' => $faker->randomElement(['Neurólogo','Cardiólogo','Oftalmologo']),
            'phone' => $faker->mobileNumber,
            'dni' => $faker->unique()->dni,
            'email' => $faker->safeEmail,
        ];
    }
}
