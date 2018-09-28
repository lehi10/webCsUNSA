<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class researchController extends Controller
{
    public function index()
	{
		return view("research/index");
	}
}
