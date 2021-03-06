@extends('layouts.contenido')
@section('content')
<title>Contenido | Listado de Usuarios</title>
 	<h2>Listado de Usuarios</h2>
<a class="newuser" href="newusuario"><img  src="images/users.png" /></a>
     <table class="table">
         <thead align="center">
         <tr>
             <th scope="col">Nombre</th>
             <th scope="col">Detalles</th>
             <th scope="col">Acciones</th>
         </thead>
         </tr>
@forelse($login as $login)
         <tr align="center">
             <td scope="row">{{$login->name}}</td>
             <td><a class="btn btn-info" href="{{url("/detalle/$login->id")}}">informacion</a></td>
             <td><a href="{{url("/edit/$login->id")}}" class="btn btn-primary" >Editar</a> <a Onclick="confirmarRegistro();" class="btn btn-danger" >Eliminar</a></td>
             <script>
                     function confirmarRegistro()
                     {
                         if (window.confirm("Desea eliminar el registro?") == true)
                         {
                             window.location = '{{url("/delete/$login->id")}}';
                         }
                         else
                         {
                             window.location ='listado';
                         }
                     }
             </script>

@empty
             <div class="alert alert-danger" role="alert">
                 <strong> No hay informacion que mostrar.</strong>
                 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button>
             </div>
@endforelse
         </tr>
         </table>
@stop