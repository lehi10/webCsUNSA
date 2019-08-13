@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Editar Entrada
                </div>
                                
                <div class="card-body">

                    <div class="panel-body">
                        {!! Form::model($post, ['route' => ['posts.update', $post->id],
                                                'method'=>'PUT','files'=> true]) !!}

                            @include('admin.posts.partials.form')
                            
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection