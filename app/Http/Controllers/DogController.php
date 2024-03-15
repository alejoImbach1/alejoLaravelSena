<?php

namespace App\Http\Controllers;

use App\Models\Dog;
use Illuminate\Http\Request;

class DogController extends Controller
{
    public function create(Request $request){
        $dog = new Dog();
        $dog->name = $request->name;
        $dog->breed = $request->breed;
        $dog->weight = $request->weight;
        $dog->save();
        return back()->with('mensaje',"Se registró el perro");
    }
}
