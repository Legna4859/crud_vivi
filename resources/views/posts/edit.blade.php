@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="container">
            <div class="row">
                <h2 style="text-align: center">Editar POST con el id {{$post->id}}</h2>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <a class="btn btn-info btn-round" href="{{url('posts')}}" title="Regresar">
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
                <form action="{{url('posts',$post->id)}}" method="POST" >
                    @csrf
                    @method("PUT")
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong style="font-size: 19pt">Titulo:</strong>
                                <input style="font-size: 19pt" type="text" name="title" class="form-control" placeholder="Titulo" value="{{$post->title}}">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong style="font-size: 19pt">Contenido:</strong>
                                <input style="font-size: 19pt" class="form-control" name="content" placeholder="Contenido" value="{{$post->content}}">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong style="font-size: 19pt">Etiquetas:</strong>
                                <input style="font-size: 19pt" type="text" name="tags" class="form-control" placeholder="Etiquetas" value="{{$post->tags}}">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong style="font-size: 19pt">Estado</strong>:</strong>
                                <input style="font-size: 19pt" type="text" name="state" class="form-control" placeholder="Estado" value="{{$post->state}}">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Usuario:</strong>
                               <select name="user_id" id="">
                                    <option value="" selected>Selecciona un Usuario</option>
                                    @foreach($Users as $User)

                                        @if($post->user_id==$User->id)
                                            <option value="{{$User->id}}" selected>{{$User->name}}</option>
                                        @else
                                            <option value="{{$User->id}}">{{$User->name}}</option>
                                        @endif
                                       {{--
                                        <option value="{{$user->id}}" {{$post->user_id==$user->id?"selected":""}}
                                            {{$user->name}}></option>--}}
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                            <button type="submit" class="btn btn-info btn-round" style="font-size: 19pt">Guardar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
@endsection
