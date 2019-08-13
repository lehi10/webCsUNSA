
@extends('templates.theme')

@section('title','School Of Computer Science UNSA')

@section('scripts')

@endsection

@section('blog','active')


@section('body')

 
<div class="container bg-3">
  <div class="row">
    <div class="col-sm-9">
        <h3>Publicaciones Recientes</h3>
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

