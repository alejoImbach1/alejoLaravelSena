<?php

namespace App\Http\Controllers;

use App\Models\Corp;
use Illuminate\Http\Request;

class CorpController extends Controller
{
    function create(Request $request) {
        $modelSoldado = new Corp();
        $modelSoldado->type = $request->tipo;
        $modelSoldado->save();
        return back()->with('mensaje',"Se creó el cuerpo");
    }
}
