<?php

namespace App\Http\Controllers;

use App\Models\Number;
use Illuminate\Http\Request;

class NumberController extends Controller
{
    public function create(Request $request){
        $num = new Number();
        $number = $request->number;
        $limit = sqrt($number);
        $i = 3;
        $mensaje = "{$number} Sí es un número primo y se registró";
        $esprimo = true;
        if ($number % 2 == 0) {
            $mensaje = "{$number} NO es un número primo y se registró";
            $esprimo = false;
        } else {
            while ($limit >= $i) {
                if ($number % $i == 0) {
                    $mensaje = "{$number} NO es un número primo y se registró";
                    $esprimo = false;
                }
                $i = $i + 2;
            }
        }
        $num->number = $number;
        $num->isprime = $esprimo;
        $num->save();
        return back()->with('mensaje',[$mensaje]);
    }
}
