@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Panel de Administración de Contenido</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    </h3>Bienvenid@</h3>
                    
                    <h4>New feature : API v1</h4>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
