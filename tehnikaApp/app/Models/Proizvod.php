<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proizvod extends Model
{
    use HasFactory;



    public function kategorija()
    {
         $this->belongsTo(Kategorija::class);
    }

    public function proudzbine()
    {
        $this->hasMany(Porudzbina::class);
    }

}
