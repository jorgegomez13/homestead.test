<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use app\Http\Controllers;

class defaultController extends Controller

{
    public function index()
    {

    	return view('default');

    }
 
}
