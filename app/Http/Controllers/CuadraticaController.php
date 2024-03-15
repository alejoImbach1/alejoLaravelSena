<?php

namespace App\Http\Controllers;

use App\Models\Cuadratica;
use Illuminate\Http\Request;

class CuadraticaController extends Controller
{
    public function create(Request $request){
        $modelCuadratica = new Cuadratica();
        $a = $request->valora;
        $b = $request->valorb;
        $c = $request->valorc;

        $modelCuadratica->coeficiente_a = $a;
        $modelCuadratica->coeficiente_b = $b;
        $modelCuadratica->coeficiente_c = $c;

        $raices = Calculator::calcularRaices($a,$b,$c);

        $modelCuadratica->raiz_1 = $raices[0];
        $modelCuadratica->raiz_2 = $raices[1];

        $modelCuadratica->save();

        return back()->with('mensaje',"Raiz 1 = {$raices[0]}  ;  Raiz 2 = {$raices[1]}   SE REGISTRÓ!!");
    }
}
