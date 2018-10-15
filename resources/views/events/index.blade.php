@extends('templates.theme')

@section('title','Semana de la Computación')

@section('scripts')
<script>
	// Set the date we're counting down to
	var countDownDate = new Date("Oct 15, 2018 10:00:00").getTime();

	// Update the count down every 1 second
	var x = setInterval(function() {

		// Get todays date and time
		var now = new Date().getTime();
		
		// Find the distance between now and the count down date
		var distance = countDownDate - now;
		
		// Time calculations for days, hours, minutes and seconds
		var days = Math.floor(distance / (1000 * 60 * 60 * 24));
		var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
		var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
		var seconds = Math.floor((distance % (1000 * 60)) / 1000);
		
		// Output the result in an element with id="demo"
		document.getElementById("countdown").innerHTML = days + " d : " + hours + " h : "
		+ minutes + " m : " + seconds + " s ";
		
		// If the count down is over, write some text 
		if (distance < 0) {
		    clearInterval(x);
		    document.getElementById("demo").innerHTML = "EXPIRED";
		}
	}, 1000);
	</script>
@endsection


@section('body')

<section  style="background-image: url(/images/banners/science.jpg);">
  <div style="padding:15px;" class="row ">  
        <center>
          <img src="/images/cslogos/logoDarkBackground.png" class="logoImg">
          <h2 class="textWhite">Semana de la Computación </h2>
          <strong><h2 class="textWhite" id="countdown"></h2></strong>
        </center>
  </div>
</section>


<div class="container" style="padding:30px;">
  <h2>¿QUE ES LA SEMANA DE LA COMPUTACIÓN?</h2>
  <br>
  <p class="paragraph" >Es un evento compuesto por diferentes tipos de actividades que se realiza una vez cada año, y dura 5 días. Estas actividades comprenden: Charlas , exposiciones, concursos, actividades recreativas entre otros.</p>
  <p class="paragraph" >El objetivo es motivar a los estudiantes con respecto a la carrera profesional, dar a conocer los proyectos y logros de los estudiantes, fortalecer la relación alumno-profesor , promover la participación y el trabajo en equipo, entre otros.</p>
  <p class="paragraph" >Este es el primer año en el que se lleva a cabo La Semana de la Computación, y se espera que se realice cada año.</p>
  <hr>

  <h3>¿Eres estudiante CS-UNSA?</h3>
  <p class="paragraph" >Ingresa al siguiente enlace para descargar tu tarjeta de asistencia, esta sirve para que se registre tu asistencia en cada las charlas. Un grupo de alumnos estarán registrando la asistencia, solo deberas acercar el código Qr generado a la camara de los encargados y tu asistencia será registrada.

  </p>
  <a href="http://csunsa.win/events/generateQr">
  <button class="btn btn-default">Descargar tarjeta de asistencia</button>
  </a>
  

<hr>

  <h2>CRONOGRAMA</h2>
  
  

<style type="text/css">
.tg  {border-collapse:collapse;border-spacing:0;}
.tg td{font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}
.tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}
.tg .tg-c3ow{border-color:inherit;text-align:center;vertical-align:center}
.tg .tg-0pky{border-color:inherit;text-align:left;vertical-align:center}
</style>

