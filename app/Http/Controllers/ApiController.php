<?php

namespace webCS\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function attendance(Request $request)
    {
        $strJsonFileContents = file_get_contents("listaAlumnos.json");
        $array = json_decode($strJsonFileContents, true);
        $cui = $request['cui'];
        if(isset($array[$cui]))
        {
            return response()->json([
                'message' =>'OK',
                'code' => '200',
                'cui'=> $array[$cui]
                
            ]);

        }
        return response()->json([
            'code' => '500',
            'message' =>'NOT FOUND',
            'cui'=> $request['cui']
            
        ]);
    }
}
