<?php

namespace App\Http\Controllers;

class Calculator
{
    public static function esPrimo($number){
        $limit = sqrt($number);
        $i = 3;
        $esPrimo = true;
        if ($number % 2 == 0) {
            $esPrimo = false;
        } else {
            while ($limit >= $i) {
                if ($number % $i == 0) {
                    $esPrimo = false;
                }
                $i = $i + 2;
            }
        }
        return $esPrimo;
    }

    public static function calcularRaices($a,$b,$c){
        $raiz1 = (-$b+sqrt($b*$b-4*$a*$c))/(2*$a);
        $raiz2 = (-$b-sqrt($b*$b-4*$a*$c))/(2*$a);
        return [$raiz1,$raiz2];
    }

    public static function obtenerDivisores($numero)
    {
        $divisores = array();
        for ($i = 1; $i < $numero; $i++) {
            if ($numero % $i == 0) {
                $divisores[] = $i;
            }
        }
        return $divisores;
    }

    public static function sumarArray($lista)
    {
        return array_sum($lista);
    }

}
