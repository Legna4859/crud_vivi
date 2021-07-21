@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="container">
            <div class="row">
                <h2>Crud Tag</h2>
            <div class="pull-right">
                <a class="btn btn-warning btn-round" href="{{url('tags/create')}}" title="Create a Tag">
                    <i class="material-icons">add_circle</i>
                </a>
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
                    <th style="font-size: 19pt; text-align: center">Nombre</th>
                    <th style="font-size: 19pt; text-align: center">Frecuencia</th>
                    <th style="font-size: 19pt; text-align: center">Acciones</th>
                </tr>
                @foreach ($tags as $tag)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$tag->name}}</td>
                        <td>{{$tag->frequency}}</td>
                        <td align="center">
                            <form action="{{url('tags', $tag->id)}}" method="POST" style="display: inline">
                                @csrf
                                @method("DELETE")
                                <button class="btn btn-info btn-round"><i class="material-icons">delete_forever</i></button>
                            </form>
                            <a class="btn btn-success btn-round" href="{{url('tags', $tag->id).'/edit'}}">
                                <i class="material-icons">edit</i>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection
