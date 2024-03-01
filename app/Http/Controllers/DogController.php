<?php

namespace App\Http\Controllers;

use App\Models\Dog;
use Illuminate\Http\Request;

class DogController extends Controller
{
    public function create(Request $request){
        $dog = new Dog();
        $dog->nombre = $request->txtnombre;
        $dog->raza = $request->txtraza;
        $dog->peso = $request->txtpeso;
        $dog->save();
    }
}
