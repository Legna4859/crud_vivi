@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="container">
            <div class="row">
                <h2>Crud Lookup</h2>
                <div class="pull-right">
                    <a class="btn btn-warning btn-round" href="{{url('lookups/create')}}" title="Create a Lookup"> <i class="material-icons">add_circle</i>
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
                    <th style="font-size: 19pt; text-align: center;">#</th>
                    <th style="font-size: 19pt; text-align: center;">Nombre</th>
                    <th style="font-size: 19pt; text-align: center;">Codigo</th>
                    <th style="font-size: 19pt; text-align: center;">Tipo</th>
                    <th style="font-size: 19pt; text-align: center;">Posicion</th>
                    <th style="font-size: 19pt; text-align: center;">Acciones</th>
                </tr>
                @foreach ($lookups as $lookup)
                    <tr>
                        <td style="font-size: 15pt">{{$loop->iteration}}</td>
                        <td style="font-size: 15pt">{{$lookup->name}}</td>
                        <td style="font-size: 15pt">{{$lookup->code}}</td>
                        <td style="font-size: 15pt">{{$lookup->type}}</td>
                        <td style="font-size: 15pt">{{$lookup->position}}</td>
                        <td align="center">
                            <form action="{{url('lookups', $lookup->id)}}" method="POST" style="display: inline">
                                @csrf
                                @method("DELETE")
                                <button class="btn btn-info btn-round"><i class="material-icons">delete_forever</i></button>
                            </form>
                            <a class="btn btn-success btn-round" href="{{url('lookups',$lookup->id).'/edit'}}">
                                <i class="material-icons">edit</i>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection
