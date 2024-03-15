<?php

use App\Http\Controllers\BarracksController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ControllerTallerHttp;
use App\Http\Controllers\CorpController;
use App\Http\Controllers\CuadraticaController;
use App\Http\Controllers\DogController;
use App\Http\Controllers\HouseController;
use App\Http\Controllers\NumberController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SoldierController;
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

Route::get('/curso/registros', function () {
    return view('assignments.formularios')->with('extends','assignments.registros');
})->name('curso.indexRegistros');

Route::post('/curso/registros-perro', [DogController::class,'create'])->name('curso.registrarPerro');

Route::post('/curso/registros-casa', [HouseController::class,'create'])->name('curso.registrarCasa');

Route::post('/curso/registros-numero', [NumberController::class,'create'])->name('curso.verificarPrimoRegistrar');

Route::post('/curso/registros-cuadratica', [CuadraticaController::class,'create'])->name('curso.registrarRaicesCuadratica');

Route::get('/curso/primer-examen', function () {
    return view('assignments.formularios')->with('extends','assignments.primerexamen');
})->name('curso.indexPrimerExamen');

Route::post('/curso/primer-examen-soldado', [SoldierController::class,'create'])->name('primerexamen.registrarSoldado');

Route::post('/curso/primer-examen-cuartel', [BarracksController::class,'create'])->name('primerexamen.registrarCuartel');

Route::post('/curso/primer-examen-cuerpo', [CorpController::class,'create'])->name('primerexamen.registrarCuerpo');

Route::post('/curso/primer-examen-compañia', [CompanyController::class,'create'])->name('primerexamen.registrarCompañia');

Route::post('/curso/primer-examen-servicio', [ServiceController::class,'create'])->name('primerexamen.registrarServicio');



