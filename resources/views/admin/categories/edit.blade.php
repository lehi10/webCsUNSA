@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Editar Etiqueta
                </div>
                                
                <div class="card-body">

                    <div class="panel-body">
                        {!! Form::model($category, ['route' => ['categories.update', $category->id],
                                                'method'=>'PUT']) !!}

                            @include('admin.categories.partials.form')
                            
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection