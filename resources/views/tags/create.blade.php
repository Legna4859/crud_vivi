@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="container">
            <div class="row">
                <h2 style="text-align: center">Crear Nuevo TAG </h2>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <a class="btn btn-rose btn-round" href="{{url('tags')}}" title="Regresar"> <i class="material-icons">reply</i></a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-primary">
            <strong>Error!</strong>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <br>
    <br>
    <div class="container">
        <div class="row">
            <form action="{{url('tags')}}" method="POST" >
                @csrf
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong style="font-size: 19pt">Nombre:</strong>
                            <input style="font-size: 15pt" type="text" name="name" class="form-control" placeholder="Nombre">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong style="font-size: 19pt">Frecuencia:</strong>
                            <input style="font-size: 15pt" type="text" name="frequency" class="form-control" placeholder="Frecuencia">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                        <button type="submit" class="btn btn-rose btn-round" style="font-size: 15pt">Guardar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
