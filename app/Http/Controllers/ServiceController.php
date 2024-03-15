<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    function create(Request $request) {
        $modelSoldado = new Service();
        $modelSoldado->type = $request->tipo;
        $modelSoldado->activity = $request->actividad;
        $modelSoldado->save();
        return back()->with('mensaje',"Se creó el servicio");
    }
}
