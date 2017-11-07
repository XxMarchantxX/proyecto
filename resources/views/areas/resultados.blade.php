@extends('layouts.app')


@section('content')
  <div class="container-fluid">

    <h1>{{$area->nombre_area}}<small>  {{$area->obra->nombre_obra}}</small></h1>

  </div>
@endsection
