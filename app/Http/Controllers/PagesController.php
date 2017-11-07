<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function index(){

       return view('welcome');
    }


    // public function nuevaobra()
    // {
    //   return view('forms.nuevaobra')->with(['nombreObra'=>'talagante']);
    //
    // }

    public function nuevotrabajador()
    {
      return view('forms.nuevotrabajador');
    }
}
