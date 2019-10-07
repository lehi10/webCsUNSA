
@extends('templates.theme')

@section('title','Semana de la Computación')

@section('body')



<div class="container">
    <h1> Welcome to CSUNSA API v1</h1>
    <hr>
    <h3>EndPoints to Developers</h3>
    <strong>For register attendance :</strong>
    <p>
        <a href="http://cs-unsa.herokuapp.com/api/attendance">http://cs-unsa.herokuapp.com/api/attendance</a>
    </p>
    <strong>For register students :</strong>
    <p>
        <a href="http://cs-unsa.herokuapp.com/api/register">http://cs-unsa.herokuapp.com/api/register</a>
    </p>

    <h3>Register Student</h3>
    
    {{ Form::open(array('url' => '/api/register', 'method' => 'get')) }}

        <div class="form-group">
            <label for="exampleInputEmail1">CUI</label>
            <input type="text" name="cui" class="form-control"   placeholder="CUI UNSA">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Nombres</label>
            <input type="text" name="name" class="form-control" id="exampleInputPassword1" placeholder="Nombres">
        </div>
        
        <div class="form-group">
            <label for="exampleInputPassword1">Apellidos</label>
            <input type="text" name="surname" class="form-control" id="exampleInputPassword1" placeholder="Apellidos">
        </div>

        <button  type="submit" class="btn btn-primary">Aceptar</button>
    {{ Form::close() }}


</div>

@endsection