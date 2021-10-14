@extends('templates.theme')

@section('title','School Of Computer Science UNSA')

@section('scripts')

@endsection

@section('home','active')

@section('body')

    <div class="hero-image">
        <div class="hero-text">
            <img class="logoImg" src="images/cslogos/logoDarkBackgroundV.png" >
            <!--<h3>Universidad Nacional de San Agustín</h3>-->
        </div>
    </div>

    <!-- Trigger the Modal -->
    <img id="weekComp2020" src="images/season/weekComp2020.jpg" alt="Semana de la Computación 2020" style="display:none;">

    <!-- The Modal -->
    <div id="weekComp2020Modal" class="mmodal">

        <!-- The Close Button -->
        <span class="weekComp2020Close">&times;</span>

        <!-- Modal Content (The Image) -->
        <img class="mmodal-content" id="weekComp2020Inner">

        <!-- Modal Caption (Image Text) -->
        <div id="weekComp2020InnerCaption"></div>
    </div>

    <div class="container-fluid bg-3 text-center">
        <div class="row">
            <div class="col-sm-4 cyanBackground">
                <h3 class="textWhite"><b>El hombre sigue siendo la computadora más extraordinaria de todas.</b></h3>
            </div>
            <div class="col-sm-8 textBlack">
                <div class="col-sm-4 whiteBackground">
                    <a href="/events">
                        <div>
                            <img width="25%" src="/images/icons/calendarB.png">
                            <h4 class="textBlack" ><b>Eventos</b></h4>
                        </div>
                    </a>
                    <p class="textBlack">Encuentra los eventos programados para el presente semestre.</p>
                </div>
                <div class="col-sm-4 whiteBackground">
                    <a href="/blog">
                        <div>
                            <img width="25%" src="/images/icons/chat2B.png">
                            <h4  class="textBlack"><b>Blog</b></h4>
                        </div>
                    </a>
                    <p  class="textBlack" > Encuentra información y contenido que te puede interesar.</p>
                </div>
                <div class="col-sm-4 whiteBackground">
                    <a href="/resources">
                        <div>
                            <img width="25%" src="/images/icons/bookB.png">
                            <h4 class="textBlack"><b>Recursos</b></h4>
                        </div>
                    </a>
                    <p  class="textBlack" > Encuentra material y herramientas para mejorar tu aprendizaje. </p>
                </div>
            </div>
        </div>
    </div><br>

<div class="container bg-3">
  <div class="row">
    <div class="col-sm-8">
        <h2>Cronograma - 3ra. Jornada de Computer Science</h2>
        <div>
            <img width="100%" height="100%" src="/images/3j.png">
        </div>
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
