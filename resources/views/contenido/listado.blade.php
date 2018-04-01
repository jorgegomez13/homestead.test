@extends('layouts.contenido')
@section('content')
<title>Contenido | Listado de Usuarios</title>
 
<div class="container">
    <table id="log" class="table table-hover table-condensed">
        <thead>
        <tr>
            <th>Id</th>
            <th>usuario</th>
            <th>Nombre</th>
        </tr>
        </thead>
    </table>
</div>
 
<script type="text/javascript">
    $(document).ready(function() {
        oTable = $('#log').DataTable({
            "processing": true,
            "serverSide": true,
            "ajax": "{{ route('datatable.login') }}",
            "columns": [
                {data: 'id', name: 'id'},
                {data: 'usuario', name: 'usuario'},
                {data: 'name', name: 'name'}
            ]
        });
    });
</script>

 <!-- <ul>
 	<h2>Listado de Usuarios</h2>
@forelse($login as $login)
 
     <li>{{$login->name}}</li>
@empty
	<li>No hay Usuarios Disponibles</li>
</ul>
@endforelse
 -->

@stop