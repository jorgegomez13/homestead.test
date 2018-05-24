<?php

//default controller

Route::get('/', 'defaultController@home');

Route::get('/contact', 'defaultController@contact');

Route::get('/about', 'defaultController@about');


/*************************
 *  home controller       *
 *  contenido controller  *
 *************************/

    Auth::routes();

    Route::get('/index', 'HomeController@index');

    Route::get('/list', 'HomeController@list');

    Route::get('/deta/{id}','HomeController@deta')->where('id','[0-9]+');

    Route::get('/dele/{id}','HomeController@eliminar')->where('id','[0-9]+');

    Route::get('/logout', array('uses' => 'HomeController@doLogout'));

    Route::get('/index','contenidoController@index');

    Route::get('/projects', 'contenidoController@projects');

    Route::get('/listado','contenidoController@listado');

    Route::get('/detalle/{id}','contenidoController@detalle')->where('id','[0-9]+');

    Route::get('/newusuario','contenidoController@newusuario');

    Route::post('/newusuario/crear','contenidoController@store');

    Route::get('/delete/{id}','contenidoController@destroy')->where('id','[0-9]+');

    Route::get('/edit/{id}','contenidoController@edit')->where('id','[0-9]+');

    Route::post('/edit/{id}/update','contenidoController@update');



