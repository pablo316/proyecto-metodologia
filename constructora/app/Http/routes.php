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
*/

Route::get('/', function () {
    return view('auth/login');
});
Route::get('/sistema', function () {
    return view('layouts/admin');
});


Route::resource('compras/proveedor','ProveedorController');
Route::resource('ventas/cliente','ClienteController');
Route::resource('bodega/materia','MateriaController');
Route::get('error',function(){
	abort(404);
});

Route::auth();

Route::get('/home', 'HomeController@index');
