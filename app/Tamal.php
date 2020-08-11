<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tamal extends Model
{
    protected $fillable = [
        'sabor',
        'tipoCarne',
        'tipoTamal'      
    ];
}
