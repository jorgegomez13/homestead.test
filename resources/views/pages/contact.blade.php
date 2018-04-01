@extends('layouts.default')
@section('content')
<title>Pagina | Contacts</title>
<br>
<form method="post" id="formulario-contacto" role="form" autocomplete="off"></br>
<div class="form-group has-success">
<input class="form-control" type="text" name="nombre" placeholder="Nombre" required/>
<span id="error" class="help-block"></span></div>
<div class="form-group has-error">
<input class="form-control" type="email" name="email" placeholder="Correo electrónico" required />
<span id="error" class="help-block"></span></div>
<div class="form-group">
<textarea class="form-control" rows="10" name="mensaje" placeholder="Mensaje"></textarea>
<span id="error" class="help-block"></span></div> 
<div class="checkbox">
<label>
<input type="checkbox" name="aceptolopd" value="Acepto Lopd" required />
He leído y acepto la política de protección de datos.</label>
</div> 
<div class="form-group">
<button class="btn btn-primary btn-lg" type="submit">Enviar</button>
</div>
</form>
@stop
