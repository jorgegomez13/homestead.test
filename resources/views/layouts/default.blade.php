<!doctype html>
<html>
<head>
    @include('includes.modal')
    @include('includes.head')
</head>
<body>
<div class="container">
    
    <header class="row">@include('includes.header')</header>
   
    <div id="main" class="row">@yield('content')</div>
	<hr>
    <footer class="row">@include('includes.footer')</footer>
</div>
</body>
</html>