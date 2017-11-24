<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Obra;
use App\Http\Requests\CrearObrasRequest;

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

    public function store(CrearObrasRequest $request)
    {
      // $obra = new Obra;
      // $obra->nombre_obra = $request->Input('nombre_obra');
      // $obra->nombre_constructora = $request->Input('nombre_constructora');
      // $obra->direccion = $request->Input('direccion');
      // $obra->nombre_ingeniero = $request->Input('nombre_ingeniero');
      // $obra->email = $request->Input('email');
      // $obra->telefono = $request->Input('telefono');
      //
      // $obra->save();

      // $this->validate($request,[
      //   'nombre_obra'=>'required',
      //   'nombre_constructora'=>'required',
      //   'direccion'=>'required',
      //   'nombre_ingeniero'=>'required',
      //   'email'=>'required',
      //   'telefono' =>'required|integer'
      //
      //
      //
      // ]);


      Obra::create($request->all());

    return 'completado';
    }
}
