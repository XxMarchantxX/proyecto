@extends('layouts.app')

@section('content')

  <h1>Crear Obra</h1>
  <form  action="" method="post" role="form">

    <div class="form-group">
      <label for="">Nombre Obra</label>
      <input type="text" class="form-control" name="nombre_obra" placeholder="Escriba el nombre de la obra">
    </div>

    <div class="form-group">
      <label for="">Nombre Constructora</label>
      <input type="text" class="form-control" name="nombre_constructora" placeholder="Escriba el nombre de la constructora">
    </div>

    <div class="form-group">
      <label for="">Direccion</label>
      <input type="text" class="form-control" name="direccion" placeholder="Escriba aqui la direccion de la Obra">
    </div>

    <div class="form-group">
      <label for="">Nombre Ingeniero</label>
      <input type="text" class="form-control" name="nombre_ingeniero" placeholder="Escriba el nombre del Ingeniero">
    </div>

    <div class="form-group">
      <label for="">Email</label>
      <input type="text" class="form-control" name="email" placeholder="Direccion de correo del Ingeniero">
    </div>

    <div class="form-group">
      <label for="">Telefono</label>
      <input type="text" class="form-control" name="telefono" placeholder="Telefono de contacto para le Ingeniero a cargo">
    </div>


  </form>



@endsection
