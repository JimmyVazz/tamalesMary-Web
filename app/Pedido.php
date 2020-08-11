<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $fillable = [
        'cantidad',
        'fechaEntrega',
        'tamales'    
    ];
}
