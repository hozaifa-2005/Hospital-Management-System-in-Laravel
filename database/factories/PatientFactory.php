<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Patient>
 */
class PatientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'first_name' => $this->faker->firstName(),
            'last_name' => $this->faker->lastName(),
            'father_name' => $this->faker->firstNameMale(),
            'mother_name' => $this->faker->firstNameFemale(),
            'gender' => $this->faker->randomElement(['ذكر', 'أنثى']),
            'birth_date' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'address' => $this->faker->address(),
            'phone_number' => $this->faker->unique()->phoneNumber(),
            'national_id_number' => $this->faker->unique()->numerify('#########'), // 9 digits number
        ];
    }
}
