@extends('templates.theme')

@section('title','School Of Computer Science UNSA')


@section('blog','active')

@section('body')

    <div class="container bg-3">
    <div class="row">
        <div class="col-sm-12">
            <h1>Constancia </h1>
            <hr>
            <center>

            <form action="constancia" method="get">
              <div class="form-group">
                <input  name="cui" type="text" placeholder="ingrese su CUI">
                <input  class="btn btn-default" type="submit" value="Aceptar">
              </div>
            </form>


            @if(isset($cui))
                <object data="http://extranet.unsa.edu.pe/sisacad/main19a/constancias/constancia_450_{{$cui}}.pdf" type="application/pdf" width="700px" height="800px">
                </object>
                <br>
                Nota: No se esta hackeando ningun servicio de la universidad, solo se esta usando los datos públicos.
            @endif
              </center>

        </div>
    </div>
    </div>
@endsection