<div class="table-responsive">
  <table class="tg" WIDTH="100%">
    <tr>
      <th class="tg-0pky" WIDTH="5%"></th>
      <th class="tg-0pky" WIDTH="19%">LUNES</th>
      <th class="tg-0pky" WIDTH="19%">MARTES</th>
      <th class="tg-0pky" WIDTH="19%">MIÉRCOLES</th>
      <th class="tg-0pky" WIDTH="19%">JUEVES</th>
      <th class="tg-0pky" WIDTH="19%">VIERNES</th>
    </tr>
    <tr>
      <td class="tg-0pky">08:30</td>
      <td class="tg-0pky" rowspan="3"></td>
      <td class="tg-0pky" rowspan="3"></td>
      <td class="tg-0pky" rowspan="9">
        <strong>Exposiciones Docentes:</strong>
        
          <li>8:30-10:00 Ernesto Cuadros</li>
          <li>10:00-10:30 TUTORIA</li>
          <li>10:30-11:00 Edwar Hinojosa</li>
          <li>11:00-11:30 Cristian Portugal</li>
          <li>11:30-12:00 Edgar Sarmiento</li>
          <li>12:00-12:30 Alvaro Mamani</li>
          <li>12:30-13:00 Video Egresados</li>
        
      </td>
      <td class="tg-0pky" rowspan="8">		
        <strong>Concursos</strong>
        
          <li>Dota2</li>
          <li>Just Dance</li>
          <li>Smash Bros</li>
        
      </td>
      <td class="tg-0pky" rowspan="4">
        <strong>Proyectos Pre-grado</strong>
        <li>8:30-9:00 Dydier Sullca - Juego de Memoria</li>
        <li>9:00-9:30 Alexander Apaza - Cuanto me Falta</li>
        <li>9:30-10:00 Santiago Pancca - Simulación de Sismos con Realidad Virtual</li>
        <li>10:00-10:30 Alexis , Cristian y Diego Extracción de Fondo de Video</li>
      </td>
    </tr>
    <tr>
      <td class="tg-0pky">09:00</td>
    </tr>
    <tr>
      <td class="tg-0pky">09:30</td>
    </tr>
    <tr>
      <td class="tg-0pky">10:00</td>
      <td class="tg-0pky" rowspan="3">
        <strong> Inauguración</strong>
      </td>
      <td class="tg-0pky" rowspan="6">
        <strong>Empresas, emprendimiento:</strong>
        
          <li>10:00-10:20 Video de egresados</li>
          <li>10:20-11:00 Cesar Juárez</li>
          <li>11:00-12:00 Keny Lazo CEO Code en mi Cole</li>
          <li>12:00-13:00 Jean Luis Gelot. (Camara Comercio)</li>
        
      </td>
    </tr>
    <tr>
      <td class="tg-0pky">10:30</td>
      <td class="tg-0pky" rowspan="3">
        <strong>Mesa Redonda</strong> <br>
        10 años despues
      </td>
    </tr>
    <tr>
      <td class="tg-0pky">11:00</td>
    </tr>
    <tr>
      <td class="tg-0pky">11:30</td>
      <td class="tg-0pky" rowspan="3">
        <strong>Charla Plenaria</strong><br>
        Edwar Hinojosa - Acreditacion
        </td>
    </tr>
    <tr>
      <td class="tg-0pky">12:00</td>
      <td class="tg-0pky" rowspan="2"><strong>CIERRE</strong></td>
    </tr>
    <tr>
      <td class="tg-0pky">12:30</td>
      <td class="tg-0pky"><strong>FOTOS CS</strong></td>
    </tr>
    <tr>
      <td class="tg-0pky">13:00</td>
      <td class="tg-c3ow" colspan="4" rowspan="4">
      <strong>ALMUERZO</strong>
      </td>
      <td class="tg-c3ow" rowspan="11">
        <strong>Confraternización</strong>
          <li>Futbol</li>
          <li>Voley</li>
      </td>
    </tr>
    <tr>
      <td class="tg-0pky">13:30</td>
    </tr>
    <tr>
      <td class="tg-0pky">14:00</td>
    </tr>
    <tr>
      <td class="tg-0pky">14:30</td>
    </tr>
    <tr>
      <td class="tg-0pky">15:00</td>
      <td class="tg-0pky" rowspan="5">
        <strong>Exposición de invitados:</strong>
        <li>3:00-3:40 Ebert Huanca</li>
        <li>3:40-4:30 Julio Santiestevan</li>
        <li>4:30-5:00 Video de Egresados</li>
      </td>
      <td class="tg-0pky" rowspan="7">
        <strong>Exposiciones Docentes: </strong>
        
        <li>3:00-3:30 Ernesto Suarez</li>
        <li>3:30-4:00 Edward Hinojosa</li>
        <li>4:00-4:30 Tony</li>
        <li>4:30-5:00 Roxana Flores</li>
        <li>5:00-5:30 Vicente</li>
        <li>5:30-6:00 Christian Revilla</li>
        
        
      </td>
      <td class="tg-0pky" rowspan="7">
        <strong>Concurso de Programación</strong>
      </td>
      <td class="tg-0pky" rowspan="7">
        <strong>Momento alumnos y exalumnos:</strong>
        <li>3:00-3:30 Grimaldo y Lorena</li>
        <li>3:30-4:00 Olenka y Rosa</li>
        <li>4:00-4:30 Diego Charrez</li>
        <li>4:30-5:00 Christofer</li>
        <li>5:00-5:30 Eddy Cáceres</li>
        <li>5:30-6:00 Prof. Wilber - Romulo</li>
      </td>
    </tr>
    <tr>
      <td class="tg-0pky">15:30</td>
    </tr>
    <tr>
      <td class="tg-0pky">16:00</td>
    </tr>
    <tr>
      <td class="tg-0pky">16:30</td>
    </tr>
    <tr>
      <td class="tg-0pky">17:00</td>
    </tr>
    <tr>
      <td class="tg-0pky">17:30</td>
      <td class="tg-0pky"></td>
    </tr>
    <tr>
      <td class="tg-0pky">18:00</td>
      <td class="tg-0pky"></td>
    </tr>
  </table>
</div>





      <div class="container">
          <h3>Participa en los eventos y concursos</h3>
          <br>

          <table class=" table">
            <thead>
              <tr>
                <th>Evento</th>
                <th>Formulario</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Exposiciones y proyectos</td>
                  <td><a href="https://goo.gl/forms/SEjPjaMAMU12uEiC3" target="_blank"> Ir al Formulario</a></td>
              </tr>
              <tr>
                <td>Concurso de Programación Competitiva</td>
                <td><a href='https://goo.gl/forms/eSZbXmg1hVgg10FT2' target="_blank"> Ir al Formulario</a></td>
              </tr>
              <tr>
                <td>Concurso de Dota 2</td>
                <td> <a href="https://goo.gl/forms/R4ICY2kbStTbJf3l2" target="_blank">Ir al Formulario</a></td>
              </tr>
            </tbody>
          </table>
          
          <hr>
          <br>
          <br>
         
          
       

      </div>
    



@endsection