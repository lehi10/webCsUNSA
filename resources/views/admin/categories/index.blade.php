@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Lista de Categorias
                    <a href="{{route('categories.create')}}" style="display:inline-block; float:right; color:white;" class="btn btn-primary btn-sm ">
                        Crear 
                    </a>
                </div>
                                
                <div class="card-body">
                    <table class="table  table-hover">
                        <thead>
                            <tr>
                                <th width="10px">ID</th>
                                <th>Nombre</th>
                                <th colspan="3">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($categories as $category)
                                <tr>
                                    <td>{{$category->id}}</td>
                                    <td>{{$category->name}}</td>
                                    <td width="10px">
                                        <a href="{{route('categories.show',$category->id)}}"
                                            class="btn btn-success btn-sm"
                                        >Ver</a>
                                    </td>
                                    <td width="10px">
                                        <a href="{{route('categories.edit',$category->id)}}"
                                            class="btn btn-primary btn-sm"
                                        >Editar</a>
                                    </td>
                                    <td width="10px">
                                        
                                        {!! Form::open(['route' => ['categories.destroy',$category->id],
                                                        'method'=> 'delete']) !!}
                                            <button class="btn btn-sm btn-danger">
                                                Borrar
                                            </button>
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>    
                    {{$categories->render()}}                
                </div>
            </div>
        </div>
    </div>
</div>

@endsection