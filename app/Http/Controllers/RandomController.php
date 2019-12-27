<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RandomController extends Controller
{
    public function randomView(){
        return view('random')->with('randomNumber',0);
    }

    public function random(Request $request){
        $min=$request->from;
        $max=$request->to;
        $randomNumber=rand($min,$max);
        return view('random')->with('randomNumber',$randomNumber);
    }
   
}
