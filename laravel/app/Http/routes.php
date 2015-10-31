<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|

Route::resource('categoria','CategoriaControlador');*/
Route::get('/','procatalogo@index');
<<<<<<< HEAD
//Route::get('iniciarsesion','procatalogo@iniciarsesion');
//rutas para CRUD categorias
Route::get('categoria/crear/{nombre}','CategoriaControlador@create');
Route::get('categoria/ver/{nombre}','CategoriaControlador@show');
Route::get('categoria/modificar/{id}/{categoria}','CategoriaControlador@update');
Route::get('categoria/eliminar/{id}','CategoriaControlador@destroy');

//rutas para CRUD presentaciones
Route::get('presentacion/crear/{nombre}','PresentacionControlador@create');
Route::get('presentacion/ver/{nombre}','PresentacionControlador@show');
Route::get('presentacion/modificar/{id}/{presentacion}','PresentacionControlador@update');
Route::get('presentacion/eliminar/{id}','PresentacionControlador@destroy');

//ruta usuario
Route::get('usuario/crear','UsuarioControlador@create');
Route::get('usuario/ver/{us}','UsuarioControlador@show');

//ruta producto
Route::get('producto/crear','ProductoControlador@create');
Route::get('producto/ver/{nombre}','ProductoControlador@show');

//una nueva ruta para eliminar registros con el metodo get
//Route::get('movie/destroy/{id}', ['as' => 'movie/destroy', 'uses'=>'MovieController@destroy']);
//ruta para realizar busqueda de registros.
//Route::post('movie/search', ['as' => 'movie/search', 'uses'=>'MovieController@search']);
=======
Route::get('iniciarsesion','procatalogo@iniciarsesion');
Route::get('procatalogo','iniciarsesion@procatalogo');
>>>>>>> 5d7bf70c2d135ff127e5bcaec13881025a3b1d1e
