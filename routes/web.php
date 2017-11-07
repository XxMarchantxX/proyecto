<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'PagesController@index');


// Route::get('nuevaobra',function(){
//     return view('forms.nuevaobra')->with(['nombreObra'=>'talagante']);
// });

//Rutas relacionadas a las Obras

  Route::get('nuevaobra','FormularioObraController@formuarioObra');
  Route::get('obras','ObrasController@obras_existentes');
  Route::get('obras/{id}','ObrasController@mostrar_obra' );



  //Rutas relacionadas a las Areas
  Route::get('areas', 'AreasController@areas_existentes');
  Route::get('areas/{id}', 'AreasController@mostrar_area');



Route::get('nuevotrabajador','PagesController@nuevotrabajador');

Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
