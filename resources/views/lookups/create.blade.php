@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="container">
            <div class="row">
                <h2 style="text-align: center">Crear Nuevo lookups</h2>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <a class="btn btn-rose btn-round" href="{{url('lookups')}}" title="Regresar">
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
            <form action="{{url('lookups')}}" method="POST" >
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
                            <strong style="font-size: 19pt">Codigo:</strong>
                            <input style="font-size: 15pt" type="number" name="code" class="form-control" placeholder="Code">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong style="font-size: 19pt">Tipo:</strong>
                            <input style="font-size: 15pt" type="text" name="type" class="form-control" placeholder="Tipo">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong style="font-size: 19pt">Posicion:</strong>
                            <input style="font-size: 15pt" type="text" name="position" class="form-control" placeholder="Pocicion">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                        <button  style="font-size: 15pt" type="submit" class="btn btn-rose btn-round">Guardar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
