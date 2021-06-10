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


Route::get('/', function (){
    return view('home');
});

Route::get('media/{n1}/{n2}', 'App\Http\Controllers\CalculadoraController@media')
->where('n1', '[0-9]+')
->where('n2', '[0-9]+');
