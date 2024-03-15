<?php

namespace App\Http\Controllers;

use App\Models\House;
use Illuminate\Http\Request;

class HouseController extends Controller
{
    public function create(Request $request){
        $casa = new House();
        $casa->price = $request->price;
        $casa->area = $request->area;
        $casa->stories = $request->stories;
        $casa->color = $request->color;
        $casa->save();
        return back()->with('mensaje',"Se registró la casa");
    }
}
