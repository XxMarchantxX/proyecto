<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    public function obra()
    {
      return $this->belongsTo(Obra::class); //laravel asume el nombre de la obra y le agrega "_id" quedando "obra_id". En caso de cumplir con esta convencion, como por ejemplo"id_obr" debemos pasarle el nombre agregando ",'nombre_tabla'"
    }
}
