@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="container">
            <div class="row">
                <h2 style="text-align: center">Editar  lookups con el id {{$lookup->id}}</h2>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <a class="btn btn-info btn-round" href="{{url('lookups')}}" title="Regresar">
                    <i class="material-icons">reply</i>
                </a>
                </div>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-dark">
            <strong>Error!</strong>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="container">
        <div class="row">
            <form action="{{url('lookups', $lookup->id)}}" method="POST" >
        @csrf
        @method("PUT")
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong style="font-size: 19pt">Nombre:</strong>
                    <input style="font-size: 15pt" type="text" name="name" class="form-control"
                    placeholder="Nombre" value="{{$lookup->name}}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong style="font-size: 19pt">Codigo:</strong>
                    <input style="font-size: 15pt" type="number" name="code" class="form-control"
                    placeholder="Code" value="{{$lookup->code}}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong style="font-size: 19pt">Tipo:</strong>
                    <input style="font-size: 15pt" type="text" name="type" class="form-control"
                    placeholder="Tipo" value="{{$lookup->type}}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong style="font-size: 19pt">Posicion:</strong>
                    <input style="font-size: 15pt" type="text" name="position" class="form-control"
                    placeholder="Pocicion" value="{{$lookup->position}}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-info btn-round">Guardar</button>
            </div>
        </div>
    </form>
        </div>
    </div>
@endsection
