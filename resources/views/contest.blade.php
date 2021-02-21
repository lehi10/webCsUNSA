@extends('templates.theme')

@section('title','Semana de la Computación')

@section('scripts')

<script>
// Set the date we're counting down to
var countDownDate = new Date("Oct 7, 2020 10:00:00").getTime();

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
          <h2 class="textWhite">Concurso de programación competitiva CSUNSA 2021</h2>
          <strong><h2 class="textWhite" id="countdown"></h2></strong>
        </center>
  </div>
</section>



<div class="container">
  <div class="row">
    <div class="col-sm-9">
        <div>
        <br><br>
        <h3>Enlaces permitidos</h3>
        

        <table class="table">
            <thead>
            <tr>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Enlace</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>C Plus Plus Reference</td>
                <td>C++</td>
                <td><a target="_blank" href="http://www.cplusplus.com/reference/">http://www.cplusplus.com/reference/</a></td>
            </tr>
            </tbody>
        </table>        
          
        </div>

        
     
    
      
    </div>
    <div class="col-sm-3">
    <h3>Página en Facebook</h3>
    <hr>
      <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fcsunsa%2F&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=1008206179314313" width="340" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
    </div>
  </div>
</div>


@endsection
