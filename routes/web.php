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

Route::get('/catalogo-de-certificacoes', function () {
    return view('logged_in.catalogo_de_certificacoes');
});

Route::get('/meu-perfil', function () {
    return view('logged_in.meu_perfil');
});
