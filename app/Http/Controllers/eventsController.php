<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class eventsController extends Controller
{
    public function index()
	{
		return view("events/index");
	}
}
