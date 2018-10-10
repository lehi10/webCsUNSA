<?php

namespace webCS\Http\Controllers;

use Illuminate\Http\Request;

class blogController extends Controller
{
    public function index()
	{
		return view("blog/index");
	}

	public function postRequest(Request $request)
	{
		$urlIndex = $request->url;

		return view("blog/post");
	}

	
}
