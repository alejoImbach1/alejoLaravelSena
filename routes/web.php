<?php

use App\Http\Controllers\ControllerTallerHttp;
use App\Http\Controllers\DogController;
use App\Http\Controllers\HouseController;
use App\Http\Controllers\NumberController;
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

Route::get('/curso', function () {
    return view('index');
})->name('curso.index');

Route::controller(TallerController::class)->group(function () {
    Route::get('curso/tallerhttp','index')->name('curso.indexTallerHttp');
    Route::post('curso/tallerhttp/verificar-primo','verificarPrimo')->name('curso.verificarPrimo');
    Route::post('curso/tallerhttp/verificar-amigos','verificarAmigos')->name('curso.verificarAmigos');
    Route::post('curso/tallerhttp/calcular-promedio','calcularPromedio')->name('curso.calcularPromedio');
    Route::post('curso/tallerhttp/calcular-cuadratica','cuadratica')->name('curso.calcularCuadratica');
});

Route::get('/curso/producto', [ProductController::class,'productStore']);

Route::get('/curso/registros', function () {
    return view('assignments.registros');
})->name('curso.indexRegistros');

Route::post('/curso/registros/perro', [DogController::class,'create'])->name('curso.registrarPerro');

Route::post('/curso/registros/casa', [HouseController::class,'create'])->name('curso.registrarCasa');

Route::post('/curso/registros/numero', [NumberController::class,'create'])->name('curso.verificarPrimoYRegistrar');
