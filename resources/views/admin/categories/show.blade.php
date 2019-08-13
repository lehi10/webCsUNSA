@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Ver Categoria
                </div>
                                
                <div class="card-body">

                    <div class="panel-body">
                        <p><strong>Nombre: </strong>{{$category->name}}</p>
                        <p><strong>Slug: </strong>{{$category->slug}}</p>
                        <p><strong>Body: </strong>{{$category->body}}</p>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection