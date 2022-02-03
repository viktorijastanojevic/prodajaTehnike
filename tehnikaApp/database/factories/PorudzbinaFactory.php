<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PorudzbinaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'datumPorudzbine' => $this->faker->dateTimeBetween($startDate = '-2 years', $endDate = '+2 years', $timezone = null) ,
             'adresaDostave' => $this->faker->address(),
             'proizvod_id' =>1,
             'user_id' =>1
              
        ];
    }
}
