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
Route::get('/articulos', [ArticuloController::class,'index']); //muestra todos los registros
Route::post('/articulos', [ArticuloController::class,'store']); // crea un registro
Route::put('/articulos/{id}', [ArticuloController::class,'update']); // actualiza un registro
Route::delete('/articulos/{id}', [ArticuloController::class,'destroy']); //elimina un registro
