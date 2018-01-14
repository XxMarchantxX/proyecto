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

  // Route::get('nuevaobra','FormularioObraController@formuarioObra');
  Route::get('obras','ObrasController@obras_existentes');
  // Route::get('obras/create','ObrasController@create'); Resolver conflico con la ruta de los {id}, dado que trata de buscar en al base de datos
  Route::get('obras/create','ObrasController@create');
  Route::get('obras/{id}','ObrasController@mostrar_obra' );
  Route::post('obras', 'ObrasController@store');


  //Rutas relacionadas con los materiales
  Route::get('materiales/create','MaterialesController@create');
  Route::post('materiales','MaterialesController@store');



  //Rutas relacionadas a las Areas
  Route::get('areas', 'AreasController@areas_existentes');
  Route::get('areas/{id}', 'AreasController@mostrar_area');



Route::get('nuevotrabajador','PagesController@nuevotrabajador');

Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
