@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="container">
            <div class="row">
                <h2 style="text-align: center">Crear Nuevo POST</h2>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <a class="btn btn-rose btn-round" href="{{url('posts')}}" title="Regresar">
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
    <br>
    <br>
    <div class="container">
        <div class="row">
            <form action="{{url('posts')}}" method="POST" >
                @csrf
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong style="font-size: 19pt">Titulo:</strong>
                            <input style="font-size: 19pt" type="text" name="title" class="form-control" placeholder="Titulo">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong style="font-size: 19pt">Contenido:</strong>
                            <input style="font-size: 19pt" class="form-control" name="content" placeholder="Contenido">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong style="font-size: 19pt">Etiquetas:</strong>
                            <input style="font-size: 19pt" type="text" name="tags" class="form-control" placeholder="Etiquetas">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong style="font-size: 19pt">Estado</strong>:</strong>
                            <input style="font-size: 19pt" type="text" name="state" class="form-control" placeholder="Estado">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Usuario:</strong>
                            <select name="user_id" id="">
                                <option value="" disabled selected>Selecciona un Usuario</option>
                                @foreach($Users as $User)
                                    <option value="{{$User->id}}">{{$User->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                        <button type="submit" class="btn btn-rose btn-round" style="font-size: 19pt">Guardar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
