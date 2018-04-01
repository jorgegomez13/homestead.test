@extends('layouts.contenido')
@section('content')
<title>Contenido | Listado de Usuarios</title>
 <ul>
 	<h2>Listado de Usuarios</h2><a>Agregar usuario nuevo</a><p><button type="button" class="btn btn-info">Agregar</button>


@forelse($login as $login)
     <li> {{$login->name}} <a href="{{url("/detalle/$login->id")}}">Ver detalles</a></li>
	
@empty
	<li>No hay Usuarios Disponibles</li>
</ul>
@endforelse


@stop