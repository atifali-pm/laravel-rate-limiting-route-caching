<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CovidCaseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'report_date' => $this->faker->dateTimeThisDecade(),
            'cases' => $this->faker->numberBetween(1, 500),
        ];
    }
}
