<?php

use App\Http\Controllers\ControllerTallerHttp;
use App\Http\Controllers\DogController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TallerController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::controller(TallerController::class)->group(function () {
    Route::get('curso/tallerhttp','index')->name('curso.index');
    Route::post('curso/tallerhttp/verificar-primo','verificarPrimo')->name('curso.verificarPrimo');
    Route::post('curso/tallerhttp/verificar-amigos','verificarAmigos')->name('curso.verificarAmigos');
    Route::post('curso/tallerhttp/calcular-promedio','calcularPromedio')->name('curso.calcularPromedio');
    Route::post('curso/tallerhttp/calcular-cuadratica','calcularCuadratica')->name('curso.calcularCuadratica');
});

Route::get('/curso/producto', [ProductController::class,'productStore']);

Route::get('/curso/registros', function () {
    return view('assignments.registros');
});

Route::post('/curso/registros/dog', [DogController::class,'create'])->name('curso.registrarDog');