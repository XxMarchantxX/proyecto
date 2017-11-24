<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Obra;


class ObrasController extends Controller
{
//---------------------------------------------
    public function obras_existentes()
    {
      $datos=Obra::all();
      $nombre_tabla = 'obras';
      $nombre_columna = 'nombre_obra';
      return view('busquedas.show',compact('datos','nombre_tabla', 'nombre_columna'));
    }

//----------------------------------------------

    public function mostrar_obra($id)
    {
      $obra=Obra::find($id);

      // dd($obra);


      return view('busquedas.resultados',compact('obra'));
    }

//-----------------------------------------------

    // public function registrar_obra()
    // {
    //   return view('forms.nuevaobra');
    //
    // }
    public function create()
    {
      return view ('obras.create');
    }

    public function store(Request $request)
    {
      dd($request->all());
    }
}
