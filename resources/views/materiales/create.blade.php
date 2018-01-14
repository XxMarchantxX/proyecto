@extends('layouts.app')


@section('content')





<script>
a = 0;
function addmaterial(){
       a++;

       var div = document.createElement('div');
       div.setAttribute('class', 'form-inline');
           div.innerHTML = '<div style="clear:both" class="Nombre_material'+a+' col-md-3"><input class="form-control" name="nombre_material'+a+'" type="text"/></div><div class="nombre_material'+a+' col-md-3""><input class="form-control" name="Precio_constructora'+a+'" type="text"/></div><div class="nombre_material'+a+' col-md-3""><input class="form-control" name="Valor_maestro'+a+'" type="text"/></div><br><br>';
           document.getElementById('materiales').appendChild(div);document.getElementById('materiales').appendChild(div);


          }
        </script>

  <div class="container">
   <h3>  Fomulario para agregar tipo de trabajo, material y valor</h3><Br>
   <form action="/materiales" method="POST" role="form">

     {{csrf_field()}}


  <div class="row">
       <div class="col-md-3"><label>Nombre Material</label></div>
       <div class="col-md-3"><label>Precio Constructora ($)</label></div>
       <div class="col-md-3"><label>Valor Maestro ($)</label></div>
       <div class="col-md-1"><input type="button" class="btn btn-success" id="add_material()" onClick="addmaterial()" value="+" /></div>
   </div>

   <!-- El id="materiales" indica que la función de JavaScript dejará aquí el resultado -->
   <div class="row" id="materiales">
   </div>


   {{-- Botones --}}
   <br>
   <br>
   <br>
   <div class="row">
        <div class="col-md-9"><button type="submit" class="btn btn-primary  active">Guardar y Seguir</button></div>
        <div class="col-md-1"><input type="button" class="btn btn-default  active " onclick="javascript:cambia_de_pagina();" value="Cancelar"></div>

    </div>
   </form>
</div>
@endsection
