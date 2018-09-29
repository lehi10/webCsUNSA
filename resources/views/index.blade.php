@extends('templates.theme')

@section('title','School Of Computer Science UNSA')
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
<section class="site-hero overlay" data-stellar-background-ratio="0.5" style="background-image: url(images/poster.jpg); background-position: 0px 100px;">
  <div class="container">
    <div class="row align-items-center site-hero-inner justify-content-center">
      <div class="col-md-8 text-center">

        <div class="mb-5 element-animate">
            <img src="images/cslogos/logoDarkBackground.png" style="width: 350px;">

            <p class="lead"><strong>Escuela Profesional de Ciencia de la Computación</strong></p>
            <h1 id="countdown"></h1>
            <p class="lead">Para la Semana de la Computación</p>

        </div>            
      </div>
    </div>
  </div>
</section>
@endsection


@section('body')
    <section class="site-section bg-light">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-7 text-center">
                    <h2>Eventos</h2>
                    <p class="lead">Los siguientes eventos y actividades son programados para el presente año, 2018, 2do semestre.</p>
                </div>
            </div>

            <div class="row top-course">
                <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                    <a href="#" class="course">
                        <img src="images/season/weekComp.png" alt="Image placeholder">
                        <h2>SEMANA DE LA COMPUTACIÓN</h2>
                        <p>El mes de octubre , se llevará a cabo la semana de la computación , este evento se 
                            estará llevando a cabo por primera vez. Consta de algunos concursos y exposiciones 
                            realizadas por docentes, estudiantes e invitados.</p>
                            <a href="weekComp.html">Más información</a>
                    </a>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                    <a href="#" class="course">
                        <img src="images/season/acmicpc.png" alt="Image placeholder">
                        <h2>ENTRENAMIENTOS DE PROGRAMACIÓN COMPETITIVA</h2>
                        <p>Cada sabado se realizan los entrenamientos de programación competitiva en los laboratorios de la escuela, 
                            si deseas participar y mejorar tus habilidades de programación y razonamiento,  conocimiento de algoritmos, 
                            estructuras de datos entre otros, participa con tu equipo de los entrenamientos.
                        </p>
                        <a href="progComp.html">Más información</a>
                        
                    </a>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                    <a href="#" class="course">
                    <img src="images/season/sports.png" alt="Image placeholder">
                    <h2>OLIMPIADAS INTER-ESCUELA UNSA 2018</h2>
                    <p>Participa de las olimpiadas Inter-Escuela que organiza la Universidad Nacional de San Agustín cada año.
                        Hay diferentes deportes, en los cuales puedes demostrar tus habilidades físicas.
                    </p>
                    <a href="interEsc.html">Más información</a>
                    </a>
                </div>
                
            </div>
        </div>
    </section>
    
    <section class="site-section">
      <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-7 text-center">
                <h2>Información</h2>
            </div>
        </div>
        <section class="school-features text-dark d-flex">
          <div class="inner">
            <div class="media d-block feature">
                <div class="icon">
                    <img id="iconBlock2" src="images/ACM logo.png">        
                </div>
                <div class="media-body">
                    <h3 class="mt-0">Plan Curricular basado en IEEE-CS y ACM para carreras de Ciencia de la Computación</h3>
                    <p>Nuestro Plan Curricular está basado en propuesta internacional denominada Computing Curricula en el área específica de Ciencia de la Computación.  </p>
                    <a href="https://secure.spc.org.pe/Peru/CS-UNSA/Plan2017/CS-UNSA%20Plan2017.pdf" target="_black">Descargar Plan Curricular</a>
                </div>
            </div>

            <div class="media d-block feature">
              <div class="icon">
                  
                    <img id="iconBlock2" src="images/icpc_logo.png">        
                </div>
              <div class="media-body">
                <h3 class="mt-0">Entrenamientos para ACM-ICPC </h3>
                <p>Realizamos entrenamientos de programación competitiva semanalmente para participar del concurso mundial ACM-International Collegiate Programming Contest</p>
              </div>
            </div>

            <div class="media d-block feature">
                <div class="icon">
                    <img id="iconBlock2" src="images/jaku.png">        
                </div>
                <div class="media-body">
                    <h3 class="mt-0">Participación en la incubadora JAKU</h3>
                    <p>Próximamente</p>
                </div>
            </div>


            <div class="media d-block feature">
                <div class="icon">
                    <img id="iconBlock2" src="images/cslogos/logocs.png">        
                </div>
                <div class="media-body">
                    <h3 class="mt-0">Grupos de Investigación</h3>
                    <p>Próximamente</p>
                </div>
            </div>
            </div>
        </section>
      </div>
    </section>
    <!-- END section -->




    <section class="section-cover" data-stellar-background-ratio="0.5" style="background-image: url(images/banners/banner.jpg);">
      <div class="container">
        <div class="row justify-content-center align-items-center intro">
          <div class="col-md-10 text element-animate">
                <h2>Misión</h2>
                <p>
                    Contribuir al desarrollo tecnológico y técnico del país, a través de profesionales competentes, 
                    orientados a la creación de nueva tecnología computacional, como motor que impulse y consolide 
                    la industria del software en base a la investigación científica y tecnológica en áreas innovadoras 
                    formando profesionales un conjunto de habilidades y destrezas para la solución de problemas 
                    computacionales con un compromiso social.
                </p>
            <h2>Visión</h2>
                <ul class="whiteText">
                    <p>
                    <li>Queremos ser una carrera profesional acreditada con estandares internacionales y que cuente con el reconocimiento en función de la calidad y competitividad de sus docentes y egresados.</li>
                    <li>Queremos ser una carrera que trascienda por la relevancia y pertinencia de sus proyectos de investigación básica y aplicada.</li>
                    <li>Queremos ser una carrera que promueva el desarrollo de la industria del software a nivel internacional, incorporando a sus egresados a la industria ya establecida o generando nuevas empresas desarrolladoras de software.</li>
                    <li>Queremos ser una carrera que comparta y difunda el conocimiento con todos los sectores de la población y contribuya a la solución de los problemas estratégicos de nuestra sociedad.                         </li>
                    </p>
                </ul>
          </div>
        </div>
      </div>
      
    </section>

@endsection