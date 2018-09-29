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

@section('poster')
<section class="site-hero overlay" style="background-image: url(images/banners/science.jpg);">
  <div class="container">
    <div class="row align-items-center site-hero-inner justify-content-center">
      <div class="col-md-8 text-center">

        <div class="mb-5 element-animate">
            <img src="images/cslogos/logoDarkBackground.png" style="width: 350px;">

            <p class="lead"><strong>Semana de la Computación</strong></p>
            <h1 id="countdown"></h1>
        </div>            
      </div>
    </div>
  </div>
</section>
@endsection


@section('body')
<section class="site-section">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center">
            <h2>Semana de la Computación</h2>
            <p class="lead">Organizado por la escuela profesional de Ciencia de la Computación de la Universidad Nacional de San Agustín</p>
          </div>
        </div>
          <h3>Participa en los eventos y concursos</h3>
          <br>
          <table class="table">
            <thead>
              <tr>
                <th>Evento</th>
                <th>Fecha</th>
                <th>Formulario</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Exposiciones</td>
                <td>Jueves 18 (Por Confirmar)</td>
                  <td><a href="https://goo.gl/forms/SEjPjaMAMU12uEiC3" target="_blank"> Ir al Formulario</a></td>
              </tr>
              <tr>
                <td>Concurso de Programación Competitiva</td>
                <td>Miercoles 17</td>
                <td><a href='https://goo.gl/forms/eSZbXmg1hVgg10FT2' target="_blank"> Ir al Formulario</a></td>
              </tr>
              <tr>
                <td>Concurso de Dota 2</td>
                <td>Viernes 18</td>
                <td> <a href="https://goo.gl/forms/R4ICY2kbStTbJf3l2" target="_blank">Ir al Formulario</a></td>
              </tr>
            </tbody>
          </table>
          
          <hr>
          <br>
          <br>
          <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center">
            <h2>Invitados</h2>
            <p class="lead"></p>
          </div>
        </div>
          
        <section class="school-features text-dark d-flex">            
          <div class="inner">
            <div class="media d-block feature text-center">
              <img src="" alt="Invitado 1" class="mb-3">
              <div class="media-body">
                <h3 class="mt-0">Abraham Dávila</h3>
                <!--
                  <p class="instructor-meta">WordPress Expert</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora fuga suscipit numquam esse saepe quam, eveniet iure assumenda dignissimos aliquam!</p>
                -->
              </div>
            </div>

            <div class="media d-block feature text-center">
              <img src="" alt="Invitado 2" class="mb-3">
              <div class="media-body">
                <h3 class="mt-0">Ernesto Cuadros</h3>
                <!--
                  <p class="instructor-meta">WordPress Expert</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora fuga suscipit numquam esse saepe quam, eveniet iure assumenda dignissimos aliquam!</p>
                -->
              </div>
            </div>

            <div class="media d-block feature text-center">
              <img src="" alt="Invitado 3" class="mb-3">
              <div class="media-body">
                <h3 class="mt-0">Erick Gomez</h3>
                <!--
                  <p class="instructor-meta">WordPress Expert</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora fuga suscipit numquam esse saepe quam, eveniet iure assumenda dignissimos aliquam!</p>
                -->
              </div>
            </div>


            <div class="media d-block feature text-center">
              <img src="" alt="Ivitado 4" class="mb-3">
              <div class="media-body">
                <h3 class="mt-0">Renzo Mora</h3>
                <!--
                  <p class="instructor-meta">WordPress Expert</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora fuga suscipit numquam esse saepe quam, eveniet iure assumenda dignissimos aliquam!</p>
                -->
              </div>
            </div>
          </div>
        </section>


      </div>
    </section>



@endsection