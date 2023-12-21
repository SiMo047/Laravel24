<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IncidenciaController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('hola');
});

//Route::get('/incidencias', [IncidenciaController::class,'index']) ;
Route::get('/incidencias/delete/{id}', [IncidenciaController::class,'destroy']) ;

Route::resource('/incidencias', IncidenciaController::class) ;
