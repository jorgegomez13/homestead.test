@extends('layouts.contenido')
@section('content')
<title>Contenido | Detalle de Usuario</title>

<h2>Mostrando Detalle del Usuario</h2>
<table class="table">
  <thead>
    <tr align="center">
    	<th scope="col">Nombre</th>
    	<th scope="col">Email</th>
    	<th scope="col">Registro</th>
        <th scope="col">Actualizado</th>
   </thead>
    </tr>
     <tbody>
    <tr align="center">
    <th scope="row">{{$users->name}}</th>
    <td>{{$users->email}}</td>
    <td>{{$users->created_at}}</td>
    <td>{{$users->updated_at}}</td>
 </tbody>
</table>
<a href="{{url('/list')}}"><img  src="/images/back.png" />Regresar a Usuarios login</a>
@stop