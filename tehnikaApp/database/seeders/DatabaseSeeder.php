<?php

namespace Database\Seeders;

use App\Models\Kategorija;
use App\Models\Porudzbina;
use App\Models\Proizvod;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        User::truncate();
        Porudzbina::truncate();
        Proizvod::truncate();
        Kategorija::truncate();

         \App\Models\User::factory(10)->create();


        $ks = new KategorijaSeeder();
        $ks->run();

        $ps = new ProizvodSeeder();
        $ps->run();


        $pos = new PorudzbinaSeeder();
        $pos->run();


    }
}
