<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    function create(Request $request) {
        $modelSoldado = new Company();
        $modelSoldado->activity = $request->actividad;
        $modelSoldado->save();
        return back()->with('mensaje',"Se creó la actividad");
    }
}
