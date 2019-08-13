@extends('templates.theme')

@section('title','School Of Computer Science UNSA')

@section('scripts')

@endsection

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
        
        <h3>Publicaciones Recientes</h3>
        <hr>


        @for ($iPost = 0 ; $iPost < count($posts) ; $iPost+=2)
            <div class="col-lg-12">
                <div class="bannerPost col-sm-6">
                        <a href="/blog/post/{{$posts[$iPost]->slug}}">
                            <img src="{{$posts[$iPost]->file}}" class="img-responsive" style="width:100%" alt="Image">
                            <h4><strong>{{$posts[$iPost]->name}}</strong></h4>
                        </a>

                        <div class="iconsPost">
                            <span class="glyphicon glyphicon-calendar"></span> {{ date_format($posts[$iPost]->created_at , 'Y-M-d') }}
                            <br>
                            <span class="glyphicon glyphicon-th-list"></span> {{ $posts[$iPost]->category->name  }}
                        </div>
                        <p>{{$posts[$iPost]->excerpt}}</p>
                        <hr>
                    
                </div>

                @if (  $iPost+1 < count($posts))
                    <div class="bannerPost col-sm-6">
                        <a href="/blog/post/{{$posts[$iPost+1]->slug}}">
                            <img src="{{$posts[$iPost+1]->file}}" class="img-responsive" style="width:100%" alt="Image">
                            <h4><strong>{{$posts[$iPost+1]->name}}</strong></h4>
                        </a>
                        <div class="iconsPost">
                            <span class="glyphicon glyphicon-calendar"></span> {{ date_format($posts[$iPost+1]->created_at , 'Y-M-d') }}
                            <br>
                            <span class="glyphicon glyphicon-th-list"></span> {{ $posts[$iPost+1]->category->name  }}
                        </div>
                        
                        <p>{{$posts[$iPost]->excerpt}}</p>
                        <hr>
                    
                    </div>
                @endif
            
            </div>
        @endfor
        
        {{$posts->render()}}

    </div>
    <div class="col-sm-4">
        <h2>Calendario</h2>
        <p>Proximos eventos y actividades , ver el Calendario completo haciendo <a href="/events">Click Aquí</a>:</p>
        <iframe src="https://calendar.google.com/calendar/embed?height=400&amp;wkst=1&amp;bgcolor=%23A79B8E&amp;ctz=America%2FLima&amp;src=Nm5pa3J2NGltdm11MzYwZXU3aGF0aW1wYzBAZ3JvdXAuY2FsZW5kYXIuZ29vZ2xlLmNvbQ&amp;src=ZXMucGUjaG9saWRheUBncm91cC52LmNhbGVuZGFyLmdvb2dsZS5jb20&amp;color=%23795548&amp;color=%230B8043&amp;mode=AGENDA&amp;showTitle=0&amp;showNav=0&amp;showPrint=0&amp;showTabs=0&amp;showDate=0&amp;showCalendars=0&amp;showTz=0" style="border-width:0" width="100%" height="400" frameborder="0" scrolling="no"></iframe>
        
        
        <hr>
            
    </div>

  </div>
</div>


@endsection
