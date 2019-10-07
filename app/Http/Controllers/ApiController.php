<?php

namespace webCS\Http\Controllers;

use Illuminate\Http\Request;
use webCS\Attendance;
use webCS\Student;
use Exception;


class ApiController extends Controller
{
    
    public function index()
    {
        return view("api/index");
    }

    public function attendance(Request $request)
    {
        try
        {
            $cui=$request["cui"];
            $student = Student::find($cui);
            
            if(isset($student))
            {
                
                $attendance = new Attendance;
                $attendance->cui=$cui;
                $attendance->turn=$request['turn'];
                $attendance->register_date=$request['date'];
                $attendance->name=$student['name'];
                $attendance->surname=$student['surname'];
                $attendance->save();

                return response()->json([
                    'message' =>'OK',
                    'code' => 200,
                    'cui'=>$cui,
                    'datos'=> $student
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
        try
        {
            if(!isset($request['cui']) or !isset($request['name']) or !isset($request['surname']))
                throw new Exception("No se ingreso un dato");

            if($request['cui']=="" or $request['name']=="" or $request['surname']=="")
                throw new Exception("Hay datos en blanco");


            $student = new Student;
            $student->id  = $request['cui'];
            $student->name =$request['name'];     
            $student->surname = $request['surname'];
            $student->save();

            return response()->json([
                'code' => 200,
                'message' => "OK",
            ]); 
            
        }
        catch(Exception $e)
        {
            return response()->json([
                'code' => 500,
                'message' => $e->getMessage(),
            ]); 
        }
        
    }

    public function store(Request $request)
    {

    }

    public function loadStudentsFile()
    {
        try{
            $strJsonFileContents = file_get_contents("listaAlumnos.json");
            $students = json_decode($strJsonFileContents, true);
            foreach ($students as $key => $val) {
                
                $student = Student::find($key);
                if(!isset($student))
                {
                    $student = new Student;
                    $student->id  = $key;
                    $student->name =$val['nombres'];     
                    $student->surname =$val['apellidos'];
                    $student->save();
                }
                
            }
            return response()->json([
                'code' => 200,
                'message' => "OK, updated",
            ]); 
        }
        catch(Exception $e)
        {
            return $e->getMessage();
        }
            
    }
}
