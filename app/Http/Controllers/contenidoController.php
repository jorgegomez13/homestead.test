<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use app\Http\Controllers;

use Illuminate\Support\Facades\DB;

use App\login;

use Illuminate\Support\Collection;

class contenidoController extends Controller
{

	public function index()
	{

	
		 return view('contenido.index');
	}

	public function listado()

	{
        $login = login::select(['id','usuario','name']);
 
        return Datatables::of($login)
 
            ->make(true);

		
		//return view('contenido.listado', compact('login'));

	}

    public function projects()
    {


    	return view('contenido.projects');
    }
}
