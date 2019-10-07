<?php

namespace webCS\Http\Controllers;

use Illuminate\Http\Request;
use webCS\Attendance;
use Exception;


class ApiController extends Controller
{
    public function attendance(Request $request)
    {
        try
        {

            $strJsonFileContents = file_get_contents("listaAlumnos.json");
            $students = json_decode($strJsonFileContents, true);
            $cui = $request['cui'];

            if(isset($students[$cui]))
            {
                $attendance = new Attendance;
                $attendance->cui=$cui;
                $attendance->turn=$request['turn'];
                $attendance->register_date=$request['date'];
                $attendance->name=$students[$cui]['nombres'];
                $attendance->surname=$students[$cui]['apellidos'];
                $attendance->save();

                return response()->json([
                    'message' =>'OK',
                    'code' => 200,
                    'cui'=>$cui,
                    'datos'=> $students[$cui]
                
                ]);
                

            }
            else
                throw new Exception("Cui no existe");
            

            
        }
        catch(Exception $e)
        {
            return response()->json([
                'code' => 500,
                'message' =>"Error",
                'datos'=> null,
                'cui'=> $request['cui']
                
            ]);
        }
    }

    public function register(Request $request)
    {

    }
}
