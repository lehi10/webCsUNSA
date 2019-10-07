<?php

namespace webCS\Http\Controllers;

use webCS\Post;
use webCS\Category;
use webCS\Student;

use Illuminate\Http\Request;

class eventsController extends Controller
{
    public function index()
	{
		$category   = Category::where('slug',"eventos")->pluck('id')->first();
        $posts       = Post::where('category_id',$category)
                            ->orderBy('id','DESC')->where('status','PUBLISHED')->paginate(8);
            

		return view("events/index",compact('posts'));
	}
	
	
	public function generateQr()
	{
		return view("events/generateqr");
	}
	
	public function downloadQr(Request $request)
	{
		$cui =$request['cui'];
		$alumno = Student::find($cui);
		
		//$alumnos = json_decode(file_get_contents('listaAlumnos.json'), true); 
		
		if(isset($alumno) != NULL)
		{
			$apellidos = $alumno['surname'];
			$nombres = $alumno['name'];
			$view =  \View::make('events.downloadQr',['cui'=>$cui,'nombres'=>$nombres,'apellidos'=>$apellidos])->render();
			$pdf = \App::make('dompdf.wrapper');
			$pdf->loadHTML($view)->setPaper('a6', 'landscape');
			return $pdf->stream('tarjetaAsistencia_CSUNSA.pdf');
			
		}
		else
		{
			$errorMessage= "CUI INCORRECTO ";
			return redirect('events')->with('status', $errorMessage);;
		}
	}
}
