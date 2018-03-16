<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Http\Controllers;

class contenidoController extends Controller
{
    public function contenido()
	{
    return view('contenido');
	}
}
