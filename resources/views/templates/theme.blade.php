<!--
TOOLS
ICONS 
    https://www.flaticon.com/packs/artificial-intelligence-19

-->

<!doctype html>
<html lang="en">
  <head>
    <title>@yield('title')</title>
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

<!------------EXTERNAL SCRIPTS --------------------------------------------------------------------------->
  <!-- Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-126304326-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'UA-126304326-1');
  </script>
      
<!-------------END EXTERNAL SCRIPTS----------------------------------------------------------------------->
      
@yield('scripts')
      
    
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
                    <a class="nav-link" href="/">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/events">Events</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/blog">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/research">Research</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/resources">Resources</a>
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
      
    @yield('poster')
      
    @yield('blocks')

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

    @yield('body')

    
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
