<?php

namespace webCS\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    //
    public function index()
    {
        return view('index21');
    }

    public function semcomp2020(){
        return view('index20');
    }

    public function comite21(){
        return view('comite21');
    }
}
