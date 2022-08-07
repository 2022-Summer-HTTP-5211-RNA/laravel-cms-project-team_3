<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EmploymentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'companyName' =>$this->faker->sentence,
            'title' =>$this->faker->sentence,
            'description' =>$this->faker->paragraph,
            'startDate' =>$this->faker->date,
            'endDate' =>$this->faker->date,
        ];
    }
}
