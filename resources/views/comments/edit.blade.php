@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="container">
            <div class="row">
                <h2 style="text-align: center">Modificar Comments {{$comment->id}}</h2>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <a class="btn btn-info btn-round" href="{{url('comments')}}" title="Regresar">
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
            <form action="{{url('comments',$comment->id)}}" method="POST" >
                @csrf
                @method("PUT")
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong style="font-size: 19pt">Contenido:</strong>
                            <input style="font-size: 15pt" type="text" name="content" class="form-control" placeholder="Contenido" value="{{$comment->content}}">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong style="font-size: 19pt">Estado:</strong>
                            <input style="font-size: 15pt" type="text" name="state" class="form-control" placeholder="Estado" value="{{$comment->state}}">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong style="font-size: 19pt">Autor:</strong>
                            <input style="font-size: 15pt" type="text" name="author" class="form-control" placeholder="Autor"value="{{$comment->author}}">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong style="font-size: 19pt">Email:</strong>
                            <input style="font-size: 15pt" type="Email" name="email" class="form-control" placeholder="Email" value="{{$comment->email}}">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong style="font-size: 19pt">url:</strong>
                            <input style="font-size: 15pt" type="url" name="url" class="form-control" placeholder="url" value="{{$comment->url}}">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong style="font-size: 19pt">Numero de Post:</strong>
                            <input style="font-size: 15pt" type="post_id" name="post_id" class="form-control" placeholder="post_id" value="{{$comment->post_id}}">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                        <button type="submit" class="btn btn-info btn-round" style="font-size: 15pt">Guardar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
