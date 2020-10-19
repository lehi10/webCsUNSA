<!DOCTYPE html>
<html lang="en">
<head>
  <title>@yield('title')</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="icon" href="/images/cslogos/logomini.png" type="image/gif" sizes="16x16">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
  <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans" />
  <link rel="stylesheet" href="/css/mystyle.css">
  <link rel="stylesheet" href="/css/mmodal.css">
  <link rel="stylesheet" href="/css/GoogleCalendar.css">
  <script src="/js/onLoad.js"></script>

  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-126304326-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-126304326-1');
  </script>

  @yield('fonts')

  @yield('style')

  @yield('scripts')

</head>
  <body>
    <nav class="navbar navbar-default navbar-fixed-top navbar-dark bg-primary monsteratted">
      <div class="container-fluid text-center">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/">
            <span><img src="images/cslogos/logomini.png" alt=""></span>
            <b>Computer Science - UNSA</b>
          </a>
          <span class="navbar-text navbar-collapse">[En Construcción]</span>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav navbar-right">

            <li class="@yield('home')">       <a href="/">Inicio</a></li>
            <li class="@yield('blog')">       <a href="/blog">Blog</a></li>

            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#">Recursos
              <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="/resources">Recursos</a></li>
                <li><a href="/resources/schedule">Horarios</a></li>
                <li><a href="/resources/library">Biblioteca</a></li>
                <li><a href="/resources/material">Material</a></li>
              </ul>
            </li>
            <li class="@yield('events')">     <a href="/events">Eventos</a></li>
            <!--
            <li class="@yield('resources')">  <a href="/resources">Recursos</a></li>
            -->
          </ul>
        </div>
      </div>
    </nav>

<script type="text/javascript">
    function topFunction() {
        document.body.scrollTop = 0; // For Safari
        document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
    }
</script>
<div id="top">
    <img onclick="topFunction()" src="/images/icons/swipe-up.png">
</div>
<script type="text/javascript">
    var scroll = document.getElementById("top");
    window.addEventListener("scroll", function() {
        scroll.style.transform = "rotate(" + window.pageYOffset + "deg)";
    });
</script>

<div class="body">
    @yield('body')
</div>

    <footer class="container-fluid-inverse text-center m-footer">
      @yield('footer')
      <p>School of Computer Science - UNSA 2020</p>
    </footer>

  </body>
</html>
