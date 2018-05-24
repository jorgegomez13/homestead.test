<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use App\users;

use App\User;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('/');
    }

    public function list()
    {
        $users = DB::table('users')->get();

        return view('otro.list', compact('users'));
    }

    public function deta($id)
    {
        $users = users::findOrFail($id);

        if($users == null){
            return response()->view('errors.404', [], 404);
        }
        return view('otro.deta',compact('users'));

    }

    public function eliminar($id)

    {
        $users = users::find($id);
        $users -> delete();
        users::destroy($id);
        return redirect('list');

    }
    public function doLogout()
    {
        Auth::logout(); // log the user out of our application
        return Redirect('/'); // redirect the user to the login screen
    }

}
