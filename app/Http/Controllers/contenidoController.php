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

		$login = DB::table('login')->get();

		
		return view('contenido.listado', compact('login'));

	}

    public function projects()
    {


    	return view('contenido.projects');
    }

    public function detalle($id)
    {
    	$login = login::findOrFail($id);

    		if($login == null){
    		return response()->view('errors.404', [], 404);
    	}


    	return view('contenido.detalle',compact('login'));

    }

    public function newusuario()

    {
    	
    	 return view('contenido.newusuario');

    }


    public function store()

    {
    	
    	$data = request()->all();

    	// dd($data);

    	login::create([

    	'usuario' =>  $data['usuario'],
    	'name'    =>  $data['name'],
    	'password' => bcrypt($data['password']),


    	]);

    	return redirect ('listado');

    }


}