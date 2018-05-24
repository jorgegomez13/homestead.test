@extends('layouts.contenido')
@section('content')

<form method="POST" action="{{url("edit/$login->id/update")}}">
    {{ csrf_field() }}

    <label for="usuario">Usuario</label>
    <input class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" type="text" name="usuario" value="{{ isset($login) ? $login->usuario : old('usuario') }}" required>
    <br>
    <label for="name">Nombre</label>
    <input class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" type="text" name="name"  value="{{ isset($login) ? $login->name : old('name') }}" required>
    <br>
    <label for="password" >Contraseña</label>
    <input  class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" type="password" name="clave1" required>
    <br>
    <label for="password" >Confirma Contraseña</label>
    <input  class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" type="password"  name="password"  id="password" required >
    <br>
    <button class="btn btn-success"onclick="validar2campos(form)" type="submit">save</button>
<script>
    function validar2campos(form)

    {

        if(form.password.value == form.clave1.value){
            form.submit();
        }
        else {
            alert("El texto ingresado en los campos no coincide");

            form.clave1.value = ""; form.clave1.focus(); return false;
        }
    }
</script>
</form>

@stop