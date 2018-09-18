<!--
TOOLS
ICONS 
    https://www.flaticon.com/packs/artificial-intelligence-19

-->

<!doctype html>
<html lang="en">
  <head>
    <title>School of Computer Science UNSA</title>
    <link rel="shortcut icon" href="images/cslogos/logomini.png">


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,900" rel="stylesheet">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    
    <!-- Theme Style -->
    <link rel="stylesheet" href="css/style.css">


    <script>
	// Set the date we're counting down to
	var countDownDate = new Date("Oct 1, 2018 15:37:25").getTime();

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

  </head>
  <body>
    
    <header role="banner">
     
      <nav class="navbar navbar-expand-md navbar-dark bg-light">
        <div class="container">
          <a class="navbar-brand absolute" href="index.html">School of Computer Science </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse navbar-light  navbar-nav absolute-right " id="navbarsExample02">
            <ul class="navbar-nav mx-auto">
              <li class="nav-item">
                <a class="nav-link active" href="index.html">Inicio</a>
              </li>
              <!--
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="courses.html" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Online Courses</a>
                <div class="dropdown-menu" aria-labelledby="dropdown04">
                  <a class="dropdown-item" href="courses.html">HTML</a>
                  <a class="dropdown-item" href="courses.html">WordPress</a>
                  <a class="dropdown-item" href="courses.html">Web Development</a>
                  <a class="dropdown-item" href="courses.html">Javascript</a>
                  <a class="dropdown-item" href="courses.html">Photoshop</a>
                </div>
              </li>
              -->

              <li class="nav-item">
                <a class="nav-link" href="#">Nosotros</a>
              </li>
              
            </ul>
            <!--
            <ul class="navbar-nav absolute-right">
              <li class="nav-item">
                <a href="login.html" class="nav-link">Login</a>
              </li>
              <li class="nav-item">Blog
                <a href="register.html" class="nav-link">Register</a>
              </li>
            </ul>
            -->            
          </div>
        </div>
      </nav>
    </header>
    <!-- END header -->

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
    <!-- END section -->

    <!--
    <section class="school-features d-flex" style="background-image: url(images/neuronalNetwork.jpeg);">
      <div class="inner">
        <div class="media d-block feature">
            <img id="iconBlock" src="images/icons/book.png">        
            <div class="media-body">
                <h3 class="mt-0"></h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora fuga suscipit numquam esse saepe quam, eveniet iure assumenda dignissimos aliquam!</p>
            </div>
        </div>
        <div class="media d-block feature">
            <img id="iconBlock" src="images/icons/book.png">        
            <div class="media-body">
                <h3 class="mt-0">Online trainings from experts</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora fuga suscipit numquam esse saepe quam, eveniet iure assumenda dignissimos aliquam!</p>
            </div>
        </div>
        <div class="media d-block feature">
            <img id="iconBlock" src="images/icons/book.png">        
            <div class="media-body">
                <h3 class="mt-0">Online trainings from experts</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora fuga suscipit numquam esse saepe quam, eveniet iure assumenda dignissimos aliquam!</p>
            </div>
        </div>

        <div class="media d-block feature">
            <img id="iconBlock" src="images/icons/book.png">        
            <div class="media-body">
                <h3 class="mt-0">Online trainings from experts</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora fuga suscipit numquam esse saepe quam, eveniet iure assumenda dignissimos aliquam!</p>
            </div>
        </div>
    </section>
    -->
    <!-- END section -->

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
        </section>
      </div>
    </section>
    <!-- END section -->

    

    <section class="section-cover" data-stellar-background-ratio="0.5" style="background-image: url(images/banner.jpg);">
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
            <p>
                <ul class="whiteText">
                    <li>Queremos ser una carrera profesional acreditada con estandares internacionales y que cuente con el reconocimiento en función de la calidad y competitividad de sus docentes y egresados.</li>
                    <li>Queremos ser una carrera que trascienda por la relevancia y pertinencia de sus proyectos de investigación básica y aplicada.</li>
                    <li>Queremos ser una carrera que promueva el desarrollo de la industria del software a nivel internacional, incorporando a sus egresados a la industria ya establecida o generando nuevas empresas desarrolladoras de software.</li>
                    <li>Queremos ser una carrera que comparta y difunda el conocimiento con todos los sectores de la población y contribuya a la solución de los problemas estratégicos de nuestra sociedad.                         </li>
                </ul>
            </p>

            
          </div>
        </div>
      </div>
      
    </section>
    <!-- END section -->

    <!--
       SECTION TOP COURSES 
    -->
        <!--
    <section class="site-section bg-light">
            <div class="container">
              <div class="row justify-content-center mb-5">
                <div class="col-md-7 text-center">
                  <h2>Top Courses</h2>
                  <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum magnam illum maiores adipisci pariatur, eveniet.</p>
                </div>
              </div>
              <div class="row top-course">
                <div class="col-lg-2 col-md-4 col-sm-6 col-12">
                  <a href="#" class="course">
                    <img src="images/webdesign.jpg" alt="Image placeholder">
                    <h2>Web Design 101</h2>
                    <p>Enroll Now</p>
                  </a>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-12">
                  <a href="#" class="course">
                    <img src="images/wordpress.jpg" alt="Image placeholder">
                    <h2>Learn How To Develop WordPress Plugin</h2>
                    <p>Enroll Now</p>
                  </a>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-12">
                  <a href="#" class="course">
                    <img src="images/javascript.jpg" alt="Image placeholder">
                    <h2>JavaScript 101</h2>
                    <p>Enroll Now</p>
                  </a>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-12">
                  <a href="#" class="course">
                    <img src="images/photoshop.jpg" alt="Image placeholder">
                    <h2>Photoshop Design 101</h2>
                    <p>Enroll Now</p>
                  </a>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-12">
                  <a href="#" class="course">
                    <img src="images/reactjs.jpg" alt="Image placeholder">
                    <h2>Learn Native ReactJS</h2>
                    <p>Enroll Now</p>
                  </a>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-12">
                  <a href="#" class="course">
                    <img src="images/angularjs.jpg" alt="Image placeholder">
                    <h2>Learn AngularJS 2</h2>
                    <p>Enroll Now</p>
                  </a>
                </div>
              </div>
            </div>
          </section>
        -->
          <!-- END section -->
    
  
  <!--
          <section class="overflow">
      <div class="container">
        <div class="row justify-content-center align-items-center">
          
          
          <div class="col-lg-7 order-lg-3 order-1 mb-lg-0 mb-5">
            <img src="images/person_testimonial_1.jpg" alt="Image placeholder" class="img-md-fluid">
          </div>
          <div class="col-lg-1 order-lg-2"></div>
          <div class="col-lg-4 order-lg-1 order-2 mb-lg-0 mb-5">
            <blockquote class="testimonial">
              &ldquo; Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt incidunt nihil ab cumque molestiae commodi. &rdquo;
            </blockquote>
            <p>&mdash; John Doe, Certified ReactJS Student</p>
          </div>
        </div>
      </div>
    </section>
    -->

    <!-- END section -->
  
    <footer class="site-footer" style="background-image: url(images/mesh.jpg);">
      <div class="container">
        <div class="row">

            <div class="row mb-12">
                <div class="col-md-6">
                    <p>Esta pagina es un esfuerzo de los estudiantes de la escuela profesional de Ciencia de la Computación, no es parte del dominio de la Universidad Nacional de San Agustín. </p>
                    <h3>Creditos</h3>
                    <div>Icons made by <a href="https://www.flaticon.com/authors/smashicons" title="Smashicons">Smashicons</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div>
                    <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
                <div class="col-md-2"></div>
                <div class="col-md-4">
                        <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fcsunsa%2F&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=1008206179314313" width="340" height="400" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
                </div>
            </div>
        </div>
            
      </div>
    </footer>
    <!-- END footer -->
    
    <!-- loader -->
    <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#f4b214"/></svg></div>

    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/jquery-migrate-3.0.0.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>

    
    <script src="js/main.js"></script>
  </body>
</html>
