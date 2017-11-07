<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Obra;

class FormularioObraController extends Controller
{
  public function formuarioObra()
  {
  // $obras=\DB::table('obras')->select('id','nombre_obra')->get();
    $obras=Obra::all();
    return view('forms.nuevaobra',compact('obras'));
  }
}
