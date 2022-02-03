<?php

namespace Database\Seeders;

use App\Models\Porudzbina;
use Illuminate\Database\Seeder;

class PorudzbinaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       Porudzbina::factory(3)->create();
    }
}
