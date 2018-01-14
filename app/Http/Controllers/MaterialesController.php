<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CrearMaterialesRequest;
use App\Material;

class MaterialesController extends Controller
{
    public function create()
    {
      return view('materiales.create');

    }



    public function store(CrearMaterialesRequest $request)
    {

      $a=1;

$material = new Material;


        $this->validate($request,[
          'nombre_material1'=>'required',
          'precio_constructora1'=>'required',
          'valor_maestro1'=>'required',
        ]);


dd($request->all());

    if ($request->input('nombre_material'.$a) != null) {
      return 'dentro';
    }
    return 'fuera';
      $material->nombre_material = $request->input('nombre_material'.$a);
      $material->precio_constructora = $request->input('precio_constructora'.$a);
      $material->valor_maestro = $request->input('valor_maestro'.$a);
      //

      dd($material);
      // dd($request->input('nombre_material'.$a));



      // foreach ($request as $objeto) {
      //
      //
      //
      //   $material->nombe_material=$request->input('nombre_material');
      //
      // }




      return 'estoy aqui';
    }
}
