<?php

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

Route::get('/curso/primo/{data}', [TallerController::class,'verificarPrimo']);

Route::get('/curso/amigos/{data1}/{data2}', [TallerController::class,'verificarAmigos']);