@extends('templates.theme')

@section('title', 'School Of Computer Science UNSA')

@section('scripts')

@endsection

@section('home', 'active')

@section('body')

	<header id="header" class="header fixed-top">
		<div class="branding">
			<div class="container-fluid">
				<nav class="main-nav navbar navbar-expand-lg">
					<div class="site-logo"><a class="scrollto" href="#hero-block"><img class="logo-icon" src="/images/cslogos/logo-only.png" alt="logo"></a></div>
					<div class="site-logo"><a class="scrollto" href="#hero-block"><img class="logo-icon" src="/images/cslogos/logo-white.svg" alt="logo"></a></div>

					<!-- Register -->
					<div class="navbar-btn order-lg-2"><a class="btn btn-secondary" href="/">Evento 2021</a></div>

					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>

					<div id="navigation" class="navbar-collapse collapse  justify-content-lg-end mr-lg-3">
						<ul class="nav navbar-nav">

							<li class="nav-item"><a class="nav-link scrollto" href="#about-section">Sobre</a></li>
							<li class="nav-item"><a class="nav-link scrollto" href="#speakers-section">Ponencias</a></li>
							<li class="nav-item"><a class="nav-link scrollto" href="#schedule-section">Programa</a></li>
							<li class="nav-item"><a class="nav-link scrollto" href="#venue-section">Participación</a></li>
							<li class="nav-item"><a class="nav-link scrollto" href="#committee-section">Organización</a></li>
							<li class="nav-item"><a class="nav-link scrollto" href="#sponsors-section">Sponsors</a></li>
						</ul><!--//nav-->
					</div><!--//navabr-collapse-->

				</nav><!--//main-nav-->

			</div><!--//container-->
		</div><!--//branding-->
	</header><!--//header-->

	<div id="hero-block" class="hero-block">
		<div id="hero-carousel" class="hero-carousel carousel slide carousel-fade" data-ride="carousel">
			<div class="carousel-inner">
				<div class="carousel-item-4 carousel-item active">
				</div>
				<div class="carousel-item-1 carousel-item">
				</div>
				<div class="carousel-item-2 carousel-item">
				</div>
				<div class="carousel-item-3 carousel-item">
				</div>
			</div>
		</div>
		<div class="hero-block-mask"></div>
		<div class="container">
			<div class="hero-text-block">
				<h1 class="hero-heading mb-2">Semana de la Computación 2020</h1>
				<div class="hero-meta mb-3">3ra Edición<br><i class="far fa-calendar-alt mr-2"></i>26 - 30 Oct <i class="fas fa-map-marker-alt mx-2"></i>Arequipa, Perú</div>
				<div class="hero-intro mb-4"></div>
				<!-- Register -->
				{{-- <div class="hero-cta"><a class="btn btn-primary btn-lg scrollto" href="#venue-section">Registrarse</a></div> --}}

			</div><!--//hero-text-block-->
		</div><!--//container-->

	</div><!--//hero-block-->

	<div class="stats-block theme-bg-primary text-white py-4 text-center">
		<div class="container">
			<div class="row">
				<div class="col-6 col-md-3">
					<div class="item">
						<div class="number">250+</div>
						<div class="unit">Asistentes</div>
					</div><!--//item-->
				</div><!--//col-->
				<div class="col-6 col-md-3">
					<div class="item">
						<div class="number">5</div>
						<div class="unit">Días</div>
					</div><!--//item-->
				</div><!--//col-->
				<div class="col-6 col-md-3">
					<div class="item">
						<div class="number">20+</div>
						<div class="unit">Charlas</div>
					</div><!--//item-->
				</div><!--//col-->
				<div class="col-6 col-md-3">
					<div class="item">
						<div class="number">2+</div>
						<div class="unit">Actividades Sociales</div>
					</div><!--//item-->
				</div><!--//col-->
			</div>
		</div><!--//container-->
	</div><!--//stats-block-->

	<section id="about-section" class="about-section section theme-bg-light">
		<div class="container">
			<h3 class="section-heading text-center mb-3">Sobre Nosotros</h3>
			<div class="section-intro single-col-max mx-auto mb-4">La <strong>Escuela Profesional de Ciencia de la Computación</strong> tiene por objetivo
				formar profesionales aptos para <strong>identificar problemas del mundo real y proponer soluciones inéditas o mejorar las ya existentes</strong>,
				convirtiéndolos en líderes de la realización de un determinado proyecto por intermedio de la construcción de <strong>modelos computacionales
				y su implementación</strong>. Su trabajo exige una constante interacción con la <strong>comunidad científica</strong>, con el fin de desarrollar
				nuevos conocimientos y técnicas computacionales.</div>
		</div><!--//container-->

		<div class="container">
			<h3 class="section-heading text-center mb-3">Sobre la Semana</h3>
			<div class="section-intro single-col-max mx-auto mb-4">
				La Semana de la Computación es un evento organizado anualmente por la Escuela Profesional de Ciencia de la Computación de la
				Universidad Nacional de San Agustín de Arequipa, en la cual se exponen los distintos trabajos y logros
				de estudiantes y docentes, además de contar con una serie de ponencias <strong>nacionales e internacionales</strong>, tanto
				de la industria como la academia del software. No bastando con las actividades académicas, también se realizan
				una serie de Actividades Sociales y Competitivas, como el concurso de programación y los concursos de talentos.</div>
			<div class="benefits-list text-center mb-3">
				<h4 class="text-center mb-4">¿Por qué participar?</h4>
				<ul class="list-unstyled text-left d-inline-block">
					<li><i class="fas fa-check-circle mr-2"></i>Tendrás la oportunidad para conocer más sobre nosotros como escuela</li>
					<li><i class="fas fa-check-circle mr-2"></i>Recibirás charlas de los mejores ponentes nacionales e internacionales en Computación</li>
					<li><i class="fas fa-check-circle mr-2"></i>Descubrirás el estado del arte de las distintas áreas de interés en Computación</li>
					<li><i class="fas fa-check-circle mr-2"></i>Conocerás nuevas personas y tendrás nuevos contactos de distintos lugares</li>
					<li><i class="fas fa-check-circle mr-2"></i>Tendrás la oportunidad de participar en los distintos concursos</li>
					<li><i class="fas fa-check-circle mr-2"></i>Podrás participar de las actividades de confraternización</li>
					<li><i class="fas fa-check-circle mr-2"></i>Si eres alumno, podrás presentar tus proyectos y así iniciarte como investigador</li>
				</ul>
			</div><!--//benefits-list-->
			<div class="event-countdown text-center mb-3">
				<h4 class="countdown-intro mb-2 text-center mb-3">¡El Evento ya comenzó!</h4>
				<!--<div id="countdown-box" class="countdown-box"></div>-->
			</div><!--//event-countdown-->
			<!-- Register -->
			<!--<div class="about-cta text-center mb-5"><a class="btn btn-secondary btn-lg mb-5 scrollto" href="#venue-section">¡Regístrate Hoy!</a></div>-->
		</div><!--//container-->

		<div class="media-block theme-bg-primary py-5">
			<div class="container">
				<h4 class="text-white text-center mb-3">Antes de Comenzar</h4>
				<div class="section-intro text-center single-col-max mx-auto text-white mb-5">
					Antes de comenzar, te proponemos revisar el video de nuestra 1ra Edición de la Semana de la Computación, la cual se dio en el año 2018 de forma presencial.
					Debido a la situación actual, esta 3ra Edición de la Semana de la Computación será de forma virtual, pero a pesar de ello, esta misma se hará de la mejor
					forma posible gracias a la preparación que venimos realizando previamente.
				</div>
				<div class="row">
					<div class="col-12 col-md-12 col-lg-6 offset-lg-3 mb-3">
						<div class="embed-responsive embed-responsive-16by9">

							<iframe width="560" height="315" src="https://www.youtube.com/embed/TThtTUnP0z4" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						</div><!--//embed-responsive -->
					</div><!--//col-->
				</div><!--//row-->
			</div><!--//container-->
		</div><!--//media-block-->
	</section><!--//about-section-->

	<section id="speakers-section" class="speakers-section section">
		<div class="container">
			<h3 class="section-heading text-center mb-3">Ponentes</h3>
			<div class="section-intro text-center single-col-max mx-auto mb-5">Los ponentes que estarán presentes para esta Semana de la Computación son:</div>
			<div class="row">
				<div class="col-12 col-md-6 col-lg-3 mb-4">
					<div class="card rounded-0">
						<a href="#modal-luciano-romero" data-toggle="modal" data-target="#modal-luciano-romero"><img src="/images/speakers/luciano-romero.jpg" class="card-img-top rounded-0" alt=""></a>
						<div class="card-body">
							<h5 class="card-title mb-2">Luciano Romero</h5>
							<div class="card-text mb-3">
								<div class="meta">Universidad de Zúrich, Suiza</div>
								<div class="meta">Ph.D Student in Computer Science</div>
							</div><!--//card-text-->
							<a href="#modal-luciano-romero" data-toggle="modal" data-target="#modal-luciano-romero">Leer más &rarr;</a>
						</div><!--//card-->
						<div class="card-footer text-muted">
							<ul class="social-list list-inline mb-0">
								<li class="list-inline-item"><a  href="#"><i class="fab fa-orcid fa-fw"></i></a></li>
								<li class="list-inline-item"><a  href="#"><i class="fab fa-linkedin-in fa-fw"></i></a></li>
								<li class="list-inline-item"><a  href="#"><i class="fab fa-github fa-fw"></i></a></li>
							</ul><!--//social-list-->
						</div>
					</div><!--//card-->
				</div><!--//col-->
				<div class="col-12 col-md-6 col-lg-3 mb-4">
					<div class="card rounded-0">
						<a href="#modal-lizeth-fuentes" data-toggle="modal" data-target="#modal-lizeth-fuentes"><img src="/images/speakers/lizeth-fuentes.jpg" class="card-img-top rounded-0" alt=""></a>
						<div class="card-body">
							<h5 class="card-title mb-2">Lizeth Fuentes</h5>
							<div class="card-text mb-3">
								<div class="meta">Universidad de Zúrich, Suiza</div>
								<div class="meta">Ph.D Student in Computer Science</div>
							</div><!--//card-text-->
							<a href="#modal-lizeth-fuentes" data-toggle="modal" data-target="#modal-lizeth-fuentes">Leer más &rarr;</a>
						</div><!--//card-->
						<div class="card-footer text-muted">
							<ul class="social-list list-inline mb-0">
								<li class="list-inline-item"><a  href="#"><i class="fab fa-orcid fa-fw"></i></a></li>
								<li class="list-inline-item"><a  href="#"><i class="fab fa-linkedin-in fa-fw"></i></a></li>
								<li class="list-inline-item"><a  href="#"><i class="fab fa-github fa-fw"></i></a></li>
							</ul><!--//social-list-->
						</div>
					</div><!--//card-->
				</div><!--//col-->
				<div class="col-12 col-md-6 col-lg-3 mb-4">
					<div class="card rounded-0">
						<a href="#modal-marcelo-flores" data-toggle="modal" data-target="#modal-marcelo-flores"><img src="/images/speakers/marcelo-flores.jpg" class="card-img-top rounded-0" alt=""></a>
						<div class="card-body">
							<h5 class="card-title mb-2">Marcelo Flores Manrique</h5>
							<div class="card-text mb-3">
								<div class="meta">VerizonConnect, Dublin, Irlanda</div>
								<div class="meta">Senior Software Architect</div>
							</div><!--//card-text-->
							<a href="#modal-marcelo-flores" data-toggle="modal" data-target="#modal-marcelo-flores">Leer más &rarr;</a>
						</div><!--//card-->
						<div class="card-footer text-muted">
							<ul class="social-list list-inline mb-0">
								<li class="list-inline-item"><a  href="#"><i class="fab fa-orcid fa-fw"></i></a></li>
								<li class="list-inline-item"><a  href="#"><i class="fab fa-linkedin-in fa-fw"></i></a></li>
								<li class="list-inline-item"><a  href="#"><i class="fab fa-github fa-fw"></i></a></li>
							</ul><!--//social-list-->
						</div>
					</div><!--//card-->
				</div><!--//col-->
				<div class="col-12 col-md-6 col-lg-3 mb-4">
					<div class="card rounded-0">
						<a href="#modal-jesus-mena" data-toggle="modal" data-target="#modal-jesus-mena"><img src="/images/speakers/jesus-mena.jpg" class="card-img-top rounded-0" alt=""></a>
						<div class="card-body">
							<h5 class="card-title mb-2">Jesús Mena Chalco</h5>
							<div class="card-text mb-3">
								<div class="meta">Universidade Federal do ABC, Sao Paulo, Brasil</div>
								<div class="meta">Associate Professor</div>
							</div><!--//card-text-->
							<a href="#modal-jesus-mena" data-toggle="modal" data-target="#modal-jesus-mena">Leer más &rarr;</a>
						</div><!--//card-->
						<div class="card-footer text-muted">
							<ul class="social-list list-inline mb-0">
								<li class="list-inline-item"><a  href="#"><i class="fab fa-orcid fa-fw"></i></a></li>
								<li class="list-inline-item"><a  href="#"><i class="fab fa-linkedin-in fa-fw"></i></a></li>
								<li class="list-inline-item"><a  href="#"><i class="fab fa-github fa-fw"></i></a></li>
							</ul><!--//social-list-->
						</div>
					</div><!--//card-->
				</div><!--//col-->
				<div class="col-12 col-md-6 col-lg-3 mb-4">
					<div class="card rounded-0">
						<a href="#modal-franci-suni" data-toggle="modal" data-target="#modal-franci-suni"><img src="/images/speakers/franci-suni.jpg" class="card-img-top rounded-0" alt=""></a>
						<div class="card-body">
							<h5 class="card-title mb-2">Franci Suni</h5>
							<div class="card-text mb-3">
								<div class="meta">Universidad Nacional de San Agustin de Arequipa, Perú</div>
								<div class="meta">Profesor</div>
							</div><!--//card-text-->
							<a href="#modal-franci-suni" data-toggle="modal" data-target="#modal-franci-suni">Leer más &rarr;</a>
						</div><!--//card-->
						<div class="card-footer text-muted">
							<ul class="social-list list-inline mb-0">
								<li class="list-inline-item"><a  href="#"><i class="fab fa-orcid fa-fw"></i></a></li>
								<li class="list-inline-item"><a  href="#"><i class="fab fa-linkedin-in fa-fw"></i></a></li>
								<li class="list-inline-item"><a  href="#"><i class="fab fa-github fa-fw"></i></a></li>
							</ul><!--//social-list-->
						</div>
					</div><!--//card-->
				</div><!--//col-->
				<div class="col-12 col-md-6 col-lg-3 mb-4">
					<div class="card rounded-0">
						<a href="#modal-jorge-poco" data-toggle="modal" data-target="#modal-jorge-poco"><img src="/images/speakers/jorge-poco.jpg" class="card-img-top rounded-0" alt=""></a>
						<div class="card-body">
							<h5 class="card-title mb-2">Jorge Poco</h5>
							<div class="card-text mb-3">
								<div class="meta">Fundação Getúlio Vargas - FGV, Rio de Janeiro, Brazil.</div>
								<div class="meta">Associate Professor</div>
							</div><!--//card-text-->
							<a href="#modal-jorge-poco" data-toggle="modal" data-target="#modal-jorge-poco">Leer más &rarr;</a>
						</div><!--//card-->
						<div class="card-footer text-muted">
							<ul class="social-list list-inline mb-0">
								<li class="list-inline-item"><a  href="#"><i class="fab fa-orcid fa-fw"></i></a></li>
								<li class="list-inline-item"><a  href="#"><i class="fab fa-linkedin-in fa-fw"></i></a></li>
								<li class="list-inline-item"><a  href="#"><i class="fab fa-github fa-fw"></i></a></li>
							</ul><!--//social-list-->
						</div>
					</div><!--//card-->
				</div><!--//col-->
				<div class="col-12 col-md-6 col-lg-3 mb-4">
					<div class="card rounded-0">
						<a href="#modal-pablo-calcina" data-toggle="modal" data-target="#modal-pablo-calcina"><img src="/images/speakers/pablo-calcina.jpg" class="card-img-top rounded-0" alt=""></a>
						<div class="card-body">
							<h5 class="card-title mb-2">Pablo Calcina</h5>
							<div class="card-text mb-3">
								<div class="meta">Universidade de São Paulo</div>
								<div class="meta">Ph.D. en Computer Science</div>
							</div><!--//card-text-->
							<a href="#modal-pablo-calcina" data-toggle="modal" data-target="#modal-pablo-calcina">Leer más &rarr;</a>
						</div><!--//card-->
						<div class="card-footer text-muted">
							<ul class="social-list list-inline mb-0">
								<li class="list-inline-item"><a  href="#"><i class="fab fa-orcid fa-fw"></i></a></li>
								<li class="list-inline-item"><a  href="#"><i class="fab fa-linkedin-in fa-fw"></i></a></li>
								<li class="list-inline-item"><a  href="#"><i class="fab fa-github fa-fw"></i></a></li>
							</ul><!--//social-list-->
						</div>
					</div><!--//card-->
				</div><!--//col-->
				<div class="col-12 col-md-6 col-lg-3 mb-4">
					<div class="card rounded-0">
						<a href="#modal-edward-pacheco" data-toggle="modal" data-target="#modal-edward-pacheco"><img src="/images/speakers/edward-pacheco.jpg" class="card-img-top rounded-0" alt=""></a>
						<div class="card-body">
							<h5 class="card-title mb-2">Edward Pacheco Condori</h5>
							<div class="card-text mb-3">
								<div class="meta">Dell EMC, Brazil</div>
								<div class="meta">Researcher</div>
							</div><!--//card-text-->
							<a href="#modal-edward-pacheco" data-toggle="modal" data-target="#modal-edward-pacheco">Leer más &rarr;</a>
						</div><!--//card-->
						<div class="card-footer text-muted">
							<ul class="social-list list-inline mb-0">
								<li class="list-inline-item"><a  href="#"><i class="fab fa-orcid fa-fw"></i></a></li>
								<li class="list-inline-item"><a  href="#"><i class="fab fa-linkedin-in fa-fw"></i></a></li>
								<li class="list-inline-item"><a  href="#"><i class="fab fa-github fa-fw"></i></a></li>
							</ul><!--//social-list-->
						</div>
					</div><!--//card-->
				</div><!--//col-->
				<div class="col-12 col-md-6 col-lg-3 mb-4">
					<div class="card rounded-0">
						<a href="#modal-omar-florez" data-toggle="modal" data-target="#modal-omar-florez"><img src="/images/speakers/omar-florez.jpg" class="card-img-top rounded-0" alt=""></a>
						<div class="card-body">
							<h5 class="card-title mb-2">Omar Florez</h5>
							<div class="card-text mb-3">
								<div class="meta">Twitter</div>
								<div class="meta">Researcher</div>
							</div><!--//card-text-->
							<a href="#modal-omar-florez" data-toggle="modal" data-target="#modal-omar-florez">Leer más &rarr;</a>
						</div><!--//card-->
						<div class="card-footer text-muted">
							<ul class="social-list list-inline mb-0">
								<li class="list-inline-item"><a  href="#"><i class="fab fa-orcid fa-fw"></i></a></li>
								<li class="list-inline-item"><a  href="#"><i class="fab fa-linkedin-in fa-fw"></i></a></li>
								<li class="list-inline-item"><a  href="#"><i class="fab fa-github fa-fw"></i></a></li>
							</ul><!--//social-list-->
						</div>
					</div><!--//card-->
				</div><!--//col-->
				<div class="col-12 col-md-6 col-lg-3 mb-4">
					<div class="card rounded-0">
						<a href="#modal-yamilet-serrano" data-toggle="modal" data-target="#modal-yamilet-serrano"><img src="/images/speakers/yamilet-serrano.jpg" class="card-img-top rounded-0" alt=""></a>
						<div class="card-body">
							<h5 class="card-title mb-2">Yamilet Serrano</h5>
							<div class="card-text mb-3">
								<div class="meta">UTEC, Perú</div>
								<div class="meta">Profesor</div>
							</div><!--//card-text-->
							<a href="#modal-yamilet-serrano" data-toggle="modal" data-target="#modal-yamilet-serrano">Leer más &rarr;</a>
						</div><!--//card-->
						<div class="card-footer text-muted">
							<ul class="social-list list-inline mb-0">
								<li class="list-inline-item"><a  href="#"><i class="fab fa-orcid fa-fw"></i></a></li>
								<li class="list-inline-item"><a  href="#"><i class="fab fa-linkedin-in fa-fw"></i></a></li>
								<li class="list-inline-item"><a  href="#"><i class="fab fa-github fa-fw"></i></a></li>
							</ul><!--//social-list-->
						</div>
					</div><!--//card-->
				</div><!--//col-->
				<div class="col-12 col-md-6 col-lg-3 mb-4">
					<div class="card rounded-0">
						<a href="#modal-lizeth-tapia" data-toggle="modal" data-target="#modal-lizeth-tapia"><img src="/images/speakers/lizeth-tapia.jpg" class="card-img-top rounded-0" alt=""></a>
						<div class="card-body">
							<h5 class="card-title mb-2">Lizeth Tapia Tarifa</h5>
							<div class="card-text mb-3">
								<div class="meta">Universidad de Oslo, Noruega</div>
								<div class="meta">Senior Researcher</div>
							</div><!--//card-text-->
							<a href="#modal-lizeth-tapia" data-toggle="modal" data-target="#modal-lizeth-tapia">Leer más &rarr;</a>
						</div><!--//card-->
						<div class="card-footer text-muted">
							<ul class="social-list list-inline mb-0">
								<li class="list-inline-item"><a  href="#"><i class="fab fa-orcid fa-fw"></i></a></li>
								<li class="list-inline-item"><a  href="#"><i class="fab fa-linkedin-in fa-fw"></i></a></li>
								<li class="list-inline-item"><a  href="#"><i class="fab fa-github fa-fw"></i></a></li>
							</ul><!--//social-list-->
						</div>
					</div><!--//card-->
				</div><!--//col-->
				<div class="col-12 col-md-6 col-lg-3 mb-4">
					<div class="card rounded-0">
						<a href="#modal-ernesto-cuadros" data-toggle="modal" data-target="#modal-ernesto-cuadros"><img src="/images/speakers/ernesto-cuadros.jpg" class="card-img-top rounded-0" alt=""></a>
						<div class="card-body">
							<h5 class="card-title mb-2">Ernesto Cuadros-vargas</h5>
							<div class="card-text mb-3">
								<div class="meta">Sociedad Peruana de Computación</div>
								<div class="meta">Miembro Fundador</div>
							</div><!--//card-text-->
							<a href="#modal-ernesto-cuadros" data-toggle="modal" data-target="#modal-ernesto-cuadros">Leer más &rarr;</a>
						</div><!--//card-->
						<div class="card-footer text-muted">
							<ul class="social-list list-inline mb-0">
								<li class="list-inline-item"><a  href="#"><i class="fab fa-orcid fa-fw"></i></a></li>
								<li class="list-inline-item"><a  href="#"><i class="fab fa-linkedin-in fa-fw"></i></a></li>
								<li class="list-inline-item"><a  href="#"><i class="fab fa-github fa-fw"></i></a></li>
							</ul><!--//social-list-->
						</div>
					</div><!--//card-->
				</div><!--//col-->
				<div class="col-12 col-md-6 col-lg-3 mb-4">
					<div class="card rounded-0">
						<a href="#modal-alvaro-cuno" data-toggle="modal" data-target="#modal-alvaro-cuno"><img src="/images/speakers/alvaro-cuno.jpg" class="card-img-top rounded-0" alt=""></a>
						<div class="card-body">
							<h5 class="card-title mb-2">Alvaro Cuno</h5>
							<div class="card-text mb-3">
								<div class="meta">Universidad Nacional de San Agustin de Arequipa, Perú</div>
								<div class="meta">Investigador Asociado</div>
							</div><!--//card-text-->
							<a href="#modal-alvaro-cuno" data-toggle="modal" data-target="#modal-alvaro-cuno">Leer más &rarr;</a>
						</div><!--//card-->
						<div class="card-footer text-muted">
							<ul class="social-list list-inline mb-0">
								<li class="list-inline-item"><a  href="#"><i class="fab fa-orcid fa-fw"></i></a></li>
								<li class="list-inline-item"><a  href="#"><i class="fab fa-linkedin-in fa-fw"></i></a></li>
								<li class="list-inline-item"><a  href="#"><i class="fab fa-github fa-fw"></i></a></li>
							</ul><!--//social-list-->
						</div>
					</div><!--//card-->
				</div><!--//col-->
				<div class="col-12 col-md-6 col-lg-3 mb-4">
					<div class="card rounded-0">
						<a href="#modal-juan-vilca" data-toggle="modal" data-target="#modal-juan-vilca"><img src="/images/speakers/juan-vilca.jpg" class="card-img-top rounded-0" alt=""></a>
						<div class="card-body">
							<h5 class="card-title mb-2">Juan Vilca Castro</h5>
							<div class="card-text mb-3">
								<div class="meta">Amazon, España</div>
								<div class="meta">Ingeniero de Software II</div>
							</div><!--//card-text-->
							<a href="#modal-juan-vilca" data-toggle="modal" data-target="#modal-juan-vilca">Leer más &rarr;</a>
						</div><!--//card-->
						<div class="card-footer text-muted">
							<ul class="social-list list-inline mb-0">
								<li class="list-inline-item"><a  href="#"><i class="fab fa-orcid fa-fw"></i></a></li>
								<li class="list-inline-item"><a  href="#"><i class="fab fa-linkedin-in fa-fw"></i></a></li>
								<li class="list-inline-item"><a  href="#"><i class="fab fa-github fa-fw"></i></a></li>
							</ul><!--//social-list-->
						</div>
					</div><!--//card-->
				</div><!--//col-->

				<div class="col-12 col-md-6 col-lg-3 mb-4">
					<div class="card rounded-0">
						<a href="#modal-liliana-mamani" data-toggle="modal" data-target="#modal-liliana-mamani"><img src="/images/speakers/liliana-mamani.jpg" class="card-img-top rounded-0" alt=""></a>
						<div class="card-body">
							<h5 class="card-title mb-2">Liliana Mamani Sanchez</h5>
							<div class="card-text mb-3">
								<div class="meta">TrustYou, Alemania</div>
								<div class="meta">Researcher</div>
							</div><!--//card-text-->
							<a href="#modal-liliana-mamani" data-toggle="modal" data-target="#modal-liliana-mamani">Leer más &rarr;</a>
						</div><!--//card-->
						<div class="card-footer text-muted">
							<ul class="social-list list-inline mb-0">
								<li class="list-inline-item"><a  href="#"><i class="fab fa-orcid fa-fw"></i></a></li>
								<li class="list-inline-item"><a  href="#"><i class="fab fa-linkedin-in fa-fw"></i></a></li>
								<li class="list-inline-item"><a  href="#"><i class="fab fa-github fa-fw"></i></a></li>
							</ul><!--//social-list-->
						</div>
					</div><!--//card-->
				</div><!--//col-->

				<div class="col-12 col-md-6 col-lg-3 mb-4">
					<div class="card rounded-0">
						<a href="#modal-juan-carlos-gutierrez" data-toggle="modal" data-target="#modal-juan-carlos-gutierrez"><img src="/images/speakers/juan-carlos-gutierrez.jpg" class="card-img-top rounded-0" alt=""></a>
						<div class="card-body">
							<h5 class="card-title mb-2">Juan Carlos Guitierrez Caceres</h5>
							<div class="card-text mb-3">
								<div class="meta">Universidad Nacional de San Agustin de Arequipa, Perú</div>
								<div class="meta">Profesor</div>
							</div><!--//card-text-->
							<a href="#modal-juan-carlos-gutierrez" data-toggle="modal" data-target="#modal-juan-carlos-gutierrez">Leer más &rarr;</a>
						</div><!--//card-->
						<div class="card-footer text-muted">
							<ul class="social-list list-inline mb-0">
								<li class="list-inline-item"><a  href="#"><i class="fab fa-orcid fa-fw"></i></a></li>
								<li class="list-inline-item"><a  href="#"><i class="fab fa-linkedin-in fa-fw"></i></a></li>
								<li class="list-inline-item"><a  href="#"><i class="fab fa-github fa-fw"></i></a></li>
							</ul><!--//social-list-->
						</div>
					</div><!--//card-->
				</div><!--//col-->
				<div class="col-12 col-md-6 col-lg-3 mb-4">
					<div class="card rounded-0">
						<a href="#modal-edward-hinojosa" data-toggle="modal" data-target="#modal-edward-hinojosa"><img src="/images/speakers/edward-hinojosa.jpg" class="card-img-top rounded-0" alt=""></a>
						<div class="card-body">
							<h5 class="card-title mb-2">Edward Hinojosa Cardenas</h5>
							<div class="card-text mb-3">
								<div class="meta">Universidad Nacional de San Agustin de Arequipa, Perú</div>
								<div class="meta">Profesor</div>
							</div><!--//card-text-->
							<a href="#modal-edward-hinojosa" data-toggle="modal" data-target="#modal-edward-hinojosa">Leer más &rarr;</a>
						</div><!--//card-->
						<div class="card-footer text-muted">
							<ul class="social-list list-inline mb-0">
								<li class="list-inline-item"><a  href="#"><i class="fab fa-orcid fa-fw"></i></a></li>
								<li class="list-inline-item"><a  href="#"><i class="fab fa-linkedin-in fa-fw"></i></a></li>
								<li class="list-inline-item"><a  href="#"><i class="fab fa-github fa-fw"></i></a></li>
							</ul><!--//social-list-->
						</div>
					</div><!--//card-->
				</div><!--//col-->

				<div class="col-12 col-md-6 col-lg-3 mb-4">
					<div class="card rounded-0">
						<a href="#modal-daniel-aliaga" data-toggle="modal" data-target="#modal-daniel-aliaga"><img src="/images/speakers/daniel-aliaga.jpg" class="card-img-top rounded-0" alt=""></a>
						<div class="card-body">
							<h5 class="card-title mb-2">Daniel Aliaga</h5>
							<div class="card-text mb-3">
								<div class="meta">Purdue University, USA</div>
								<div class="meta">Associate Professor</div>
							</div><!--//card-text-->
							<a href="#modal-daniel-aliaga" data-toggle="modal" data-target="#modal-daniel-aliaga">Leer más &rarr;</a>
						</div><!--//card-->
						<div class="card-footer text-muted">
							<ul class="social-list list-inline mb-0">
								<li class="list-inline-item"><a  href="#"><i class="fab fa-orcid fa-fw"></i></a></li>
								<li class="list-inline-item"><a  href="#"><i class="fab fa-linkedin-in fa-fw"></i></a></li>
								<li class="list-inline-item"><a  href="#"><i class="fab fa-github fa-fw"></i></a></li>
							</ul><!--//social-list-->
						</div>
					</div><!--//card-->
				</div><!--//col-->

				<div class="col-12 col-md-6 col-lg-3 mb-4">
					<div class="card rounded-0">
						<a href="#modal-nelly-condori" data-toggle="modal" data-target="#modal-nelly-condori"><img src="/images/speakers/nelly-condori.jpg" class="card-img-top rounded-0" alt=""></a>
						<div class="card-body">
							<h5 class="card-title mb-2">Nelly Condori</h5>
							<div class="card-text mb-3">
								<div class="meta">University of Coruña</div>
								<div class="meta">Profesor</div>
							</div><!--//card-text-->
							<a href="#modal-nelly-condori" data-toggle="modal" data-target="#modal-nelly-condori">Leer más &rarr;</a>
						</div><!--//card-->
						<div class="card-footer text-muted">
							<ul class="social-list list-inline mb-0">
								<li class="list-inline-item"><a  href="#"><i class="fab fa-orcid fa-fw"></i></a></li>
								<li class="list-inline-item"><a  href="#"><i class="fab fa-linkedin-in fa-fw"></i></a></li>
								<li class="list-inline-item"><a  href="#"><i class="fab fa-github fa-fw"></i></a></li>
							</ul><!--//social-list-->
						</div>
					</div><!--//card-->
				</div><!--//col-->

				<div class="col-12 col-md-6 col-lg-3 mb-4">
					<div class="card rounded-0">
						<a href="#modal-cesar-beltran" data-toggle="modal" data-target="#modal-cesar-beltran"><img src="/images/speakers/cesar-beltran.jpg" class="card-img-top rounded-0" alt=""></a>
						<div class="card-body">
							<h5 class="card-title mb-2">Cesar Beltran</h5>
							<div class="card-text mb-3">
								<div class="meta">Pontificia Universidad Católica del Perú</div>
								<div class="meta">Profesor Principal</div>
							</div><!--//card-text-->
							<a href="#modal-cesar-beltran" data-toggle="modal" data-target="#modal-cesar-beltran">Leer más &rarr;</a>
						</div><!--//card-->
						<div class="card-footer text-muted">
							<ul class="social-list list-inline mb-0">
								<li class="list-inline-item"><a  href="#"><i class="fab fa-orcid fa-fw"></i></a></li>
								<li class="list-inline-item"><a  href="#"><i class="fab fa-linkedin-in fa-fw"></i></a></li>
								<li class="list-inline-item"><a  href="#"><i class="fab fa-github fa-fw"></i></a></li>
							</ul><!--//social-list-->
						</div>
					</div><!--//card-->
				</div><!--//col-->

			</div><!--//row-->
			<!-- Register -->
			<div class="speakers-cta text-center py-3"><a class="btn btn-primary btn-lg scrollto" href="#venue-section">Registrarse</a></div>
		</div><!--//container-->

	</section><!--//speakers-section-->

	<div class="container">
		<hr>
	</div>

	<section id="schedule-section" class="schedule-section section">
		<div class="container">
			<h3 class="section-heading text-center mb-5">Programa</h3>

			<!-- Nav tabs -->
			<ul class="schedule-nav nav nav-pills nav-fill" id="myTab" role="tablist">
				<li class="nav-item mr-2">
					<a class="nav-link active" id="tab-1" data-toggle="tab" href="#tab-1-content" role="tab" aria-controls="tab-1-content" aria-selected="true">
						<span class="heading">Día 1</span>
						<span class="meta">(Lun 26, Oct)</span>
					</a>
				</li>
				<li class="nav-item mr-2">
					<a class="nav-link" id="tab-2" data-toggle="tab" href="#tab-2-content" role="tab" aria-controls="tab-2-content" aria-selected="false">
						<span class="heading">Día 2</span>
						<span class="meta">(Mar 27, Oct)</span>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="tab-3" data-toggle="tab" href="#tab-3-content" role="tab" aria-controls="tab-3-content" aria-selected="false">
						<span class="heading">Día 3</span>
						<span class="meta">(Mie 28, Oct)</span>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="tab-4" data-toggle="tab" href="#tab-4-content" role="tab" aria-controls="tab-4-content" aria-selected="false">
						<span class="heading">Día 4</span>
						<span class="meta">(Jue 29, Oct)</span>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="tab-5" data-toggle="tab" href="#tab-5-content" role="tab" aria-controls="tab-5-content" aria-selected="false">
						<span class="heading">Día 5</span>
						<span class="meta">(Vie 30, Oct)</span>
					</a>
				</li>
			</ul>

			<!-- Tab panes -->
			<div class="schedule-tab-content tab-content">
				<div class="tab-pane active" id="tab-1-content" role="tabpanel" aria-labelledby="tab-1">
					<div class="item item-talk">
						<div class="meta">
							<h4 class="time mb-3">8:00 - 9:00</h4>
							<div class="profile">
								<a href="#modal-wilber-ramos" data-toggle="modal" data-target="#modal-wilber-ramos"><img class="profile-image rounded-circle  mb-2" src="/images/speakers/wilber-ramos.jpg" alt=""></a>
								<div class="name"><a class="theme-link" href="#modal-wilber-ramos" data-toggle="modal" data-target="#modal-wilber-ramos">Wilber Ramos</a></div>
							</div><!--//profile-->
						</div><!--//meta-->
						<div class="content">
							<h3 class="title mb-3">Inauguración A Cargo Del Director Wilber Ramos Lovón</h3>
							<div class="location mb-3"><i class="fas fa-video mr-2"></i>Google Meet</div>
							<div class="desc">
								<br><br><br><br>
							</div>
						</div><!--//content-->
					</div><!--//item-->
					<div class="item item-talk">
						<div class="meta">
							<h4 class="time mb-3">9:00 - 10:00</h4>
							<div class="profile">
								<a href="#modal-luciano-romero" data-toggle="modal" data-target="#modal-luciano-romero"><img class="profile-image rounded-circle  mb-2" src="/images/speakers/luciano-romero.jpg" alt=""></a>
								<div class="name"><a class="theme-link" href="#modal-luciano-romero" data-toggle="modal" data-target="#modal-luciano-romero">Luciano Romero</a></div>
							</div><!--//profile-->
						</div><!--//meta-->
						<div class="content">
							<h3 class="title mb-3">Primeros pasos como Científico de la Computación</h3>
							<div class="location mb-3"><i class="fas fa-video mr-2"></i>Google Meet</div>
							<div class="desc">
								<br><br><br><br>
							</div>
						</div><!--//content-->
					</div><!--//item-->
					<div class="item item-talk">
						<div class="meta">
							<h4 class="time mb-3">10:00 - 11:00</h4>
							<div class="profile">
								<a href="#modal-lizeth-fuentes" data-toggle="modal" data-target="#modal-lizeth-fuentes"><img class="profile-image rounded-circle  mb-2" src="/images/speakers/lizeth-fuentes.jpg" alt=""></a>
								<div class="name"><a class="theme-link" href="#modal-lizeth-fuentes" data-toggle="modal" data-target="#modal-lizeth-fuentes">Lizeth Fuentes</a></div>
							</div><!--//profile-->
						</div><!--//meta-->
						<div class="content">
							<h3 class="title mb-3">Juntas Construímos - Grace Hopper Celebration 2020</h3>
							<div class="location mb-3"><i class="fas fa-video mr-2"></i>Google Meet</div>
							<div class="desc">
								<br><br><br><br>
							</div>
						</div><!--//content-->
					</div><!--//item-->
					<div class="item item-talk">
						<div class="meta">
							<h4 class="time mb-3">11:00 - 12:00</h4>
							<div class="profile">
								<a href="#modal-marcelo-flores" data-toggle="modal" data-target="#modal-marcelo-flores"><img class="profile-image rounded-circle  mb-2" src="/images/speakers/marcelo-flores.jpg" alt=""></a>
								<div class="name"><a class="theme-link" href="#modal-marcelo-flores" data-toggle="modal" data-target="#modal-marcelo-flores">Marcelo Flores</a></div>
							</div><!--//profile-->
						</div><!--//meta-->
						<div class="content">
							<h3 class="title mb-3">Procesamiento Distribuido de Big data aplicado a IoT usando microservicios</h3>
							<div class="location mb-3"><i class="fas fa-video mr-2"></i>Google Meet</div>
							<div class="desc">
								<br><br><br><br>
							</div>
						</div><!--//content-->
					</div><!--//item-->
					<div class="item item-other">
						<div class="meta">
							<h4 class="time mb-3">12:00 - 15:00</h4>
						</div><!--//meta-->
						<div class="content">
							<h3 class="title mb-3">Break de Almuerzo</h3>
							<div class="desc">
								<br><br>
							</div>
						</div><!--//content-->
					</div><!--//item-->
					<div class="item item-other">
						<div class="meta">
							<h4 class="time mb-3">15:00 - 18:00</h4>
						</div><!--//meta-->
						<div class="content">
							<h3 class="title mb-3">Encuentro de los Egresados de la EPCC</h3>
							<div class="location mb-3"><i class="fas fa-video mr-2"></i>Google Meet</div>
							<div class="desc">
								<br><br>
							</div>
						</div><!--//content-->
					</div><!--//item-->

				</div><!--//tab-1-content-->
				<div class="tab-pane no-timeline" id="tab-2-content" role="tabpanel" aria-labelledby="tab-2">
					<div class="item item-talk">
						<div class="meta">
							<h4 class="time mb-3">8:00 - 9:00</h4>
							<div class="profile">
								<a href="#modal-franci-suni" data-toggle="modal" data-target="#modal-franci-suni"><img class="profile-image rounded-circle  mb-2" src="/images/speakers/franci-suni.jpg" alt=""></a>
								<div class="name"><a class="theme-link" href="#modal-franci-suni" data-toggle="modal" data-target="#modal-franci-suni">Franci Suni</a></div>
							</div><!--//profile-->
						</div><!--//meta-->
						<div class="content">
							<h3 class="title mb-3">Computación Afectiva: Entre las emociones y el afecto</h3>
							<div class="location mb-3"><i class="fas fa-video mr-2"></i>Google Meet</div>
							<div class="desc">
								<br><br><br><br>
							</div>
						</div><!--//content-->
					</div><!--//item-->
					<div class="item item-talk">
						<div class="meta">
							<h4 class="time mb-3">9:00 - 10:00</h4>
							<div class="profile">
								<a href="#modal-jorge-poco" data-toggle="modal" data-target="#modal-jorge-poco"><img class="profile-image rounded-circle  mb-2" src="/images/speakers/jorge-poco.jpg" alt=""></a>
								<div class="name"><a class="theme-link" href="#modal-jorge-poco" data-toggle="modal" data-target="#modal-jorge-poco">Jorge Poco</a></div>
							</div><!--//profile-->
						</div><!--//meta-->
						<div class="content">
							<h3 class="title mb-3">Towards Automatic Chart Interpretation</h3>
							<div class="location mb-3"><i class="fas fa-video mr-2"></i>Google Meet</div>
							<div class="desc">
								Charts and graphs are commonly used to present quantitative information. They are pervasive in scientific papers,
								textbooks, economic reports, news articles and webpages. In many cases these visualizations are the only publicly
								available representation of the underlying data. When well-designed, visualizations leverage human visual processing
								to convey information efficiently and effectively. Yet, while people can easily interpret data from charts and graphs,
								machines cannot directly access it. Today, a vast trove of information is locked inside data-driven diagrams.
								First, I will show computational models for interpreting data-driven diagrams to extract the underlying data, graphical marks,
								and mappings that relate the data to mark attributes. We aim to build generalized computational models that can accurately
								extract data from diagrams and also mimic the way people decode information from charts. Then, I will show some applications
								were we applied our automated diagram interpretation techniques: i) automatic recoloring to improve perceptual effectiveness, ii)
								interactive overlays to enable improved reading of static visualizations, and iii) use voices instead of text to generate overlays
								on a chart in real-time.
							</div>
						</div><!--//content-->
					</div><!--//item-->
					<div class="item item-talk">
						<div class="meta">
							<h4 class="time mb-3">10:00 - 11:00</h4>
							<div class="profile">
								<a href="#modal-alvaro-cuno" data-toggle="modal" data-target="#modal-alvaro-cuno"><img class="profile-image rounded-circle  mb-2" src="/images/speakers/alvaro-cuno.jpg" alt=""></a>
								<div class="name"><a class="theme-link" href="#modal-alvaro-cuno" data-toggle="modal" data-target="#modal-alvaro-cuno">Alvaro Cuno</a></div>
							</div><!--//profile-->
						</div><!--//meta-->
						<div class="content">
							<h3 class="title mb-3">Firmas electrónicas y digitales</h3>
							<div class="location mb-3"><i class="fas fa-video mr-2"></i>Google Meet</div>
							<div class="desc">
								<br><br><br><br>
							</div>
						</div><!--//content-->
					</div><!--//item-->
					<div class="item item-talk">
						<div class="meta">
							<h4 class="time mb-3">11:00 - 12:00</h4>
							<div class="profile">
								<a href="#modal-liliana-mamani" data-toggle="modal" data-target="#modal-liliana-mamani"><img class="profile-image rounded-circle  mb-2" src="/images/speakers/liliana-mamani.jpg" alt=""></a>
								<div class="name"><a class="theme-link" href="#modal-liliana-mamani" data-toggle="modal" data-target="#modal-liliana-mamani">Liliana Mamani</a></div>
							</div><!--//profile-->
						</div><!--//meta-->
						<div class="content">
							<h3 class="title mb-3">Procesamiento de Lenguaje Natural en una empresa de gestión de reputación online</h3>
							<div class="location mb-3"><i class="fas fa-video mr-2"></i>Google Meet</div>
							<div class="desc">
								<br><br><br><br>
							</div>
						</div><!--//content-->
					</div><!--//item-->
					<div class="item item-other">
						<div class="meta">
							<h4 class="time mb-3">12:00 - 15:00</h4>
						</div><!--//meta-->
						<div class="content">
							<h3 class="title mb-3">Break de Almuerzo</h3>
							<div class="desc">
								<br><br>
							</div>
						</div><!--//content-->
					</div><!--//item-->
					<div class="item item-talk">
						<div class="meta">
							<h4 class="time mb-3">15:00 - 15:30</h4>
							<div class="profile">
								<a href="#" data-toggle="modal" data-target="#"><img class="profile-image rounded-circle  mb-2" src="/images/speakers/christofer-chavez.jpg" alt=""></a>
								<div class="name"><a class="theme-link" href="#" data-toggle="modal" data-target="#">Christofer Fabián Chávez Carazas</a></div>
							</div><!--//profile-->
						</div><!--//meta-->
						<div class="content">
							<h3 class="title mb-3">Company in a world of research</h3>
							<div class="location mb-3"><i class="fas fa-video mr-2"></i>Google Meet</div>
							<div class="desc">
								<br><br><br><br>
							</div>
						</div><!--//content-->
					</div><!--//item-->
					<div class="item item-other">
						<div class="meta">
							<h4 class="time mb-3">15:30 - 18:00</h4>
						</div><!--//meta-->
						<div class="content">
							<h3 class="title mb-3">Trabajos de Investigación de Pregrado</h3>
							<div class="location mb-3"><i class="fas fa-video mr-2"></i>Google Meet</div>
							<div class="desc">
								<br><br><br><br>
							</div>
						</div><!--//content-->
					</div><!--//item-->

				</div><!--//tab-2-content-->
				<div class="tab-pane " id="tab-3-content" role="tabpanel" aria-labelledby="tab-3">
					<div class="item item-talk">
						<div class="meta">
							<h4 class="time mb-3">8:00 - 9:00</h4>
							<div class="profile">
								<a href="#modal-jesus-mena" data-toggle="modal" data-target="#modal-jesus-mena"><img class="profile-image rounded-circle  mb-2" src="/images/speakers/jesus-mena.jpg" alt=""></a>
								<div class="name"><a class="theme-link" href="#modal-jesus-mena" data-toggle="modal" data-target="#modal-jesus-mena">Jesús Mena</a></div>
							</div><!--//profile-->
						</div><!--//meta-->
						<div class="content">
							<h3 class="title mb-3">Genealogia academica: Caracterización y análisis usando métodos computacionales</h3>
							<div class="location mb-3"><i class="fas fa-video mr-2"></i>Google Meet</div>
							<div class="desc">
								<br><br><br><br>
							</div>
						</div><!--//content-->
					</div><!--//item-->
					<div class="item item-talk">
						<div class="meta">
							<h4 class="time mb-3">9:00 - 10:00</h4>
							<div class="profile">
								<a href="#modal-pablo-calcina" data-toggle="modal" data-target="#modal-pablo-calcina"><img class="profile-image rounded-circle  mb-2" src="/images/speakers/pablo-calcina.jpg" alt=""></a>
								<div class="name"><a class="theme-link" href="#modal-pablo-calcina" data-toggle="modal" data-target="#modal-pablo-calcina">Pablo Calcina</a></div>
							</div><!--//profile-->
						</div><!--//meta-->
						<div class="content">
							<h3 class="title mb-3">Internet de las Cosas: pasado, presente y futuro</h3>
							<div class="location mb-3"><i class="fas fa-video mr-2"></i>Google Meet</div>
							<div class="desc">
								<br><br><br><br>
							</div>
						</div><!--//content-->
					</div><!--//item-->
					<div class="item item-talk">
						<div class="meta">
							<h4 class="time mb-3">10:00 - 11:00</h4>
							<div class="profile">
								<a href="#modal-edward-pacheco" data-toggle="modal" data-target="#modal-edward-pacheco"><img class="profile-image rounded-circle  mb-2" src="/images/speakers/edward-pacheco.jpg" alt=""></a>
								<div class="name"><a class="theme-link" href="#modal-edward-pacheco" data-toggle="modal" data-target="#modal-edward-pacheco">Edward Pacheco</a></div>
							</div><!--//profile-->
						</div><!--//meta-->
						<div class="content">
							<h3 class="title mb-3">Container-based platforms: a research perspective</h3>
							<div class="location mb-3"><i class="fas fa-video mr-2"></i>Google Meet</div>
							<div class="desc">
								Aplicaciones modernas exigen ambientes avanzados de deployment que oculten la complejidad de mantenerlas 24/7
								y al mismo tiempo que minimicen la dependencia humana. Plataformas basadas en containers, representado principalmente
								por Kubernetes, han automatizado operaciones entre containers (escalabilidad, self-healing, etc.) y por tanto simplificando
								la gestión del ciclo de vida de aplicaciones. Su papel de orquestador de containers continúa creciendo en diferentes dominios
								al mismo tiempo que viabiliza nuevas oportunidades de investigación.
							</div>
						</div><!--//content-->
					</div><!--//item-->
					<div class="item item-talk">
						<div class="meta">
							<h4 class="time mb-3">11:00 - 12:00</h4>
							<div class="profile">
								<a href="#modal-omar-florez" data-toggle="modal" data-target="#modal-omar-florez"><img class="profile-image rounded-circle  mb-2" src="/images/speakers/omar-florez.jpg" alt=""></a>
								<div class="name"><a class="theme-link" href="#modal-omar-florez" data-toggle="modal" data-target="#modal-omar-florez">Omar Flores</a></div>
							</div><!--//profile-->
						</div><!--//meta-->
						<div class="content">
							<h3 class="title mb-3">Sobre los límites de la Inteligencia Artificial</h3>
							<div class="location mb-3"><i class="fas fa-video mr-2"></i>Google Meet</div>
							<div class="desc">
								<br><br><br><br>
							</div>
						</div><!--//content-->
					</div><!--//item-->
					<div class="item item-other">
						<div class="meta">
							<h4 class="time mb-3">12:00 - 15:00</h4>
						</div><!--//meta-->
						<div class="content">
							<h3 class="title mb-3">Break de Almuerzo</h3>
							<div class="desc">
								<br><br>
							</div>
						</div><!--//content-->
					</div><!--//item-->
					<div class="item item-other">
						<div class="meta">
							<h4 class="time mb-3">15:00 - 18:00</h4>
						</div><!--//meta-->
						<div class="content">
							<h3 class="title mb-3">Concurso de Programación</h3>
							<div class="location mb-3"><i class="fas fa-video mr-2"></i>Google Meet</div>
							<div class="desc">
								<br><br><br><br>
							</div>
						</div><!--//content-->
					</div><!--//item-->

				</div><!--//tab-3-content-->
				<div class="tab-pane no-timeline" id="tab-4-content" role="tabpanel" aria-labelledby="tab-4">
					<div class="item item-talk">
						<div class="meta">
							<h4 class="time mb-3">8:00 - 9:00</h4>
							<div class="profile">
								<a href="#modal-yamilet-serrano" data-toggle="modal" data-target="#modal-yamilet-serrano"><img class="profile-image rounded-circle  mb-2" src="/images/speakers/yamilet-serrano.jpg" alt=""></a>
								<div class="name"><a class="theme-link" href="#modal-yamilet-serrano" data-toggle="modal" data-target="#modal-yamilet-serrano">Yamilet Serrano</a></div>
							</div><!--//profile-->
						</div><!--//meta-->
						<div class="content">
							<h3 class="title mb-3">¿Cuánto sabemos del proceso de verificación de Software?</h3>
							<div class="location mb-3"><i class="fas fa-video mr-2"></i>Google Meet</div>
							<div class="desc">
								En esta charla, Prof. Yamilet Serrano presentará los fundamentos básicos para realizar
								un software confiable y escalable. En particular, introducirá diferentes métodos formales
								de verificación de software, los cuales han sido ampliamente usados en communication protocols,
								e-commerce, cloud computing, etc. Por último, Prof. Serrano presentará un resumen de su tesis doctoral
								“Applications of Perturbation Analysis in Probabilistic Model Checking”.
							</div>
						</div><!--//content-->
					</div><!--//item-->
					<div class="item item-talk">
						<div class="meta">
							<h4 class="time mb-3">9:00 - 10:00</h4>
							<div class="profile">
								<a href="#modal-lizeth-tapia" data-toggle="modal" data-target="#modal-lizeth-tapia"><img class="profile-image rounded-circle  mb-2" src="/images/speakers/lizeth-tapia.jpg" alt=""></a>
								<div class="name"><a class="theme-link" href="#modal-lizeth-tapia" data-toggle="modal" data-target="#modal-lizeth-tapia">Lizeth Tapia</a></div>
							</div><!--//profile-->
						</div><!--//meta-->
						<div class="content">
							<h3 class="title mb-3">Modelos Ejecutables</h3>
							<div class="location mb-3"><i class="fas fa-video mr-2"></i>Google Meet</div>
							<div class="desc">
								<br><br><br><br>
							</div>
						</div><!--//content-->
					</div><!--//item-->
					<div class="item item-talk">
						<div class="meta">
							<h4 class="time mb-3">9:00 - 10:00</h4>
							<div class="profile">
								<a href="#modal-ernesto-cuadros" data-toggle="modal" data-target="#modal-ernesto-cuadros"><img class="profile-image rounded-circle  mb-2" src="/images/speakers/ernesto-cuadros.jpg" alt=""></a>
								<div class="name"><a class="theme-link" href="#modal-ernesto-cuadros" data-toggle="modal" data-target="#modal-ernesto-cuadros">Ernesto Cuadros</a></div>
							</div><!--//profile-->
						</div><!--//meta-->
						<div class="content">
							<h3 class="title mb-3">Arquitectura digital del estado Peruano (Minedu)</h3>
							<div class="location mb-3"><i class="fas fa-video mr-2"></i>Google Meet</div>
							<div class="desc">
								El estado peruano actualmente cuenta con 48 mil colegios, +15 centros hospitalarios, +5000 comisarías,
								1900 municipios distritales, +190 provinciales entre otros. Todas estas instituciones generan información
								que debe ser procesada y consumida por un número potencial de 32 millones de habitantes. Esta charla presenta
								una propuesta de cómo deberíamos interconectar y procesar información en todo nuestro país para que sea posible
								que un dato generado en Tacna esté disponible en cualquier tablero de control de nuestras autoridades un segundo
								después en el otro extremo del país.
							</div>
						</div><!--//content-->
					</div><!--//item-->
					<div class="item item-talk">
						<div class="meta">
							<h4 class="time mb-3">11:00 - 12:00</h4>
							<div class="profile">
								<a href="#modal-juan-carlos-gutierrez" data-toggle="modal" data-target="#modal-juan-carlos-gutierrez"><img class="profile-image rounded-circle  mb-2" src="/images/speakers/juan-carlos-gutierrez.jpg" alt=""></a>
								<div class="name"><a class="theme-link" href="#César Beltrán" data-toggle="modal" data-target="#César Beltrán">Juan Carlos Gutiérrez</a></div>
							</div><!--//profile-->
						</div><!--//meta-->
						<div class="content">
							<h3 class="title mb-3">Detección de Acciones Violentas en Escenas de Video con Fines de Seguridad Ciudadana</h3>
							<div class="location mb-3"><i class="fas fa-video mr-2"></i>Google Meet</div>
							<div class="desc">
								<br><br><br><br>
							</div>
						</div><!--//content-->
					</div><!--//item-->
					<div class="item item-other">
						<div class="meta">
							<h4 class="time mb-3">12:00 - 15:00</h4>
						</div><!--//meta-->
						<div class="content">
							<h3 class="title mb-3">Break de Almuerzo</h3>
							<div class="desc">
								<br><br>
							</div>
						</div><!--//content-->
					</div><!--//item-->
					<div class="item item-talk">
						<div class="meta">
							<h4 class="time mb-3">15:00 - 16:00</h4>
							<div class="profile">
								<a href="#modal-ana-maria-cuadros" data-toggle="modal" data-target="#modal-ana-maria-cuadros"><img class="profile-image rounded-circle  mb-2" src="/images/speakers/ana-maria-cuadros.jpg" alt=""></a>
								<div class="name"><a class="theme-link" href="#modal-ana-maria-cuadros" data-toggle="modal" data-target="#modal-ana-maria-cuadros">Ana María Cuadros</a></div>
							</div><!--//profile-->
						</div><!--//meta-->
						<div class="content">
							<h3 class="title mb-3">Análisis Visual Interactivo de Datos Multidimensionales</h3>
							<div class="location mb-3"><i class="fas fa-video mr-2"></i>Google Meet</div>
							<div class="desc">
								<br><br><br><br>
							</div>
						</div><!--//content-->
					</div><!--//item-->
					<div class="item item-talk">
						<div class="meta">
							<h4 class="time mb-3">16:00 - 17:00</h4>
							<div class="profile">
								<a href="#modal-juan-vilca" data-toggle="modal" data-target="#modal-juan-vilca"><img class="profile-image rounded-circle  mb-2" src="/images/speakers/juan-vilca.jpg" alt=""></a>
								<div class="name"><a class="theme-link" href="#modal-juan-vilca" data-toggle="modal" data-target="#modal-juan-vilca">Juan Vilca</a></div>
							</div><!--//profile-->
						</div><!--//meta-->
						<div class="content">
							<h3 class="title mb-3">Arquitecturas serverless en AWS</h3>
							<div class="location mb-3"><i class="fas fa-video mr-2"></i>Google Meet</div>
							<div class="desc">
								<br><br><br><br>
							</div>
						</div><!--//content-->
					</div><!--//item-->
					<div class="item item-talk">
						<div class="meta">
							<h4 class="time mb-3">17:00 - 18:00</h4>
							<div class="profile">
								<a href="#modal-edward-hinojosa" data-toggle="modal" data-target="#modal-edward-hinojosa"><img class="profile-image rounded-circle  mb-2" src="/images/speakers/edward-hinojosa.jpg" alt=""></a>
								<div class="name"><a class="theme-link" href="#modal-edward-hinojosa" data-toggle="modal" data-target="#modal-edward-hinojosa">Edward Hinojosa</a></div>
							</div><!--//profile-->
						</div><!--//meta-->
						<div class="content">
							<h3 class="title mb-3">Acreditación en Computación</h3>
							<div class="location mb-3"><i class="fas fa-video mr-2"></i>Google Meet</div>
							<div class="desc">
								<br><br><br><br>
							</div>
						</div><!--//content-->
					</div><!--//item-->

				</div><!--//tab-4-content-->
				<div class="tab-pane no-timeline" id="tab-5-content" role="tabpanel" aria-labelledby="tab-5">
					<div class="item item-talk">
						<div class="meta">
							<h4 class="time mb-3">8:00 - 9:00</h4>
							<div class="profile">
								<a href="#modal-daniel-aliaga" data-toggle="modal" data-target="#modal-daniel-aliaga"><img class="profile-image rounded-circle  mb-2" src="/images/speakers/daniel-aliaga.jpg" alt=""></a>
								<div class="name"><a class="theme-link" href="#modal-daniel-aliaga" data-toggle="modal" data-target="#modal-daniel-aliaga">Daniel Aliaga</a></div>
							</div><!--//profile-->
						</div><!--//meta-->
						<div class="content">
							<h3 class="title mb-3">Ciudades Inteligentes: Buscando un Desarrollo Urbano Sostenible</h3>
							<div class="location mb-3"><i class="fas fa-video mr-2"></i>Google Meet</div>
							<div class="desc">
								<br><br><br><br>
							</div>
						</div><!--//content-->
					</div><!--//item-->
					<div class="item item-talk">
						<div class="meta">
							<h4 class="time mb-3">9:00 - 10:00</h4>
							<div class="profile">
								<a href="#modal-nelly-condori" data-toggle="modal" data-target="#modal-nelly-condori"><img class="profile-image rounded-circle  mb-2" src="/images/speakers/nelly-condori.jpg" alt=""></a>
								<div class="name"><a class="theme-link" href="#modal-nelly-condori" data-toggle="modal" data-target="#modal-nelly-condori">Nelly Condori</a></div>
							</div><!--//profile-->
						</div><!--//meta-->
						<div class="content">
							<h3 class="title mb-3">Towards the Development of Persuasive Emo-aware Software Applications: Challenges and Opportunities</h3>
							<div class="location mb-3"><i class="fas fa-video mr-2"></i>Google Meet</div>
							<div class="desc">
								<br><br><br><br>
							</div>
						</div><!--//content-->
					</div><!--//item-->
					<div class="item item-talk">
						<div class="meta">
							<h4 class="time mb-3">10:00 - 11:00</h4>
							<div class="profile">
								<a href="#modal-cesar-beltran" data-toggle="modal" data-target="#modal-cesar-beltran"><img class="profile-image rounded-circle  mb-2" src="/images/speakers/cesar-beltran.jpg" alt=""></a>
								<div class="name"><a class="theme-link" href="#modal-cesar-beltran" data-toggle="modal" data-target="#modal-cesar-beltran">César Beltrán</a></div>
							</div><!--//profile-->
						</div><!--//meta-->
						<div class="content">
							<h3 class="title mb-3">Ciencia de la Computación como base para la innovación tecnológica</h3>
							<div class="location mb-3"><i class="fas fa-video mr-2"></i>Google Meet</div>
							<div class="desc">
								<br><br><br><br>
							</div>
						</div><!--//content-->
					</div><!--//item-->
					<div class="item item-talk">
						<div class="meta">
							<h4 class="time mb-3">11:00 - 12:00</h4>
							<div class="profile">
								<a href="#modal-edgar-sarmiento" data-toggle="modal" data-target="#modal-edgar-sarmiento"><img class="profile-image rounded-circle  mb-2" src="/images/speakers/edgar-sarmiento.jpg" alt=""></a>
								<div class="name"><a class="theme-link" href="#modal-edgar-sarmiento" data-toggle="modal" data-target="#modal-edgar-sarmiento">Edgar Sarmiento</a></div>
							</div><!--//profile-->
						</div><!--//meta-->
						<div class="content">
							<h3 class="title mb-3">Panel: Desafíos de la Computación en Empresas de Software Internacionales</h3>
							<div class="location mb-3"><i class="fas fa-video mr-2"></i>Google Meet</div>
							<div class="desc">
								<strong>Moderador:</strong>
								<ul>
									<li><strong>Edgar Sarmiento Calisaya</strong></li>
									<ul>
										<li>Docente en Universidad Nacional de San Agustín de Arequipa - Perú</li>
										<li>Investigador CONCYTEC</li>
										<li>Universidad Nacional de San Agustín de Arequipa - Perú</li>
									</ul>
								</ul>
								<strong>Panelistas:</strong>
								<ul>
									<li><strong>Marcelo Flores Manrique</strong></li>
									<ul>
										<li>Senior Developer en VerizonConnect. Dublin - Irlanda</li>
										<li>Universidad Nacional de San Agustín de Arequipa - Perú</li>
									</ul>
									<li><strong>Michel Quintana</strong></li>
									<ul>
										<li>Software Engineer en Google. Brasil</li>
										<li>Universidad Nacional de San Agustín de Arequipa - Perú</li>
									</ul>
									<li><strong>Roberto Arreola</strong></li>
									<ul>
										<li>Ingeniero de software senior en VerizonConnect. Dublin - Irlanda</li>
										<li>Instituto Politecnico Nacional - Mexico</li>
									</ul>
									<li><strong>Francisco Guzman</strong></li>
									<ul>
										<li>AWS Devops - Systems Engineer en VerizonConnect. Dublin - Irlanda</li>
										<li>Instituto tecnologico y de Estudios Superiores de Monterrey - Mexico</li>
									</ul>
									<li><strong>Juan Marquinho Vilca Castro</strong></li>
									<ul>
										<li>Software Engineer en Amazon</li>
										<li>Universidad Nacional de San Agustín de Arequipa, Perú</li>
									</ul>
									<li><strong>Aún más por confirmar...</strong></li>
								</ul>
							</div>
						</div><!--//content-->
					</div><!--//item-->
					<div class="item item-other">
						<div class="meta">
							<h4 class="time mb-3">12:00 - 15:00</h4>
						</div><!--//meta-->
						<div class="content">
							<h3 class="title mb-3">Break de Almuerzo</h3>
							<div class="desc">
								<br><br>
							</div>
						</div><!--//content-->
					</div><!--//item-->
					<div class="item item-other">
						<div class="meta">
							<h4 class="time mb-3">15:00 - 18:00</h4>
						</div><!--//meta-->
						<div class="content">
							<h3 class="title mb-3">Evento Social</h3>
							<div class="location mb-3"><i class="fas fa-video mr-2"></i>Google Meet</div>
							<div class="desc">
								<br><br>
							</div>
						</div><!--//content-->
					</div><!--//item-->

				</div><!--//tab-5-content-->
			</div><!--//schedule-tab-content-->
			<!-- Register -->
			<div class="schedule-cta text-center mx-auto"><a href="#venue-section" class="btn btn-primary btn-lg mr-md-2 d-block d-md-inline-block mb-3 mb-md-0 scrollto">Descargar Cronograma</a><a href="#venue-section" class="btn btn-secondary btn-lg d-block d-md-inline-block scrollto">Registrarse</a></div>
		</div><!--//container-->
	</section><!--//schedule-section-->

	<section id="venue-section" class="venue-section section  theme-bg-primary text-white">
		<div class="container">
			<h3 class="section-heading text-center mb-5 text-white">Participación</h3>
			<div class="row py-lg-5">
				<div class="col-12 col-lg-7 h-100">
					<div class="desc">
						<h4 class="text-white mb-3">Cómo participar de la 3ra Edición de la Semana de la Computación</h4>
						<p>
							Para poder participar de la 3ra Edición de la Semana de la Computación podrás realizarlo vía Google Forms.
							De esta forma podremos tener registro de tu e-mail y poder Agendarte y Notificarte gracias a la herramienta Google Calendar,
							donde se estarán gestionando las invitaciones y los links correspondientes de las videoconferencias que se darán
							via Google Meet. Además, podrás sincronizar tu Google Drive con los posters o informaciones adicionales gratuitas que se
							brindarán. A continuación te presentamos los botones que te permitirán registrarte via Google Forms y seguirnos a través de Facebook.
						</p>
						<br>

						<h4 class="text-white mb-4 mt-3 mt-lg-5">Facilidades &amp; Registro</h4>
						<p>¡Utiliza este botón para registrarte!</p>
						<a class="btn btn-ghost" href="" target="_blank">Registrarse con Google Forms</a>
						<a class="btn btn-ghost" href="https://facebook.com/csunsa" target="_blank">Transmisión via Facebook</a>
					</div><!--//desc-->
				</div><!--//col-->
				<div class="col-12 col-lg-4 offset-lg-1 position-relative h-100 mt-5 mt-lg-0">
					<div class="figures-holder">
						<div class="figure figure-1"><img class="shadow" src="/images/venue/venue-1.jpg" alt=""></div>
						<div class="figure figure-2"><img class="shadow" src="/images/venue/venue-2.jpg" alt=""></div>
					</div><!--//figures-holder-->
				</div><!--//col-->
			</div><!--//row-->
		</div><!--//container-->
	</section><!--//venue-section-->

	<section id="committee-section" class="committee-section section">
		<div class="container">
			<h3 class="section-heading text-center mb-3">Organización</h3>
			<div class="section-intro text-center single-col-max mx-auto mb-5">Comité Organizador</div>
			<div class="row">
				<div class="col-12 col-md-6 col-lg-3 mb-4">
					<div class="card rounded-0">
						<a href="#modal-edgar-sarmiento" data-toggle="modal" data-target="#modal-edgar-sarmiento"><img src="/images/speakers/edgar-sarmiento.jpg" class="card-img-top rounded-0" alt=""></a>
						<div class="card-body">
							<h5 class="card-title mb-2">Edgar Sarmiento</h5>
							<div class="card-text mb-3">
								<div class="meta">Universidad Nacional de San Agustin de Arequipa, Perú</div>
								<div class="meta">Profesor</div>
							</div><!--//card-text-->
							<a href="#modal-edgar-sarmiento" data-toggle="modal" data-target="#modal-edgar-sarmiento">Leer más &rarr;</a>
						</div><!--//card-->
						<div class="card-footer text-muted">
							<ul class="social-list list-inline mb-0">
								<li class="list-inline-item"><a  href="#"><i class="fab fa-orcid fa-fw"></i></a></li>
								<li class="list-inline-item"><a  href="#"><i class="fab fa-linkedin-in fa-fw"></i></a></li>
								<li class="list-inline-item"><a  href="#"><i class="fab fa-github fa-fw"></i></a></li>
							</ul><!--//social-list-->
						</div>
					</div><!--//card-->
				</div><!--//col-->
				<div class="col-12 col-md-6 col-lg-3 mb-4">
					<div class="card rounded-0">
						<a href="#modal-wilber-ramos" data-toggle="modal" data-target="#modal-wilber-ramos"><img src="/images/speakers/wilber-ramos.jpg" class="card-img-top rounded-0" alt=""></a>
						<div class="card-body">
							<h5 class="card-title mb-2">Wilber Ramos</h5>
							<div class="card-text mb-3">
								<div class="meta">Universidad Nacional de San Agustin de Arequipa, Perú</div>
								<div class="meta">Profesor</div>
							</div><!--//card-text-->
							<a href="#modal-wilber-ramos" data-toggle="modal" data-target="#modal-wilber-ramos">Leer más &rarr;</a>
						</div><!--//card-->
						<div class="card-footer text-muted">
							<ul class="social-list list-inline mb-0">
								<li class="list-inline-item"><a  href="#"><i class="fab fa-orcid fa-fw"></i></a></li>
								<li class="list-inline-item"><a  href="#"><i class="fab fa-linkedin-in fa-fw"></i></a></li>
								<li class="list-inline-item"><a  href="#"><i class="fab fa-github fa-fw"></i></a></li>
							</ul><!--//social-list-->
						</div>
					</div><!--//card-->
				</div><!--//col-->
				<div class="col-12 col-md-6 col-lg-3 mb-4">
					<div class="card rounded-0">
						<a href="#modal-adrian-bedregal" data-toggle="modal" data-target="#modal-adrian-bedregal"><img src="/images/speakers/adrian-bedregal.jpg" class="card-img-top rounded-0" alt=""></a>
						<div class="card-body">
							<h5 class="card-title mb-2">Adrian Bedregal</h5>
							<div class="card-text mb-3">
								<div class="meta">Universidad Nacional de San Agustin de Arequipa, Perú</div>
								<div class="meta">Estudiante</div>
							</div><!--//card-text-->
							<a href="#modal-adrian-bedregal" data-toggle="modal" data-target="#modal-adrian-bedregal">Leer más &rarr;</a>
						</div><!--//card-->
						<div class="card-footer text-muted">
							<ul class="social-list list-inline mb-0">
								<li class="list-inline-item"><a  href="#"><i class="fab fa-orcid fa-fw"></i></a></li>
								<li class="list-inline-item"><a  href="#"><i class="fab fa-linkedin-in fa-fw"></i></a></li>
								<li class="list-inline-item"><a  href="#"><i class="fab fa-github fa-fw"></i></a></li>
							</ul><!--//social-list-->
						</div>
					</div><!--//card-->
				</div><!--//col-->
				<div class="col-12 col-md-6 col-lg-3 mb-4">
					<div class="card rounded-0">
						<a href="#modal-hayde-humpire" data-toggle="modal" data-target="#modal-hayde-humpire"><img src="/images/speakers/hayde-humpire.jpg" class="card-img-top rounded-0" alt=""></a>
						<div class="card-body">
							<h5 class="card-title mb-2">Hayde Humpire</h5>
							<div class="card-text mb-3">
								<div class="meta">Universidad Nacional de San Agustin de Arequipa, Perú</div>
								<div class="meta">Estudiante</div>
							</div><!--//card-text-->
							<a href="#modal-hayde-humpire" data-toggle="modal" data-target="#modal-hayde-humpire">Leer más &rarr;</a>
						</div><!--//card-->
						<div class="card-footer text-muted">
							<ul class="social-list list-inline mb-0">
								<li class="list-inline-item"><a  href="#"><i class="fab fa-orcid fa-fw"></i></a></li>
								<li class="list-inline-item"><a  href="#"><i class="fab fa-linkedin-in fa-fw"></i></a></li>
								<li class="list-inline-item"><a  href="#"><i class="fab fa-github fa-fw"></i></a></li>
							</ul><!--//social-list-->
						</div>
					</div><!--//card-->
				</div><!--//col-->
				<div class="col-12 col-md-6 col-lg-3 mb-4">
					<div class="card rounded-0">
						<a href="#modal-ademir-villena" data-toggle="modal" data-target="#modal-ademir-villena"><img src="/images/speakers/ademir-villena.jpg" class="card-img-top rounded-0" alt=""></a>
						<div class="card-body">
							<h5 class="card-title mb-2">Ademir Villena</h5>
							<div class="card-text mb-3">
								<div class="meta">Universidad Nacional de San Agustin de Arequipa, Perú</div>
								<div class="meta">Estudiante</div>
							</div><!--//card-text-->
							<a href="#modal-hayde-humpire" data-toggle="modal" data-target="#modal-hayde-humpire">Leer más &rarr;</a>
						</div><!--//card-->
						<div class="card-footer text-muted">
							<ul class="social-list list-inline mb-0">
								<li class="list-inline-item"><a  href="#"><i class="fab fa-orcid fa-fw"></i></a></li>
								<li class="list-inline-item"><a  href="#"><i class="fab fa-linkedin-in fa-fw"></i></a></li>
								<li class="list-inline-item"><a  href="#"><i class="fab fa-github fa-fw"></i></a></li>
							</ul><!--//social-list-->
						</div>
					</div><!--//card-->
				</div><!--//col-->

			</div><!--//row-->

		</div><!--//container-->

	</section><!--//commite-section-->

	<section id="sponsors-section" class="sponsors-section section">
		<div class="container">
			<h3 class="section-heading text-center mb-3">Sponsors</h3>
			<div class="section-intro text-center single-col-max mx-auto mb-5">¿Gustarías formar parte de la familia de Computer Science UNSA? Haz click en el botón para más información.</div>
			<div class="row logos justify-content-center">
				<div class="logo-item col-6 col-md-4 col-lg-2"><img src="/images/logos/unsa.jpg" alt=""></div>
				<div class="logo-item col-6 col-md-4 col-lg-2"><img src="/images/cslogos/logo-black.png" alt=""></div>
				<div class="logo-item col-6 col-md-4 col-lg-2"><img src="/images/logos/icacit.png" alt=""></div>
				<div class="logo-item col-6 col-md-4 col-lg-2"><img src="/images/logos/kusisqa.png" alt=""></div>
				<div class="logo-item col-6 col-md-4 col-lg-2"><img src="/images/logos/paulonia_large_blank.png" alt=""></div>
			</div><!--//row-->
			<div class="sponsors-cta text-center pt-5"><a class="btn-primary btn btn-lg" href="https://forms.gle/AJFwMD72j3zimHMG8" target="_blank">Convertirse en Sponsor</a></div>
		</div><!--//container-->
	</section><!--//sponsors-section-->

	<!-- Modal Speaker -->
	<div class="modal modal-speaker modal-wilber-ramos" id="modal-wilber-ramos" tabindex="-1" role="dialog" aria-labelledby="speaker-2-ModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 id="speaker-2-ModalLabel" class="modal-title sr-only">Wilber Roberto Ramos Lovón</h4>
				</div>
				<div class="modal-body p-0">
					<div class="media flex-column flex-md-row theme-bg-light p-4 p-lg-5">
						<img class="profile-image mb-3 mb-md-0 mr-md-4 rounded-circle mx-auto" src="/images/speakers/wilber-ramos.jpg" alt="" />

						<div class="media-body text-center text-md-left mx-auto">
							<h2 class="name mb-2">Wilber Roberto Ramos Lovón</h2>
							<div class="meta">Lic. en Matemática</div>
							<div class="meta">MSc. en Computer Science</div>
							<div class="meta mb-2">Director de la Escuela Profesional de Ciencia de la Computación de la UNSA</div>
							<ul class="social-list list-inline mb-0">
								<li class="list-inline-item"><a  href="#"><i class="fab fa-twitter fa-fw"></i></a></li>
								<li class="list-inline-item"><a  href="#"><i class="fab fa-linkedin-in fa-fw"></i></a></li>
								<li class="list-inline-item"><a  href="#"><i class="fab fa-github fa-fw"></i></a></li>
							</ul><!--//social-list-->
						</div><!--//media-body-->
					</div><!--//media-->

					<div class="desc p-4 p-lg-5">
						<p class="mb-0">
							Pionero y Promotor de la Ciencia de la Computación en Arequipa, participó en el Diseño de la
							COMPUTER SCIENCE CURRICULA FOR PERUVIAN UNIVERSITIES, ha sido fundador y director de la Escuela Profesional
							de Ciencia de la Computación de la UNSA, Coordinador de la Cátedra en la FCIFF de la UCSM, Se ha capacitado
							en Semánticas y Aplicaciones en Montevideo Uruguay, Matemáticas Discretas en el Instituto de Sistemas Complejos
							de Valparaíso Chile, Evaluación para la Acreditación en Programas de Ingeniería de ICACIT Perú, estudio su Maestría
							en Matemática en la Pontificia Universidad Catolica del Perú, actualmente es Candidato a Doctor en la Universidad
							Nacional de San Agustín.
						</p>
					</div>
				</div><!--//modal-body-->
			</div><!--//modal-content-->
		</div><!--//modal-dialog-->
	</div><!--//modal-->
	<!-- Modal Speaker -->
	<div class="modal modal-speaker modal-luciano-romero" id="modal-luciano-romero" tabindex="-1" role="dialog" aria-labelledby="speaker-1-ModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 id="speaker-1-ModalLabel" class="modal-title sr-only">‪Luciano Arnaldo Romero Calla</h4>
				</div>
				<div class="modal-body p-0">
					<div class="media flex-column flex-md-row theme-bg-light p-4 p-lg-5">
						<img class="profile-image mb-3 mb-md-0 mr-md-4 rounded-circle mx-auto" src="/images/speakers/luciano-romero.jpg" alt="" />

						<div class="media-body text-center text-md-left mx-auto">
							<h2 class="name mb-2">‪Luciano Arnaldo Romero Calla</h2>
							<div class="meta">Estudiante de Doctorado en CS <br> Investigador ESR en el proyecto EVOCATION-ITN</div>
							<div class="meta mb-2">Universidad de Zúrich</div>
							<ul class="social-list list-inline mb-0">
								<li class="list-inline-item"><a  href="#"><i class="fab fa-twitter fa-fw"></i></a></li>
								<li class="list-inline-item"><a  href="#"><i class="fab fa-linkedin-in fa-fw"></i></a></li>
								<li class="list-inline-item"><a  href="#"><i class="fab fa-github fa-fw"></i></a></li>
							</ul><!--//social-list-->
						</div><!--//media-body-->
					</div><!--//media-->

					<div class="desc p-4 p-lg-5">
						<p class="mb-0">
							Luciano es estudiante de doctorado en Ciencia de la Computación en la Universidad de Zúrich (desde 2019) e investigador
							ESR en el proyecto EVOCATION-ITN (evocation.eu). Realizó su Maestría en Ciencia de la Computación en la Universidad
							Federal Fluminense, Niteroi - Brasil (2017).  Egresado y Bachiller de la primera promoción de la escuela de Ciencia de
							la Computación de la Universidad Nacional de San Agustín, Arequipa - Perú (2014). Su investigación actual se centra en
							los siguientes campos: real-time ray tracing, geometry processing, computational geometry, y geometric deep learning.
							Además, tiene interés en algoritmos, estructuras de datos, grafos, programación paralela y programación competitiva.
						</p>
					</div>
				</div><!--//modal-body-->
			</div><!--//modal-content-->
		</div><!--//modal-dialog-->
	</div><!--//modal-->
	<!-- Modal Speaker -->
	<div class="modal modal-speaker modal-lizeth-fuentes" id="modal-lizeth-fuentes" tabindex="-1" role="dialog" aria-labelledby="speaker-2-ModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 id="speaker-2-ModalLabel" class="modal-title sr-only">Lizeth Joseline Fuentes Pérez</h4>
				</div>
				<div class="modal-body p-0">
					<div class="media flex-column flex-md-row theme-bg-light p-4 p-lg-5">
						<img class="profile-image mb-3 mb-md-0 mr-md-4 rounded-circle mx-auto" src="/images/speakers/lizeth-fuentes.jpg" alt="" />

						<div class="media-body text-center text-md-left mx-auto">
							<h2 class="name mb-2">Lizeth Joseline Fuentes Pérez</h2>
							<div class="meta">Estudiante de Doctorado en CS <br> Investigador ESR en el proyecto EVOCATION-ITN</div>
							<div class="meta mb-2">Universidad de Zúrich</div>
							<ul class="social-list list-inline mb-0">
								<li class="list-inline-item"><a  href="#"><i class="fab fa-twitter fa-fw"></i></a></li>
								<li class="list-inline-item"><a  href="#"><i class="fab fa-linkedin-in fa-fw"></i></a></li>
								<li class="list-inline-item"><a  href="#"><i class="fab fa-github fa-fw"></i></a></li>
							</ul><!--//social-list-->
						</div><!--//media-body-->
					</div><!--//media-->

					<div class="desc p-4 p-lg-5">
						<p class="mb-0">
							Lizeth Fuentes es estudiante de doctorado en Ciencia de la Computación en la Universidad de Zúrich (desde 2019)
							e investigador ESR en el proyecto EVOCATION-ITN (evocation.eu). Ha sido becada para asistir a la conferencia más
							grande de mujeres en Computación Grace Hopper Celebration GHC  2020. Realizó su Maestría en Ciencia de la Computación
							en la Universidad Federal Fluminense, Niteroi - Brasil (2017).  Bachiller en Ciencia de la Computación en la Universidad
							Nacional de San Agustín, Arequipa - Perú (2014). Su investigación actual se centra en los siguientes campos: indoor
							reconstruction, geometry processing, machine learning y geometric deep learning.
						</p>
					</div>
				</div><!--//modal-body-->
			</div><!--//modal-content-->
		</div><!--//modal-dialog-->
	</div><!--//modal-->
	<!-- Modal Speaker -->
	<div class="modal modal-speaker modal-marcelo-flores" id="modal-marcelo-flores" tabindex="-1" role="dialog" aria-labelledby="speaker-2-ModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 id="speaker-2-ModalLabel" class="modal-title sr-only">Marcelo A. Flores Manrique</h4>
				</div>
				<div class="modal-body p-0">
					<div class="media flex-column flex-md-row theme-bg-light p-4 p-lg-5">
						<img class="profile-image mb-3 mb-md-0 mr-md-4 rounded-circle mx-auto" src="/images/speakers/marcelo-flores.jpg" alt="" />

						<div class="media-body text-center text-md-left mx-auto">
							<h2 class="name mb-2">Marcelo A. Flores Manrique</h2>
							<div class="meta">Senior Software Architect</div>
							<div class="meta mb-2">Universidade Federal do Rio de Janeiro</div>
							<ul class="social-list list-inline mb-0">
								<li class="list-inline-item"><a  href="#"><i class="fab fa-twitter fa-fw"></i></a></li>
								<li class="list-inline-item"><a  href="#"><i class="fab fa-linkedin-in fa-fw"></i></a></li>
								<li class="list-inline-item"><a  href="#"><i class="fab fa-github fa-fw"></i></a></li>
							</ul><!--//social-list-->
						</div><!--//media-body-->
					</div><!--//media-->

					<div class="desc p-4 p-lg-5">
						<p class="mb-0">
							Actualmente trabajando en el área de telemetria y IOT como arquitecto y desarrollador senior
							en la empresa VerizonConnect en Dublin - Irlanda, con experiencia en diversas áreas, como e-commerce
							(OLX Brasil), Petroleo (Schlumberger internacional) y censos nacionales en Brasil (IBGE). Foco profesional
							en big data, IOT, devops y programación backend.
						</p>
					</div>
				</div><!--//modal-body-->
			</div><!--//modal-content-->
		</div><!--//modal-dialog-->
	</div><!--//modal-->
	<!-- Modal Speaker -->
	<div class="modal modal-speaker modal-jorge-poco" id="modal-jorge-poco" tabindex="-1" role="dialog" aria-labelledby="speaker-2-ModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 id="speaker-2-ModalLabel" class="modal-title sr-only">Jorge Luis Poco Medina</h4>
				</div>
				<div class="modal-body p-0">
					<div class="media flex-column flex-md-row theme-bg-light p-4 p-lg-5">
						<img class="profile-image mb-3 mb-md-0 mr-md-4 rounded-circle mx-auto" src="/images/speakers/jorge-poco.jpg" alt="" />

						<div class="media-body text-center text-md-left mx-auto">
							<h2 class="name mb-2">Jorge Luis Poco Medina</h2>
							<div class="meta">Associate Professor at FGV EMAp School of Applied Mathematics</div>
							<div class="meta mb-2">Fundação Getúlio Vargas - FGV, Rio de Janeiro, Brazil</div>
							<ul class="social-list list-inline mb-0">
								<li class="list-inline-item"><a  href="#"><i class="fab fa-twitter fa-fw"></i></a></li>
								<li class="list-inline-item"><a  href="#"><i class="fab fa-linkedin-in fa-fw"></i></a></li>
								<li class="list-inline-item"><a  href="#"><i class="fab fa-github fa-fw"></i></a></li>
							</ul><!--//social-list-->
						</div><!--//media-body-->
					</div><!--//media-->

					<div class="desc p-4 p-lg-5">
						<p class="mb-0">
							Jorge Poco is an Associate Professor at FGV EMAp School of Applied Mathematics, Fundação Getúlio Vargas - FGV, Rio de Janeiro, Brazil.
							Previously he was an assistant professor at the San Pablo Catholic University and a research associate at the University of Washington.
							He obtained his Ph.D. in Computer Science from New York University, an M.S. in Computer Science from the University of São Paulo, and a
							B.E. in System Engineering from the National University of San Agustin. As part of his professional life, he worked in zAgile, Google,
							Kitware, Oak Ridge National Laboratory, and Xerox Research. His research has focused on data visualization, data science, and machine
							learning. He has participated in projects on information visualization, scientific visualization, and visual analytics. His works include
							interdisciplinary collaborations that focused on the development of novel visualization methods to enable both climate and urban data analysis.
							He also has an interest in techniques for automatic chart interpretation.
						</p>
					</div>
				</div><!--//modal-body-->
			</div><!--//modal-content-->
		</div><!--//modal-dialog-->
	</div><!--//modal-->
	<!-- Modal Speaker -->
	<div class="modal modal-speaker modal-alvaro-cuno" id="modal-alvaro-cuno" tabindex="-1" role="dialog" aria-labelledby="speaker-2-ModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 id="speaker-2-ModalLabel" class="modal-title sr-only">Alvaro Ernesto Cuno Parari</h4>
				</div>
				<div class="modal-body p-0">
					<div class="media flex-column flex-md-row theme-bg-light p-4 p-lg-5">
						<img class="profile-image mb-3 mb-md-0 mr-md-4 rounded-circle mx-auto" src="/images/speakers/alvaro-cuno.jpg" alt="" />

						<div class="media-body text-center text-md-left mx-auto">
							<h2 class="name mb-2">Alvaro Ernesto Cuno Parari</h2>
							<div class="meta">MSc. y Ph. D. en Computer Science</div>
							<div class="meta mb-2">Universidad Federal de Rio de Janeiro, Brazil</div>
							<ul class="social-list list-inline mb-0">
								<li class="list-inline-item"><a  href="#"><i class="fab fa-twitter fa-fw"></i></a></li>
								<li class="list-inline-item"><a  href="#"><i class="fab fa-linkedin-in fa-fw"></i></a></li>
								<li class="list-inline-item"><a  href="#"><i class="fab fa-github fa-fw"></i></a></li>
							</ul><!--//social-list-->
						</div><!--//media-body-->
					</div><!--//media-->

					<div class="desc p-4 p-lg-5">
						<p class="mb-0">
							Alvaro Cuno es especialista en proyectos basados en las Tecnologías de la Información, con énfasis en el diseño,
							construcción e integración de componentes y servicios, que dan soporte a la digitalización de las organizaciones.
							Asimismo, posee amplia experiencia en seguridad de la información, gestión de TI, firmas digitales, identidades
							digitales, tarjetas inteligentes, entre otros. Su formación académica empezó en la Universidad Nacional de San Agustín,
							donde obtuvo el título de Ingeniero de Sistemas. Seguidamente, obtuvo su maestría en Ingeniería de Sistemas y Computación
							en la Universidad Federal de Río de Janeiro, y finalmente, obtuvo el grado de doctor en la misma universidad. En el 2016,
							realizó una pasantía de tres meses en la Freie University of Berlin - Alemania con la finalidad de reforzar sus conocimientos
							en el área de Identidad Digital. Actualmente, se desempeña como Investigador Asociado del proyecto KUSISQA adscrito a la EP
							de Ciencia de la Computación de la UNSA.
						</p>
					</div>
				</div><!--//modal-body-->
			</div><!--//modal-content-->
		</div><!--//modal-dialog-->
	</div><!--//modal-->
	<!-- Modal Speaker -->
	<div class="modal modal-speaker modal-liliana-mamani" id="modal-liliana-mamani" tabindex="-1" role="dialog" aria-labelledby="speaker-2-ModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 id="speaker-2-ModalLabel" class="modal-title sr-only">Liliana Mamani Sanchez</h4>
				</div>
				<div class="modal-body p-0">
					<div class="media flex-column flex-md-row theme-bg-light p-4 p-lg-5">
						<img class="profile-image mb-3 mb-md-0 mr-md-4 rounded-circle mx-auto" src="/images/speakers/liliana-mamani.jpg" alt="" />

						<div class="media-body text-center text-md-left mx-auto">
							<h2 class="name mb-2">Liliana Mamani Sanchez</h2>
							<div class="meta">MSc. y Ph. D. en Computer Science</div>
							<div class="meta mb-2">Trinity College Dublin</div>
							<ul class="social-list list-inline mb-0">
								<li class="list-inline-item"><a  href="#"><i class="fab fa-twitter fa-fw"></i></a></li>
								<li class="list-inline-item"><a  href="#"><i class="fab fa-linkedin-in fa-fw"></i></a></li>
								<li class="list-inline-item"><a  href="#"><i class="fab fa-github fa-fw"></i></a></li>
							</ul><!--//social-list-->
						</div><!--//media-body-->
					</div><!--//media-->

					<div class="desc p-4 p-lg-5">
						<p class="mb-0">
							Liliana es bachiller en Ingeniería de Sistemas por la UNSA. Realizó estudios de maestría en Brasil
							en el Instituto Militar de Engenharia, donde se especializó en el área de Lingüística Computacional.
							Siguiendo su interés en el procesamiento automático de lenguajes fue a Irlanda donde se graduó como
							Phd in Computer Science en Trinity College Dublin. Ella ha trabajado como docente en el área en Perú
							e Irlanda y también como investigadora post-doctoral. En la actualidad, trabaja en una empresa Alemana
							de gestión de reputación online en el área de Procesamiento Lenguaje Natural. Aún extraña el ceviche
							con pescado fresco.
						</p>
					</div>
				</div><!--//modal-body-->
			</div><!--//modal-content-->
		</div><!--//modal-dialog-->
	</div><!--//modal-->
	<!-- Modal Speaker -->
	<div class="modal modal-speaker modal-jesus-mena" id="modal-jesus-mena" tabindex="-1" role="dialog" aria-labelledby="speaker-2-ModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 id="speaker-2-ModalLabel" class="modal-title sr-only">Jesús P. Mena-Chalco</h4>
				</div>
				<div class="modal-body p-0">
					<div class="media flex-column flex-md-row theme-bg-light p-4 p-lg-5">
						<img class="profile-image mb-3 mb-md-0 mr-md-4 rounded-circle mx-auto" src="/images/speakers/jesus-mena.jpg" alt="" />

						<div class="media-body text-center text-md-left mx-auto">
							<h2 class="name mb-2">Jesús P. Mena-Chalco</h2>
							<div class="meta">MSc. y Ph. D. en Computer Science</div>
							<div class="meta mb-2">Professor Adjunto - CMCC - UFABC</div>
							<ul class="social-list list-inline mb-0">
								<li class="list-inline-item"><a  href="#"><i class="fab fa-twitter fa-fw"></i></a></li>
								<li class="list-inline-item"><a  href="#"><i class="fab fa-linkedin-in fa-fw"></i></a></li>
								<li class="list-inline-item"><a  href="#"><i class="fab fa-github fa-fw"></i></a></li>
							</ul><!--//social-list-->
						</div><!--//media-body-->
					</div><!--//media-->

					<div class="desc p-4 p-lg-5">
						<p class="mb-0">
							Ex alumno de Ingeniería de Sistemas - UNSA/Perú, Magister y Doctor en Ciencia de la Computación
							- IME/USP/Brasil, y Profesor en el Departamento de Ciência da Computação en la Universidade
							Federal do ABC - São Paulo/Brasil.
						</p>
					</div>
				</div><!--//modal-body-->
			</div><!--//modal-content-->
		</div><!--//modal-dialog-->
	</div><!--//modal-->
	<!-- Modal Speaker -->
	<div class="modal modal-speaker modal-pablo-calcina" id="modal-pablo-calcina" tabindex="-1" role="dialog" aria-labelledby="speaker-2-ModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 id="speaker-2-ModalLabel" class="modal-title sr-only">Pablo César Calcina Ccori</h4>
				</div>
				<div class="modal-body p-0">
					<div class="media flex-column flex-md-row theme-bg-light p-4 p-lg-5">
						<img class="profile-image mb-3 mb-md-0 mr-md-4 rounded-circle mx-auto" src="/images/speakers/pablo-calcina.jpg" alt="" />

						<div class="media-body text-center text-md-left mx-auto">
							<h2 class="name mb-2">Pablo César Calcina Ccori</h2>
							<div class="meta">MSc. y Ph. D. en Computer Science</div>
							<div class="meta mb-2">Universidad de São Paulo, Brasil</div>
							<div class="meta mb-2">Professor Adjunto - Universidad Nacional de San Agustin</div>
							<ul class="social-list list-inline mb-0">
								<li class="list-inline-item"><a  href="#"><i class="fab fa-twitter fa-fw"></i></a></li>
								<li class="list-inline-item"><a  href="#"><i class="fab fa-linkedin-in fa-fw"></i></a></li>
								<li class="list-inline-item"><a  href="#"><i class="fab fa-github fa-fw"></i></a></li>
							</ul><!--//social-list-->
						</div><!--//media-body-->
					</div><!--//media-->

					<div class="desc p-4 p-lg-5">
						<p class="mb-0">
							Pablo Calcina Ccori estudió Ingeniería de Sistemas en la Universidad Nacional de San Agustín.
							Obtuvo los grados de master y doctor en Ciencia de la Computación por la Universidad de São Paulo, Brasil.
							Durante su trayectoria profesional ha liderado diversos proyectos de desarrollo de software en startups y
							empresas de tecnología. Sus principales líneas de investigación son inteligencia artificial e Internet de las Cosas.
						</p>
					</div>
				</div><!--//modal-body-->
			</div><!--//modal-content-->
		</div><!--//modal-dialog-->
	</div><!--//modal-->
	<!-- Modal Speaker -->
	<div class="modal modal-speaker modal-edward-pacheco" id="modal-edward-pacheco" tabindex="-1" role="dialog" aria-labelledby="speaker-2-ModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 id="speaker-2-ModalLabel" class="modal-title sr-only">Edward Jose Pacheco Condori</h4>
				</div>
				<div class="modal-body p-0">
					<div class="media flex-column flex-md-row theme-bg-light p-4 p-lg-5">
						<img class="profile-image mb-3 mb-md-0 mr-md-4 rounded-circle mx-auto" src="/images/speakers/edward-pacheco.jpg" alt="" />

						<div class="media-body text-center text-md-left mx-auto">
							<h2 class="name mb-2">Edward Jose Pacheco Condori</h2>
							<div class="meta">MSc. en Informatica</div>
							<div class="meta mb-2">PUC-RJ, Brasil</div>
							<ul class="social-list list-inline mb-0">
								<li class="list-inline-item"><a  href="#"><i class="fab fa-twitter fa-fw"></i></a></li>
								<li class="list-inline-item"><a  href="#"><i class="fab fa-linkedin-in fa-fw"></i></a></li>
								<li class="list-inline-item"><a  href="#"><i class="fab fa-github fa-fw"></i></a></li>
							</ul><!--//social-list-->
						</div><!--//media-body-->
					</div><!--//media-->

					<div class="desc p-4 p-lg-5">
						<p class="mb-0">
							Estudió Ingenieria de Sistemas y maestría en informatica en la PUC-RJ, Brasil. Fue investigador en el
							"Brazil Research and Development Center" de la empresa DellEMC donde participó en varios proyectos de
							investigación aplicada en la industria del petróleo, en sistemas de almacenamiento y procesamiento distribuidos,
							e infraestructura on-premises.
						</p>
					</div>
				</div><!--//modal-body-->
			</div><!--//modal-content-->
		</div><!--//modal-dialog-->
	</div><!--//modal-->
	<!-- Modal Speaker -->
	<div class="modal modal-speaker modal-omar-florez" id="modal-omar-florez" tabindex="-1" role="dialog" aria-labelledby="speaker-2-ModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 id="speaker-2-ModalLabel" class="modal-title sr-only">Omar U. Florez</h4>
				</div>
				<div class="modal-body p-0">
					<div class="media flex-column flex-md-row theme-bg-light p-4 p-lg-5">
						<img class="profile-image mb-3 mb-md-0 mr-md-4 rounded-circle mx-auto" src="/images/speakers/omar-florez.jpg" alt="" />

						<div class="media-body text-center text-md-left mx-auto">
							<h2 class="name mb-2">Omar U. Florez</h2>
							<div class="meta">Ph. D. en Computer Science</div>
							<div class="meta">Investigador en Machine Learning</div>
							<div class="meta mb-2">Twitter</div>
							<ul class="social-list list-inline mb-0">
								<li class="list-inline-item"><a  href="#"><i class="fab fa-twitter fa-fw"></i></a></li>
								<li class="list-inline-item"><a  href="#"><i class="fab fa-linkedin-in fa-fw"></i></a></li>
								<li class="list-inline-item"><a  href="#"><i class="fab fa-github fa-fw"></i></a></li>
							</ul><!--//social-list-->
						</div><!--//media-body-->
					</div><!--//media-->

					<div class="desc p-4 p-lg-5">
						<p class="mb-0">
							Dr. Omar U. Flórez es un divulgador científico del aprendizaje de máquinas. Obtuvo su PhD en Computer Science
							en Utah State University y el pregrado en la Universidad Nacional de San Agustín de Arequipa. Actualmente es
							Investigador Científico en Machine Learning en Twitter. Su experiencia profesional también incluye Senior
							Research Manager en Capital One y Research Scientist en Intel Labs en el Silicon Valley. Ha sido recientemente
							reconocido como Role Model in AI por AI4ALL y ha recibido el premio Democracia Digital en Perú por el primer
							diccionario Inglés-Español de términos técnicos en Inteligencia Artificial. En el 2010, IBM Research le otorgó
							el Premio a la Innovación por su tesis de doctorado: “Real-Time Extraction of Rules to Explain Vehicle Interactions
							from Traffic Cameras”. Omar también forma parte de LatinX in AI, una organización que crea oportunidades en educación
							e investiga los efectos de la Inteligencia Artificial en la comunidad latinos en Estados Unidos. Omar ha publicado 20+
							papers y 8 patentes y sus intereses incluyen el uso de las Redes Neuronales Artificiales y la Matemática para decodificar
							el lenguaje humano.
						</p>
					</div>
				</div><!--//modal-body-->
			</div><!--//modal-content-->
		</div><!--//modal-dialog-->
	</div><!--//modal-->
	<!-- Modal Speaker -->
	<div class="modal modal-speaker modal-yamilet-serrano" id="modal-yamilet-serrano" tabindex="-1" role="dialog" aria-labelledby="speaker-2-ModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 id="speaker-2-ModalLabel" class="modal-title sr-only">Yamilet Rosario Serrano Llerena</h4>
				</div>
				<div class="modal-body p-0">
					<div class="media flex-column flex-md-row theme-bg-light p-4 p-lg-5">
						<img class="profile-image mb-3 mb-md-0 mr-md-4 rounded-circle mx-auto" src="/images/speakers/yamilet-serrano.jpg" alt="" />

						<div class="media-body text-center text-md-left mx-auto">
							<h2 class="name mb-2">Yamilet Rosario Serrano Llerena</h2>
							<div class="meta">Ph. D. en Computer Science</div>
							<div class="meta mb-2">National University of Singapore</div>
							<ul class="social-list list-inline mb-0">
								<li class="list-inline-item"><a  href="#"><i class="fab fa-twitter fa-fw"></i></a></li>
								<li class="list-inline-item"><a  href="#"><i class="fab fa-linkedin-in fa-fw"></i></a></li>
								<li class="list-inline-item"><a  href="#"><i class="fab fa-github fa-fw"></i></a></li>
							</ul><!--//social-list-->
						</div><!--//media-body-->
					</div><!--//media-->

					<div class="desc p-4 p-lg-5">
						<p class="mb-0">
							Actualmente, Dra. Yamilet R. Serrano Llerena es la coordinadora de Ciencia de Datos y docente en la carrera de
							Ciencia de la Computación de UTEC. Ella obtuvo su grado de doctor en el departamento de Ciencia de la Computación
							de la Universidad Nacional de Singapur (NUS). Su investigación se centra en las áreas de métodos formales e ingeniería
							de software. El objetivo de sus investigaciones es estudiar el efecto de la incertidumbre en la verificación probabilística
							de sistemas mediante el análisis de perturbaciones. Los resultados de sus investigaciones aparecen en destacadas conferencias
							de ciencia de computación tales como Foundations of Software Engineering (FSE). Durante sus estudios de doctorado, Yamilet ha
							participado como ponente en diversas plataformas tales como FSE2014, ESEC-FSE2017 y QMCW16 y  realizó una visita académica en
							Humboldt-Universitat zu Berlin expandiendo sus horizontes de investigación. En varias oportunidades, Yamilet ha participado en
							distintos proyectos de investigación de NUS tales como: “Especificación y Verificación para Futuros Programadores”, “Avances en
							Modelamiento y Análisis Probabilístico”, y “Modelamiento y Análisis de Sistemas Estocásticos con Parámetros Perturbados”.
						</p>
					</div>
				</div><!--//modal-body-->
			</div><!--//modal-content-->
		</div><!--//modal-dialog-->
	</div><!--//modal-->
	<!-- Modal Speaker -->
	<div class="modal modal-speaker modal-lizeth-tapia" id="modal-lizeth-tapia" tabindex="-1" role="dialog" aria-labelledby="speaker-2-ModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 id="speaker-2-ModalLabel" class="modal-title sr-only">S. Lizeth Tapia Tarifa</h4>
				</div>
				<div class="modal-body p-0">
					<div class="media flex-column flex-md-row theme-bg-light p-4 p-lg-5">
						<img class="profile-image mb-3 mb-md-0 mr-md-4 rounded-circle mx-auto" src="/images/speakers/lizeth-tapia.jpg" alt="" />

						<div class="media-body text-center text-md-left mx-auto">
							<h2 class="name mb-2">S. Lizeth Tapia Tarifa</h2>
							<div class="meta">Ph. D. en Computer Science</div>
							<div class="meta mb-2">Universidad de Oslo</div>
							<ul class="social-list list-inline mb-0">
								<li class="list-inline-item"><a  href="#"><i class="fab fa-twitter fa-fw"></i></a></li>
								<li class="list-inline-item"><a  href="#"><i class="fab fa-linkedin-in fa-fw"></i></a></li>
								<li class="list-inline-item"><a  href="#"><i class="fab fa-github fa-fw"></i></a></li>
							</ul><!--//social-list-->
						</div><!--//media-body-->
					</div><!--//media-->

					<div class="desc p-4 p-lg-5">
						<p class="mb-0">
							S. Lizeth Tapia Tarifa (Ph.D. 2014) es investigadora senior en el Departamento de Informática de la
							Universidad de Oslo. Lizeth tiene un proyecto propio llamado ADAPt, con una beca del programa Young
							Research Talent del Consejo de Investigación de Noruega, la única beca ganada en informática para
							esta convocatoria en 2017, es parte del consorcio del HORIZON 2020 REMARO y del proyecto en software
							y servicios de innovación Smart Journey Mining. Lizeth también lidera el programa de Análisis de Sistemas
							Complejos en el Centro de Innovación SIRIUS. Su área de investigación principal es Métodos Formales para
							sistemas paralelos y distribuidos.  Ella ha contribuido en varios proyectos de investigación financiados
							por la Union Europea, incluidos FP7 ENVISAGE, FP7 FET UpScale y FP7 FET HATS. Tuvo una estancia de investigación
							en el Imperial College de Londres en 2016 y una pasantía en la Universidad de las Naciones Unidas, Instituto
							Internacional de Tecnología de Software en Macao, China en 2007. Lizeth ha impartido cursos a nivel de maestría
							y actualmente supervisa estudiantes de maestría y doctorado. Lizeth tiene reconocimiento internacional en su area,
							por lo que ha servido como presidenta del comité de programa de la conferencia international iFM’19 y es miembro
							de comités de programas en conferencia internaciones tales como FASE2021, ICE2020, SEFM2020, iFM2020, DV-SOTA2020,
							DISE2020, FASE'19, ICE’19, F-IDE’19, FMAS’19, DISE’19, DEVOPS’18, DISE’18. Lizeth también es editora temporal y
							revisora de revistas internaciones tales como FAOC (Formal Aspects of Computing - Springer) y STTT (International
							Journal on Software Tools for Technology Transfer - Springer).
						</p>
					</div>
				</div><!--//modal-body-->
			</div><!--//modal-content-->
		</div><!--//modal-dialog-->
	</div><!--//modal-->
	<!-- Modal Speaker -->
	<div class="modal modal-speaker modal-ernesto-cuadros" id="modal-ernesto-cuadros" tabindex="-1" role="dialog" aria-labelledby="speaker-2-ModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 id="speaker-2-ModalLabel" class="modal-title sr-only">Ernesto Cuadros Vargas</h4>
				</div>
				<div class="modal-body p-0">
					<div class="media flex-column flex-md-row theme-bg-light p-4 p-lg-5">
						<img class="profile-image mb-3 mb-md-0 mr-md-4 rounded-circle mx-auto" src="/images/speakers/ernesto-cuadros.jpg" alt="" />

						<div class="media-body text-center text-md-left mx-auto">
							<h2 class="name mb-2">Ernesto Cuadros Vargas</h2>
							<div class="meta">Ph. D. en Computer Science</div>
							<div class="meta">Fundador de la Sociedad Peruana de Computación</div>
							<ul class="social-list list-inline mb-0">
								<li class="list-inline-item"><a  href="#"><i class="fab fa-twitter fa-fw"></i></a></li>
								<li class="list-inline-item"><a  href="#"><i class="fab fa-linkedin-in fa-fw"></i></a></li>
								<li class="list-inline-item"><a  href="#"><i class="fab fa-github fa-fw"></i></a></li>
							</ul><!--//social-list-->
						</div><!--//media-body-->
					</div><!--//media-->

					<div class="desc p-4 p-lg-5">
						<p class="mb-0">
							Ernesto Cuadros-Vargas recibió su Doctorado en Ciencia de la Computación en el ICMC de la Universidad de Sao Paulo
							(Brasil) en 2004 con proyectos y estudios en conjunto con Carnegie Mellon University (USA) en 2001 y la Technischen
							Universitat Berlin de Alemania en 2002. Fue fundador y miembro de la Sociedad Peruana de Computación y ha ocupado
							la presidencia en los periodos 2001 al 2007 y en 2009. El Prof. Cuadros-Vargas también ha sido Secretario Ejecutivo
							del Centro Latinoamericano de Informática (CLEI) (2009-2016). Miembro del Board of Governors of IEEE Computer Society
							(2020-2022. En este momento también es el único miembro latinoamericano en el Steering Committee de ACM/IEEE-CS Computing
							Curricula (CC2020). El Dr Cuadros también fue el único miembro latinoamericano en el Steering Committee de ACM/IEEE-CS
							Computing Curricula for Computer Science (CS2013). Ernesto Cuadros-Vargas ha sido Director de la carrera de Ciencia de
							la Computación en la Universidad de Ingeniería y Tecnología en Lima-Perú (2016-2020). El Profesor Cuadros ha sido invitado
							como expositor en diversos eventos internacionales en Brasil, Chile, Colombia, Estados Unidos, Canadá, Rusia, Japón, China,
							India, España, entre otros.
						</p>
					</div>
				</div><!--//modal-body-->
			</div><!--//modal-content-->
		</div><!--//modal-dialog-->
	</div><!--//modal-->
	<!-- Modal Speaker -->
	<div class="modal modal-speaker modal-juan-carlos-gutierrez" id="modal-juan-carlos-gutierrez" tabindex="-1" role="dialog" aria-labelledby="speaker-2-ModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 id="speaker-2-ModalLabel" class="modal-title sr-only">Juan Carlos Gutierrez Cáceres</h4>
				</div>
				<div class="modal-body p-0">
					<div class="media flex-column flex-md-row theme-bg-light p-4 p-lg-5">
						<img class="profile-image mb-3 mb-md-0 mr-md-4 rounded-circle mx-auto" src="/images/speakers/juan-carlos-gutierrez.jpg" alt="" />

						<div class="media-body text-center text-md-left mx-auto">
							<h2 class="name mb-2">Juan Carlos Gutierrez Cáceres</h2>
							<div class="meta">MSc. y Ph. D. en Computer Science</div>
							<ul class="social-list list-inline mb-0">
								<li class="list-inline-item"><a  href="#"><i class="fab fa-twitter fa-fw"></i></a></li>
								<li class="list-inline-item"><a  href="#"><i class="fab fa-linkedin-in fa-fw"></i></a></li>
								<li class="list-inline-item"><a  href="#"><i class="fab fa-github fa-fw"></i></a></li>
							</ul><!--//social-list-->
						</div><!--//media-body-->
					</div><!--//media-->

					<div class="desc p-4 p-lg-5">
						<p class="mb-0">
							Doctor en Ciencia de la Computación por la Cátedra CONCYTEC de la Universidad Nacional de San Agustín (Perú).
							Master en Ciencia de la Computación y Matemática Computacional, por el Instituto de Ciencias Matemáticas y de
							Computación (ICMC) de la Universidad de São Paulo (Brasil). Actualmente es calificado como Investigador CONCYTEC,
							y es profesor investigador por la Universidad Nacional de San Agustín de Arequipa, es miembro fundador de la Sociedad
							Peruana de Computación (SPC) Perú. Tiene las siguientes áreas de interés como: Deep Learning, Redes Complejas, Sistemas
							Dinámicos no Lineales, Reconocimiento de Patrones y Procesamiento de Imágenes.
						</p>
					</div>
				</div><!--//modal-body-->
			</div><!--//modal-content-->
		</div><!--//modal-dialog-->
	</div><!--//modal-->
	<!-- Modal Speaker -->
	<div class="modal modal-speaker modal-ana-maria-cuadros" id="modal-ana-maria-cuadros" tabindex="-1" role="dialog" aria-labelledby="speaker-2-ModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 id="speaker-2-ModalLabel" class="modal-title sr-only">Ana María Cuadros Valdivia</h4>
				</div>
				<div class="modal-body p-0">
					<div class="media flex-column flex-md-row theme-bg-light p-4 p-lg-5">
						<img class="profile-image mb-3 mb-md-0 mr-md-4 rounded-circle mx-auto" src="/images/speakers/ana-maria-cuadros.jpg" alt="" />

						<div class="media-body text-center text-md-left mx-auto">
							<h2 class="name mb-2">Ana María Cuadros Valdivia</h2>
							<div class="meta">Ph. D. en Computer Science</div>
							<div class="meta mb-2">Universidad Nacional de San Agustin</div>
							<ul class="social-list list-inline mb-0">
								<li class="list-inline-item"><a  href="#"><i class="fab fa-twitter fa-fw"></i></a></li>
								<li class="list-inline-item"><a  href="#"><i class="fab fa-linkedin-in fa-fw"></i></a></li>
								<li class="list-inline-item"><a  href="#"><i class="fab fa-github fa-fw"></i></a></li>
							</ul><!--//social-list-->
						</div><!--//media-body-->
					</div><!--//media-->

					<div class="desc p-4 p-lg-5">
						<p class="mb-0">
							Graduada en Ingeniería Informática por la Universidad Católica San Pablo,  maestría en Ciencias de
							la Computación y Matemática Computacional por el Instituto de Ciencias Matemáticas y de Computación
							y con estudios de doctorado en Ciencia de la Computación en la Universidad Nacional de San Agustín.
							Experiencia en el área de Computación Gráfica, con énfasis en Visualización de Información, actuando
							principalmente en los siguientes temas: representaciones visuales de grandes conjuntos de datos
							textuales y geo-espaciales, minería visual de datos, interacción humano computador y en exploración
							e interacción de grandes volúmes multi-dimensionales en ambientes 2D, 3D y RV.
						</p>
					</div>
				</div><!--//modal-body-->
			</div><!--//modal-content-->
		</div><!--//modal-dialog-->
	</div><!--//modal-->
	<!-- Modal Speaker -->
	<div class="modal modal-speaker modal-juan-vilca" id="modal-juan-vilca" tabindex="-1" role="dialog" aria-labelledby="speaker-2-ModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 id="speaker-2-ModalLabel" class="modal-title sr-only">Juan Marquinho Vilca Castro</h4>
				</div>
				<div class="modal-body p-0">
					<div class="media flex-column flex-md-row theme-bg-light p-4 p-lg-5">
						<img class="profile-image mb-3 mb-md-0 mr-md-4 rounded-circle mx-auto" src="/images/speakers/juan-vilca.jpg" alt="" />

						<div class="media-body text-center text-md-left mx-auto">
							<h2 class="name mb-2">Juan Marquinho Vilca Castro</h2>
							<div class="meta">Software Developer</div>
							<div class="meta mb-2">Amazon</div>
							<ul class="social-list list-inline mb-0">
								<li class="list-inline-item"><a  href="#"><i class="fab fa-twitter fa-fw"></i></a></li>
								<li class="list-inline-item"><a  href="#"><i class="fab fa-linkedin-in fa-fw"></i></a></li>
								<li class="list-inline-item"><a  href="#"><i class="fab fa-github fa-fw"></i></a></li>
							</ul><!--//social-list-->
						</div><!--//media-body-->
					</div><!--//media-->

					<div class="desc p-4 p-lg-5">
						<p class="mb-0">
							Soy egresado de la EPIS UNSA promoción 2002-2006, tengo 14 años de experiencia como Ingeniero de Software
							y actualmente me desempeño como Ingeniero de Software II en Amazon en el tech hub de Madrid.
						</p>
					</div>
				</div><!--//modal-body-->
			</div><!--//modal-content-->
		</div><!--//modal-dialog-->
	</div><!--//modal-->
	<!-- Modal Speaker -->
	<div class="modal modal-speaker modal-edward-hinojosa" id="modal-edward-hinojosa" tabindex="-1" role="dialog" aria-labelledby="speaker-2-ModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 id="speaker-2-ModalLabel" class="modal-title sr-only">Edward Hinojosa Cárdenas</h4>
				</div>
				<div class="modal-body p-0">
					<div class="media flex-column flex-md-row theme-bg-light p-4 p-lg-5">
						<img class="profile-image mb-3 mb-md-0 mr-md-4 rounded-circle mx-auto" src="/images/speakers/edward-hinojosa.jpg" alt="" />

						<div class="media-body text-center text-md-left mx-auto">
							<h2 class="name mb-2">Edward Hinojosa Cárdenas</h2>
							<div class="meta">MSc. y Ph. D. en Computer Science</div>
							<ul class="social-list list-inline mb-0">
								<li class="list-inline-item"><a  href="#"><i class="fab fa-twitter fa-fw"></i></a></li>
								<li class="list-inline-item"><a  href="#"><i class="fab fa-linkedin-in fa-fw"></i></a></li>
								<li class="list-inline-item"><a  href="#"><i class="fab fa-github fa-fw"></i></a></li>
							</ul><!--//social-list-->
						</div><!--//media-body-->
					</div><!--//media-->

					<div class="desc p-4 p-lg-5">
						<p class="mb-0">
							Ingeniero de Sistemas en la Universidad Católica de Santa María - Arequipa. Magister en Ciencias de
							la Computación en la Universidad Federal de San Carlos – Brasil y becado por el CAPES ( Coordenação
							de Aperfeiçoamento de PEssoal de nivel Superior). Doctor en Ciencias de la Computación en la Universidad
							Nacional de San Agustín y becado por el CONCYTEC (Consejo Nacional de Ciencia, Tecnología e Innovación Tecnológica).
							Interés en Inteligencia Computacional, específicamente en algoritmos evolutivos y generación de sistemas difusos.
						</p>
					</div>
				</div><!--//modal-body-->
			</div><!--//modal-content-->
		</div><!--//modal-dialog-->
	</div><!--//modal-->
	<!-- Modal Speaker -->
	<div class="modal modal-speaker modal-daniel-aliaga" id="modal-daniel-aliaga" tabindex="-1" role="dialog" aria-labelledby="speaker-2-ModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 id="speaker-2-ModalLabel" class="modal-title sr-only">Daniel Aliaga</h4>
				</div>
				<div class="modal-body p-0">
					<div class="media flex-column flex-md-row theme-bg-light p-4 p-lg-5">
						<img class="profile-image mb-3 mb-md-0 mr-md-4 rounded-circle mx-auto" src="/images/speakers/daniel-aliaga.jpg" alt="" />

						<div class="media-body text-center text-md-left mx-auto">
							<h2 class="name mb-2">Daniel Aliaga</h2>
							<div class="meta">MSc. y Ph. D. en Computer Science</div>
							<div class="meta mb-2">Associate Professor, Purdue University</div>
							<ul class="social-list list-inline mb-0">
								<li class="list-inline-item"><a  href="#"><i class="fab fa-twitter fa-fw"></i></a></li>
								<li class="list-inline-item"><a  href="#"><i class="fab fa-linkedin-in fa-fw"></i></a></li>
								<li class="list-inline-item"><a  href="#"><i class="fab fa-github fa-fw"></i></a></li>
							</ul><!--//social-list-->
						</div><!--//media-body-->
					</div><!--//media-->

					<div class="desc p-4 p-lg-5">
						<p class="mb-0">
							Dr. Aliaga’s research is primarily in the area of 3D computer graphics but overlaps with computer vision and
							visualization while also having strong multi-disciplinary collaborations outside of computer science.
							His research activities are divided into three groups: a) his pioneering work in the multi-disciplinary area
							of inverse modeling and design; b) his first-of-its-kind work in codifying information into images and surfaces,
							and c) his compelling work in a visual computing framework including high-quality 3D acquisition methods.
						</p>
					</div>
				</div><!--//modal-body-->
			</div><!--//modal-content-->
		</div><!--//modal-dialog-->
	</div><!--//modal-->
	<!-- Modal Speaker -->
	<div class="modal modal-speaker modal-cesar-beltran" id="modal-cesar-beltran" tabindex="-1" role="dialog" aria-labelledby="speaker-2-ModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 id="speaker-2-ModalLabel" class="modal-title sr-only">César Armando Beltrán Castañón</h4>
				</div>
				<div class="modal-body p-0">
					<div class="media flex-column flex-md-row theme-bg-light p-4 p-lg-5">
						<img class="profile-image mb-3 mb-md-0 mr-md-4 rounded-circle mx-auto" src="/images/speakers/cesar-beltran.jpg" alt="" />

						<div class="media-body text-center text-md-left mx-auto">
							<h2 class="name mb-2">César Armando Beltrán Castañón</h2>
							<div class="meta">MSc. y Ph. D. en Computer Science</div>
							<div class="meta mb-2">Universidad de São Paulo</div>
							<ul class="social-list list-inline mb-0">
								<li class="list-inline-item"><a  href="#"><i class="fab fa-twitter fa-fw"></i></a></li>
								<li class="list-inline-item"><a  href="#"><i class="fab fa-linkedin-in fa-fw"></i></a></li>
								<li class="list-inline-item"><a  href="#"><i class="fab fa-github fa-fw"></i></a></li>
							</ul><!--//social-list-->
						</div><!--//media-body-->
					</div><!--//media-->

					<div class="desc p-4 p-lg-5">
						<p class="mb-0">
							Profesor Principal de la Pontificia Universidad Católica del Perú, área Ciencia de la Computación,
							Dpto. de Ingeniería.  Doctor en Bioinformática y Magister en Ciencia de la Computación por la Universidad
							de São Paulo, Brasil con estancia Post-Doctoral en Texas A&M University. Es Presidente de la IEEE Computer
							Society Perú (2019-2020).  Líder científico del Grupo de Inteligencia Artificial de la PUCP (IA-PUCP).
							Sus líneas de investigación son: Machine Learning, Data Analytics, Deep Learning, Visión computacional,
							procesamiento de imágenes, algoritmos de recuperación de imágenes por contenido, Bioinformática, computación
							de alto desempeño.
						</p>
					</div>
				</div><!--//modal-body-->
			</div><!--//modal-content-->
		</div><!--//modal-dialog-->
	</div><!--//modal-->
	<!-- Modal Speaker -->
	<div class="modal modal-speaker modal-franci-suni" id="modal-franci-suni" tabindex="-1" role="dialog" aria-labelledby="speaker-2-ModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 id="speaker-2-ModalLabel" class="modal-title sr-only">Franci Suni López</h4>
				</div>
				<div class="modal-body p-0">
					<div class="media flex-column flex-md-row theme-bg-light p-4 p-lg-5">
						<img class="profile-image mb-3 mb-md-0 mr-md-4 rounded-circle mx-auto" src="/images/speakers/franci-suni.jpg" alt="" />

						<div class="media-body text-center text-md-left mx-auto">
							<h2 class="name mb-2">Franci Suni López</h2>
							<div class="meta">MSc. y Ph. D. en Computer Science</div>
							<div class="meta mb-2">Vrije Universiteit Amsterdam, Holanda</div>
							<ul class="social-list list-inline mb-0">
								<li class="list-inline-item"><a  href="#"><i class="fab fa-twitter fa-fw"></i></a></li>
								<li class="list-inline-item"><a  href="#"><i class="fab fa-linkedin-in fa-fw"></i></a></li>
								<li class="list-inline-item"><a  href="#"><i class="fab fa-github fa-fw"></i></a></li>
							</ul><!--//social-list-->
						</div><!--//media-body-->
					</div><!--//media-->

					<div class="desc p-4 p-lg-5">
						<p class="mb-0">
							Franci es estudiante de doctorado en Ciencia de la Computación en la UDC/UNSA (desde 2019) e investigador
							en el proyecto KUSISQA (CS-UNSA/CONCYTEC). Realizó un Master Join Degree en Ciencia de la Computación en
							Vrije Universiteit Amsterdam, Holanda y Universidad Católica San Pablo. Egresado y Bachiller de la escuela
							de Ciencia de la Computación de la Universidad Nacional de San Agustín, Arequipa - Perú (2014). Su investigación
							principal se centra en computación afectiva, el uso de las emociones humanas para potenciar la capacidad de
							autoadaptación de los servicios de software. Además, la ingeniería de software para el desarrollo móvil y el software autoadaptable.
						</p>
					</div>
				</div><!--//modal-body-->
			</div><!--//modal-content-->
		</div><!--//modal-dialog-->
	</div><!--//modal-->
	<!-- Modal Speaker -->
	<div class="modal modal-speaker modal-nelly-condori" id="modal-nelly-condori" tabindex="-1" role="dialog" aria-labelledby="speaker-2-ModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 id="speaker-2-ModalLabel" class="modal-title sr-only">Nelly Condori Fernandez</h4>
				</div>
				<div class="modal-body p-0">
					<div class="media flex-column flex-md-row theme-bg-light p-4 p-lg-5">
						<img class="profile-image mb-3 mb-md-0 mr-md-4 rounded-circle mx-auto" src="/images/speakers/nelly-condori.jpg" alt="" />

						<div class="media-body text-center text-md-left mx-auto">
							<h2 class="name mb-2">Nelly Condori Fernandez</h2>
							<div class="meta">Ph. D. en Computer Science</div>
							<div class="meta mb-2">Universidad Politécnica de Valencia, España</div>
							<ul class="social-list list-inline mb-0">
								<li class="list-inline-item"><a  href="#"><i class="fab fa-twitter fa-fw"></i></a></li>
								<li class="list-inline-item"><a  href="#"><i class="fab fa-linkedin-in fa-fw"></i></a></li>
								<li class="list-inline-item"><a  href="#"><i class="fab fa-github fa-fw"></i></a></li>
							</ul><!--//social-list-->
						</div><!--//media-body-->
					</div><!--//media-->

					<div class="desc p-4 p-lg-5">
						<p class="mb-0">
							Dr. Nelly Condori Fernández is an assistant professor from University of Coruña (Galicia)
							and research associate from Vrije Universiteit Amsterdam (Netherlands).  She obtained her
							PhD degree at the Universidad Politécnica de Valencia, Spain. And she was a Post-doctoral
							Marie Curie researcher at the University of Twente. Her main research focuses on developing
							systematic approaches for developing sustainable software. Moreover, she has a particular
							interest in applying HCI techniques to software engineering activities. Nelly has been
							involved in several European projects. She has also served as a representative member of
							the COSMIC organization in Spain. Nelly serves as a PC member of international conferences
							from the Software Engineering community and organizer of the 1st International workshop on
							Measurement and Metrics for Green and Sustainable Software. Currently, she is the principal
							investigator of the KUSISQA project funded by FONDECYT and the World Bank.
						</p>
					</div>
				</div><!--//modal-body-->
			</div><!--//modal-content-->
		</div><!--//modal-dialog-->
	</div><!--//modal-->
	<!-- Modal Speaker -->
	<div class="modal modal-speaker modal-edgar-sarmiento" id="modal-edgar-sarmiento" tabindex="-1" role="dialog" aria-labelledby="speaker-2-ModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 id="speaker-2-ModalLabel" class="modal-title sr-only">Edgar Sarmiento Calisaya</h4>
				</div>
				<div class="modal-body p-0">
					<div class="media flex-column flex-md-row theme-bg-light p-4 p-lg-5">
						<img class="profile-image mb-3 mb-md-0 mr-md-4 rounded-circle mx-auto" src="/images/speakers/edgar-sarmiento.jpg" alt="" />

						<div class="media-body text-center text-md-left mx-auto">
							<h2 class="name mb-2">Edgar Sarmiento Calisaya</h2>
							<div class="meta">Ph. D. en Computer Science</div>
							<div class="meta mb-2">PUC-Rio, Brasil</div>
							<ul class="social-list list-inline mb-0">
								<li class="list-inline-item"><a  href="#"><i class="fab fa-twitter fa-fw"></i></a></li>
								<li class="list-inline-item"><a  href="#"><i class="fab fa-linkedin-in fa-fw"></i></a></li>
								<li class="list-inline-item"><a  href="#"><i class="fab fa-github fa-fw"></i></a></li>
							</ul><!--//social-list-->
						</div><!--//media-body-->
					</div><!--//media-->

					<div class="desc p-4 p-lg-5">
						<p class="mb-0">
							Graduación en Ingeniería de Sistemas (2003, Universidad Nacional de San Agustín - UNSA, Arequipa, Perú);
							Maestría en Informática (2009, Universidade Federal do Rio de Janeiro - UFRJ, Brasil); Doctorado en Informática
							(2016, Pontifícia Universidade Católica do Rio de Janeiro,PUC-Rio, Brasil). Experiencia profesional como desarrollador,
							arquitecto y consultor de software. Experiencia académica como investigador en el área de Ingeniería de Software con
							énfasis en las siguientes líneas de investigación: Ingeniería de Requisitos, Calidad de Software, Arquitectura de Software,
							DevOps y Sistemas Conscientes de Contexto - CA-S.
						</p>
					</div>
				</div><!--//modal-body-->
			</div><!--//modal-content-->
		</div><!--//modal-dialog-->
	</div><!--//modal-->
	<!-- Modal Speaker -->
	<div class="modal modal-speaker modal-adrian-bedregal" id="modal-adrian-bedregal" tabindex="-1" role="dialog" aria-labelledby="speaker-2-ModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 id="speaker-2-ModalLabel" class="modal-title sr-only">Adrian Rolando Bedregal Vento</h4>
				</div>
				<div class="modal-body p-0">
					<div class="media flex-column flex-md-row theme-bg-light p-4 p-lg-5">
						<img class="profile-image mb-3 mb-md-0 mr-md-4 rounded-circle mx-auto" src="/images/speakers/adrian-bedregal.jpg" alt="" />

						<div class="media-body text-center text-md-left mx-auto">
							<h2 class="name mb-2">Adrian Rolando Bedregal Vento</h2>
							<div class="meta">Estudiante de Computer Science</div>
							<div class="meta mb-2">Universidad Nacional de San Agustin de Arequipa, Perú</div>
							<ul class="social-list list-inline mb-0">
								<li class="list-inline-item"><a  href="#"><i class="fab fa-twitter fa-fw"></i></a></li>
								<li class="list-inline-item"><a  href="#"><i class="fab fa-linkedin-in fa-fw"></i></a></li>
								<li class="list-inline-item"><a  href="#"><i class="fab fa-github fa-fw"></i></a></li>
							</ul><!--//social-list-->
						</div><!--//media-body-->
					</div><!--//media-->

					<div class="desc p-4 p-lg-5">
						<p class="mb-0">
							Estudiante de Ciencia de la Computación de la Universidad Nacional de San Agustín (Arequipa, Perú).
							Se encuentra Interesado en el área de Redes Neuronales de Aprendizaje Reforzado, la cual forma parte
							del campo del Machine Learning (Inteligencia Artificial), Sistemas Operativos y IoT. También tiene como
							parte de sus enfoques Procesamiento de Imágenes y Realidad Virtual.
						</p>
					</div>
				</div><!--//modal-body-->
			</div><!--//modal-content-->
		</div><!--//modal-dialog-->
	</div><!--//modal-->
	<div class="modal modal-speaker modal-hayde-humpire" id="modal-hayde-humpire" tabindex="-1" role="dialog" aria-labelledby="speaker-2-ModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 id="speaker-2-ModalLabel" class="modal-title sr-only">Hayde Luzmila Hupmire Cutipa</h4>
				</div>
				<div class="modal-body p-0">
					<div class="media flex-column flex-md-row theme-bg-light p-4 p-lg-5">
						<img class="profile-image mb-3 mb-md-0 mr-md-4 rounded-circle mx-auto" src="/images/speakers/hayde-humpire.jpg" alt="" />

						<div class="media-body text-center text-md-left mx-auto">
							<h2 class="name mb-2">Hayde Luzmila Hupmire Cutipa</h2>
							<div class="meta">Estudiante de Computer Science</div>
							<div class="meta mb-2">Universidad Nacional de San Agustin de Arequipa, Perú</div>
							<ul class="social-list list-inline mb-0">
								<li class="list-inline-item"><a  href="#"><i class="fab fa-twitter fa-fw"></i></a></li>
								<li class="list-inline-item"><a  href="#"><i class="fab fa-linkedin-in fa-fw"></i></a></li>
								<li class="list-inline-item"><a  href="#"><i class="fab fa-github fa-fw"></i></a></li>
							</ul><!--//social-list-->
						</div><!--//media-body-->
					</div><!--//media-->

					<div class="desc p-4 p-lg-5">
						<p class="mb-0">
							Estudiante de Ciencia de la Computación de la Universidad Nacional de San Agustín Arequipa Perú.
							Áreas de interés: Artificial Intelligence (Convolutional Neural Network), Human Computer Interaction,
							Design UX & UI, Digital Graphic Design y Educational Technologies.
						</p>
					</div>
				</div><!--//modal-body-->
			</div><!--//modal-content-->
		</div><!--//modal-dialog-->
	</div><!--//modal-->
	<div class="modal modal-speaker modal-ademir-villena" id="modal-ademir-villena" tabindex="-1" role="dialog" aria-labelledby="speaker-2-ModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 id="speaker-2-ModalLabel" class="modal-title sr-only">Ademir Clemente Villena Zevallos</h4>
				</div>
				<div class="modal-body p-0">
					<div class="media flex-column flex-md-row theme-bg-light p-4 p-lg-5">
						<img class="profile-image mb-3 mb-md-0 mr-md-4 rounded-circle mx-auto" src="/images/speakers/ademir-villena.jpg" alt="" />

						<div class="media-body text-center text-md-left mx-auto">
							<h2 class="name mb-2">Ademir Clemente Villena Zevallos</h2>
							<div class="meta">Estudiante de Computer Science</div>
							<div class="meta mb-2">Universidad Nacional de San Agustin de Arequipa, Perú</div>
							<ul class="social-list list-inline mb-0">
								<li class="list-inline-item"><a  href="#"><i class="fab fa-twitter fa-fw"></i></a></li>
								<li class="list-inline-item"><a  href="#"><i class="fab fa-linkedin-in fa-fw"></i></a></li>
								<li class="list-inline-item"><a  href="#"><i class="fab fa-github fa-fw"></i></a></li>
							</ul><!--//social-list-->
						</div><!--//media-body-->
					</div><!--//media-->

					<div class="desc p-4 p-lg-5">
						<p class="mb-0">
							Estudiante de Ciencia de la Computación de la Universidad Nacional de San Agustín (Arequipa, Perú).
							Se encuentra Interesado en las áreas de Evolutive Algorithms, Neural Architecture Search, Swarm Robotics
							y Mobile Development. Cuenta con experiencia profesional en el desarrollo de aplicaciones móviles y proyectos open source.
						</p>
					</div>
				</div><!--//modal-body-->
			</div><!--//modal-content-->
		</div><!--//modal-dialog-->
	</div><!--//modal-->

	<!-- Javascript -->
	<script src="/plugins/jquery-3.4.1.min.js"></script>
	<script src="/plugins/popper.min.js"></script>
	<script src="/plugins/bootstrap/js/bootstrap.min.js"></script>
	<script src="/plugins/back-to-top.js"></script>
	<script src="/plugins/jquery.scrollTo.min.js"></script>
	<script src="/js/devConf/main.js"></script>

@endsection
