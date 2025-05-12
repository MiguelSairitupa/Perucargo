<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Conductor extends Model
{
     protected $fillable = [
        'nombre',
        'licencia',
        'telefono',
        'fecha_nacimiento',
    ];
}
