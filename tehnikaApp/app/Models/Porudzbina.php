<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Porudzbina extends Model
{
    use HasFactory;
    protected $fillable = [
        'adresaDostave', 
        'datumPorudzbine',
        'proizvod_id',
        'user_id'



    ];


    public function proizvod()
    {
         $this->belongsTo(Proizvod::class);
    }




}
