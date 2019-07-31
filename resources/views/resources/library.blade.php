@extends('templates.theme')

@section('title','School Of Computer Science UNSA')


@section('resources','active')

@section('body')



<div class="container bg-3">
  <div class="row">
    <div class="col-sm-8">
        <h2>Lista de Libros </h2>
        <hr>
        <iframe src="https://docs.google.com/spreadsheets/d/e/2PACX-1vTdA6cAO0W3gILljO3rvFUlwduEn1Lf31zVg--cpE1aG2HXHPVp9y9x09bX18u2S0L6bh403_2kqiHt/pubhtml?gid=0&amp;single=true&amp;widget=true&amp;headers=false" width="100%" height="500"></iframe>
        <hr>
        <h4>Nota : </h4>
        <li>Además de estos materiales, tambien la universidad ha dado acceso a : <a href="Web of Science
https://www.webofknowledge.com/"> Web Of Science </a> . Para acceder a este servicio, es necesario crear una cuenta usando el correo institucional en una conexión de internet dentro de la universidad.</li>
        
        <p>
        </p>

    </div>
    <div class="col-sm-4">
        <h2>Calendario</h2>
        <p>Proximos eventos y actividades , ver el Calendario completo haciendo <a href="/events">Click Aquí</a>:</p>
        
        <iframe src="https://calendar.google.com/calendar/embed?height=400&amp;wkst=1&amp;bgcolor=%23A79B8E&amp;ctz=America%2FLima&amp;src=Nm5pa3J2NGltdm11MzYwZXU3aGF0aW1wYzBAZ3JvdXAuY2FsZW5kYXIuZ29vZ2xlLmNvbQ&amp;src=ZXMucGUjaG9saWRheUBncm91cC52LmNhbGVuZGFyLmdvb2dsZS5jb20&amp;color=%23795548&amp;color=%230B8043&amp;mode=AGENDA&amp;showTitle=0&amp;showNav=0&amp;showPrint=0&amp;showTabs=0&amp;showDate=1&amp;showCalendars=0&amp;showTz=0" style="border-width:0" width="100%" height="400" frameborder="0" scrolling="no"></iframe>
        
        

            
    </div>

  </div>

</div>



@endsection



