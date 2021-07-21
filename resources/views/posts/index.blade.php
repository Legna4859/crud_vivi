@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="container">
            <div class="row">
                <h2>Crud Post</h2>
                <div class="pull-right">
                    <a class="btn btn-warning btn-round" href="{{url('posts/create')}}" title="Create a POST">
                        <i class="material-icons">add_circle</i>
                    </a>
                </div>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-primary">
            <p>{{$message}}</p>
        </div>
    @endif

    <div class="container">
        <div class="row">
            <table class="table table-bordered table-responsive-lg">
                <tr>
                    <th style="font-size: 19pt">Numero</th>
                    <th style="font-size: 19pt">Titulo</th>
                    <th style="font-size: 19pt">Descripcion</th>
                    <th style="font-size: 19pt">Etiquetas</th>
                    <th style="font-size: 19pt">Estatus</th>
                    <th style="font-size: 19pt">Usuario</th>
                    <th style="font-size: 19pt">Acciones</th>

                </tr>
                @foreach ($posts as $post)
                    <tr>
                        <td style="font-size: 15pt; text-align: center">{{$loop->iteration}}</td>
                        <td style="font-size: 15pt">{{$post->title}}</td>
                        <td style="font-size: 15pt">{{$post->content}}</td>
                        <td style="font-size: 15pt">{{$post->tags}}</td>
                        <td style="font-size: 15pt">{{$post->state}}</td>
                        {{--<td style="font-size: 15pt">{{$post->user_id}}</td>--}}
                        <td style="font-size: 15pt">{{$post->getUsers->name}}</td>
                        <td align="center">
                            <form action="{{url('posts', $post->id)}}" method="POST" style="display:inline">
                                @csrf
                                @method("DELETE")
                                <button class="btn btn-info btn-round"><i class="material-icons">delete_forever</i></button>
                            </form>
                            <a class="btn btn-success btn-round" href="{{url('posts',$post->id).'/edit'}}">
                                <i class="material-icons">edit</i>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection
