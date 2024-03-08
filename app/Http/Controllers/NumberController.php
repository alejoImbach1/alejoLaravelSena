<?php

namespace App\Http\Controllers;

use App\Models\Number;
use Illuminate\Http\Request;

class NumberController extends Controller
{
    public function create(Request $request){
        $modelNumber = new Number();
        $number = $request->number;
        $modelNumber->number = $number;
        $calculador = new Calculator;
        $type = ($calculador->esPrimo($number)) ? "SÍ es primo":"NO es primo";
        $modelNumber->type = $type;
        $modelNumber->save();
        return back()->with('mensaje',["{$number} {$type} y se registró"]);
    }
}
