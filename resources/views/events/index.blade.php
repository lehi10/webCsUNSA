@extends('templates.theme')

@section('title','Semana de la Computación')

@section('scripts')

<script>
// Set the date we're counting down to
var countDownDate = new Date("Aug 19, 2019 07:00:00").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();

  // Find the distance between now and the count down date
  var distance = countDownDate - now;

  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Display the result in the element with id="demo"
  document.getElementById("countdown").innerHTML = days + "d " + hours + "h "
  + minutes + "m " + seconds + "s ";

  // If the count down is finished, write some text 
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("countdown").innerHTML = "EXPIRED";
  }
}, 1000);
</script>
@endsection

@section('body')

<section  style="background-image: url(/images/banners/science.jpg);">
  <div style="padding:10px;" class="row ">
        <center>
          <img src="/images/cslogos/logoDarkBackground.png" class="logoImg">
          
          <h2 class="textWhite">Inicio De Clases Semestre B - 2019</h2>
          <strong><h2 class="textWhite" id="countdown"></h2></strong>
        </center>
  </div>
</section>


<div class="container" style="padding:30px;">
  <h2>Calendario </h2>
  <hr>
  <iframe src="https://calendar.google.com/calendar/embed?height=600&amp;wkst=1&amp;bgcolor=%23ffffff&amp;ctz=America%2FLima&amp;src=Nm5pa3J2NGltdm11MzYwZXU3aGF0aW1wYzBAZ3JvdXAuY2FsZW5kYXIuZ29vZ2xlLmNvbQ&amp;src=ZXMucGUjaG9saWRheUBncm91cC52LmNhbGVuZGFyLmdvb2dsZS5jb20&amp;color=%233F51B5&amp;color=%230B8043&amp;showTitle=0&amp;showNav=1&amp;showDate=1&amp;showPrint=0&amp;showTabs=0&amp;showTz=0&amp;showCalendars=0&amp;hl=en" style="border-width:0" width="100%" height="600" frameborder="0" scrolling="no"></iframe>


  <hr>
    <h3>Proximos Eventos</h3>
    <h4>Fechas por definir</h4>
    
    <li>Paseo de Escuela 2019</li>
    <li>Semana de la Computación 2019</li>
    <li>Concurso de programación competitiva ACM <i>(Lugar por confirmarse)</i></li>
    <li>Evento Cultural por fin de año <i>(Por confirmarse)</i></li>

    


</div>
@endsection
