@extends('layouts.app')


@section('content')
  <ul>
    <li>{{$obra->nombre_obra}}</li>
    <li>{{$obra->nombre_constructora}}</li>
    <li>{{$obra->direccion}}</li>
    <li>{{$obra->nombre_ingeniero}}</li>
    <li>{{$obra->email}}</li>
    <li>{{$obra->telefono}}</li>
    <li>{{$obra->created_at}}</li>
  </ul>

@endsection
