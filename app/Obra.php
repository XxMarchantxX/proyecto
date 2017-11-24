<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Obra extends Model
{

  protected $fillable = ['nombre_obra', 'nombre_constructora', 'direccion', 'nombre_ingeniero', 'email', 'telefono'];
    //
}
