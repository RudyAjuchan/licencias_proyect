<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/registro', function () {
    return view('SignUp');
});
Route::get('/login', function () {
    return view('Login');
});
Route::get('/inicio', function () {
    return view('sidebar');
});

Route::apiResource('/apiLic/categorias', 'CategoriasController');
Route::apiResource('/apiLic/roles', 'RolesController');
Route::apiResource('/apiLic/personas', 'PersonasController');
Route::apiResource('/apiLic/usuarios', 'UsuariosController');
