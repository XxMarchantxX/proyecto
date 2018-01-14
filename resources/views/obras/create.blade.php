@extends('layouts.app')

@section('content')


            <form  action="/obras" method="POST" role="form">


              {{csrf_field()}}

{{-- Manejo de validaciones en el formulario --}}
              @if (count($errors)>0)
                <div class="alert alert-danger">
                  <ul>
                    @foreach ($errors->all() as $error)
                      <li>{{$error}}</li>
                    @endforeach
                  </ul>
                </div>
              @endif


              <div class="form-group">
                <label for="">Nombre Obra</label>
                <input type="text"  size="20" class="form-control" name="nombre_obra" placeholder="Escriba el nombre de la obra" value="{{old('nombre_obra')}}" >
              </div>

              <div class="form-group">
                <label for="">Nombre Constructora</label>
                <input type="text" class="form-control" name="nombre_constructora" placeholder="Escriba el nombre de la constructora" value="{{old('nombre_constructora')}}">
              </div>

              <div class="form-group">
                <label for="">Direccion</label>
                <input type="text" class="form-control" name="direccion" placeholder="Escriba aqui la direccion de la Obra" value="{{old('direccion')}}">
              </div>

              <div class="form-group">
                <label for="">Nombre Ingeniero</label>
                <input type="text" class="form-control" name="nombre_ingeniero" placeholder="Escriba el nombre del Ingeniero" value="{{old('nombre_ingeniero')}}">
              </div>

              <div class="form-group">
                <label for="">Email</label>
                <input type="text" class="form-control" name="email" placeholder="Direccion de correo del Ingeniero" value="{{old('email')}}">
              </div>

              <div class="form-group">
                <label for="">Telefono</label>
                <input type="text" class="form-control" name="telefono" placeholder="Telefono de contacto para le Ingeniero a cargo" value="{{old('telefono')}}">
              </div>

             {{-- <button type="submit" class="btn btn-default">Guardar</button> --}}



             <script>

             function cambia_de_pagina(){
                 location.href="http://127.0.0.1:8000/obras/"
             }
             </script>

             {{-- <div class="row">

                <div class="col-4">
                 <button type="submit" class="btn btn-primary  active">Guardar y Seguir</button>
               </div>

               <div class="col-4">
                 <input type="button" class="btn btn-default  active " onclick="javascript:cambia_de_pagina();" value="Cancelar">
               </div>

           </div> --}}
           <div class="row">
                <div class="col-md-9"><button type="submit" class="btn btn-primary  active">Guardar y Seguir</button></div>
                <div class="col-md-1"><input type="button" class="btn btn-default  active " onclick="javascript:cambia_de_pagina();" value="Cancelar"></div>

            </div>

           </form>
          </div>
      </div>

@endsection
