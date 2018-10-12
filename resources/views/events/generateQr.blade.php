@extends('templates.theme')

@section('title','Semana de la Computación')

@section('scripts')
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-126304326-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-126304326-1');
</script>

@endsection


@section('body')

<section  style="background-image: url(/images/banners/science.jpg);">
  <div style="padding:15px;" class="row ">  
        <center>
          <img src="/images/cslogos/logoDarkBackground.png" class="logoImg">
          <h2 class="textWhite">Semana de la Computación </h2>

        </center>
  </div>
</section>
get

<div class="container" style="padding:30px;">
  <h2>Registro para alumnos UNSA</h2>
  
    @if (session('status'))
        <div class="alert alert-danger">
            {{ session('status') }}
        </div>
    @endif

<div class="row-fluid form-group" >
    <form  action="/events/downloadQr" onsubmit="return validateForm()" method="get" >
        <div class="col-sm-12" style=" margin-bottom: 100px; margin-top: 50px;"> 
            <div class="col-sm-4"> </div>
            <div class="col-sm-4"> 
                <center>
                    <div class="form-group">
                        <label ><h2>CUI<h2></label>
                        <input name="cui" id="cui" class="form-control" placeholder="CUI solo alumnos UNSA" >
                    </div>
                    <button type="submit"  class="bottom btn btn-primary">Generar Tarjeta</button>
                </center>
            </div>
            <div class="col-sm-4"> </div>
        </div>
    </form>
    <hr>
</div>

<div class="row">
    <h2>Participa de los siguientes eventos</h2>

    <div class="col-sm-12"> 
        <div class="col-sm-4"> 
            <div style=" text-align: center; margin-bottom:10px;">
                <a target="_blank" href="http://csunsa.win/events"> 
                    <button type="button" class="btn btn-primary"> Entrar </button>
                </a>
            </div>
            <img src="/images/temporal/compweek.png" class="logoImg">
            <hr>
        </div>
        <div class="col-sm-4"> 
            <div style=" text-align: center; margin-bottom:10px;">
                <a target="_blank" href="https://docs.google.com/forms/d/e/1FAIpQLSdKcE5g787XBtkvS9MaaAc_LsISENA9fLFH1J5QHQUnEHzhFQ/viewform"> 
                    <button class="btn btn-primary"> Click para ir al formulario </button>
                </a>
            </div>
            <img src="/images/temporal/programming.jpg" class="logoImg">
            <hr>
        </div>

        <div class="col-sm-4"> 
            <div style=" text-align: center; margin-bottom:10px;">
                <a target="_blank" href="https://docs.google.com/forms/d/e/1FAIpQLSdWxQOaZUn6Wq0DrcKKGDNHuuGwy4ANtOCC0u9iRbr-_uIkqQ/viewform"> 
                    <button class="btn btn-primary"> Click para ir al formulario </button>
                </a>
            </div>
            <img src="/images/temporal/dota2.png" class="logoImg">
            <hr>
        </div>

    </div>
</div>    

</div>


@endsection