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

Route::get('/', function () {
    //return view('welcome');
    return 'Home, sweet home Alabama oh yeah motherfuckers!';
});


Route::get('/usuarios', function () {
    //return view('welcome');
    return 'Usuarios';
});

Route::get('/usuarios/nuevo', function () {
   
    return 'Crear un nuevo usuario';
});

Route::get('/usuarios/{id}', function ($id) {
    //return view('welcome');
    return 'Usuario con el id: ' . $id;
})->where('id', '[0-9]+');

Route::get('/saludo/{name}/{nickname?}', function ($name, $nickname = null) {
   
    if ($nickname)
    {
        return "Bienvenido {$name}, tu apodo es {$nickname}";
    }
    else
    {
        return "Bienvenido {$name}, no tienes apodo";
    }
        
});
