<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DodajKolonuUTabeluProizvodi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('proizvods', function($table) {
            $table->integer('godinaProizvodnje');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('proizvods', function($table) {
            $table->dropColumn('godinaProizvodnje');
        });
    }
}
