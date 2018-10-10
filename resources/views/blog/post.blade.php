@extends('templates.theme')

@section('title','School Of Computer Science UNSA')

@section('script')

@endsection

@section('blog','active')

@section('body')
  
    <div class="container">    
        <div class="row">
            <div class="col-sm-8">
                <h1>Titulo</h1>
                <hr>
                <p>Texto bla bla bla bla</p>
                <hr>
                <h3>Comentarios</h3>
                <div class="fb-comments" data-href="https://www.facebook.com/csunsa/" data-width="100%" data-numposts="15"></div>

            </div>
            <div class="col-sm-4"> 
            <h3>Otras publicaciones</h3>
            <hr>
                <div class="row marginOnTop marginOnBottom">
                    <div class="col-xs-6"> 
                        <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
                    </div>
                    <div class="col-xs-6">  
                        <h4>Titulo</h4>
                        <p>Descripción</p>
                    </div>
                </div>

                
                
                    
            </div>
            
        </div>
    </div>


@endsection


<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.1&appId=1008206179314313&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
