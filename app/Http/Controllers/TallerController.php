<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TallerController extends Controller
{
    public function index(){
        return view('assignments.tallerhttp');
    }

    public function verificarPrimo(Request $request)
    {
        $number = $request->numero;
        $limit = sqrt($number);
        $i = 3;
        $message = "{$number} Sí es un número primo";
        if ($number % 2 == 0) {
            $message = "{$number} NO es un número primo";
        } else {
            while ($limit >= $i) {
                if ($number % $i == 0) {
                    $message = "{$number} NO es un número primo";
                }
                $i = $i + 2;
            }
        }
        // return "{$number} {$message}";
        // return back()->with("mensaje",$message);
        return back()->with("mensaje", [$message]);
        // return $message;
    }

    public function verificarAmigos(Request $request){
        $number1 = $request->numero1;
        $number2 = $request->numero2;
        $ob = new Operador();
        $divisores_number1 = $ob->obtenerDivisores($number1);
        $suma_divisores_number1 = $ob->sumar($divisores_number1);

        $divisores_number2 = $ob->obtenerDivisores($number2);
        $suma_divisores_number2 = $ob->sumar($divisores_number2);
        if($suma_divisores_number1 == $number2 && $suma_divisores_number2 == $number1){
            $message = "{$number1} y {$number2} SÍ son número amigos";
        }else{
            $message = "{$number1} y {$number2} NO son números amigos";
        }
        return back()->with("mensaje",[$message]);
    }

    public function calcularPromedio(Request $request){
        $promedio = ($request->nota1+$request->nota2+$request->nota3)/3;
        $message = "El promedio es: {$promedio}";
        return back()->with("mensaje",[$message]);
    }

    public function calcularCuadratica(Request $request){
        $a = $request->valora;
        $b = $request->valorb;
        $c = $request->valorc;
        $x_1 = (-$b+sqrt($b*$b-4*$a*$c))/(2*$a);
        $x_2 = (-$b-sqrt($b*$b-4*$a*$c))/(2*$a);
        $message = "Las raices son: X_1 = {$x_1} ; X_2 = {$x_2}";
        return back()->with("mensaje",[$message]);
    }
}

class Operador
{
    function obtenerDivisores($numero)
    {
        $divisores = array();
        for ($i = 1; $i < $numero; $i++) {
            if ($numero % $i == 0) {
                $divisores[] = $i;
            }
        }
        return $divisores;
    }

    function sumar($lista)
    {
        return array_sum($lista);
    }
}
