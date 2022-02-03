<?php

namespace Database\Factories;

use App\Models\Proizvod;
use App\Models\User;
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
             'proizvod_id' => $this->faker->numberBetween(1,Proizvod::count()),
             'user_id' => $this->faker->numberBetween(1,User::count())
              
        ];
    }
}
