<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Porudzbina extends Model
{
    use HasFactory;



    public function proizvod()
    {
         $this->belongsTo(Proizvod::class);
    }




}
