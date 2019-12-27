<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IncDecController extends Controller
{
   
    
    public function myNumberDefault(){
       
        return view('incDecNumber')->with('mynum',500);
    }
   
    public function myNumber($num){
       
        return view('incDecNumber')->with('mynum',$num);
    }


    public function myNumberAdjust($num,Request $req){
        if(isset($req->inc)){
            return view('incDecNumber')->with('mynum',$num+1);
            //return redirect('home/dashboard')
        }
        if(isset($req->dec)){
            return view('incDecNumber')->with('mynum',$num-1);
        }
    }
}
