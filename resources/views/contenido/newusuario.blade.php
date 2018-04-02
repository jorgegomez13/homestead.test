@extends('layouts.contenido')
@section('content')
<title>Contenido | Nuevo Usuario</title>
<ul>
<h1>Crear Usuario</h1>

<form method="POST" action="{{url('newusuario/crear')}}">
	{{ csrf_field() }}

	<label for="usuario">Usuario</label>
	<input type="text" name="usuario" placeholder="codigo"  value="000" required="0">
	<br>
	<label for="name">Nombre</label>
	<input type="text" name="name" placeholder="Nombre" required="0">
	<br>
	<label for="password" >Contraseña</label>
	<input type="password" name="password" placeholder="Password" required="0">
	<br>
	<button type="submit">Crear</button>
</ul>
</form>



@stop