<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class TallerController extends Controller
{
    public function index(){
        return view('assignments.formularios')->with('extends','assignments.tallerhttp');
    }

    public function verificarPrimo(Request $request)
    {
        $numero = $request->numero;
        $message = (Calculator::esPrimo($numero)) ? "{$numero} SÍ es primo": "{$numero} NO es primo";
        return back()->with("mensaje", $message);
    }

    public function verificarAmigos(Request $request){
        $number1 = $request->numero1;
        $number2 = $request->numero2;
        $divisores_number1 = Calculator::obtenerDivisores($number1);
        $suma_divisores_number1 = Calculator::sumarArray($divisores_number1);

        $divisores_number2 = Calculator::obtenerDivisores($number2);
        $suma_divisores_number2 = Calculator::sumarArray($divisores_number2);
        if($suma_divisores_number1 == $number2 && $suma_divisores_number2 == $number1){
            $message = "{$number1} y {$number2} SÍ son número amigos";
        }else{
            $message = "{$number1} y {$number2} NO son números amigos";
        }
        return back()->with("mensaje",$message);
    }

    public function calcularPromedio(Request $request){
        $promedio = ($request->nota1+$request->nota2+$request->nota3)/3;
        $message = "El promedio es: {$promedio}";
        return back()->with("mensaje",$message);
    }

    public function cuadratica(Request $request){
        $a = $request->valora;
        $b = $request->valorb;
        $c = $request->valorc;
        $raices = Calculator::calcularRaices($a,$b,$c);
        $raiz1 = $raices[0];
        $raiz2 = $raices[1];
        $message = "Raiz 1 = {$raiz1} ; Raiz 2 = {$raiz2}";
        return back()->with("mensaje",$message);
    }
}