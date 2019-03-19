<?php

namespace webCS\Http\Controllers;

use Illuminate\Http\Request;

class resourcesController extends Controller
{
    public function index()
	{
		return view("resources/index");
	}

  public function getConstancia(Request $request)
  {
    if(isset($request['cui']))
    {
        $cui=$request['cui'];
        return view("resources.constancia",['cui'=>$cui]);
    }
    else
      return view("resources.constancia");

  }

}
