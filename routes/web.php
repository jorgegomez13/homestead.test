<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//esto es un layout
Route::get('/', function()
{
    return View::make('pages.home');
});
Route::get('home', function()
{
    return View::make('pages.home');
});

Route::get('about', function()
{
    return View::make('pages.about');
});

Route::get('projects', function()
{
    return View::make('pages.projects');
});

Route::get('contact', function()
{
    return View::make('pages.contact');
});
//aqui termina get layout




// Route::get('inicio','inicioController@index');

// Route::get('contenido','contenidoController@contenido');
