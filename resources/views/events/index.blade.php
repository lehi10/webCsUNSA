@extends('templates.theme')

@section('title','Semana de la Computación')

@section('scripts')

<script>
// Set the date we're counting down to
var countDownDate = new Date("Oct 7, 2019 10:00:00").getTime();

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

          <h2 class="textWhite">Inicio De La Jornada de Ciencia de la Computación</h2>
          <strong><h2 class="textWhite" id="countdown"></h2></strong>
        </center>
  </div>
</section>



<div class="container bg-3">
  <div class="row">
    <div class="col-sm-9">
        <div>
        <h3>Descarga tu Tarjeta de Asistencia</h3>
        <h4>Solo para estudiantes de pregrado de Ciencia de la Computación UNSA</h4>
        <p>Ingresa tu CUI y descarga una tarjeta que tiene un código QR que te servirá para registrar la hora de ingreso a las charlas. No olvides imprimirla o descargarla en tu celular y llevarla cada día que dure en evento.</p>
        <br>
          <form action="events/downloadQr">
          <div class="form-group">
            <label class="control-label col-sm-2" for="CUI">Ingresa tu CUI:</label>
            <div class="col-sm-10">
              <input name="cui" type="text" class="form-control" id="CUI" placeholder="EXPIRED" disabled>
              <br>
              <button type="submit" class="btn btn-default" disabled>Submit</button>
            </div>
          </div>
          </form>
        </div>

        <h3>Publicaciones</h3>
        <hr>

      @foreach($posts as $post)
        <div class="col-sm-12">
          <div class="row" >


            <div class="col-sm-8">
              <div class="well"  >
                <h4 style="cursor: pointer;" onclick="window.location='{{route('post',$post->slug)}}';"  >{{$post->name}}</h4>
                <span class="glyphicon glyphicon-calendar"></span>
                {{  date("d-M-Y", strtotime($post->created_at)) }}
                <br>
                <strong>Categoría : </strong>
                <a href="{{ route('category',$post->category->slug) }}"><i>{{$post->category->name}}</i></a>
                <hr>
                <p>{{$post->excerpt}}</p>

              </div>
            </div>
            <div class="col-sm-4 " >
              <div class="well ">

                <img  src="{{$post->file}}" width="100%">
              </div>
            </div>
          </div>
        </div>
      @endforeach
      {{ $posts->render() }}


    </div>
    <div class="col-sm-3 ">
    <h3>Página en Facebook</h3>
    <hr>
      <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fcsunsa%2F&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=1008206179314313" width="340" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
    </div>
  </div>
</div>


@endsection
