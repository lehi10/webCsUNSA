<?php

namespace webCS\Http\Controllers;

use Illuminate\Http\Request;

class dashboardController extends Controller
{

	public function index()
	{
		$posts=\webCS\Post::All();
		return view("index",compact('posts'));
	}
}
