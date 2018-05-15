@extends('layouts.contenido')
@section('content')
<title>Contenido | Detalle de Usuario</title>

<h2>Mostrando Detalle del Usuario:{{$login->usuario}}</h2>
<table class="table">
  <thead>
    <tr align="center">
    	<th scope="col">Numero de Registro</th>
    	<th scope="col">Codigo de Usuario</th>
    	<th scope="col">Nombre de Usuario</th>
   </thead>
    </tr>
     <tbody>
    <tr align="center">
      <th scope="row">{{$login->id}}</th>
      <td>{{$login->usuario}}</td>
      <td>{{$login->name}}</td>
 </tbody>
</table>
<a href="{{url('/listado')}}"><img  src="/images/back.png" />Regresar al Listado de Usuario</a>
@stop