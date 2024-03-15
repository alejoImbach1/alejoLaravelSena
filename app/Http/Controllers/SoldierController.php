<?php

namespace App\Http\Controllers;

use App\Models\Soldier;
use Illuminate\Http\Request;

class SoldierController extends Controller
{
    function create(Request $request) {
        $modelSoldado = new Soldier();
        $modelSoldado->name = $request->nombre;
        $modelSoldado->surname = $request->apellidos;
        $modelSoldado->position = $request->grado;
        $modelSoldado->save();
        return back()->with('mensaje',"Se creó el soldado");
    }
}
