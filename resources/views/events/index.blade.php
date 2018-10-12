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

<section  style="background-image: url(images/banners/science.jpg);">
  <div style="padding:15px;" class="row ">  
        <center>
          <img src="images/cslogos/logoDarkBackground.png" class="logoImg">
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

  

<hr>

  <h2>CRONOGRAMA</h2>
  
  

<style type="text/css">

table td:first-child {
	width: 5%;
}
 
table td:nth-child(2) {
	width: 19%;
}
 
table td:nth-child(3) {
	width: 19%;
}
table td:nth-child(4) {
	width: 19%;
}
table td:nth-child(5) {
	width: 19%;
}
table td:nth-child(6) {
	width: 19%;
}

.tg  {border-collapse:collapse;border-spacing:0;  }
.tg td{font-family:Montserrat, sans-serif;font-size:15px;padding:10px 5px;;overflow:hidden;word-break:normal;}
.tg th{font-family:Montserrat, sans-serif;font-size:17px;font-weight:bold;padding:10px 5px;;overflow:hidden;word-break:normal;}
.tg .tg-0lax{text-align:left;vertical-align:center}
.tg .tg-amwm{font-weight:bold;text-align:center;vertical-align:center}

</style>
  <div class="table-responsive">
    <table class="tg  table-bordered">
      <tr>
        <th class="tg-0lax"></th>
        <th class="tg-0lax">LUNES</th>
        <th class="tg-0lax">MARTES</th>
        <th class="tg-0lax">MIÉRCOLES</th>
        <th class="tg-0lax">JUEVES</th>
        <th class="tg-0lax">VIERNES</th>
      </tr>
      <tr>
        <td class="tg-0lax">8:30</td>
        <td class="tg-0lax"></td>
        <td class="tg-0lax"></td>
        <td class="tg-0lax" rowspan="9">
          Exposiciones Docentes:
        <td class="tg-0lax" rowspan="9">
          Concursos:
          <ul>
          <li>Dota 2</li>
          <li>Just Dance</li>
          </ul>
          Demoday
        <td class="tg-0lax" rowspan="3">Mejores Trabajos de Pregrado</td>
      </tr>
      <tr>
        <td class="tg-0lax">9:00</td>
        <td class="tg-0lax"></td>
        <td class="tg-0lax"></td>
      </tr>
      <tr>
        <td class="tg-0lax">9:30</td>
        <td class="tg-0lax"></td>
        <td class="tg-0lax"></td>
      </tr>
      <tr>
        <td class="tg-0lax">10:00</td>
        <td class="tg-0lax">Brindis</td>
        <td class="tg-0lax" rowspan="6">
          Invitados:
          <ul>
            <li>Incubadora JAKU UNSA</li>
            <li>Kenny Lazo - Code en mi Cole</li>
            <li>José Ochoa</li>
          </ul>

          
        </td>
        <td class="tg-0lax" rowspan="3">Mesa Redonda: CS 10 años después</td>
      </tr>
      <tr>
        <td class="tg-0lax">10:30</td>
        <td class="tg-0lax" rowspan="2">Inauguración</td>
      </tr>
      <tr>
        <td class="tg-0lax">11:00</td>
      </tr>
      <tr>
        <td class="tg-0lax">11:30</td>
        <td class="tg-0lax" rowspan="2">Charla Plenaria</td>
        <td class="tg-0lax" rowspan="2">Cierre </td>
      </tr>
      <tr>
        <td class="tg-0lax">12:00</td>
      </tr>
      <tr>
        <td class="tg-0lax">12:30</td>
        <td class="tg-0lax"></td>
        <td class="tg-0lax"></td>
      </tr>
      <tr>
        <td class="tg-0lax">13:00</td>
        <td class="tg-amwm" colspan="4" rowspan="5">ALMUERZO</td>
        <td class="tg-0lax" rowspan="10">
          Confraternización
          <ul>
            <li>Almuerzo CS</li>
            <li>Futbol</li>
            <li>Voley</li>
          </ul>
        </td>
      </tr>
      <tr>
        <td class="tg-0lax">13:30</td>
      </tr>
      <tr>
        <td class="tg-0lax">14:00</td>
      </tr>
      <tr>
        <td class="tg-0lax">14:30</td>
      </tr>
      <tr>
        <td class="tg-0lax">15:00</td>
      </tr>
      <tr>
        <td class="tg-0lax">15:30</td>
        <td class="tg-0lax" rowspan="5">
          Invitados especiales
          <ul>
          <li>Eber Huanca Cayo</li>
          <li>Abraham Davida</li>
          <li>Renzo Mora</li>
          
          </ul>      
        </td>
        <td class="tg-0lax" rowspan="5">
          Exposiciones Docentes :
          <ul>
            
          </ul>
        </td>
        <td class="tg-0lax" rowspan="5">
          Concurso de Programación Competitiva:
          <ul>
          <li>Avanzado</li>
          <li>Principiante</li>
          </ul>
          
          </td>
          
        </td>
        <td class="tg-0lax" rowspan="5">Exalumnos</td>
      </tr>
      <tr>
        <td class="tg-0lax">16:00</td>
      </tr>
      <tr>
        <td class="tg-0lax">16:30</td>
      </tr>
      <tr>
        <td class="tg-0lax">17:00</td>
      </tr>
      <tr>
        <td class="tg-0lax">17:30</td>
      </tr>

    </table>
  </div>
</div>




      <div class="container">
          <h3>Participa en los eventos y concursos</h3>
          <br>

          <table class="tg table">
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