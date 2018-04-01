<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use app\Http\Controllers;

use Illuminate\Support\Facades\DB;

use App\login;

use Illuminate\Support\Collection;

class defaultController extends Controller

{
    public function home()
    {

    	return view('pages.home');

    }

 	public function contact()
    {

    	return view('pages.contact');

    }

    public function about()
    {
     
         $login = DB::table('login')->get();

        //$login = login::all();//se puede manejar esta forma tambien
    	
        return view('pages.about', compact('login'));
    	
    }

}