<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $title = "This is the title";
        return view('about')->with('mytitle',$title);
    }
}
