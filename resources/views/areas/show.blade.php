@extends('layouts.app')


@section('content')
  <h1> Registro de {{$nombre_tabla}}</small></h1>

    <div class="container">
      <ul>
        @foreach ($datos as $dato)
          <li>
            <a href="/{{$nombre_tabla}}/{{$dato->id}}">
              {{$dato->$nombre_columna}}
            </a>
          </li>

        @endforeach
      </ul>


    </div>

@endsection
