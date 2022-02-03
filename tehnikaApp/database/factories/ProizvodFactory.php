<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProizvodFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
             'nazivProizvoda' => $this->faker->randomElement($array = array ('samsung s21','s22','iphone 13','asus','acer')),
             'opis' => $this->faker->sentence($nbWords = 6, $variableNbWords = true),
             'cena' =>  $this->faker->numberBetween($min =20000, $max = 200000),
             'kategorija_id' =>1,
             'godinaProizvodnje' => $this->faker->numberBetween($min =2016, $max = 2022)
        ];
    }
}
