@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="container">
            <div class="row">
                <h2>Crud Comment</h2>
                <div class="pull-right">
                    <a class="btn btn-warning btn-round" href="{{url('comments/create')}}" title="Create a comment">
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
            <th style="font-size: 19pt; text-align: center">#</th>
            <th style="font-size: 19pt; text-align: center">Contenido</th>
            <th style="font-size: 19pt; text-align: center">Estado</th>
            <th style="font-size: 19pt; text-align: center">Autor</th>
            <th style="font-size: 19pt; text-align: center">Email</th>
            <th style="font-size: 19pt; text-align: center">url</th>
            <th style="font-size: 19pt; text-align: center">Acciones</th>
        </tr>
        @foreach ($comments as $comment)
            <tr>
                <td style="font-size: 15pt">{{$loop->iteration}}</td>
                <td style="font-size: 15pt">{{$comment->content}}</td>
                <td style="font-size: 15pt">{{$comment->state}}</td>
                <td style="font-size: 15pt">{{$comment->author}}</td>
                <td style="font-size: 15pt">{{$comment->email}}</td>
                <td style="font-size: 15pt">{{$comment->url}}</td>
                <td align="center">
                    <form action="{{url('comments', $comment->id)}}" method="POST" style="display: inline">
                        @csrf
                        @method("DELETE")
                        <button class="btn btn-info btn-round"><i class="material-icons">delete_forever</i></button>
                    </form>
                    <a class="btn btn-success btn-round" href="{{url('comments',$comment->id).'/edit'}}">
                        <i class="material-icons">edit</i>
                    </a>
                </td>
            </tr>
        @endforeach
    </table>
        </div>
    </div>
@endsection
