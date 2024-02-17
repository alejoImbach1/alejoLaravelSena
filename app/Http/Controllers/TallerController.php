<?php

namespace App\Http\Controllers;

class TallerController extends Controller
{
    public function verificarPrimo($number)
    {
        $limit = sqrt($number);
        $i = 3;
        $message = "SÍ es un número primo";
        if ($number % 2 == 0) {
            $message = "NO es un número primo";
        } else {
            while ($limit >= $i) {
                if ($number % $i == 0) {
                    $message = "NO es un número primo";
                }
                $i = $i + 2;
            }
        }
        return "{$number} {$message}";
    }

    public function verificarAmigos($number1, $number2){
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
        return $message;
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
