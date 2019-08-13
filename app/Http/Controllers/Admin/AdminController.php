<?php

namespace webCS\Http\Controllers\Admin;

use Illuminate\Http\Request;
use webCS\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
	{
		return view("admin/index");
	}

}
