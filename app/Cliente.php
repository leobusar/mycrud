<?php

namespace MyFirstApp;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    //
    protected $fillable = [
        'nombre', 'documento', 'telefono', 'fecha'
    ];
}
