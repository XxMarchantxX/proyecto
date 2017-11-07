<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Area;

class AreasController extends Controller
{
  public function areas_existentes()
  {
    $datos=Area::all();
    $nombre_tabla = 'areas';
    $nombre_columna = 'nombre_area';
    return view('areas.show',compact('datos','nombre_tabla', 'nombre_columna'));
  }


  public function mostrar_area($id)
  {
    $area=Area::find($id);

    return view('areas.resultados', compact('area'));
  }
}
