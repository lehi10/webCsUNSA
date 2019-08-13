<?php

namespace webCS\Http\Controllers;

use Illuminate\Http\Request;

use webCS\Post;
use webCS\Category;

class dashboardController extends Controller
{

	public function index()
	{
		$posts  = Post::select('*')->paginate(10);

		return view("index",compact('posts'));
	}
}

