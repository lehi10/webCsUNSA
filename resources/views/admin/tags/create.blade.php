@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Crear Etiqueta
                </div>
                                
                <div class="card-body">

                    <div class="panel-body">
                        {!! Form::open(['route' => 'tags.store']) !!}

                            @include('admin.tags.partials.form')
                            
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection