<?php

//defaul controller

Route::get('/', 'defaultController@home');

Route::get('/contact', 'defaultController@contact');

Route::get('/about', 'defaultController@about');

Route::get('/prueba','pruebaController@prueba');


//Contenido

Route::get('/index','contenidoController@index');

Route::get('/projects', 'contenidoController@projects');

Route::get('/listado','contenidoController@listado');

Route::get('/detalle/{id}','contenidoController@detalle')->where('id','[0-9]+');

// Route::post('/newusuario','contenidoController@nuevo')




	
