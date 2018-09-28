<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class resourcesController extends Controller
{
    public function index()
	{
		return view("resources/index");
	}
}
