<?php

namespace App\Http\Controllers;

use App\Models\Barracks;
use Illuminate\Http\Request;

class BarracksController extends Controller
{
    function create(Request $request) {
        $modelSoldado = new Barracks();
        $modelSoldado->name = $request->nombre;
        $modelSoldado->location = $request->ubicacion;
        $modelSoldado->save();
        return back()->with('mensaje',"Se creó el cuartel");
    }
}
