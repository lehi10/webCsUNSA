<?php

namespace webCS\Http\Controllers;

use Illuminate\Http\Request;

class eventsController extends Controller
{
    public function index()
	{
		return view("events/index");
	}
	
	
	public function generateQr()
	{
		return view("events/generateQr");
	}
	
	public function downloadQr(Request $request)
	{
		$cui =$request['cui'];
		$alumnos = json_decode(file_get_contents('listaAlumnos.json'), true); 
		
		if(isset($alumnos[$cui]) != NULL)
		{
			$apellidos = $alumnos[$cui]['apellidos'];
			$nombres = $alumnos[$cui]['nombres'];
			//return view("events/downloadQr",['cui'=>$cui ,'apellidos'=>$apellidos,'nombres'=>$nombres ]);	

			$view =  \View::make('events.downloadQr',['cui'=>$cui,'nombres'=>$nombres,'apellidos'=>$apellidos])->render();
			$pdf = \App::make('dompdf.wrapper');
			$pdf->loadHTML($view)->setPaper('a6', 'landscape');
			return $pdf->stream('tarjetaAsistencia_CSUNSA.pdf');
			
		}
		else
		{
			$errorMessage= "CUI INCORRECTO ";
			return redirect('events/generateQr')->with('status', $errorMessage);;
		}
	}
}
