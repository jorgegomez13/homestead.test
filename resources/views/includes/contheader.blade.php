<ul class="nav nav-pills">
   <li class="nav-item">
  </li>
  <li class="nav-item">
    <a class="nav-link" href="index">Index</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="projects">Projects</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="listado">Listado de Agentes</a>
  </li>
    <li class="nav-item">
        <a class="nav-link" href="list">Usuarios Login</a>
    </li>
    <div class="nav-item dropdown">
        <a id="navbarDropdown" class="btn btn-info dropdown-toggle dropdown-toggle-split" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
            {{ Auth::user()->name }} <span class="caret"></span>
        </a>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="/logout">Cerrar Session</a>
        </div>
        </div>
</ul>

https://bootsnipp.com/snippets/k2PxQ

