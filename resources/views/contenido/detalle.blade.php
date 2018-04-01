@extends('layouts.contenido')
@section('content')
<title>Contenido | Detalle de Usuario</title>
<ul>

<h2>Mostrando Detalle del Usuario:{{$login->usuario}}</h2>
<table class="table">
  <thead>
    <tr>
    	<th scope="col">ID</th>
    	<th scope="col">Codigo de Usuario</th>
    	<th scope="col">Nombre de Usuario</th>
    	<th scope="col">Editar</th>
   </thead>
    </tr>
     <tbody>
    <tr>
      <th scope="row">{{$login->id}}</th>
      <td>{{$login->usuario}}</td>
      <td>{{$login->name}}</td>
      <td><button type="button" class="btn btn-primary">Editar</button></td>
 </tbody>
</table>
<a href="{{url('/listado')}}">Regresar al Listado de Usuario</a>
</ul>
@stop