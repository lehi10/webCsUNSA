@extends('templates.theme')

@section('title','School Of Computer Science UNSA')


@section('home','active')

@section('body')

    <div class="hero-image">
        <div class="hero-text">
            <img class="logoImg" src="images/cslogos/logoDarkBackground.png" >
            <h3>Universidad Nacional de San Agustín</h3>
        </div>
    </div>


    <div class="container-fluid bg-3 text-center">   
        <div class="row darkBackground " >
            <div class="col-sm-4">
                <h3 class="textWhite " >El hombre sigue siendo la computadora más extraordinaria de todas.</h3>
            </div>
            <div class="col-sm-8"> 
                <div class="col-sm-4"> 
                    <img width="25%" src="/images/icons/calendar.png">
                    <h4 class="textWhite" >Eventos</h4>
                    <p class="textWhite">Encuentra los eventos programados para el presente semestre.</p>
                </div>
            <div class="col-sm-4"> 
                <img width="25%" src="/images/icons/chat2.png">
                <h4  class="textWhite">Blog</h4>
                <p  class="textWhite" > Encuentra información y contenido que te puede interesar.</p>
            </div>
            <div class="col-sm-4"> 
                <img width="25%" src="/images/icons/book.png">
                <h4 class="textWhite">Recursos</h4>
                <p  class="textWhite" > Encuentra material y herramientas para mejorar tu aprendizaje. </p>
            </div>
            </div>
            
        </div>
    </div><br>

<div class="container bg-3">    
  <div class="row">
    <div class="col-sm-8">
        <h3>Anuncios</h3>
        <hr>

        <h3>Publicaciones Recientes</h3>
        <hr>
    
        @for ($iPost = 0 ; $iPost < count($posts) ; $iPost+=2)
            <div class="col-lg-12">
                <div class="bannerPost col-sm-6">
                    <a href="/blog/{{$posts[$iPost]->urlpost}}">
                        <img src="{{$posts[$iPost]->urlimg}}" class="img-responsive" style="width:100%" alt="Image">
                        <div class="iconsPost">
                            <span class="glyphicon glyphicon-calendar"></span> {{ date_format($posts[$iPost]->created_at , 'Y-M-d') }}
                        </div>
                        <h4><strong>{{$posts[$iPost]->title}}</strong></h4>
                        <hr>
                    </a>
                </div>

                @if (  $iPost+1 < count($posts))
                    <div class="bannerPost col-sm-6">                        
                        <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
                        <div class="iconsPost">
                            <span class="glyphicon glyphicon-calendar"></span> 15 Oct 2018
                        </div>
                        <h4><strong>{{$posts[$iPost+1]->title}}</strong></h4>
                        <hr>
                    </div>    
                @endif
                
            </div>
        @endfor

        
    


      
    </div>
    <div class="col-sm-4"> 
    <h2>Calendario</h2>
    <p>Proximos eventos y actividades</p>
    <hr>
        <div class="row-fluid">
        <h4><strong>Apertura Semana de la Computación</strong></h4>
            <span class="glyphicon glyphicon-calendar"></span> 15-Octubre-2018
        <hr>
        </div>

        <div class="row-fluid">
        <h4><strong>Concurso de Programación Competitiva</strong></h4>
            <span class="glyphicon glyphicon-calendar"></span> 17-Octubre-2018
        <hr>
        </div>

        <div class="row-fluid">Torne
            <h4><strong>Torneo de Dota 2</strong></h4>
            <span class="glyphicon glyphicon-calendar"></span> 18-Octubre-2018
            <hr>
        </div>
    </div>
    
  </div>
</div>


@endsection


