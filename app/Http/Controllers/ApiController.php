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


    public function getCodeDay($date)
    {
        
        return $codeOfSession;
    }


    public function attendance(Request $request)
    {
        //try
        {
            $cui=$request["cui"];
            $student = Student::find($cui);
            
            if(isset($student))
            {
                   
                $date = $request['date'];
                $unixTimestamp = strtotime($date);
                $dayOfWeek = date("d", $unixTimestamp);
                $hourOfDay = date("h", $unixTimestamp);

                $codeOfSession ="";

                switch($dayOfWeek)
                {
                    case 10:
                        $codeOfSession="10T";
                        break;
                    case 11:
                        $codeOfSession="11M";
                        break;
                }
                
                
                $attendance= Attendance::where('cui',(string)$cui)->where('code_day',$codeOfSession)->first();

                if(isset($attendance)==0)
                {
                    $new_attendance         = new Attendance;
                    $new_attendance->cui    = $cui;
                    $new_attendance->code_day = $codeOfSession;
                    
                    if($request['turn'] === 'true')
                    {
                        $new_attendance->entry_time = $date;
                    }
                    else
                    {
                        $new_attendance->exit_time  = $date;
                    }
                    
                    $new_attendance->save();
                }        
                else
                {
                    $attendance->cui = $cui;
                    $attendance->code_day = $codeOfSession;
                    
                    if($request['turn']==='true')
                    {
                        $attendance->entry_time = $date;
                    }
                    else
                    {
                        $attendance->exit_time = $date;
                    }
                    $attendance->save();
                }


                return response()->json([
                    'message'   =>'OK',
                    'code'      => 200,
                    'cui'       => $cui,
                    'datos'     => $student
                ]);
                

            }
            else
                throw new Exception("Cui no existe");
        }
        //catch(Exception $e)
        {
            return response()->json([
                'code' => 500,
                'message' =>$e->getMessage(),
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
                    $student->id        = $key;
                    $student->name      = $val['nombres'];     
                    $student->surname   = $val['apellidos'];
                    $student->save();
                }
                
            }
            return response()->json([
                'code'      => 200,
                'message'   => "OK, updated",
            ]); 
        }
        catch(Exception $e)
        {
            return $e->getMessage();
        }
            
    }
}
